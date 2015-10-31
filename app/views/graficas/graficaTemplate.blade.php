<html>
  <head>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var arrayData = [
          ['Task', 'Hours per Day'],
          ['Work',11],
          ['Eat',2],
          ['Commute',2],
          ['Watch TV',2],
          ['Sleep',7]
      ];
        var data = google.visualization.arrayToDataTable(arrayData);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
