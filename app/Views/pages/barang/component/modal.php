<!-- Large Modal -->
<div class="modal" id="modaldemo3">
  <div class="modal-dialog modal-lg" role="dialog" >
    <div class="modal-content modal-content-demo push-modal-content">
      <form method="POST" action="<?= base_url();?>/barang" enctype="multipart/form-data">
        <div class="modal-header">
          <h6 class="modal-title">FORM DATA</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row row-sm mg-b-20">
            <input type="hidden" name="kode" id="kode">
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Nama</p>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Kategori</p>
              <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori">
            </div>
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Harga </p>
              <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn ripple btn-primary" type="submit">SIMPAN</button>
          <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">BATAL</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--End Large Modal -->