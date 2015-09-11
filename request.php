<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Love Report</title>
    <link rel='stylesheet' href='public/stylesheets/request.css' />
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
            <button type="submit" class="btn btn-default button">Search</button>
          </form>
        </div>
      </nav>
      <header class="jumbotron">
        <div class="info-container">
          <h1>Make Your Request.</h1>
          <p> &nbsp;&nbsp;&nbsp;&nbsp;Here, you can complete the  &nbsp;<strong> FORM </strong> &nbsp; to make a <strong>REQUEST</strong> to help you out! An easy login to  &nbsp;<strong>FACEBOOK</strong> will automatically receive the information needed. </p>
        </div>
          <img class="head-pic" src="public/images/logo3.png">
      </header>
      <div class="container main-content">
        <div class="main-name">
          <strong>Request Form</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="request-container">

          <form action="/edit.php" method="get" enctype="multipart/form-data">
            <div class="user-name form-group">
              <label for="exampleInputSubject" ><strong>&nbsp;<&nbsp;Your Name&nbsp;>&nbsp;</strong></label>
               <input class="form-control name-edit" id="exampleInputSubject" name="name-edit" placeholder="Enter Here..." required>
            </div>
            <div class="user-major form-group">
              <label for="exampleInputSubject" ><strong>&nbsp;<&nbsp;Your Major&nbsp;>&nbsp;</strong></label>
               <input class="form-control major-edit" id="exampleInputSubject" name="major-edit" placeholder="Enter Here..." required>
            </div>
            <div class="user-img form-group">
              <label for="exampleInputSubject" ><strong>&nbsp;<&nbsp;Your Picture&nbsp;>&nbsp;</strong></label>
               <input class="btn-default myimage" name="my_img" type="file" id="my_img" size="50" required>
            </div>
            <div class="req-title form-group">
              <label for="exampleInputSubject" ><strong>&nbsp;<&nbsp;Suject Name&nbsp;>&nbsp;</strong></label>
               <input class="form-control title-edit" id="exampleInputSubject" name="title-edit" placeholder="Enter Here..." required>
            </div>
            <div class="req-detail from-group">
              <label for="exampleInputDetail"><strong>&nbsp;<&nbsp;Request Detail&nbsp;>&nbsp;</strong></label>
                <textarea class="form-control detail-edit" id="exapmleInputDetail" name="detail-edit" rows="10" placeholder="Enter Here..." required></textarea>
            </div>    
              <button type="submit" class="btn-enter btn btn-default btn-lg">Submit</button>

          </form>
          <?php
          $url = "localhost";
          $user = "root";
          $pass = "root";
          $db = "images";
           
          $link = mysql_connect( $url, $user, $pass ) or die("MySQLへの接続に失敗しました。");
          $sdb = mysql_select_db( $db, $link ) or die("データベースの選択に失敗しました。");
          $sql = "SELECT * FROM images.posts";
          $result = mysql_query( $sql, $link ) or die("クエリの送信に失敗しました。");
          $rows = mysql_num_rows( $result );
          mysql_close( $link ) or die("MySQL切断に失敗しました。");
           
          if($rows){
              while($row = mysql_fetch_array($result)) {
                  echo '<img src="./create_image.php?id='.$row["ID"].'" />';
              }
          }
          ?>
        </div>
      </div>
      <footer class="container-fluid">
        <small>logo graphic by <a href="http://www.freepik.com/">Freepik</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a></small>
      </footer>
    </div>
  </body>
</html>