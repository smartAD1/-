<?php session_start(); ?>
<?php 

if (isset($_SESSION["Root"]))
  $sUserName = $_SESSION["Root"];
else 
  $sUserName = "Guest";

?>
<html lang="en">
    <head>
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
        <title>小專題</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="author" content="Pedro Botelho for Codrops" />
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="../css/demo.css" />
		<link rel="stylesheet" href="../css/slicebox.css" />
		<link rel="stylesheet" href="../css/custom.css" />
		<link rel="stylesheet" href="../css/init.css" />
		<script src="../js/modernizr.custom.46884.js"></script>

	</head>
	<body>
		
<nav class="navbar navbar-inverse " role="navigation" ><!-------改導覽列>
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav" >
       <li><a href="../index.php">首頁</a></li>
       <li><a href="../buycard.php">購物車系統</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他景點 <b class="caret"></b></a>
          <ul class="dropdown-menu" >
            <li><a href=></a></li>
            <li><a href="../小專2.1.php">薩爾布魯根</a></li>
            <li><a href="../index2.php">奧地利景點</a></li>
            <li><a href="../紐倫堡.php">紐倫堡</a></li>
            <li><a href="../薩克森州.php">薩克森州</a></li>
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
            <li><a href="../login.php">登入</a></li>
            <?php else: ?>
            <li><a href="../member.php">會員中心</a></li>
            <li><a href="root/member.php">管理</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php">登出</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../mysqconnect.php");

if($_SESSION['Root'] != null)
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['id'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM member_table where username='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"updatefinish.php\">";
        echo "帳號：<input type=\"text\" name=\"username\" value=\"$row[1]\" /> <br>";
        echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
        echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br>";

        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.php>';
}
?>
<a href="javascript:history.back()"><h3>回上一頁<h3></a>

		<script src="../jquery.js"></script>
		<script src="../js/jquery.slicebox.js"></script>
		<script src="../js/bootstrap.min.js"></script>

	</body>
</html>	
