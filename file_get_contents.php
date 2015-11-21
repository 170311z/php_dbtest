<?php
$filename = "test.txt";          //ファイル名をここに格納
if(is_readable($filename))       //is_readable()で読み込み可能かチェックする
{
	$contents = file_get_contents($filename);
	print $contents;
}else{
	print $filename . "は読み込めません．";
}
