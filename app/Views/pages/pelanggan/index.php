<?= $this->extend('layouts/index'); ?>

<?= $this->section('content');?>

<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header tx-medium bd-0 bg-light">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pt-1">
              TABEL DATA
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <button class="btn btn-outline-primary float-right py-1 edit-form" data-form='' data-toggle="modal" data-backdrop="static">
              <span class="fe fe-plus-circle"></span>&nbsp;TAMBAH DATA
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <?= $this->include('pages/pelanggan/component/table'); ?>
        <?= $this->include('pages/pelanggan/component/modal'); ?>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>