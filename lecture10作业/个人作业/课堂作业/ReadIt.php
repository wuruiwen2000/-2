<?php
/**
* function：使用字符串方式读XML文件
* author：RuiwenWu
* date：2020.11.29
**/
$file = './write_str.xml';
$con = file_get_contents($file);
 
//XML标签配置
$xmlTag = array(
    'user_id',
    'user_name',
    'password',
'email',
'duty',
'field'
);
 
$arr = array();
foreach($xmlTag as $x) {
    preg_match_all("/<".$x.">.*<\/".$x.">/", $con, $temp);
    $arr[] = $temp[0];
}
//去除XML标签并组装数据
$data = array();
foreach($arr as $key => $value) {
    foreach($value as $k => $v) {
        $a = explode($xmlTag[$key].'>', $v);
        $v = substr($a[1], 0, strlen($a[1])-2);
        $data[$k][$xmlTag[$key]] = $v;
    }
}
echo '<pre>';
print_r($data);
?>