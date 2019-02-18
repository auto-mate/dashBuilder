<?php 
/* 'firstTest.html' to be replaced with variable */
$fileContents = file_get_contents( 'userfiles/' . 'firstTest.html' );

preg_match( "/<\/head>\\s*<body>/", $fileContents, $x, PREG_OFFSET_CAPTURE );


$out = substr( $fileContents, $x[0][1], strlen( $fileContents ) );
$out = str_replace( "</head>", "", $out );
$out = str_replace( "</html>", "", $out );
$out = str_replace( "<body>",  "", $out );
$out = str_replace( "</body>", "", $out );

$out = trim($out);

echo $out;

?>
