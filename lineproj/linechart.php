<script type="text/javascript">
new Chart(document.getElementById("line-chart22"), {
type: 'line',
data: {
  labels: ['January','February','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
  datasets: [{
      data: [<?php echo '"' . $jan[0] . '","' . $feb[0] . '","' . $mar[0] . '","' . $apr[0] . '","' . $mei[0] . '","' . $jun[0] . '",
      "' . $jul[0] . '","' . $aug[0] . '","' . $sep[0] . '","' . $okt[0] . '","' . $nov[0] . '","' . $des[0] . '",'; ?>],
      label: "<?php echo $napro; ?>",
      borderColor: "#3e95cd",
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

          ctx.font = Chart.helpers.fontString("20", Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'center';
          ctx.textBaseline = 'top';
          ctx.fillStyle='black';

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
      "display": false
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
