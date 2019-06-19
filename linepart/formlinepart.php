
<form action="" method="post" center>
      <div class="row">

      <p>
        <div class="col-sm-12 col-md-3">
          Proyek :
                  <select id="nampro"  name="nampro" class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="">Please Select</option>
                      <?php
                      $query = mysqli_query($koneksi,"SELECT * FROM projek where b_active='t'");
                      while ($row = mysqli_fetch_array($query)) {
                      ?>
                          <option value="<?php echo $row["Nama_Projek"]; ?>" <?php if ($_POST['nampro'] == $row['Nama_Projek']) echo 'selected="selected"' ;  ?>>
                              <?php echo $row["Nama_Projek"]; ?>
                          </option>
                      <?php
                      }
                      ?>
                  </select><font size="2" color="red"><?php echo $namaErr; ?></font>
      </div>
      <div class="">
        Part :
        <select id="nampra" name="nampra" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="">Please Select</option>
            <?php
            $query = mysqli_query($koneksi,"SELECT `projek`.`Nama_Projek`,`perangkat_vm`.`Nama_Perangkat`FROM `trouble_et`
                    INNER JOIN `projek` ON (projek.`No_Projek`=`trouble_et`.`No_Projek`)
                    JOIN `perangkat_vm` ON (perangkat_vm.`No_PVM`=`trouble_et`.`No_PVM`)
		                WHERE `projek`.`b_active`='t' GROUP BY projek.Nama_Projek,`perangkat_vm`.`Nama_Perangkat` ORDER BY `projek`.`Nama_Projek` ");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <option id="nampra" class="<?php echo $row["Nama_Projek"]; ?>" value="<?php echo $row['Nama_Perangkat']; ?>" <?php if ($_POST['nampra'] == $row['Nama_Perangkat']) echo 'selected="selected"' ;  ?>>
                    <?php echo $row['Nama_Perangkat']; ?>
                </option>
            <?php
            }
            ?>
        </select><font size="2" color="red"><?php echo $namaErr2; ?></font>
      </div>
      <div class="col-sm-12 col-md-3">
      Masukan Tahun : <select id="tahun" name="tahun"  class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="">Tahun</option>
                      <?php
                      for($i=date(Y); $i>=date(Y)-15; $i--){
                      ?>
                      <option value="<?php echo $i; ?>" <?php if ($_POST['tahun'] == $i) echo 'selected="selected"' ;  ?>><?php echo $i ;  ?> </option>
                      <?php } ?>
                    </select><font size="2" color="red"><?php echo $namaErr3; ?></font>


    </div>
    <div class="col-sm-12 col-md-2"><br>
    <input type="submit" value="search" name="cari" class="btn btn-primary"></p>
    </div>
    </form>
