<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>David Bengoa Rocandio</title>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:bolditalic|Ubuntu:normal,italic' rel='stylesheet' type='text/css'>
<?php emerge("css"); ?>
        <link href="<?php statico("css/global.css"); ?>" rel="stylesheet" />
    </head>
    <body>
<?php emerge("content");?>
    </body>
</html>
<?php
    foreach ($strs as $k=>$v){
        echo "\"$k\"=>\"$v\",\n";
    }
?>
