<?php $this->load->view('member/v_header') ?>

<div class="row">
  <div class="col-md-12">
    <div class="box box-success">
      <div class="box-body">


        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> Data Pinjaman
              <small class="pull-right">Date: <?php echo $tglSkr; ?></small>

            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <?php foreach ($dataMember as $value): ?>
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
        <form class="" action="<?php echo base_url('member/kirimData') ?>" method="post">
          <div class="col-sm-4 invoice-col">
            <input type="hidden" name="noPinjaman" value="<?php echo $noPinjaman; ?>">
            <input type="hidden" name="tglPinjam" value="<?php echo $tglPinjam; ?>">
            <input type="hidden" name="tglKembali" value="<?php echo $tglKembali; ?>">
            <input type="hidden" name="tglSekarang" value="<?php echo $tglSkr.$wktSkr; ?>">

            <b>Id #<?php echo $noPinjaman; ?></b><br>
            <br>
            <b>Tanggal Pinjam:</b> <?php echo $tglPinjam; ?><br>
            <b>Tanggal Kembali:</b> <?php echo $tglKembali; ?><br>
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

                <?php foreach ($dataBarang as $value): ?>

              <tr>
                <td>1</td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><div class="form-group">
                  <input type="hidden" name="idBarang[]" value="<?php echo $value->no_barang; ?>">
                <select class="form-control select2" name="jmlBarang[]" style="width: 20%;">
                  <option selected="selected" value="1">1</option>
                  <?php for ($i=2; $i <= $value->stok; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                <?php  } ?>

                </select>
              </div></td>

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

            <input type="submit" class="btn btn-success pull-right" value="Kirim">

          </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>
      <!-- title row -->



<?php $this->load->view('member/v_footer') ?>
