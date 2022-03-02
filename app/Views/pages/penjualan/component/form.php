<!-- Large Modal -->
<div class="modal" id="modalpenjualan">
  <div class="modal-dialog modal-lg" role="dialog" >
    <div class="modal-content modal-content-demo push-modal-content">
      <form method="POST" action="<?= base_url();?>/penjualan" enctype="multipart/form-data">
        <div class="modal-header">
          <h6 class="modal-title">FORM PENJUALAN</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row row-sm mg-b-20">
            <div class="col-lg-12 mg-b-10">
              <p class="mg-b-10">ID Pelanggan</p>
              <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" required placeholder="ID Pelanggan">
              <small id="notif-pelanggan-id"></small>
            </div>
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Kode Barang</p>
              <input type="text" name="kode_barang" id="kode_barang" class="form-control" placeholder="Kode Barang">
            </div>
            <div class="col-lg-4 mg-b-10">
              <p class="mg-b-10">Qty</p>
              <input type="number" name="qty" id="qty" class="form-control" placeholder="qty">
            </div>
            <div class="col-lg-2 mg-b-10">
              <p class="mg-b-10">&emsp;</p>
              <a href="javascript:();" class="btn btn-primary" id="tambah">Tambahkan</a>
            </div>
          </div>
          <div class="row row-sm mg-b-20">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody class="push-body-item">

                </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn ripple btn-success" type="submit">SUBMIT</button>
          <button class="btn ripple btn-secondary hapus-item" data-dismiss="modal" type="button">BATAL</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--End Large Modal -->