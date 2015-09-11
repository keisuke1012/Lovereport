<?php
  

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Love Report</title>
    <link rel='stylesheet' href='public/stylesheets/home.css' />
    <link rel="shortcut icon" type="images/png" href="public/images/logo.png">
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
  </head>
  <body>
    <div class="wrapper">
      <nav class = "navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <img class="nav-pic" src="public/images/logo3.png">

          <!--トグルボランの設置-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-content">
          <!--リンクのリスト　メニューリスト-->
          <ul class="nav navbar-nav">
            <li><a href="/"><strong>Home</strong></a></li>
            <li><a href="request.php"><strong>Create Request</strong></a></li>
            <li><a href="https://www.facebook.com/"><strong>FaceBook</strong></a></li> 
          </ul>
          <!--検索フォーム-->
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter Here...">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </form>
        </div>
      </nav>
      <header class="jumbotron">
        <div class="info-container">
          <h1>Find Your Partner.</h1>
          <p> &nbsp;&nbsp;&nbsp;&nbsp;Want a &nbsp;<strong>PARTNER</strong>&nbsp; or in need of &nbsp;<strong>HELP</strong> ? &nbsp;Why not utilize this site to fulfill your needs. All you need to do is complete an easy form to make a request!</p>
          <p><a href="request.php" class="btn btn-primary btn-lg" role="button">Make Your Request &raquo;</a></p>
        </div>
          <img class="head-pic" src="public/images/logo3.png">
      </header>
      <div class="container main-content">
        <div class="row">
          <div class="col-md-9 content-area">
            <div class="main-name">
              <strong>Newly Arrived</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="boxContentWrap btnNew" style="display: block;">
              <ul>

                <li class="boxItem clearfix">
                  <div class="boxItemPicture">
                    <img class="icon-img" src="">
                      <p class="name"><?php echo $name ?></p>
                  </div>
                  <div class="boxItemContent">
                    <!--<h2 class="req-ttl"> <a href="/request/detail/<?php $id ?>"><?php echo $subject ?></a>
                    </h2>-->
                    <h2 class="req-ttl"> <a href="req-data.php"><?php echo $subject ?></a>
                    </h2>
                  </div>
                  <div class="req-dtl">
                    <p class="txt">
                      <?php echo $detail ?>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div><!--/.content-area-->
          <div class="col-md-3 sidebar">
            <aside>
              <h4><strong>Top Supporter's Ranking</strong></h4>
              <ul class="list-unstyled">
                <li><strong>No.1</strong></li>
                  <img class="icon-img" src="public/images/kevin.png">
                  <p class="user-name">ケビン<p>
                <li><strong>No.2</strong></li>
                  <img class="icon-img" src="public/images/kevin6.png">
                  <p class="user-name">ケビン<p>
                <li><strong>No.3</strong></li>
                  <img class="icon-img" src="public/images/kevin3.png">
                  <p class="user-name">ケビン<p>
              </ul>
            </aside>
            <aside>
              <h4><strong>Popular User Ranking</strong></h4>
              <ul class="list-unstyled">
                <li>No.1</li>
                  <img class="icon-img" src="public/images/kevin2.png">
                  <p class="user-name">ケビン<p>
                <li>No.2</li>
                  <img class="icon-img" src="public/images/kevin5.png">
                  <p class="user-name">ケビン<p>
                <li>No.3</li>
                  <img class="icon-img" src="public/images/kevin4.png">
                  <p class="user-name">ケビン<p>
              </ul>
            </aside>

          </div><!--/.sidebar-->
        </div>
      </div><!--/.main-content-->
      <footer class="container-fluid">
          <small>logo graphic by <a href="http://www.freepik.com/">Freepik</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a></small>
        </footer>
    </div>
  </body>
</html>
