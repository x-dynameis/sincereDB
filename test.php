<?php

echo "hello world!<br/>";
$filename="./sincere.ini";
if (!file_exists($filename)){
	die("sincere.iniファイルが存在しません");
}else{
	echo"ファイルがありました";

}
class MySQL{

//===========================================
//MySQLクラス
//===========================================
	var $m_Con;
	var $m_HostName = "";
	var $m_UserName = "";
	var $m_Password = "";
	var $m_Database = "";
	var $m_Rows=0;
	//コンストラクタ
	function MySQL{
	$filename= "./sincere.ini";
	if(!file_exists($filename)){
		die("sincere.iniファイルが存在しません");
	}else{
		$fp = fopen($filename,"r");
		if (!$fp){
			die("sincere.iniファイルが存在しません");
		}else{
			$this->m_HostName=trim(fgets($fp));
			$this->m_UserName=trim(fgets($fp));
			$this->m_Password=trim(fgets($fp));
			$this->m_Database=trim(fgets($fp));

		}
		fclose($fp);
	}
	//MySQLへ接続

	}//function
}//MySQL

?>
