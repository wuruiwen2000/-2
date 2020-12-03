1.PM_TeamDelete
点击按钮，启动PHP  
PHP对数据库中的数据进行删除  
先自己建一个数据库，写一个网页进行删除。  
备注：teamfl可以直接添加数据  
在teamtmtemp里面先添加数据

html代码如下：
 <tr>
                <td>1</td>
                <td>Apple</td>
                
                <td><input  type="button" value="查看团队具体成员" onclick="javascript:window.location.href='/meowcat/find.php'"><input type="button" value="添加新成员" onclick="javascript:window.location.href='tmfile.html'"></td>
              </tr>
<tr>
                <td>2</td>
                <td>Lemon</td>
                
                   <td><input type="button" value="查看团队具体成员" onclick="javascript:window.location.href='tmfile.html'"><input type="button" value="添加新成员" onclick="javascript:window.location.href='../PM/user_info/tmtransearch.html'"></td>
              </tr>
<tr>
                <td>Apple</td>
                <td>1</td>
                
         <td><input type="button" value="查看团队具体成员" onclick="javascript:window.location.href='tmfile.html'"><input type="button" value="添加新成员" onclick="javascript:window.location.href='../PM/user_info/tmtransearch.html'"></td>
              </tr>

2.tmfile.html显示的是译者的个人信息
要连接得出译者个人信息的php
tmfile初版：                                                                             
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<title>团队成员显示界面</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
</head>

		<style>
			
      		.navbar {
        	margin-top: 5px;
			margin-bottom:0px;
      		}
			div{
			font-family:幼圆;
			font-weight:600;
			font-size:100%;
			}
			a
			{
				color:#FFFFFF;
			}
			td
			{
    			text-align:middle;
				padding-top:5px;
				padding-bottom:10px;
				padding-left:5px;
				padding-right:5px;
			}
			#table0
			{
				margin-bottom:15px;
				margin-top:25px;
				margin-left:35px;
				outline: #FFFFFF solid 5px;
				background: #FFFFFF;
				color:#333366;
			}
			#row1
			{
				background-color: #0066CC;
			}
			#row2col1
			{
				background-color: #333366;
			}
			.row{
				margin-left:0;
				margin-right:0;

			}
			li
			{
				padding-top:10px;
				padding-bottom:10px;
				margin-bottom:5px;
				margin-top:0px;
			}
		</style>
	</head>

    <body>
    	<div class="container-fiuled" id="row1">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<nav class="navbar navbar-expand-sm" role="navigation">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">
								<img alt="logo" width="180px" src="/meowcat/image/logo1.png"/>
							</a>
						</div>
						<div>
							<ul class="nav navbar-nav pull-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">开始工作<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">团队项目</a>
										</li>
										<li class="divider">
										</li>
										<li>
									 		<a href="#">人员管理</a>
										</li>
									</ul>
								</li>
							                 <li>
									<a href="#">项目经理档案</a>
								</li>
								<li>
									<a href="#">注销</a>
								</li>
							</ul>
                        </div>
					</nav>
				</div>
			</div>
		</div>

		<div class="container-fiuled" >
			<div class="row clearfix">
				<div class="col-md-2 column" id="row2col1">
					<ul class="nav nav-stacked text-center">
						<li>
							<table id="table0">
								<tr>
									<td colspan="2">
										<svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  											<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  											<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 											<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
										</svg>
									<td>
								</tr>
								<tr>
									<td align="left">
										用户名
									</td>
									<td align="right">
										xxx
									</td>
								</tr>
								<tr>
									<td align="left">
										用户ID
									</td>
									<td align="right">
										xxxxxx
									</td>
								</tr>
								<tr>
									<td align="left">
										邮箱
									</td>
									<td align="right">
										xxxxx@xx.com
									</td>
								</tr>
							</table>
						</li>
						<li class="row2-3">
							<a href="#">文档列表</a>
						</li>
						<li class="row2-3">
							<a href="#">术语库</a>
						</li>
						<li class="row2-3">
							<a href="#">翻译记忆库</a>
						</li>
						<li class="row2-3">
							<a href="#">机器翻译</a>
						</li>
						<li class="row2-3">
							<a href="#">风格指南</a>
						</li>
						<li>
							<a href="#">关于我们</a>
						</li>
					</ul>
				</div>
			

		

<div class="container-fluid col-md-10 column" style="margin-top:80px">
<div class="col-sm-25 col-md-20">
        <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th class="width:45px">译者ID</th>
                <th>译者</th>
                <th>操作</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Apple</td>
                <td>1</td>
               
     <td><input  type="button" value="删除该成员" "></td>
   
              </tr>
<tr>
                <td>Apple</td>
                <td>1</td>
             
           <td><input  type="button" value="删除该成员" "></td>
              </tr>
<tr>
                <td>Apple</td>
                <td>1</td>
               
       <td><input  type="button" value="删除该成员" "></td>
              </tr>
            </tbody>
        </table>

        <div align="center" class="container-fluid" >
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">上一页</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">下一页</a></li>
              </ul>
        </div>
      </div>
 </div>
    </body>
</html>






$q = "select user_id from teamfl";
$result = mysqli_query($dbh,$q);     
if(!$result){
die('无法读取数据:'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result))
{echo "<tr>
                <td>{$row['user_id']}</td></tr>";}
mysqli_close($dbh);
//这一个用来译者经理显示的团队里的译者列表:加载译者ID和译者用户名






(1)解决的第一个问题：如何得到译者的姓名？ √：修改数据库：能不能直接添加team_id,user_id,user_name
从两个不同的表中选择出来，用两个result
<?php
$dbh = mysqli_connect("localhost","root","");
mysqli_select_db($dbh,"meowcat");
$q = "select user_id from teamfl";
$q2="select user_name from users";
//这里还需要再改：如何得到该得到的团队中的user_id
$result= mysqli_query($dbh,$q);     
$result2= mysqli_query($dbh,$q2);    
if(!$result){
die('无法读取数据:'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result) and $row2=mysqli_fetch_assoc($result2))
{echo "<tr>
                <td>{$row['user_id']}</td><td>{$row2['user_name']}</td></tr>";
}
mysqli_close($dbh);
//这一个用来译者经理显示的团队里的译者列表:加载译者ID和译者用户名
?>           



主要就是四个
translation.html
tmfile.html（通过tmlist显示）
