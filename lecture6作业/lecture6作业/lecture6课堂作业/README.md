花20~30分钟时间，继续练习jqGrid的使用，保存代码提交。
制作中英文双语数据  
将上述制作的数据通过jqGrid渲染到网页上  
创建数据库与表，将上述制作的中英文双语数据导入数据库中  
直接通过pdo访问数据库并包装返回结果  

1.基于PHP和Mysql相结合使用jqGrid读取数据并显示  
备注：（1）下载后可以开启xampp(不然没法儿显示具体的样式！）  
（2）引用同正常的引用一样，对应html文件引用，区分路径就可以  
（3）下载的版本可能不同，需要对于引用的内容进行适当修改  

步骤1：
建立前端html
html部分：

<div id="opt">
 <div id="query">
 <label>编号：</label><input type="text" class="input" id="sn" />
 <label>名称：</label><input type="text" class="input" id="title" />
 <input type="submit" class="btn" id="find_btn" value="查 询" />
 </div>
 <input type="button" class="btn" id="add_btn" value="新 增" />
 <input type="button" class="btn" id="del_btn" value="删 除" />
</div>
<table id="list"></table>
<div id="pager"></div>
