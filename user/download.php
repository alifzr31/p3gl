<?php
  $dir = "../admin/peta/";
  $chunksize = 10 * (1024 * 1024); /*5 MB (= 5 242 880 bytes) per one chunk of file.*/
  $filename = isset($_GET['file']) ? $_GET['file'] : "";
  if(!empty($filename)){
     $file_path = $dir.$filename;
     if(file_exists($file_path))
     {
       header("Pragma:public");
      header("Expired:0");
      header("Cache-Control:must-revalidate");
      header("Content-Control:public");
      header("Content-Description: File Transfer");
      header("Content-Type: application/octet-stream");
      header("Content-Transfer-Encoding: binary");
      header("Content-Length: ".filesize($file_path));
      header("Content-Disposition: attachment;filename=\"".basename($file_path)."\"");
      $file = @fopen($file_path, "rb");
         while(!feof($file)) {
         print(@fread($file, $chunksize));
         ob_flush();
         flush();
      }
      exit();
      
    }
    else echo "File <b>$filename</b> does not exist!";
 }
 ?>