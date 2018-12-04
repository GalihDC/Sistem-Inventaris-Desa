<?php $this->load->view('member/v_header'); ?>


<div class="row">
  <div class="col-md-12">
    <div class="callout callout-info">
          <h4>Tip!</h4>

          <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
            sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
            links instead.</p>
        </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">



      <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-check"> </i><b> Menunggu Konfirmasi</b></a></li>
                <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-history"></i><b> Riwayat Peminjaman</b></a></li>


              </ul>

              <div class="tab-content">
                <div class="notif">
                  <?php echo $this->session->flashdata('message'); ?>
                </div>

                <div class="tab-pane active" id="tab_1">
                    <!-- /.box-header -->

                    <div class="row">
                      <div class="col-xs-12">
                        <h2 class="page-header">
                          <i class="fa fa-globe"></i> Data Pinjaman
                          <small class="pull-right">Date: <?php echo $tglBuat; ?> // <?php echo $wktBuat; ?></small>

                        </h2>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        From
                        <address>
                          <?php foreach ($from as $value): ?>
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
                    <form class="" action="<?php echo base_url('member/batalPilih') ?>" method="post">
                      <div class="col-sm-4 invoice-col">
                        <input type="hidden" name="noPinjaman" value="<?php echo $noPinjaman; ?>">

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

                            <?php foreach ($peminjam as $value): ?>

                          <tr>
                            <td>1</td>
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


                        <input type="submit" name="submit" class="btn btn-warning pull-right" value="Batal">

                      </div>
                    </div>
                    </form>



                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">


                  <table id="example4" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Id Pinjaman</th>
                      <th>Tgl Dipinjam</th>
                      <th>Tgl kembali</th>
                      <th>Status</th>
                      <th>Cek</th>
                    </tr>
                    </thead>
                    <tbody>


                    </tbody>
                    <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Id Pinjaman</th>
                      <th>Tgl Dipinjam</th>
                      <th>Tgl kembali</th>
                      <th>Status</th>
                      <th>Cek</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->





  </div>
</div>


<?php $this->load->view('member/v_footer'); ?>
