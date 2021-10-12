<?php $this->load->view('admin/v_header') ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-success">
      <div class="box-body">


        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> Data Pinjaman
              <small class="pull-right">Date:</small>

            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <?php foreach ($loadDataPeminjam as $value): ?>
                <strong><?php echo $value->nama; ?></strong><br>
                <?php echo $value->alamat; ?><br>
                <?php echo $value->no_tlp; ?><br>
              <?php endforeach; ?>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>John Doe</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (555) 539-1037<br>
              Email: john.doe@example.com
            </address>
          </div>
          <!-- /.col -->
        <form class="" action="<?php echo base_url('admin/barangKembali') ?>" method="post">
          <div class="col-sm-4 invoice-col">

              <b>Id #<?php echo $loadDataTgl->no_pinjaman; ?></b><br>
              <br>
              <b>Tanggal Pinjam:</b> <?php echo $loadDataTgl->tgl_pinjam; ?><br>
              <b>Tanggal Kembali:</b> <?php echo $loadDataTgl->tgl_kembali; ?><br>


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->



        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Jumlah Barang</th>


              </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php foreach ($loadBarang as $value): ?>
                  <input type="hidden" name="noPinjaman[]" value="<?php echo $value->no_pinjaman; ?>">
                  <input type="hidden" name="jmlPinjam[]" value="<?php echo $value->jml_pinjam; ?>">
                  <input type="hidden" name="stokBarang[]" value="<?php echo $value->stok; ?>">
                  <input type="hidden" name="noBarang[]" value="<?php echo $value->no_barang; ?>">
                  <input type="hidden" name="diPinjam[]" value="<?php echo $value->dipinjam ?>">
              <tr>
                <td><?php echo $no; ?></td>
                <?php $no++; ?>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->jml_pinjam; ?></td>

              </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-12">
            <p class="lead">Keterangan:</p>

            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-xs-12">
            <input type="submit" name="submitAccept" class="btn btn-success pull-right" value="Kembali">
          </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>
      <!-- title row -->



<?php $this->load->view('admin/v_footer') ?>
