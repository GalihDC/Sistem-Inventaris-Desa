<?php $this->load->view('admin/v_header'); ?>

<div class="row">
  <div class="col-lg-12">


    <div class="box box-primary">
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Tlp</th>

          </tr>
          </thead>
          <tbody>
            <?php $no1=1;
            ?>
            <?php foreach ($member as $value){ ?>

                <tr>
                  <td><?php echo $no1; ?></td>
                  <?php $no1++; ?>
                  <td><?php echo $value->nama; ?></td>
                  <td><?php echo $value->jn_klm; ?></td>
                  <td><?php echo $value->no_tlp; ?></td>

                </tr>
            <?php } ?>

          </tbody>
          <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Tlp</th>

          </tr>
          </tfoot>
        </table>
      </div>
    </div>




  </div>
</div>

<?php $this->load->view('admin/v_footer'); ?>
