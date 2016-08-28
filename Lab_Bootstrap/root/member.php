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
  <script src="../jquery.js"></script>
  <link rel="stylesheet" href="../css/demo.css" />
  <link rel="stylesheet" href="../css/slicebox.css" />
  <link rel="stylesheet" href="../css/custom.css" />
  <link rel="stylesheet" href="../css/init.css" />
  <script src="../js/modernizr.custom.46884.js"></script>

</head>

<body>

  <nav class="navbar navbar-inverse " role="navigation">
    <!-------改導覽列>
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <<li><a href="../index.php">首頁</a></li>

          <li><a href="../buycard.php">購物車系統</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他景點 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href=></a>
              </li>
              <li><a href="../小專2.1.php">薩爾布魯根</a></li>
              <li><a href="../index2.php">奧地利</a></li>
              <li><a href="../紐倫堡.php">紐倫堡</a></li>
              <li><a href="../薩克森州.php">薩克森州</a></li>
            </ul>
          </li>
      </ul>

      <form class="navbar-form navbar-left" action="http://www.google.com/search" method="get" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="q" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" input type="submit">搜尋</button></a>
      </form>

      <ul class="nav navbar-nav navbar-right">
          <a href="#"></a>
        </li>
        <li class="dropdown">
          <a href="#" data-icon="home" data-toggle="dropdown">
            <?php echo 會員：. $sUserName ?>&nbsp&nbsp&nbsp 功能表<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <?php if ($sUserName == "Guest"): ?>
            <li><a href="../login.php">登入</a></li>
            <li><a href="../member.php">會員中心</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php">登出</a></li>
            <?php else: ?>
            <li><a href="../member.php">會員中心</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php">登出</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php
include("mysqconnectroot.php");


//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['Root'] != null)
{
        echo '<a href="update.php"><h3>修改會員資料</h3></a>';
        echo '<a href="login2.php"><h3>新增會員資料</h3></a>';
        echo '<a href="delete.php"><h3>刪除會員資料</h3></a>';
        echo '<a href="logout.php"><h3>登出</h3></a>  <br><br>';
    
        //將資料庫裡的所有會員資料顯示在畫面上
        $sql = "SELECT * FROM member_table";
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {
                 echo "$row[1] - 名字(帳號)：$row[2] " . 
                 "電話：$row[3]<br>";
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>



    <script src="../jquery.js"></script>
    <script src="../js/jquery.slicebox.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>