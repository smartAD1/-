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
<script type="text/javascript">

</script>
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
<h1>紐倫堡</h1>
			<div class="more">
				<ul id="sb-examples">
				
					
				</ul>
			</div>

				<div id="A1" class="A1" >
				<h3><strong>紐倫堡德國巴伐利亞邦中法蘭克尼亞行政區的中心城市
				，巴伐利亞邦的第二大城市，僅次於首府慕尼黑
				，是世界著名大企業集團西門子公司的誕生地。
				紐倫堡與它的兩座姊妹城市福爾特和愛爾朗根相鄰極近，城區相連，常被稱作「大紐倫堡地區」。
				第二次世界大戰結束之後曾在此舉行針對納粹德國戰犯的紐倫堡審判。</strong></h3>
			</div>
			

			<div class="wrapper" ><!-- 照片 -->

		
			<ul id="sb-slider" class="sb-slider">
					<li>
						<img src="images/15.jpg"/></a>
							<div class="sb-description" >
							<h3>St.Bartholomä</h3>
						</div>
					</li>
					<li>
						<img src="images/16.jpg"/></a>
						<div class="sb-description" >
							<h3>Hallstatt</h3>
						</div>
					</li>
					<li>
						<img src="images/17.jpg"/></a>
						<div class="sb-description" >
							<h3>Hallstatt</h3>
						</div>
								</li>
					<li>
						<img src="images/18.jpg"/></a>
						<div class="sb-description" >
							<h3>Salzburg</h3>
						</div>
					</li>
					<li>
						<img src="images/19.jpg"/></a>
						<div class="sb-description" >
							<h3>Salzburg</h3>
						</div>
					</li>
					<li>
						<img src="images/20.jpg"/></a>
						<div class="sb-description" >
							<h3>Salzburg</h3>
						</div>
					</li>
					<li>
					<img src="images/21.jpg"/></a>
					<div class="sb-description" >
							<h3>Salzach</h3>
						</div>
					</li>
				</ul>
				
    <div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>
<div id="nav-options" class="nav-options">
					<span id="navPlay">Play</span>
					<span id="navPause">Pause</span>
				</div>

			</div><!-- 照片 -->
	
			<p class="info"><strong>測試區</strong></p>
		</div>

	
		<script src="jquery.js"></script>
		<script src="js/jquery.slicebox.js"></script>
		<script src="js/Slicebox3.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>	




