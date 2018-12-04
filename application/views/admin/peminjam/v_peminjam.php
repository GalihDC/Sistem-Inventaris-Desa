<?php $this->load->view('admin/v_header'); ?>


<div class="row">
  <div class="col-lg-12 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>1508768</h3>

        <p><b>Total Aktivitas</b></p>
      </div>
      <div class="icon">
        <i class="fa fa-user"></i>
      </div>

    </div>
  </div>
</div>
<div class="row">

  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>150</h3>

        <p><b>Pinjaman Kembali</b></p>
      </div>
      <div class="icon">
        <i class="fa fa-history"></i>
      </div>

    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>150</h3>

        <p><b>Masih Dalam Masa Peminjaman</b></p>
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

        <p><b>Barang Yang Belum Dikembalikan</b></p>
      </div>
      <div class="icon">
        <i class="fa fa-warning"></i>
      </div>

    </div>
  </div>

</div>


<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Line Chart</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="line-chart" style="height: 300px;"></div>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-12">




    <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-check"> </i><b> Pinjaman Sukses</b></a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-history"></i><b> Dalam Pinjaman</b></a></li>
              <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-times"> </i> <b>Pinjaman Belum Kembali</b></a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">




                  <!-- /.box-header -->

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Status</th>
                        <th>Cek Invoice</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>1</td>
                        <td>Iqbal Nur Haq Binkidi</td>
                        <td>12 January 2008</td>
                        <td> <span class="label label-success">Sukses</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Farel Iqbal Ghozali
                        </td>
                        <td>16 Maret 2009</td>
                        <td> <span class="label label-success">Sukses</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sandi Nur Alam
                        </td>
                        <td>20 April 2010</td>
                        <td> <span class="label label-success">Sukses</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                      </tr>

                      <tr>
                        <td>4</td>
                        <td>Galih Dwi Caksono
                        </td>
                        <td>17 April 2003</td>
                        <td> <span class="label label-success">Sukses</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                      </tr>


                      </tbody>
                      <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Status</th>
                        <th>Cek Invoice</th>
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
                    <th>Nama</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th>Cek Invoice</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Iqbal Nur Haq Binkidi</td>
                    <td>12 January 2008</td>
                    <td> <span class="label label-success">Sukses</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Farel Iqbal Ghozali
                    </td>
                    <td>16 Maret 2009</td>
                    <td> <span class="label label-success">Sukses</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sandi Nur Alam
                    </td>
                    <td>20 April 2010</td>
                    <td> <span class="label label-success">Sukses</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                  </tr>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th>Cek Invoice</th>
                  </tr>
                  </tfoot>
                </table>



              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">


                <table id="example5" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th>Cek Invoice</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Iqbal Nur Haq Binkidi</td>
                    <td>12 January 2008</td>
                    <td> <span class="label label-success">Sukses</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Farel Iqbal Ghozali
                    </td>
                    <td>16 Maret 2009</td>
                    <td> <span class="label label-success">Sukses</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sandi Nur Alam
                    </td>
                    <td>20 April 2010</td>
                    <td> <span class="label label-success">Sukses</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm">Cek</a></td>
                  </tr>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th>Cek Invoice</th>
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
