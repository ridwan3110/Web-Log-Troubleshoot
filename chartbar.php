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
      legend: { display: false },
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
var ctx = document.getElementById("myBarChart1");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php while ($b = mysqli_fetch_array($nama)) { echo '"' . $b['Penyebab'] . '",';}?>],
    datasets: [{
      label: "Total",
      backgroundColor: [
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
        getRandomColorHex(),
        getRandomColorHex()
      ],

      borderWidth: 5,
      data: [<?php while ($p = mysqli_fetch_array($count)) { echo '"' . $p['jumlah'] . '",';}?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
        beginAtZero: true
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
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
