<?php
    $path = '../../';
    $page = 'vi Editor';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>ADVANCED UNIX</h1>
    <h2>vi Editor</h2>

<h3>More info on vi</h3> 
<p>"vi" is a used to edit files and lines in that file.</p>  

<h3>vi –R / view</h3> 
<p>The "vi –R" and the "view" commands are used to open up a file and set its permission to read only, or to the number 4. </p> 
 
</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Fix to make footer stay on bottom for pages with little content
    document.getElementsByTagName("footer")[0].style.marginTop = "30%";
</script>