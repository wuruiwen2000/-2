<?php
$dbh = mysqli_connect("localhost","root","");
mysqli_select_db($dbh,"meowcat");
$q = "select team_id from teamtmtemp";
$result = mysqli_query($dbh,$q);     
if(!$result){
die('�޷���ȡ����:'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result)) {echo " <tr>
                <td>{$row['team_id']}</td>";}
mysqli_close($dbh);
/* �رյ�mysql���ݿ������ */
//��һ���������߾�����ʾ���Ŷ��б�:�����Ŷ�ID�͡��Ŷ����ơ�
?>