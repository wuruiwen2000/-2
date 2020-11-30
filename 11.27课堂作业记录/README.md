1/点击按钮进行PHP  
“<td> <input  type="button" value="查看团队具体成员" onclick="javascript:window.location.href='/meowcat/find.php'"> ”  
2/PHP echo出好看的表格  
之前设计的整体是：  
一定要引用头部部分和style部分  
最终：保持导航栏的上部，输出部分插入php  
  
3/如何点击“查看团队译者信息”就显示所有人的信息：  
通过团队ID  
-团队ID怎么获取？  

4/整体创建团队的流程：
点击创建团队后，输入项目名称，出现项目ID和项目名称，之后可以查看翻译人员或是添加新成员。
对于已经添加以后的情况，要得到每个成员的ID和用户名
有了项目名，通过proFL找到译者ID，再通过users找到用户名

