<?php  include "headeradmin.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Report</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
  <?php
    include "connectDB.php";

    $connect = mysqli_connect("localhost","root","","testp");
                        mysqli_set_charset($connect, "utf8");

                        
                        // $sql = 'SELECT job_position,  COUNT(*) as count_rec FROM job WHERE fac_name = "วิศวกรรมซอฟต์แวร์" GROUP BY job_position;';
                        $sql = 'SELECT job_position,COUNT(*) as count_rec FROM `alumni_profile` LEFT JOIN job on alumni_profile.AP_ID = job.AP_ID WHERE fac_name = "เทคโนโลยีสารสนเทศ" GROUP BY job_position';
 

   $query = mysqli_query($connect,$sql);
   $numrows = mysqli_num_rows($query);
   $numfields = mysqli_num_fields($query);
?>
<?php
$citty = array() ;
$index = 0;
   while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{ ?>
<?php $citty[$index] = array();
$citty[$index]['job_position'] = $result["job_position"];
$citty[$index]['count_rec'] = $result["count_rec"];


$index = $index+1 ;

}

foreach ($citty as $value){
    // echo "\n",$value['job_position'],"\t\t", $value['count_rec'];

}
?>

</div>

 </table>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          <?php foreach ($citty as $value){ 
              if($index != 0) {
            ?>
              ['<?php echo $value["job_position"] ?>',     <?php echo $value["count_rec"]?>],
          <?php } else { ?>
              ['<?php echo $value["job_position"] ?>',     <?php echo $value["count_rec"]?>]
                <?php } // end of if
                $index = $index-1;
               } // end of foreach ?>
        ]);

        var options = {
          title: 'Information Technology  (IT)',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <?php

mysqli_close($connect);

?>
  </head>
  <body>
      
  <section id="main" class="wrapper style2">
	<header class="major">
		<h2>Report IT</h2>
          <h3>แบ่งตาม ตำแหน่งงาน</h3>
        <div align = "center">
    <div id="piechart_3d" style="width: 900px; height: 500px;" ></div>
      </div>
     </section>
  </body>
</html>