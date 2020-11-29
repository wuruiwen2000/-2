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
https://github.com/wuruiwen2000/-2/blob/master/lecture10%E4%BD%9C%E4%B8%9A/%E4%B8%AA%E4%BA%BA%E4%BD%9C%E4%B8%9A/%E8%AF%BE%E5%A0%82%E4%BD%9C%E4%B8%9A/WriteIt.php  
写入后直接在当前文件夹中得到write_str.xml文件  
读取代码如下:
https://github.com/wuruiwen2000/-2/blob/master/lecture10%E4%BD%9C%E4%B8%9A/%E4%B8%AA%E4%BA%BA%E4%BD%9C%E4%B8%9A/%E8%AF%BE%E5%A0%82%E4%BD%9C%E4%B8%9A/ReadIt.php  
读取结果：  

