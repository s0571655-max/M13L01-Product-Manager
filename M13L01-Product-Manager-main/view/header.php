<?php
    $pathInPieces = explode('/', dirname($_SERVER['PHP_SELF']));
    if ($pathInPieces >= 3)
        $base_url = "http://".$_SERVER['HTTP_HOST']."/".$pathInPieces[1]."/".$pathInPieces[2]."/";
    else
        $base_url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css"
          href="<?php echo $base_url?>/main.css">
</head>

<!-- the body section -->
<body>
<header><h1>My Guitar Shop</h1></header>