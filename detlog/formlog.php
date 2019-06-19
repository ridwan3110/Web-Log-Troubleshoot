<?php include 'export.php'; ?>
<form action="" method="post" center>
      <div class="row">


        <div class="col-sm-12 col-md-3">
        Dari Tanggal : <input type="text" id="tgl1" <?php if ($_POST['tgl1']) echo 'value="'.$_POST['tgl1'].'"' ;  ?> name="tgl1" class="form-control form-control-sm"><font size="2" color="red"><?php echo $namaErr; ?></font>
      </div>
      <div class="col-sm-12 col-md-3">
      Sampai Tanggal : <input type="text" id="tgl2" <?php if ($_POST['tgl2']) echo 'value="'.$_POST['tgl2'].'"' ;  ?>  name="tgl2" class="form-control form-control-sm"><font size="2" color="red"><?php echo $namaErr2; ?></font>
    </div>
    <div class="col-sm-12 col-md-3">
    Proyek :
    <select id="projek" name="projek" class="custom-select custom-select-sm form-control form-control-sm">
        <option value="">All</option>
        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM projek");
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <option value="<?php echo $row["Nama_Projek"]; ?>"<?php if ($_POST['projek'] == $row['Nama_Projek']) echo 'selected="selected"' ;  ?>>
                <?php echo $row["Nama_Projek"]; ?>
            </option>
        <?php
        }
        ?>
    </select>
      </div>
      <div class="col-sm-12 col-md-2">
        Status :
        <select id="status" name="status" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="">All</option>
            <option value="Done"<?php if ($_POST['status'] == "Done") echo 'selected="selected"' ;  ?>>Done</option>
            <option value="Open"<?php if ($_POST['status'] == "Open") echo 'selected="selected"' ;  ?>>Open</option>
        </select>
        </div>
        <div class="col-sm-12 col-md-2"><br>
        <input type="submit" value="search" name="cari" class="btn btn-primary">
        <input type="submit" value="Export" name="export" class="btn btn-danger"/>

      </div>
    </div>

    </form>
<br><br>
