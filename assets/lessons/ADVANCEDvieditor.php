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
<p>vi is a used to edit files and lines in that file. 
Using vi followed by the name of file will either create the file or open the existing file with that name. 
When the user starts up vi, the interface of the terminal will change entirely. 
Typing anything here will create the file with exactly what you type. 
A way to get to the next line is by hitting the enter/return key. 
In order to exit out of vi, hit the escape key twice. One a user has, 
you can either quit it by typing in :q. If a user wishes to save the progress, 
they made in vi, they will need to type in :w. And if a user wishes to exit without saving, 
they will need to type in :q!.  </p>  

<h3>vi –R / view</h3> 
<p>The vi –R and the view commands are used to open a file and set its permission to read only or to the number 4. 
Using this command will print what the user wrote using vi in the file. 
There is not a way for a machine to be able to use wc on a vi file.  

</p> 
 
</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Fix to make footer stay on bottom for pages with little content
    document.getElementsByTagName("footer")[0].style.marginTop = "30%";
</script>