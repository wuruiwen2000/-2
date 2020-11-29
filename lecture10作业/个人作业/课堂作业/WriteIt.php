<?php
/**
* function：使用字符串方式写XML文件
* author：RuiwenWu
* date：2020.11.29
**/
$mysqli = mysqli_connect('localhost', 'root', '', 'meowcat');
if($mysqli)
{
echo "Success!";
}
$sql = 'select * from users';
$res = mysqli_query($mysqli, $sql);
$study = array();
while($row = mysqli_fetch_array($res)) {
    $study[] = $row;
}

$xmlTag = array(
    'user_id',
    'user_name',
    'password',
'email',
'duty',
'field'
);

$str = "<studentcareer>\n";
foreach($study as $v) {
    $str .= "\t<period>\n";
    foreach($xmlTag as $x) {
        $str .= "\t\t<".$x.">" . $v[$x] . "</".$x.">\n";
    }
    $str .= "\t</period>\n";
}
$str .= '</studentcareer>';
 
$file = './write_str.xml';
file_put_contents($file, $str);

?>