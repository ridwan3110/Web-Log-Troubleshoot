<?php
$dashname=mysqli_query($koneksi,"SELECT  projek.Nama_Projek as projek, COUNT(*) as jumlah from trouble_et inner join projek on (trouble_et.No_Projek=projek.No_Projek) where Tanggal_Done=CURRENT_DATE GROUP BY projek.Nama_Projek ORDER BY jumlah desc");
$dashopentotal=mysqli_query($koneksi,"SELECT  projek.Nama_Projek as projek, COUNT(*) as jumlah, status from trouble_et inner join projek on (trouble_et.No_Projek=projek.No_Projek) where Tanggal_Done=CURRENT_DATE and status ='Open' GROUP BY projek.Nama_Projek ORDER BY jumlah desc");
$dashdonetotal=mysqli_query($koneksi,"SELECT  projek.Nama_Projek as projek, COUNT(*) as jumlah, status from trouble_et inner join projek on (trouble_et.No_Projek=projek.No_Projek) where Tanggal_Done=CURRENT_DATE and status ='Done' GROUP BY projek.Nama_Projek ORDER BY jumlah desc");
?>
<script type="text/javascript">
new Chart(document.getElementById("bar-chart-grouped"), {
  type: 'bar',
  data: {
    labels: [<?php while ($p = mysqli_fetch_array($dashname)) { echo '"' . $p['projek'] . '",';}?>],
    datasets: [
      {
        label: "Done",
        backgroundColor: "blue",
        data: [<?php while ($p = mysqli_fetch_array($dashdonetotal)) { echo '"' . $p['jumlah'] . '",';}?>]
      }, {
        label: "Open",
        backgroundColor: "red",
        data: [<?php while ($p = mysqli_fetch_array($dashopentotal)) { echo '"' . $p['jumlah'] . '",';}?>]
      }
    ]
  },
  options: {
      "hover": {
        "animationDuration": 0
      },
      "animation": {
        "duration": 1,
          "onComplete": function () {
            var chartInstance = this.chart,
              ctx = chartInstance.ctx;

            ctx.font = Chart.helpers.fontString("20", Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function (dataset, i) {
              var meta = chartInstance.controller.getDatasetMeta(i);
              meta.data.forEach(function (bar, index) {
                var data = dataset.data[index];
                ctx.fillText(data, bar._model.x, bar._model.y - 5);
              });
            });
          }
      },
      legend: {
        "display": true
      },
      tooltips: {
        "enabled": false
       },
      scales: {
          yAxes: [{
              display: true,
              gridLines: {
                display : true
              },
              ticks: {
                  display: true,
                  beginAtZero:true
              }
          }],
          xAxes: [{
              gridLines: {
                display : true
              },
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
});
</script>

<script type="text/javascript">
new Chart(document.getElementById("line-chart"), {
type: 'line',
data: {
  labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
  datasets: [{
      data: [86,114,106,106,107,111,133,221,783,2478],
      label: "Africa",
      borderColor: "#3e95cd",
      fill: false
    }, {
      data: [282,350,411,502,635,809,947,1402,3700,5267],
      label: "Asia",
      borderColor: "#8e5ea2",
      fill: false
    }, {
      data: [168,170,178,190,203,276,408,547,675,734],
      label: "Europe",
      borderColor: "#3cba9f",
      fill: false
    }, {
      data: [40,20,10,16,24,38,74,167,508,784],
      label: "Latin America",
      borderColor: "#e8c3b9",
      fill: false
    }, {
      data: [6,3,2,2,7,26,82,172,312,433],
      label: "North America",
      borderColor: "#c45850",
      fill: false
    }
  ]
},
options: {
    "hover": {
      "animationDuration": 0
    },
    "animation": {
      "duration": 1,
        "onComplete": function () {
          var chartInstance = this.chart,
            ctx = chartInstance.ctx;

          ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'center';
          ctx.textBaseline = 'bottom';

          this.data.datasets.forEach(function (dataset, i) {
            var meta = chartInstance.controller.getDatasetMeta(i);
            meta.data.forEach(function (points, index) {
              var data = dataset.data[index];
              ctx.fillText(data, points._model.x, points._model.y - 5);
            });
          });
        }
    },
    legend: {
      "display": true
    },
    tooltips: {
      "enabled": false
     },
    scales: {
        yAxes: [{
            display: true,
            gridLines: {
              display : true
            },
            ticks: {
                display: true,
                beginAtZero:true
            }
        }],
        xAxes: [{
            gridLines: {
              display : true
            },
            ticks: {
                beginAtZero:true
            }
        }]
    }
}
});
</script>

<!-- /.container-fluid -->
