<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script type="text/javascript">
    $(function() {
      $('#container').highcharts({
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false
        },
        title: {
          text: 'Grafik Motor'
        },
        tooltip: {
          pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.1f} %',
              style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
              }
            }
          }
        },
        series: [{
          type: 'pie',
          data: [
            <?php
            // data yang diambil dari database
            if (count($graph) > 0) {
              foreach ($graph as $data) {
                echo "['" . $data->nm_motor . "'," . $data->hari . "],\n";
              }
            }
            ?>
          ]
        }]
      });
    });
  </script>
</head>

<body>

  <div id="container"></div>

</body>

</html>