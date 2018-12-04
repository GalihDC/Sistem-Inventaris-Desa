<?php $this->load->view('auth/v_header'); ?>
<div class="container">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      General Form Elements
      <small>Preview</small>
    </h1>

  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">

        <!-- Input addon -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">General Biograf</h3>
          </div>
          <div class="box-body">
            <div class="notif">
              <?php echo $this->session->flashdata('message'); ?>
            </div>

            <form action="<?php echo base_url('Auth/aksi_daftar') ?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>
              <br>

              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jk" class="form-control select2" style="width: 100%;">
                    <option value="Laki - Laki" selected="selected">Laki - Laki</option>
                    <option value="Parempuan">Perempuan</option>
                  </select>
                </div>
                <br>

                <div class="form-group">
                  <label>Tanggal Lahir</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tglL" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                <br>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                <br>





          </div>

          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">



        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Your Account</h3>
          </div>
          <div class="box-body">

            <div class="input-group">
              <span class="input-group-addon"><i style="font-size: 20px;" class="fa fa-mobile-phone"></i></span>
              <input type="text" name="noTlp" class="form-control" placeholder="No. Tlp (whatsapp)">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
              <input type="text" name="user" class="form-control" placeholder="Username">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" name="pwd" class="form-control" placeholder="Password">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-refresh"></i></span>
              <input type="text" name="cPwd" class="form-control" placeholder="Confrim Password">
            </div>
            <br>

          </div>
          <div class="box-footer">
            <input type="submit" name="" value="Kirim" class="btn btn-primary pull-right">
          </div>

        </div>

        </form>

      </div>

      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php $this->load->view('auth/v_footer'); ?>
