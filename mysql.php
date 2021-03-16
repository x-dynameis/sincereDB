<?php
//MySqlクラス
class MySQL{
var $m_Con;
var $m_HostName;
var $m_UserName;
var $m_Password;
var $m_Database;
var $m_Rows =0;
//コンストラクタ------------------------------------
function MySQL{

$filename = "./sincere.ini";
$fp = fopen($filename,"r");
if(!$fp){
	die($filename . "が存在しません");
}else{
	$m_HostName = trim(fgets($fp));
	$m_UserName = trim(fgets($fp));
	$m_Password = trim(fgets($fp));
	$m_Database = trim(fgets($fp));
	
}
$m_Con = new mysqli($m_HostName,$m_UserName,$m_Password,$m_Database);
if($m_Con->connect_errno){
	printf("接続にっ杯しました%s\n",$m_Con->connect_error);
	exit();
}
//結果
if($result = $m_Con->query("select c_name from tbl_customer limit 10")){
	//結果の出力
	while($event=$result->fetch_object()){
		printf("%s\n",$event->c_name);
	}	
	//結果セットの解放
	$result->close();

}
$m_Con->close();
}//コンストラクタ----------------------------------------------------
}//MySQLクラス---------------------------
//====================
//MySQLクラス
//====================
//class MySQL{
//	//変数宣言
//	var $m_Con;
//	var $m_HostName = "";
//	var $m_UserName = "";
//	var $m_Password = "";
//	var $m_Database = "";
//	var $m_Rows = 0;
//	//コンストラクタ
//	function MySQL(){
//		$filename = "../sincere.ini";
//		if(!file_exists($filename));{
//			die("sincere.iniファイルが存在しません.");
//		}else{
//			$fp = fopen($filename,"r");
//			if(!$fp){
//				die("sincere.iniファイルが存在しません");
//			}else{
//				$this->m_HostName=trim(fgets($fp));
//				$this->m_UserName=trim(fgets($fp));
//				$this->m_Password=trim(fgets($fp));
//				$this->m_Database=trim(fgets($fp));
//			}
//			fclose($fp);
//		}
//		//MySQLへ接続
//	}
//	mySQL();
//#}
//		echo $this->m_HostName;
//		echo $this->m_UserName;
//
?>
