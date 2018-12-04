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
          <form class="form-horizontal" action="<?php echo base_url('index.php/Auth/cek_login'); ?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Jika foto tidak isi, maka foto anda akan tampil secara default</p>
                <p class="help-block">Foto Format (jpg,png) maax:10mb</p>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                  <label>
                    <span class="username"><a href="#">Lupa Password? Click Here</a></span>
                  </label>
                </div>
              </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" name="submit" class="btn btn-info pull-right">Sign in</button>
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
