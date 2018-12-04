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

                  <div class="alert alert-warning alert-dismissible">
                    
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    Warning alert preview. This alert is dismissable.
                  </div>

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
