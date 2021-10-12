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
                <?php if ($cekPeminjam == 3): ?>
                  <li class="pull-right">
                  <form class="" action="<?php echo base_url('member/nextReject'); ?>" method="post">
                      <input type="hidden" name="noPinjaman" value="<?php echo $no_pinjaman; ?>">
                      <input type="submit" name="submit" class="btn btn-primary pull-right" value="Next">
                  </form>
                  </li>
                <?php endif; ?>

              </ul>

              <div class="tab-content">
                <div class="notif">
                  <?php echo $this->session->flashdata('message'); ?>
                </div>

                <div class="tab-pane active" id="tab_1">
                  <?php if ($cekPeminjam == 1) { ?>
                    <div class="alert alert-success alert-dismissible">

                      <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                      Barang anda sudah dikonfirmasi oleh admin. Silankan ambil barang di Balai Desa Matesih Karangayar
                    </div>
                  <?php }elseif($cekPeminjam == 3){ ?>
                    <div class="alert alert-danger alert-dismissible">

                      <h4><i class="icon fa fa-danger"></i> Alert!</h4>
                      Maaf barang anda pinjam tidak di tolak oleh admin. Jika ada yang perlu dipertanyakan bisa hubungi admin Desa Matesih Karangayar. <br>
                      Silahkan klik tombol next untuk meminjam barang lainnya.
                    </div>
                  <?php }else{ ?>
                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                      Anda belum melakukan peminjaman barang, silahkan klik menu stok barang untuk meminjam barang yang dibutuhkan
                      dan ikuti setiap langkah yang ada, jika ada kendala atau masalah dalam peminjaman silahakan hubungi admin yang
                      bersangkutan. Jadilah peminjam yang bijak dan bertanggung jawab, salam hangat dari aparatur desa Matesih Karangayar.
                    </p>
                  <?php } ?>



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
