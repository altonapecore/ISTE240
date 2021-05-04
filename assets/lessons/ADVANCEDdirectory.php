<?php
    $path = '../../';
    $page = 'Advanced Directory';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>ADVANCED UNIX</h1>
    <h2>Advanced Directory</h2>

<h3>clone</h3> 
<p>The "clone" command will create a copy of the directory in the current one.</p> 

<h3>open</h3> 
<p>The "open" command will open up the directory inside of your file finder. Finder for Mac,</p> 

</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Fix to make footer stay on bottom for pages with little content
    document.getElementsByTagName("footer")[0].style.marginTop = "30%";
</script>