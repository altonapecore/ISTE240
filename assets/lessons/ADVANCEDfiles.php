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
<p>The "touch" command is another way of making a file in a directory. 
The command would also provide the user with a timestamp of last modified. 
There is another command that creates another directory and it’s a single input of >. 
The advantage of using touch over this is that > doesn’t have the timestamp like touch does.  </p>

<h3>wc</h3> 
<p>
The wc command is used to find the number of lines, characters, words, and more about a file. 
Following wc, there are options for what you are looking for. To find lines, it would be –l. 
To find words, it would be –w. To find bytes, it would be –c. To find characters, it would be –m.  </p>

<h3>chmod</h3>  
<p>The chmod command is used to change the file’s permissions. 
The user would need to set the permissions using the numbers from the rwx lesson. 
The command is used by typing in cmod [file name] followed by the permission numbers 
that the user would like to assicate with them. 
When typing out the numbers, there should be no spaces in between them.  </p>

<h3>gzip</h3> 
<p>
The gzip command is used to compress down a file and turn it into a .gz file implying that it is zipped and compressed.  
This is a git command that allows the user to compress the bytes that a file takes.  </p>

<h3>gzcat</h3> 
<p>The gzcat command is used to check the contents of a zipped file. This is another git command. 
This command only works on compressed files so if a user wishes to use it, 
they need to ensure that they properly use the gzip command first.  </p>

<h3>gunzip</h3>
<p>The gunzip command is used to unzip a file, changing it back to the original file type instead of a .gz 
and thus resorting the file back to the number of bytes it was before the compression. This is a git command as well.  </p>
</div>

<?php
    include $path.'assets/php/footer.php';
?>