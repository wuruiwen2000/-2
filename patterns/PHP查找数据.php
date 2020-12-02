 <?php
$dbh = mysqli_connect("localhost","root","");
if(!$dbh){die("error");}
mysqli_select_db($dbh,"homework");
$q = "select * from deletedata";
$result = mysqli_query($dbh,$q);     
if(!$result){
die('无法读取数据:'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result)) {echo "{$row['nuber']}";}
mysqli_close($dbh);
/* 关闭到mysql数据库的连接 */
?>
