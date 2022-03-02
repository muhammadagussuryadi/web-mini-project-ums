<div class="row row-sm">
  <div class="col-md-12 mb-1 mg-t-10">
    <div class="table-responsive freeze-table-user">
      <table class="table text-md-nowrap" id="example1">
        <thead>
          <tr>
            <th class="wd-10p border-bottom-0">Action</th>
            <th class="wd-5p border-bottom-0">No</th>
            <th class="wd-20p border-bottom-0">Tanggal</th>
            <th class="wd-15p border-bottom-0">Nota</th>
            <th class="wd-25p border-bottom-0">Kode Pelanggan</th>
            <th class="wd-25p border-bottom-0">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $v) : ?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="btn btn-sm btn-warning edit-form" data-form='<?= json_encode($v); ?>' rt-form="<?= base_url();?>/penjualan/<?= $v['id_nota']?>"><i class="fa fa-eye"></i></a>
              </td>
              <td><?= ++$key ?></td>
              <td><?= $v['tgl'] ?></td>
              <td><?= $v['id_nota'] ?></td>
              <td><?= $v['kode_pelanggan'] ?></td>
              <td><?= $v['subtotal'] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>