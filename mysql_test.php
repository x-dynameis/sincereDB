<?php
$dsn = 'mysql:dbname=sincere;host=localhost';
$username = 'ozaki';
$passwd = 'gargoyl';

if(ture){
	var_dump($aaa);
	true
}


try {
	    // 接続
     $dbh = new PDO($dsn, $username, $passwd);
  // 結果セットを返すクエリの実行（SELECTクエリ）
if ($stmt = $dbh->query("SELECT c_name FROM tbl_customer LIMIT 10")) {
// 結果の出力
while ($event = $stmt->fetch()) {
printf("%s\n", $event['c_name']);
}
}
} catch (PDOException $e) {
echo 'エラーが発生しました: ' . $e->getMessage();
}
// 接続を閉じる
$dbh = null;

?>
