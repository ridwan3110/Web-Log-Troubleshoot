<?php include 'query.php'; ?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Permasalahan</div>
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='1pt'>
        <thead>
          <tr>
            <th width='16%'>Nama Projek</th>
            <th width='18%'>Jenis Laporan</th>
            <th width='16%'>Nama Lokasi</th>
            <th width='16%'>Nama Perangkat</th>
            <th>Part</th>
            <th>Problem</th>
            <th>Penyebab</th>
            <th>Solusi</th>
          </tr>
        </thead>

        <tbody>
            <?php while($rowtable = mysqli_fetch_array($datatabledonetoday)) { ?>
                  <tr>
                    <td><?php echo $rowtable[6];  ?></td>
                    <td><?php echo $rowtable[1];  ?></td>
                    <td><?php echo $rowtable[7];  ?></td>
                    <td><?php echo $rowtable[8];  ?></td>
                    <td><?php echo $rowtable[10];  ?></td>
                    <td><?php echo $rowtable[11];  ?></td>
                    <td><?php echo $rowtable[12];  ?></td>
                    <td><?php echo $rowtable[13];  ?></td>
                  </tr>
           <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Pekerjaan atau Aduan</div>
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0" border='1pt'>
        <thead>
          <tr>
            <th width='16%'>Nama Projek</th>
            <th width='18%'>Jenis Laporan</th>
            <th width='16%'>Nama Lokasi</th>
            <th width='16%'>Nama Perangkat</th>
            <th>Sumber</th>
            <th>Problem</th>
            <th>Solusi</th>
          </tr>
        </thead>

        <tbody>
            <?php while($rowtable = mysqli_fetch_array($datatabledonetoday2)) { ?>
                  <tr>
                    <td><?php echo $rowtable['Nama_Projek'];  ?></td>
                    <td><?php echo $rowtable['jenisLaporan'];  ?></td>
                    <td><?php echo $rowtable['Nama_Stasiun'];  ?></td>
                    <td><?php echo $rowtable['Nama_Perangkat'];  ?></td>
                    <td><?php echo $rowtable['Sumber_aduan'];  ?></td>
                    <td><?php echo $rowtable['Problem'];  ?></td>
                    <td><?php echo $rowtable['Solusi'];  ?></td>
                  </tr>
           <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
