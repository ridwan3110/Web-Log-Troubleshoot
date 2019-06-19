<form action="" method="post" center>
      <div class="row">

      <p>
        <div class="col-sm-12 col-md-3">
        Dari Tanggal : <input type="text" id="tgl1" <?php if ($_POST['tgl1']) echo 'value="'.$_POST['tgl1'].'"' ;  ?> name="tgl1" class="form-control form-control-sm"><font size="2" color="red"><?php echo $namaErr; ?></font>
      </div>
      <div class="col-sm-12 col-md-3">
      Sampai Tanggal : <input type="text" id="tgl2" <?php if ($_POST['tgl2']) echo 'value="'.$_POST['tgl2'].'"' ;  ?> name="tgl2"class="form-control form-control-sm"><font size="2" color="red"><?php echo $namaErr2; ?></font>
    </div>
    <div class="col-sm-12 col-md-3">

    Proyek :
    <select id="namapro" name="namapro" class="custom-select custom-select-sm form-control form-control-sm">
        <option value="">Please Select</option>
        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM projek where b_active='t'");
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <option value="<?php echo $row["Nama_Projek"]; ?>" <?php if ($_POST['namapro'] == $row['Nama_Projek']) echo 'selected="selected"' ;  ?>>
                <?php echo $row["Nama_Projek"]; ?>
            </option>
        <?php
        }
        ?>
    </select><font size="2" color="red"><?php echo $namaErr3; ?></font>
      </div>
      <div class="col-sm-12 col-md-2">
        <!--status :
        <select id="status" name="status" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="">Please Select</option>
            <option value="pergantian"<?php if ($_POST['status'] == "pergantian") echo 'selected="selected"' ;  ?>>Pergantian</option>
            <option value="tidak pergantian"<?php if ($_POST['status'] == "tidak pergantian") echo 'selected="selected"' ;  ?>>Tidak Pergantian</option>
        </select><font size="2" color="red"><?php //echo $namaErr4; ?></font>-->
        <div class="col-sm-12 col-md-2"><br>
        <input type="submit" value="search" name="cari" class="btn btn-primary"></p>
      </div>
        </div>

    </div>

    </form>
