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
<h1>薩爾布魯根</h1>
			<div class="more">
				<ul id="sb-examples">
				
					
				</ul>
			</div>
	<div id="A1" class="A1">
			<h3><strong>薩爾布魯根曾經是一個巨大煤層的工業和運輸中心。
				這裡的工廠生產鐵和鋼、糖、啤酒、陶器、光學儀器、機器和建築材料。
				但是，在過去的幾十年中薩爾蘭邦的工業重要地位逐漸下降，
				因為越來越多的德國公司開始從工資低下的國家直接進口廉價的煤。
                薩爾布魯根具有歷史意義的建築包括：橫跨薩爾蘭河的石橋（1546年）、
                哥德式教堂St Arnual和建於18世紀的薩爾布魯根城堡等。
                1815年，薩爾布魯根被納入普魯士的控制。
                在二十世紀的兩個時期（1919年至1935年、1945年至1957年），它成為法國轄下的一部分。
                包含薩爾布魯根在內的薩爾地區於1957年1月1日起回歸德國版圖。</strong></h3>
			</div>
		
			
			<div
			<div class="wrapper"><!-- 照片 -->

		
			<ul id="sb-slider" class="sb-slider">
					<li>
						<img src="images/1.jpg"/></a>
							<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
					</li>
					<li>
						<img src="images/2.jpg"/></a>
						<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
					</li>
					<li>
						<img src="images/3.jpg"/></a>
						<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
								</li>
					<li>
						<img src="images/4.jpg"/></a>
						<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
					</li>
					<li>
						<img src="images/5.jpg"/></a>
						<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
					</li>
					<li>
						<img src="images/6.jpg"/></a>
						<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
					</li>
					<li>
					<img src="images/7.jpg"/></a>
					<div class="sb-description" >
							<h3>Saarbrücken</h3>
						</div>
					</li>
				</ul>
				
      <div id="shadow" class="shadow"></div>
			<div id="nav-arrows" class="nav-arrows">
					<a href>Next</a>
					<a href>Previous</a>
				</div>
					<div id="nav-options" class="nav-options">
					<span id="navPlay">Play</span>
					<span id="navPause">Pause</span>
					</div>
	
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div><!-- 照片 -->
		
			<p class="info"><strong>測試區</strong></p>
		</div>

	
		<script src="jquery.js"></script>
		<script src="js/jquery.slicebox.js"></script>
		<script src="js/Slicebox.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>	




