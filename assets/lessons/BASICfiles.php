<?php
    $path = '../../';
    $page = 'Files';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>BASIC UNIX</h1>
    <h2>Files</h2>
<h3>cat</h3> 
<p>The "cat" command is used to read off the contents of the file to the user. 
Simply inputting "cat" followed by the file name will read the file and provide the user with its contents.</p>

<h3>cp</h3> 
<p>The "cp" command is used to copy files. 
There are some conditions to this, however. 
If it is in the same directory, the copied file will need to have a different name, but the contents can still be the same. 
If the file is going to a different directory, it can be either have a different name or the same name. 
Learn more about directories in the next lesson.</p>

<h3>mv</h3> 
<p>The "mv" command is used to rename a file. 
The way it works is that it creates a new file with the new name that you have provided, moves all the content from that old file onto the new one, then deletes the old file. 
That move of content is why is it "mv" instead of one that is more related to renaming. 
The way to do this is: "mv oldfile newfile" , replacing "oldfile" with the file you wish to be replaced and replacing "newfile" with the file you wish to rename it to.  

<h3>rm</h3> 
<p>The "rm" command is used to remove a file.</p> 

<h3>vi</h3>
<p>The "vi" command is used to view a file.</p>
</div>

<?php
    include $path.'assets/php/footer.php';
?>