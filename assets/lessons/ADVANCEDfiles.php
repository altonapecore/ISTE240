<?php
    $path = '../../';
    $page = 'Advanced Files';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>ADVANCED UNIX</h1>
    <h2>Advanced Files</h2>
<h3>touch</h3> 
<p>The "touch" command is another way of making a file in a directory.</p>

<h3>wc</h3> 
<p>The "wc" command is used to find the number of lines, characters, and words, in that specific order.</p>

<h3>chmod</h3>  
<p>The "chmod" command is used to change a file’s permissions.</p>

<h3>gzip</h3> 
<p>The "gzip" command is used to compress down a file and turn it into a .gz file, implying that it is zipped and compressed.</p>

<h3>gzcat</h3> 
<p>The "gzcat" command is used to check the contents of a zipped file.</p>

<h3>gunzip</h3>
<p>The "gunzip" command is used to unzip a file, changing it back to the original file type instead of a .gz. The file is thus restored back to the number of bytes it was before the compression.</p>
</div>

<?php
    include $path.'assets/php/footer.php';
?>