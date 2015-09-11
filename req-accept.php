<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Love Report</title>
    <link rel='stylesheet' href='public/stylesheets/req-accept.css' />
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

      <div class="basic-info container" >
        <div class="info-head"><strong>Self-Introduction Form</strong></div>
          <div class="lang-head">Programming Language</div>
          <form action="complete.php" method="get" enctype="multipart/form-data">
            <div class="checkbox">
              <label><input type="checkbox" >Java</label>
              <label><input type="checkbox" >PHP</label>
              <label><input type="checkbox" >Objective-C</label>
              <label><input type="checkbox" >C＋＋</label>
              <label><input type="checkbox" >Python</label>
              <label><input type="checkbox" >C#</label>
              <label><input type="checkbox" >Perl</label>
              <label><input type="checkbox" >Ruby</label>
              <label><input type="checkbox" >JavaScript</label>
              <label><input type="checkbox" >Scala</label>
            </div>
          <div class="form-text"> 
            <label>
              その他 <input class="form-control text" type="text" placeholder="ex.Brain****">
            </label>
          </div>
          <div class="appeal-head">Appeal Point</div>
          <div class="form-text">
            <textarea class="form-control appeal" rows="10" placeholder="Enter here..." required></textarea>
          </div>
          <div class="url-head">Your facebook URL: </div>
          <div class="form-text">
            <input class="form-control fb-url" type="text" placeholder="Paste here..." required></div>
          <button type="submit" class="send btn btn-default sub-btn">Send Message</button>
          </form>
        </div> 
        
      <footer class="container-fluid">
          <small>logo graphic by <a href="http://www.freepik.com/">Freepik</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a></small>
      </footer>
  </div>
</body>
