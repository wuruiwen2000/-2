<?php
$aaa=$_GET['id'];
$db=new mysqli("localhost","root","","meowcat");
$sql="select user_id from teamfl where team_id='{$aaa}'";
$result = mysqli_query($db,$sql);     
if(!$result){
die('无法读取数据:'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result)){echo " <tr>
                <td>{$row['user_id']}</td>";}
?>