<html>
  <head>
  <?php
    include "connectDB.php";

    $connect = mysqli_connect("localhost","root","","testp");
                        mysqli_set_charset($connect, "utf8");

                        // $sql = 'SELECT job_citty,  COUNT(*) as count_rec FROM job  GROUP BY job_citty;';
                        $sql = 'SELECT *,COUNT(*) as count_rec FROM `alumni_profile` LEFT JOIN job on alumni_profile.AP_ID = job.AP_ID WHERE fac_name = "วิศวกรรมซอฟต์แวร์" GROUP BY job_citty';;
 

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
  if ($result["job_position"] == ""){

      $citty[$index]['job_position'] = "ว่างงาน";
      $citty[$index]['count_rec'] = $result["count_rec"];
  } else {
      $citty[$index]['job_position'] = $result["job_position"];
      $citty[$index]['count_rec'] = $result["count_rec"];
  }

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
          title: 'My Daily Activities',
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
      
 





    <div id="piechart_3d" style="width: 500px; height: 300px;"></div>
  </body>
</html>