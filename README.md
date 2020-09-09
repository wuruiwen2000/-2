# -2
数据库原理2作业
课堂作业（WeekOne）

<script type="text/javascript" src="/jquery/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("p").click(function(){
  $(this).hide();
});
});
</script>

<html>
<head>
<script type="text/javascript" src="/jquery/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("button").click(function(){
    $("#test").hide();
  });
});
</script>
</head>

<body>
<h2>This is a heading</h2>
<p>This is a paragraph.</p>
<p id="test">This is another paragraph.</p>
<button type="button">Click me</button>
</body>
</html>



<html>
<head>
<script type="text/javascript" src="/jquery/jquery.js"></script>
<script type="text/javascript"> 
 
$(document).ready(function(){
    $("#choose").css("background-color","#B2E0FF");
});
 
</script>	
 
</head>
<body>
<html>
<body>
<h1>Welcome to My Homepage</h1>
<p class="intro">My name is Donald</p>
<p>I live in Duckburg</p>
<p>My best friend is Mickey</p>
<div id="choose">
Who is your favourite:
<ul>
<li>Goofy</li>
<li>Mickey</li>
<li>Pluto</li>
</ul>
</div>
</body>
</html>
 
 
</body>
</html>



$(document).ready(function(){
  $(".btn1").click(function(){
    $("p").slideToggle();
  });
});
