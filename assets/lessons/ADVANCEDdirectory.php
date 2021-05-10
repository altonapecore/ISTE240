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
<p>The clone command will create a copy of a repository and put it into the directory. 
This is a git command. A repository would usually be a link to a path, starting from the domain. </p> 

<h3>open</h3> 
<p>The open command will open the directory inside of your file finder. 
This is another git command. Using this will require permission from the terminal to access your file explorer, 
but it will save everything inside of a specific folder. </p> 

</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Fix to make footer stay on bottom for pages with little content
    document.getElementsByTagName("footer")[0].style.marginTop = "30%";
</script>