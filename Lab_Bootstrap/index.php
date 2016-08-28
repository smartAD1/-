<?php session_start(); ?>
<?php 
if (isset($_SESSION["username"]))
  $sUserName = $_SESSION["username"];
else 
  $sUserName = "Guest";

if (isset($_SESSION["Root"]))
  $sUserName = $_SESSION["Root"];
else 
  $Root = "";
?>
<html lang="en">
    <head>
    	<link href="css/bootstrap.min.css" rel="stylesheet">
        <title>小專題</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="author" content="Pedro Botelho for Codrops" />
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="css/demo.css" />
		<link rel="stylesheet" href="css/custom.css" />
    <script src="js/modernizr.custom.46884.js"></script>
    
    <style>/* 首頁動畫管理   */
        div    {clear:left;}
        .selected  {background: orange; }
        .small {
            width:150px; 
            float:center;
            margin:2px; 
            padding:3px; 
            border: 1px black solid;}
            
       #viewer{width:1024px;
               overflow:hidden;
             	padding:  auto;
             	margin: 0 auto;
            
       }  /* 將超出範圍的內容隱藏 */
               
	   #all   {width:4096px;      /* 容納全部大圖的區塊   */
               height:575px; 
               position:relative;}/* 使用相對定位         */
    </style>
<script src="js/index.js"></script>
	</head>
	<body>
<nav class="navbar navbar-inverse " role="navigation" ><!-------改導覽列>
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" >
       <li><a href="index.php">首頁</a></li>
       
      <li><a href="buycard.php">購物車系統</a></li>
      
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他景點 <b class="caret"></b></a><!---景點連結管理-->
          <ul class="dropdown-menu" >
            <li><a href=></a></li>
            <li><a href="小專2.1.php">薩爾布魯根</a></li>
            <li><a href="index2.php">奧地利</a></li>
            <li><a href="紐倫堡.php">紐倫堡</a></li>
            <li><a href="薩克森州.php">薩克森州</a></li>
          </ul>
        </li>
      </ul>
        
      <form class="navbar-form navbar-left" action="http://www.google.com/search" method="get" role="search" >
        <div class="form-group">
          <input type="text" class="form-control" name="q"  placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" input type="submit">搜尋</button></a>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" data-toggle="dropdown"><?php echo 會員：. $sUserName . $Root ?> &nbsp&nbsp&nbsp 功能表<b class="caret"></b></a>
        
           <ul class="dropdown-menu">
             <?php if ($sUserName == "Guest"): ?>
          <li><a href="login.php">登入</a></li><!-- /.修改登入下拉式選單 -->
            <li><a href="member.php">會員中心</a></li>
            <li><a href="login2.php">註冊</a></li>
            <li><a href="index.php">回首頁</a></li>
            <li><a href="root/login.php">管理登入</a></li>
            <?php else: ?>
            <li><a href="member.php">會員中心</a></li>
            <li><a href="index.php">回首頁</a></li>
            <li><a href="root/member.php">管理</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">登出</a></li>
            <?php endif; ?>
          </ul>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1>旅遊景點介紹</h1>
			<div class="more">
				<ul id="sb-examples">
			</ul>
			
			<div id="thumbs" align="center">
   <img class="small" src="images/1.jpg">
   <img class="small" src="images/8.jpg">
  <img class="small" src="images/17.jpg">
   <img class="small" src="images/22.jpg">
   
   
   <div id="viewer"> <!-- 限制顯示寬度的區塊 -->
    <div id="all">
    <!-- 用來容納全部大圖的區塊 -->
</div>
</div>
<div>
    <h3>以上是景點介紹<h3>
</div>

			<p class="info"><strong>測試區</strong></p>
		</div>



		<script src="jquery.js"></script>
		<script src="js/jquery.slicebox.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>