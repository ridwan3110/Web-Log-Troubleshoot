<form action="" method="post" center>
  <div class="row">
    <div class="col-sm-12 col-md-3">
Part :
<select id="namapra" name="namapra" class="custom-select custom-select-sm form-control form-control-sm">
    <option value="">Please Select</option>
    <?php
    $query = mysqli_query($koneksi,"SELECT `projek`.`Nama_Projek`,`perangkat_vm`.`Nama_Perangkat`FROM `trouble_et`
            INNER JOIN `projek` ON (projek.`No_Projek`=`trouble_et`.`No_Projek`)
            JOIN `perangkat_vm` ON (perangkat_vm.`No_PVM`=`trouble_et`.`No_PVM`)
            WHERE `projek`.`b_active`='t' GROUP BY projek.Nama_Projek,`perangkat_vm`.`Nama_Perangkat` ORDER BY `projek`.`Nama_Projek` ");
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <option id="namapra" class="<?php echo $row["Nama_Projek"]; ?>" value="<?php echo $row['Nama_Perangkat']; ?>" <?php if ($_POST['namapra'] == $row['Nama_Perangkat']) echo 'selected="selected"' ;  ?>>
            <?php echo $row['Nama_Perangkat']; ?>
        </option>
    <?php
    }
    ?>
</select><font size="2" color="red"><?php echo $namaErr5; ?></font>
</div>
<div class="col-sm-12 col-md-2"><br>
<input type="submit" value="search" name="caripart" class="btn btn-primary"></p>
</div>
</div>

<form>
