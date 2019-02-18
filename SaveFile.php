<?php

$pT = $_POST[ 'pageText' ];
$fN = $_POST[ 'fileName' ];


$file = fopen( "UserFiles/" . $fN . ".html", "w" ) or die( "Unable to open file!" );
fwrite( $file, $pT );


echo "Saved as ... UserFiles/".$fN.".html";

?>
