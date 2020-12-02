<html>
<meta charset=utf-8>
    <head>
    </head>
    <body>
        <form name="frm" action="DD.php" method="post">
            <table border="1" align="center" cellspacing="0" cellpadding="0">
                <caption>学生一览表</caption>
                <th>number</th>
              <?php
$dbh = mysqli_connect("localhost","root","");
if(!$dbh){die("error");}
mysqli_select_db($dbh,"homework");
$q = "select * from deletedata";
$result = mysqli_query($dbh,$q);     
if(!$result){
die('无法读取数据:'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>{$row['nuber']}</td>
<td><a href='DD.php?nuber={$row['nuber']}'>删除</a></td>
</tr>";
}

?>
  
            </table>
            <center><input type="submit" value="删除" /></center>
        </form>
    </body>
</html>
