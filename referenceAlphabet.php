<?php
    $path = './';
    $page = 'Home Page';
    include $path.'assets/php/header.php';
?>

<div class="commands">
    <h1>Reference</h1>
</p>Here are a list of s that are useful for web development!
Click on any one to learn more.</p>
<p><a class="sortBy" href="referenceAlphabet.php">Sort alphabetically</a> | <a class="sortBy" href="#">Sort by category</a></p>
    <div class="referenceGrid">
        <p><a href="#">$</a></p>
        <p><a href="#">cat</a></p>
        <p><a href="#">cd</a></p>
        <p><a href="#">chmod</a></p>
        <p><a href="#">clone</a></p>
        <p><a href="#">cp</a></p>
        <p><a href="#">echo</a></p>
        <p><a href="#">gunzip</a></p>
        <p><a href="#">gzcat</a></p>
        <p><a href="#">gzip</a></p>
        <p><a href="#">ls</a></p>
        <p><a href="#">man</a></p>
        <p><a href="#">md</a></p>
        <p><a href="#">mkdir</a></p>
        <p><a href="#">mv</a></p>
        <p><a href="#">open</a></p>
        <p><a href="#">ping</a></p>
        <p><a href="#">pwd</a></p>
        <p><a href="#">rm</a></p>
        <p><a href="#">rwx</a></p>
        <p><a href="#">touch</a></p>
        <p><a href="#">vi</a></p>
        <p><a href="#">vi-r</a></p>
        <p><a href="#">view</a></p>
        <p><a href="#">wc</a></p>
        <p><a href="#">whoami</a></p>
    </div>
</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Quick little fix to get footer to stay at bottom. 
    // This solution messes with other pages so it's temporary
    document.getElementsByTagName("footer")[0].style.position = "fixed";
</script>