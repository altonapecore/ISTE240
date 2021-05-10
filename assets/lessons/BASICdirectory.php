<?php
    $path = '../../';
    $page = 'Directory';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>BASIC UNIX</h1>
    <h2>Directory</h2>
<h3>pwd</h3> 
<p>The "pwd" command is used to show the current directory that the user is in. 
It shows the root that it takes, going from the shell to the current directory.</p>

<h3>cd</h3>
<p>The "cd" command is used to allow the user to change directories. 
If a user wishes to enter another directory outside of their current directory, 
they need to go back to the previous directory to do so until there is a clear path to get to the desired directory.  
</p>

<h3>md/mkdir</h3> 
<p>The "md" or "mkdir" command is used to make a new directory. This creates a directory inside of the current directory, 
so a user should make sure that they are in the correct directory they wish to be in.</p>
</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Fix to make footer stay on bottom for pages with little content
    document.getElementsByTagName("footer")[0].style.marginTop = "20%";
</script>