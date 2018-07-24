<html>
	<head>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
	</head>
	<body>
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		<script>
			Highcharts.chart('container', {
			  chart: {
			    type: 'column'
			  },
			  title: {
			    text: 'Monthly Average Rainfall'
			  },
			  xAxis: {
			    categories: [
			      'Jan',
			      'Feb',
			      'Mar',
			      'Apr',
			      'May',
			      'Jun',
			      'Jul',
			      'Aug',
			      'Sep',
			      'Oct',
			      'Nov',
			      'Dec'
			    ],
			    crosshair: true
			  },
			  yAxis: {
			    min: 0,
			    title: {
			      text: 'Rainfall (mm)'
			    }
			  },
			  tooltip: {
			    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
			    footerFormat: '</table>',
			    shared: true,
			    useHTML: true
			  },
			  plotOptions: {
			    column: {
			      pointPadding: 0.2,
			      borderWidth: 0
			    }
			  },
			  series: [{
			    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
			  }]
			});
		</script>

		<?php
            $serverName= "DESKTOP-6T8VCKD";
            $connectionInfo=array('Database'=>'dashboard');
            $conn = sqlsrv_connect($serverName,$connectionInfo);
            if($conn){
                echo $conn;
            }else{
                echo 'Eta Terangkanlah <br />';
            }

            $sql= sqlsrv_query($conn,"SELECT department
					, SUM(CASE WHEN bulan = 1 THEN nilai END) Jan
					, SUM(CASE WHEN bulan = 2 THEN nilai END) Feb
					, SUM(CASE WHEN bulan = 3 THEN nilai END) Mar
					, SUM(CASE WHEN bulan = 4 THEN nilai END) Apr
					, SUM(CASE WHEN bulan = 5 THEN nilai END) May
					, SUM(CASE WHEN bulan = 6 THEN nilai END) Jun
					, SUM(CASE WHEN bulan = 7 THEN nilai END) Jul
					, SUM(CASE WHEN bulan = 8 THEN nilai END) Aug
					, SUM(CASE WHEN bulan = 9 THEN nilai END) Sep
					, SUM(CASE WHEN bulan = 10 THEN nilai END) Oct
					, SUM(CASE WHEN bulan = 11 THEN nilai END) Nov
					, SUM(CASE WHEN bulan = 12 THEN nilai END) Dec
					From DATA_3
					GROUP BY department;");

             while( $row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC)) {
	            echo "<tr>".$row["Jan"]."<br /></tr>";
	            echo "<tr>".$row["Mar"]."<br /></tr>";
	            echo "<tr>".$row["Feb"]."<br /></tr>";
	            echo "<tr>".$row["Apr"]."<br /></tr>";
	            echo "<tr>".$row["May"]."<br /></tr>";
	            echo "<tr>".$row["Jun"]."<br /></tr>";
	            echo "<tr>".$row["Jul"]."<br /></tr>";
	            echo "<tr>".$row["Aug"]."<br /></tr>";
	            echo "<tr>".$row["Sep"]."<br /></tr>";
	            echo "<tr>".$row["Oct"]."<br /></tr>";
	            echo "<tr>".$row["Nov"]."<br /></tr>";
	            echo "<tr>".$row["Dec"]."<br /></tr>";
            }


        ?>


	</body>
</html>