<?php
$url = "localhost";
$user = "root";
$pass = "root";
$db = "";
 
$id = $_GET['id'];
 
$link = mysql_connect( $url, $user, $pass ) or die("MySQLへの接続に失敗しました。");
$sdb = mysql_select_db( $db, $link ) or die("データベースの選択に失敗しました。");
$sql = "SELECT * FROM images.posts WHERE ID = '".$id."'";
$result = mysql_query( $sql, $link ) or die("クエリの送信に失敗しました。");
$rows = mysql_num_rows( $result );
mysql_close( $link ) or die("MySQL切断に失敗しました。");
 
if( $rows ){
    while($row = mysql_fetch_array($result)) {
        header( "Content-Type: ".$row['mine'] );
        //echo $row['imgdat'];
    }
    //base64にエンコードする関数を定義
	function convert_img($img_data) {
	    $base64 = base64_encode($img_data);
	    $mime = 'image/jpg';
	    return 'data:'.$mime.';base64,'.$base64;
	}
}
?>