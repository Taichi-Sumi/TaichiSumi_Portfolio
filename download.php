<?php
// // ファイルのパス
//$filepath = 'https://ja.wordpress.org/wordpress-5.4.2-ja.zip';
$c = file_get_contents('https://ja.wordpress.org/latest-ja.zip');
// // リネーム後のファイル名
// $filename = 'wordpress.zip';
 
// // ファイルタイプを指定
// header('Content-Type: application/force-download');
 
// // ファイルサイズを取得し、ダウンロードの進捗を表示
// header('Content-Length: '.filesize($filepath));
 
// // ファイルのダウンロード、リネームを指示
// header('Content-Disposition: attachment; filename="'.$filename.'"');
 
// // ファイルを読み込みダウンロードを実行
// readfile($filepath);
//copy($c, 'wordpress.zip');
file_put_contents('wordpress.zip',$c);
?>