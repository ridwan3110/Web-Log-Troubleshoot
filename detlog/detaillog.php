<?php
include 'databasetable.php';
?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Detail Table log</div>
  <div class="card-body">

    <?php include 'formlog.php'; ?>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='1pt'>
        <thead>
          <tr>
            <th width='16%'>Tanggal Masalah</th>
            <th width='16%'>Nama Lokasi</th>
            <th width='16%'>Nama Perangkat</th>
            <th>Part</th>
            <th>Problem</th>
            <th>Penyebab</th>
            <th>Solusi</th>
            <th>Arah Gate</th>
          </tr>
        </thead>

        <tbody>
            <?php while($rowtable = mysqli_fetch_array($datatable)) { ?>
                  <tr>

                    <td><?php echo $rowtable[1];  ?></td>
                    <td><?php echo $rowtable[7];  ?></td>
                    <td><?php echo $rowtable[8];  ?></td>
                    <td><?php echo $rowtable[10];  ?></td>
                    <td><?php echo $rowtable[11];  ?></td>
                    <td><?php echo $rowtable[12];  ?></td>
                    <td><?php echo $rowtable[13];  ?></td>
                    <td><?php echo $rowtable[14];  ?></td>
                  </tr>
           <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
