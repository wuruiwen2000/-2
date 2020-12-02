<?php
$aaa=$_GET['nuber'];
echo $aaa;
$db=new mysqli("localhost","root","","homework");
if($db)
{
echo "SUCESS";
}
$sql="delete from deletedata where nuber='{$aaa}'";
if($db->query($sql))
{
echo "SUCESS";
}
else
{
echo "FALSE";
}
?>
