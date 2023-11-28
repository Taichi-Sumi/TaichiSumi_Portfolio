<?php
$zip = new ZipArchive;
  if ($zip->open('wordpress.zip') === TRUE) {
    $zip->extractTo(__DIR__);
    $zip->close();
    echo '成功';
  } else {
    echo '失敗';
  }
  ?>