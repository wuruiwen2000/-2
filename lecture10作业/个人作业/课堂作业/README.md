### LECTURE10:CAT系统中类xml格式文档处理  
#### lecture10课堂作业  
#### 使用php解析tmx和xliff  
##### 一、翻译记忆文件tmx-xml库解析(xml类型文件，结尾是.tmx)
##### 使用php解析tmx
PHP对XML文件进行读写操作的方法一共有四种，分别是：字符串方式直接读写、DOMDocument读写、XMLWrite写和XMLReader读、SimpleXML读写。  
此次选择用字符串方式直接读写
#### 用php将数据库中的内容写进xml文件中（没有xml文件，只有数据库中的数据，怎么生成xml文件）  
数据库名:meowcat,表名users,表头：user_id,user_name,password,email,duty,field  
写入代码如下：
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
写入后直接在当前文件夹中得到write_str.xml文件
读取代码如下:
读取结果：
