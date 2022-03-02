<script type="text/javascript">
  $(".edit-form").click(function(){
    $(".push-body").html("");
		var dataForm = $(this).attr('data-form');
		if(dataForm){
			dataForm = JSON.parse(dataForm);
			var htmlBody = "";
      dataForm.item_penjualan.forEach((v,i) => {
        htmlBody  +="<tr>"
                    +"<td>"+v.qty+"</td>"
                    +"<td>"+v.kode_barang+" - "+v.nama_barang+"</td>"
                  +"</tr>";
      });
		  $(".push-body").html(htmlBody);
		  $("#modaldemo3").modal("show");
		}
	});

  $(".penjualan-form").click(function(){
    $("#kode_barang").val('');
    $("#qty").val('');
    var item = localStorage.getItem("itemDetail");
    if(item){pushItem(JSON.parse(localStorage.getItem("itemDetail")));}
    $("#modalpenjualan").modal("show");
  });

  $("#id_pelanggan").on("keyup", function(){
    $("#notif-pelanggan-id").html("");
    var val = $(this).val();
    if(val.length > 9){
      $.ajax({
        url:'/pelangganById/'+val,
        method:'GET',
        success:function(res){
          var response = JSON.parse(res);
          if(response.data.length){
            $("#notif-pelanggan-id").html("pelanggan terdaftar");
          }else{
            $("#notif-pelanggan-id").html("pelanggan tidak ditemukan");
          }
        }
      });
    }
  });

  $("#tambah").click(function(){
    // localStorage.removeItem("itemDetail");
    var kode_barang = $("#kode_barang").val();
    var qty = $("#qty").val();
    if(kode_barang == "" || qty == ""){
      return swal("Gagal!", "Lengkapi data.", "error");
    }

    $.ajax({
      url:'/barangById/'+kode_barang,
      method:'GET',
      success:function(res){
        var response = JSON.parse(res);
        if(response.data.length){
          var harga = response.data[0].harga;
          var nama_barang = response.data[0].nama

          var item = localStorage.getItem("itemDetail");
          if(item){
            item = JSON.parse(item);
            item.push({ 
                "kode_barang":kode_barang, 
                "nama_barang":nama_barang, 
                "qty": qty,
                "harga": harga,
              });
            localStorage.setItem("itemDetail", JSON.stringify(item));
          }else{
            localStorage.setItem("itemDetail", JSON.stringify([{"kode_barang":kode_barang, "nama_barang":nama_barang, "qty": qty, "harga": harga}]));
          }
          pushItem(JSON.parse(localStorage.getItem("itemDetail")));
        }else{
          swal("Gagal!", "Kode tidak terdaftar.", "error");
        }
      }
    });
  });

  function pushItem(item){

    var htmlData = "";
    var total = 0;

    item.forEach((v,i) => {
      total += (v.harga * v.qty);
      htmlData += "<tr>"
                    +"<td><input type='hidden' name='i_kode_barang[]' value='"+v.kode_barang+"'>"+v.kode_barang+" - "+v.nama_barang+"</td>"
                    +"<td><input type='hidden' name='i_qty[]' value='"+v.qty+"'>"+v.qty+"</td>"
                    +"<td><input type='hidden' name='i_harga[]' value='"+v.harga+"'>"+v.harga+"</td>"
                    +"<td class='text-center'><a href='javascript:;' onclick='deleteItem("+i+")' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a></td>"
                  +"</tr>";
    });
    if(total > 0){
      htmlData += "<tr>"
                    +"<td>-</td>"
                    +"<td>-</td>"
                    +"<td><input type='hidden' name='i_subtotal' value='"+total+"'>"+total+"</td>"
                    +"<td>-</td>"
                  +"</tr>";
    }

    $(".push-body-item").html(htmlData);
    $("#kode_barang").val('');
    $("#qty").val('');
  }

  function deleteItem(index){
    var item = JSON.parse(localStorage.getItem("itemDetail"));

    item = item.filter(function(v,i) {
      return i !== index
    })

    localStorage.setItem("itemDetail", JSON.stringify(item));
    pushItem(item);
  }

  $(".hapus-item").click(function(){
    localStorage.setItem("itemDetail", []);
    pushItem([]);
  });

  $('form').submit(function (event) {
    localStorage.setItem("itemDetail", []);  
  });


</script>