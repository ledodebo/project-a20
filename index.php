<?php

if( isset ($_GET["name"])) {
      $filename = "value.txt";
      $file = fopen( $filename, "w" );
      $filetext = fwrite( $file, $_GET["name"] );
      fclose( $file );
   } else{
      $filename = "value.txt";
$file = fopen( $filename, "r" );
$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );

echo ( "<pre>$filetext</pre>" );
   }

?>
