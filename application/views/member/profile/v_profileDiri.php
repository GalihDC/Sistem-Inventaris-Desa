<?php $this->load->view('member/v_header'); ?>

<div class="row">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
        <?php foreach ($data as $val) { ?>



        <h3 class="profile-username text-center"><?php echo $val->nama; ?></h3>


        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>ID</b> <a class="pull-right"><?php echo $val->id_member; ?></a>
          </li>

        </ul>


      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

  <div class="col-md-9">
    <!-- About Me Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">About Me</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <strong><i class="fa fa-book margin-r-5"></i> Tanggal Lahir</strong>

        <p class="text-muted">
          <?php echo $val->tgl_lahir; ?>
        </p>

        <hr>

        <strong><i class="fa fa-book margin-r-5"></i> Jenis Kelamin</strong>

        <p class="text-muted">
          <?php echo $val->jn_klm; ?>
        </p>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

        <p class="text-muted"><?php echo $val->alamat; ?></p>

        <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i> Nomor Telephone</strong>

        <p>
          <span class="label label-success"><i class="fa fa-whatsapp margin-r-5"></i> <?php echo $val->no_tlp; ?></span>
        </p>

        <?php } ?>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</row>

<?php $this->load->view('member/v_footer'); ?>
