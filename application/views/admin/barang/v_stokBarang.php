<?php $this->load->view('admin/v_header'); ?>

<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>

        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="fa fa-user"></i>
      </div>

    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>

        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>

    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>150</h3>

        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="fa fa-history"></i>
      </div>

    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>150</h3>

        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="fa fa-warning"></i>
      </div>

    </div>
  </div>

</div>


<div class="row">
  <div class="col-md-12">


<!-- ----------------------------------------  Modal Tambah -------------------------------------------------------------- -->
    <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-check"> </i><b> Barang Dapur</b></a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-history"></i><b> Barang Keras</b></a></li>

              <li class="pull-right"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
            Tambah Barang
          </button></li>
            </ul>

            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Barang</h4>
                  </div>
                  <div class="modal-body">

          <form action="<?php echo base_url('admin/tambahBarang'); ?>" method="post">
          <div class="box box-primary">


            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="form-group">
                  <label for="namaBarang">Nama Barang</label>
                  <input type="text" name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                  <label for="jumlahBarang">Jumlah Barang</label>
                  <input type="text" name="jumlahBarang" class="form-control" id="jumlahBarang" placeholder="Jumlah Barang">
                </div>

                <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" name="ketegoriBarang" style="width: 100%;">
                  <option value="1" selected="selected">Barang Dapur</option>
                  <option value="2">Barang Keras</option>
                </select>
              </div>


              </div>
              <!-- /.box-body -->

            </div>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Kirim">
                  </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>




            <div class="tab-content">
              <div class="notif">
                <?php echo $this->session->flashdata('message'); ?>
              </div>

              <div class="tab-pane active" id="tab_1">
                  <!-- /.box-header -->
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Barang Dipinjam</th>
                        <th>Barang Blm kembali</th>
                        <th>Stok</th>
                        <th>Total</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($barang as $b): ?>
                          <?php if ($b->kategori == '1'){


                              ?>
                      <tr>
                        <td><?php echo 1 ?></td>
                        <td><?php echo $b->nama_barang; ?></td>
                        <td><?php echo $b->dipinjam; ?></td>
                        <td><?php echo $b->blm_kembali; ?></td>
                        <td><?php echo $b->stok; ?></td>
                        <td><?php echo $b->total; ?></td>
                        <?php $urlHapus = array('admin', 'hapusBarang', $b->no_barang); ?>
                        <?php $urlEdit = array('admin', 'editBarang', $b->no_barang); ?>
                        <td><a href="<?php echo site_url($urlHapus); ?>" class="btn btn-warning btn-sm">Edit</a></td>
                        <td><a href="<?php echo site_url($urlEdit); ?>" class="btn btn-danger btn-sm">Delete</a></td>
                      </tr>
                    <?php  }  ?>
                    <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Barang Dipinjam</th>
                        <th>Barang Blm kembali</th>
                        <th>Stok</th>
                        <th>Total</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </tfoot>
                    </table>

                  <!-- /.box-body -->

                <!-- /.box -->



              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">


                <table id="example4" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Barang Dipinjam</th>
                    <th>Barang Blm kembali</th>
                    <th>Stok</th>
                    <th>Total</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($barang as $b): ?>
                      <?php if ($b->kategori == '2'){ ?>
                  <tr>
                    <td><?php echo 1 ?></td>
                    <td><?php echo $b->nama_barang; ?></td>
                    <td><?php echo $b->dipinjam; ?></td>
                    <td><?php echo $b->blm_kembali; ?></td>
                    <td><?php echo $b->stok; ?></td>
                    <td><?php echo $b->total; ?></td>
                    <td><a href="#" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                <?php } ?>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Barang Dipinjam</th>
                    <th>Barang Blm kembali</th>
                    <th>Stok</th>
                    <th>Total</th>
                    <th>Edit</th>
                    <th>Delete</th>
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







<?php $this->load->view('admin/v_footer'); ?>
