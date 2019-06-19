
<form action="" method="post" center>
      <div class="row">

      <p>
        <div class="col-sm-12 col-md-3">
          Proyek :
                  <select id="nampro" name="nampro" class="custom-select custom-select-sm form-control form-control-sm">
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
      <div class="col-sm-12 col-md-3">
      Masukan Tahun : <select id="tahun" name="tahun"  class="custom-select custom-select-sm form-control form-control-sm">
                      <option value="">Tahun</option>
                      <?php
                      for($i=date(Y); $i>=date(Y)-15; $i--){
                      ?>
                      <option value="<?php echo $i; ?>"<?php if ($_POST['tahun'] == $i) echo 'selected="selected"' ;  ?>><?php echo $i ;  ?> </option>
                      <?php } ?>
                    </select><font size="2" color="red"><?php echo $namaErr2; ?></font>


    </div>
    <div class="col-sm-12 col-md-2"><br>
    <input type="submit" value="search" name="cari" class="btn btn-primary"></p>
    </div>
    </form>
