<?php $this->load->view('auth/v_header'); ?>

<div class="container">
  <section class="content-header">
    <h1>
      Login
      <small>Preview</small>
    </h1>

  </section>

  <section class="content">
    <div class="box box-info">
              <br>
              <br>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal" action="<?php echo base_url('auth/aksi_login'); ?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-10">
                  <input type="text" name="user" class="form-control" id="username" placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                  <input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>

              <br>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                  <label>
                    <span class="username"><a href="<?php echo site_url('auth/loginAdmin') ?>">Login sebagai admin</a></span>
                  </label>
                </div>
              </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <input type="submit" name="submit" class="btn btn-info pull-right" value="Kirim">
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
      <br>
      <br>

    </div>
          <!-- /.box -->
  </section>
</div>

<?php $this->load->view('auth/v_footer'); ?>
