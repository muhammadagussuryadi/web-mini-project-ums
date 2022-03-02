<div class="row row-sm">
  <div class="col-md-12 mb-1 mg-t-10">
    <div class="table-responsive freeze-table-user">
      <table class="table text-md-nowrap" id="example1">
        <thead>
          <tr>
            <th class="wd-10p border-bottom-0">Action</th>
            <th class="wd-5p border-bottom-0">No</th>
            <th class="wd-20p border-bottom-0">Kode</th>
            <th class="wd-15p border-bottom-0">Nama</th>
            <th class="wd-25p border-bottom-0">Kategori</th>
            <th class="wd-25p border-bottom-0">Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $v) : ?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="btn btn-sm btn-danger deleted-alert" rt-deleted="<?= base_url();?>/barang/<?= $v['kode']?>"><i class="fa fa-trash"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-warning edit-form" data-form='<?= json_encode($v); ?>' rt-form="<?= base_url();?>/barang/<?= $v['kode']?>"><i class="fa fa-edit"></i></a>
              </td>
              <td><?= ++$key ?></td>
              <td><?= $v['kode'] ?></td>
              <td><?= $v['nama'] ?></td>
              <td><?= $v['kategori'] ?></td>
              <td><?= $v['harga'] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(".edit-form").click(function(){
		var dataForm = $(this).attr('data-form');
		if(dataForm){
			dataForm = JSON.parse(dataForm);
			$("#kode").val(dataForm.kode);
			$("#nama").val(dataForm.nama);
			$("#kategori").val(dataForm.kategori);
			$("#harga").val(dataForm.harga);
		}else{
			$("#kode").val('');
			$("#nama").val('');
			$("#kategori").val('');
			$("#harga").val('');
		}
		$("#modaldemo3").modal("show");
	});
</script>