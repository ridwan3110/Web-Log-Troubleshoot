<?php
include 'projek/kci/kciquery.php';
include 'projek/damri/damriquery.php';
include 'projek/restarea/restareaquery.php';
include 'projek/railinkjkt/railinkquery.php';
?>


<script type="text/javascript">
new Chart(document.getElementById("line-chart1"), {
type: 'line',
data: {
  labels: ['Minggu ini','-1 Minggu','-2 Minggu','-3 Minggu'],
  datasets: [{
      data: [<?php echo '"' . $kci1[0] . '","' . $kci2[0] . '","' . $kci3[0] . '","' . $kci4[0] . '",'; ?>],
      label: "KCI",
      borderColor: "#3e95cd",
      fill: false
    }, {
      data: [<?php echo '"' . $damri1[0] . '","' . $damri2[0] . '","' . $damri3[0] . '","' . $damri4[0] . '",'; ?>],
      label: "DAMRI",
      borderColor: "#8e5ea2",
      fill: false
    }, {
      data: [<?php echo '"' . $restarea1[0] . '","' . $restarea2[0] . '","' . $restarea3[0] . '","' . $restarea4[0] . '",'; ?>],
      label: "CCTV REST AREA",
      borderColor: "#3cba9f",
      fill: false
    },{
      data: [<?php echo '"' . $railink1[0] . '","' . $railink2[0] . '","' . $railink3[0] . '","' . $railink4[0] . '",'; ?>],
      label: "RAILINK JAKARTA",
      borderColor: "#FF0000",
      fill: false
    },
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

          ctx.font = Chart.helpers.fontString("15", Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'center';
          ctx.textBaseline = 'top';
          ctx.fillStyle = "black";

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
