

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

  <nav class="navbar navbar-inverse " role="navigation">
    <!-------改導覽列>
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">首頁</a></li>
        <li><a href="buycard.php">購物車系統</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他景點 <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href=></a>
            </li>
            <li><a href="小專2.1.php">薩爾布魯根</a></li>
            <li><a href="index2.php">奧地利景點</a></li>
            <li><a href="紐倫堡.php">紐倫堡</a></li>
            <li><a href="薩克森州.php">薩克森州</a></li>
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
        <li>
          <a href="#"></a>
        </li>
        <li class="dropdown">
          <a href="#" data-icon="home" data-toggle="dropdown">功能表<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="login.php">登入</a></li>
            <li><a href="member.php">會員中心</a></li>
            <li class="divider"></li>
            <li><a href="#">登出</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>



  <form name="form" method="post" action="register_finish.php">
    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
      <tr>
        <td colspan="2" align="center"></td </tr>
        <tr>
          <td width="80" align="center" valign="baseline">帳號：</td>
          <td valign="baseline"><input type="text" name="username" /></td>
        </tr>
        <td width="80" align="center" valign="baseline">密碼：</td>
        <td valign="baseline"><input type="password" name="pw"/></td>
      </tr>
      <td width="80" align="center" valign="baseline">電話：</td>
      <td valign="baseline"><input type="text" name="telephone" /></td>
      </tr>
     <!-- <td width="80" align="center" valign="baseline">性別</td>-->
     <!-- <td valign="baseline"><select name="sltOnOff" id="sltOnOff" data-role="slider">-->
					<!--<option value="0">男</option>-->
					<!--<option value="1">女</option></td>-->
     <!-- 		</select>-->



        <tr>

          <td colspan="2" align="center">

            <input type="reset" name="btnReset" id="btnReset" value="重設" />
            <input type="submit" name="registered" id="registered" value="註冊" />
            <input type="submit" name="button" value="確定" />

          </td>
        </tr>
    </table>
  </form>



  <script src="jquery.js"></script>
  <script src="js/jquery.slicebox.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
