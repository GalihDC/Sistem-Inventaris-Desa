<?php $this->load->view('member/v_header'); ?>

<div class="row">


  <div class="col-md-12">


    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Data Pinjam</h3>
      </div>

      <div class="notif">
        <?php echo $this->session->flashdata('message'); ?>
      </div>

      <form class="" action="<?php  echo base_url('member/pilihBarang') ?>" method="post">
        <div class="box-body">
          <div class="form-group">
            <label>Tanggal Pinjam dan Kembali</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" name="tglPinjam" class="form-control pull-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>


          <br>

          <div class="form-group">
            <label>Data Barang</label>


              <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-check"> </i><b> Barang Dapur</b></a></li>
                        <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-history"></i><b> Barang Keras</b></a></li>

                      </ul>



                      <div class="tab-content">


                        <div class="tab-pane active" id="tab_1">
                            <!-- /.box-header -->
                              <table class="table table-striped">
                                <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Barang</th>
                                  <th>Stok</th>
                                  <th>Pinjam</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php $no=1; ?>
                                  <?php foreach ($barang as $b): ?>
                                    <?php if ($b->kategori == '1'){

                                        ?>
                                <tr>
                                  <td><?php echo $no; ?></td>
                                  <?php $no++; ?>
                                  <td><?php echo $b->nama_barang; ?></td>
                                  <?php if ($b->stok > 0) { ?>
                                    <td><span class="badge bg-blue"><?php echo $b->stok; ?></span></td>

                                    <td><span class="label label-success">Stok Tersedia</span></td>
                                    <td><input type="checkbox" name="barang[]" class="minimal" value="<?php echo $b->no_barang; ?>"></td>
                                  <?php }else{ ?>
                                    <td><span class="badge bg-red"><?php echo $b->stok; ?></span></td>
                                    <td><span class="label label-danger">Stok Tidak Tersedia</span></td>
                                    <td>-</td>
                                  <?php } ?>
                                </tr>
                              <?php  }  ?>
                              <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Barang</th>
                                  <th>Stok</th>
                                  <th>Pinjam</th>
                                </tr>
                                </tfoot>
                              </table>

                            <!-- /.box-body -->

                          <!-- /.box -->

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">


                          <table class="table table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Barang</th>
                              <th>Stok</th>
                              <th>Status</th>
                              <th>Pinjam</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php $no=1; ?>
                              <?php foreach ($barang as $b): ?>
                                <?php if ($b->kategori == '2'){ ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <?php $no++; ?>
                              <td><?php echo $b->nama_barang; ?></td>
                              <td><?php echo $b->stok; ?></td>
                              <?php if ($b->stok > 0) { ?>
                                <td><span class="badge bg-blue"><?php echo $b->stok; ?></span></td>
                                <td><span class="label label-success">Stok Tersedia</span></td>
                                <td><input type="checkbox" name="barang[]" class="minimal" value="<?php echo $b->no_barang; ?>"></td>
                              <?php }else{ ?>
                                <td><span class="badge bg-red"><?php echo $b->stok; ?></span></td>
                                <td><span class="label label-danger">Stok Tidak Tersedia</span></td>
                                <td>-</td>
                              <?php } ?>
                            </tr>
                          <?php } ?>
                          <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>No</th>
                              <th>Nama Barang</th>
                              <th>Stok</th>
                              <th>Pinjam</th>

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
        <div class="box-footer">
          <?php if ($cekPeminjam <= 0) { ?>
            <input type="submit" class="btn btn-primary pull-right" name="submit" value="Next">
          <?php }else{ ?>
            <div class="alert alert-danger alert-dismissible">
              <h4><i class="icon fa fa-ban"></i> Peringatan!!</h4>
              Maaf anda sudah memesan barang sebelumya dan belum di konfirmasi oleh admin, silahkan cek status peminjaman anda
              dan jika ada masalah bisa hubungi admin
            </div>
          <?php } ?>
        </div>
      </div>
      </form>

  </div>
</div>


<?php $this->load->view('member/v_footer'); ?>
<script type="text/javascript">

    $(document).ready(function() {

      var countChecked = function() {
      var n = $( "input:checked" ).length;
        for (let i = 0; i < n.length; i++) {

          $('#sclBarang').html('<tr>'.
          '<td>'.)
        }
      };
    $( "input[type=checkbox]" ).on( "click", countChecked );

    });

</script>
