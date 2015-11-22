<?PHP
//読み込むファイル名の指定
$file_name = "file.txt";
//ファイルポインタを開く
$fp = fopen( $file_name, 'r');

//データが無くなるまでファイル(CSV)を1行ずつ読み込む
while($ret_csv = fgetcsv($fp, 256)){
//読み込んだ行(CSV)を表示する
for($i = 0; $i < count( $ret_csv ); ++$i ) {
    echo("[" .$ret_csv[$i]. "]");
    }
  echo("<br />");
  }

  //開いたファイルポインタを閉じる
  fclose( $fp );
?>
