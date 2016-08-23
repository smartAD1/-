<?php session_start(); ?>
<?php 

if (isset($_SESSION["username"]))
  $sUserName = $_SESSION["username"];
else 
  $sUserName = "Guest";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<link href="css/bootstrap.min.css" rel="stylesheet">
        <title>小專題</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		
		<meta name="author" content="Pedro Botelho for Codrops" />
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="css/demo.css" />
		<link rel="stylesheet" href="css/slicebox.css" />
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/init.css" />
		<script src="js/modernizr.custom.46884.js"></script>

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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他景點 <b class="caret"></b></a>
          <ul class="dropdown-menu" >
            <li><a href=></a></li>
            <li><a href="小專2.1.php">薩爾布魯根</a></li>
            <li><a href="index2.php">奧地利景點</a></li>
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
        <li><a href="#"></a></li>
        <li class="dropdown">
        <a href="#" data-toggle="dropdown"><?php echo 會員：. $sUserName ?>&nbsp&nbsp&nbsp 功能表<b class="caret"></b></a>
        <ul class="dropdown-menu">
             <?php if ($sUserName == "Guest"): ?>
            <li><a href="login.php">登入</a></li>
            <li><a href="member.php">會員中心</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">登出</a></li>
            <?php else: ?>
            <li><a href="member.php">會員中心</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">登出</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1>奧地利</h1>
			<div class="more">
				<ul id="sb-examples">
				
					
				</ul>
			</div>

			<div id="A1" class="A1">
				<h3><strong>奧地利，是一個位在於歐洲中部的內陸國家。
				與多國接壤，東面是匈牙利和斯洛伐克，南面是義大利和斯洛維尼亞，<br>西面是列支敦斯登和瑞士，北面是德國和捷克。
				首都兼最大城市是維也納，人口超過170萬。
				國土面積83,855平方公里（32,377平方英里），同時因阿爾卑斯山存在的緣故，奧地利成爲了一個山地國，
				只有32%的國土海拔低於500公尺（1,600英尺），最高點海拔3,798公尺（12,461英尺）。
				奧地利曾是統治中歐650年哈布斯堡王朝的核心部份。</strong></h3>
			</div>
			

			<div class="wrapper" ><!-- 照片 -->

	
			<ul id="sb-slider" class="sb-slider">
					<li>
						<img src="images/8.jpg"/></a>
							<div class="sb-description" >
							<h3>St.Bartholomä</h3>
						</div>
					</li>
					<li>
						<img src="images/9.jpg"/></a>
						<div class="sb-description" >
							<h3>Hallstatt</h3>
						</div>
					</li>
					<li>
						<img src="images/10.jpg"/></a>
						<div class="sb-description" >
							<h3>Hallstatt</h3>
						</div>
								</li>
					<li>
						<img src="images/11.jpg"/></a>
						<div class="sb-description" >
							<h3>Salzburg</h3>
						</div>
					</li>
					<li>
						<img src="images/12.jpg"/></a>
						<div class="sb-description" >
							<h3>Salzburg</h3>
						</div>
					</li>
					<li>
						<img src="images/13.jpg"/></a>
						<div class="sb-description" >
							<h3>Salzburg</h3>
						</div>
					</li>
					<li>
					<img src="images/14.jpg"/></a>
					<div class="sb-description" >
							<h3>Salzach</h3>
						</div>
					</li>
				</ul>
		
      	<div id="nav-arrows" class="nav-arrows">
			
			

				<div id="nav-options" class="nav-options">
					<span id="navPlay">Play</span>
					<span id="navPause">Pause</span>
				</div>

				</div>

			</div><!-- 照片 -->
		
			<p class="info"><strong>測試區</strong></p>
		</div>

	
		<script src="jquery.js"></script>
		<script src="js/jquery.slicebox.js"></script>
		<script src="js/Slicebox2.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>	




