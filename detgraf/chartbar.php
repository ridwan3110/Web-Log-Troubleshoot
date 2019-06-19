<script type="text/javascript">
new Chart(document.getElementById("bar-chart-horizontal"), {
  type: 'horizontalBar',
  data: {
    labels: [<?php while ($b = mysqli_fetch_array($nama)) { echo '"' . $b['Penyebab'] . '",';}?>],
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
