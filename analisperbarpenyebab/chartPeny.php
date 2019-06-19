<?php
if (isset($_POST['cari'])) {
  $tgl1=$_POST['tgl1'];
  $tgl2=$_POST['tgl2'];
  $napro=$_POST['namapro'];
  $nape=$_POST['namapra'];
  //$nape=$_POST['namapra'];
  //$status=$_POST['status'];


  if(empty($tgl1)){
  			$namaErr = "Silakan isi tanggal !<br><br>";
  		}
  if(empty($tgl2)){
  			$namaErr2 = "Silakan isi tanggal !<br><br>";
  		}
      if(empty($napro)){
      			$namaErr3 = "Proyek belum di isi<br>";
      		}
              if(empty($nape)){
                    $namaErr4 = "Part belum di isi<br>";
                  }

  $nama=mysqli_query($koneksi,"SELECT Penyebab.Penyebab
  FROM trouble_et INNER JOIN penyebab ON (trouble_et.No_Penyebab=penyebab.No_Penyebab)
  JOIN perangkat_vm ON (trouble_et.No_PVM=perangkat_vm.No_PVM) JOIN projek ON (trouble_et.No_Projek=projek.No_Projek)
  WHERE projek.Nama_Projek='$napro'
  AND trouble_et.Tanggal_Done>='$tgl1'
  AND trouble_et.Tanggal_Done<='$tgl2'
  AND RefNumber not in ('')
	AND perangkat_vm.Nama_Perangkat = '$nape'
	GROUP BY Penyebab.Penyebab");

  $count=mysqli_query($koneksi,"SELECT count(*) as jumlah
  FROM trouble_et INNER JOIN penyebab ON (trouble_et.No_Penyebab=penyebab.No_Penyebab)
  JOIN perangkat_vm ON (trouble_et.No_PVM=perangkat_vm.No_PVM) JOIN projek ON (trouble_et.No_Projek=projek.No_Projek)
  WHERE projek.Nama_Projek='$napro'
  AND trouble_et.Tanggal_Done>='$tgl1'
  AND trouble_et.Tanggal_Done<='$tgl2'
  AND RefNumber not in ('')
	AND perangkat_vm.Nama_Perangkat = '$nape'
	GROUP BY Penyebab.Penyebab");
//}

      }
  ?>

  <script type="text/javascript">
  new Chart(document.getElementById("bar-chart-horizontalzpeny"), {
    type: 'horizontalBar',
    data: {
      labels: [<?php while ($b = mysqli_fetch_array($nama)) { echo '"' . $b[0] . '",';}?>],
      datasets: [
        {
          label: "Total",
          backgroundColor: [getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex()],
          data: [<?php while ($p = mysqli_fetch_array($count)) { echo '"' . $p['jumlah'] . '",';}?>]
        }
      ]
    },options: {
      scales: {
      xAxes: [{
        stacked: true
      }],
      yAxes: [{
        stacked: true,
      }]
    },

        legend: { display: false },
        "animation": {
          "duration": 1,
            "onComplete": function () {
              var chartInstance = this.chart,
                ctx = chartInstance.ctx;

             ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
              ctx.textAlign = 'left';
              ctx.textBaseline = 'top';


              this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                meta.data.forEach(function (points, index) {
                  var data = dataset.data[index];
                  ctx.fillText(data, points._model.x, points._model.y - 5);
                });
              });
            }
        },
        title: {
          display: true,
        }

      }
  });


  function getRandomColorHex() {
  var hex = "0123456789ABCDEF",
      color = "#";
  for (var i = 1; i <= 6; i++) {
    color += hex[Math.floor(Math.random() * 16)];
  }
  return color;
  }
  </script>






  <script type="text/javascript">
  new Chart(document.getElementById("bar-chart-horizontalz1"), {
    type: 'horizontalBar',
    data: {
      labels: [<?php while ($b = mysqli_fetch_array($nama)) { echo '"' . $b[0] . '",';}?>],
      datasets: [
        {
          label: "Total",
          backgroundColor: [getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex(),
            getRandomColorHex()],
          data: [<?php while ($p = mysqli_fetch_array($count)) { echo '"' . $p['jumlah'] . '",';}?>]
        }
      ]
    },options: {
        legend: { display: false },
        "animation": {
          "duration": 1,
            "onComplete": function () {
              var chartInstance = this.chart,
                ctx = chartInstance.ctx;

             ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
              ctx.textAlign = 'left';
              ctx.textBaseline = 'top';


              this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                meta.data.forEach(function (points, index) {
                  var data = dataset.data[index];
                  ctx.fillText(data, points._model.x, points._model.y - 5);
                });
              });
            }
        },
        title: {
          display: true,
        }
      }
  });
  function getRandomColorHex() {
  var hex = "0123456789ABCDEF",
      color = "#";
  for (var i = 1; i <= 6; i++) {
    color += hex[Math.floor(Math.random() * 16)];
  }
  return color;
  }
  </script>
