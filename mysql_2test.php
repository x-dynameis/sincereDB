<?php
$host = 'localhost';
$username = 'ozaki';
$passwd = 'gargoyl';
$dbname = 'sincere';
// 接続
 $mysqli = new mysqli($host, $username, $passwd, $dbname);

 // 接続エラーの確認
 if ($mysqli->connect_errno) {
     printf("接続に失敗しました: %s\n", $mysqli->connect_error);
         exit();
         }


                             // 結果セットを返すクエリの実行（SELECTクエリ）
                             if ($result = $mysqli->query("SELECT c_name FROM tbl_customer LIMIT 10")) {

                                 // 結果の出力
                                     while ($event = $result->fetch_object()) {
                                             printf("%s\n", $event->c_name);
                                                 }

                                                     // 結果セットの開放
                                                         $result->close();
                                                         }

                                                         // 接続を閉じる
                                                         $mysqli->close();

?>
