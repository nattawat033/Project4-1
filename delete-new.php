<?php 
session_start();
include "connectDB.php";
$id =  $_SESSION['user_id'];
 $a_id = $_GET['a_id'];

$sql = "DELETE FROM articles WHERE a_id = $a_id  AND m_username = $id ";




$query = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 

if (!$query) {
    echo mysqli_error();
}
else{
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    
    
     phpAlert(   "ลบข่าวประชาสัมพันธ์เรียบร้อยแล้ว"   ); 
     echo "<script>window.location='news.php'</script>";
    mysqli_close($conn);

}

?>