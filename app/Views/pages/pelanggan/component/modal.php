<!-- Large Modal -->
<div class="modal" id="modaldemo3">
  <div class="modal-dialog modal-lg" role="dialog" >
    <div class="modal-content modal-content-demo push-modal-content">
      <form method="POST" action="<?= base_url();?>/pelanggan" enctype="multipart/form-data">
        <div class="modal-header">
          <h6 class="modal-title">FORM DATA</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row row-sm mg-b-20">
            <input type="hidden" name="id_pelanggan" id="id_pelanggan">
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Nama</p>
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Domisili</p>
              <input type="text" name="domisili" id="domisili" class="form-control" placeholder="Domisili">
            </div>
            <div class="col-lg-6 mg-b-10">
              <p class="mg-b-10">Jenis Kelamin </p>
              <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
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