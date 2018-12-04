<!-- ----------------------------------------  Edit Tambah -------------------------------------------------------------- -->
            <div class="modal fade" id="modal-edit">
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
                  <input type="text" name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang" value="">
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

<!-- ---------------------------------------------------------- End Edit ------------------------------- -->
