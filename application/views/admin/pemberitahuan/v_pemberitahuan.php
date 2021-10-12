<?php $this->load->view('admin/v_header'); ?>

<div class="row">
  <div class="col-md-12">


    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-check"> </i><b> Konfirmasi</b></a></li>
        <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-history"></i><b> Dalam Pinjaman</b></a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No Urut</th>
              <th>No Pinjaman</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Cek</th>
            </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              <?php foreach ($loadData as $value) {
                  if ($value->status == 0) { ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $value->no_pinjaman; ?></td>
                      <td><?php echo $value->nama; ?></td>
                      <td><?php echo $value->tgl_pinjam; ?></td>
                      <td><?php echo $value->tgl_kembali; ?></td>
                      <?php $url = array('admin', 'pilihPeminjam', $value->no_pinjaman); ?>
                      <td><a href="<?php echo base_url($url) ?>" class="btn btn-primary btn-sm">Cek</a></td>
                    </tr>
                <?php
              } ?>
                    <?php } ?>



            </tbody>
            <tfoot>
            <tr>
              <th>No Urut</th>
              <th>No Pinjaman</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Cek</th>
            </tr>
            </tfoot>
          </table>
        </div>


        <div class="tab-pane" id="tab_2">
          <table id="example3" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No Urut</th>
              <th>No Pinjaman</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Kembali</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach ($loadData as $value){ ?>


            <?php if ($value->status == 1) { ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $value->no_pinjaman; ?></td>
                  <td><?php echo $value->nama; ?></td>
                  <td><?php echo $value->tgl_pinjam; ?></td>
                  <td><?php echo $value->tgl_kembali; ?></td>
                  <?php $url = array('admin', 'pilihBarangKembali', $value->no_pinjaman); ?>
                  <td><a href="<?php echo base_url($url) ?>" class="btn btn-warning btn-sm">Kembali</a></td>
                </tr>
                <?php } ?>
              <?php } ?>
            </tbody>
            <tfoot>
            <tr>
              <th>No Urut</th>
              <th>No Pinjaman</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Kembali</th>
            </tr>
            </tfoot>
          </table>
        </div>





      </div>

    </div>
  </div>
</div>

<?php $this->load->view('admin/v_footer'); ?>
