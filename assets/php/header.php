<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page ?></title>
    <link rel="stylesheet" href="<?php echo $path ?>assets/css/mainStyles.css">
    <script src="<?php echo $path ?>assets/script.js"></script>
</head>
<body onload = "changeLink()">
    <header>
        <a href="http://solace.ist.rit.edu/~iste240t44/"><img src="<?php echo $path ?>assets/img/logo.png" alt="Logo"></a>
    <div id="navBar">
        <div class="flexContainer">
            <!--Honestly not sure if home logo is 100% necessary-->
            <div class=flexNav><a href="http://solace.ist.rit.edu/~iste240t44/" id="active">Home</a></div>
            <div class=flexNav><a href="http://solace.ist.rit.edu/~iste240t44/assets/lessons/INTROkernel.php">Learn</a></div>
            <div class=flexNav><a href="http://solace.ist.rit.edu/~iste240t44/referenceAlphabet.php">Reference</a><div>
        </div>
        <!--Dan suggested moving Our Team to footer so we can do that-->
    </div>
</div>
</div>
    </header>