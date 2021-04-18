<?php
    $path = '../../';
    $page = 'Hook';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>BASIC UNIX</h1>
    <h2>Miscellaneous Commands</h2>

<h3>Login</h3>
<p>In order to start up Unix, the user needs to access a terminal for it. 
On a Windows machine, click the Windows key and R key simultaneously. 
This should open a prompt. From there, type "cmd" and click on run. 
On a Mac, click on the magnifier glass at the top right of the screen. 
It should open a search prompt, where you should type in “Terminal”.
This pulls up the Terminal application, where you can type commands.
</p>

<h3>rwx</h3>  
<p>"rwx" is used to set permissions for files and directories. 
"R" stands for read, or who can read the file. 
This should always be set by default. 
"W" stands for write, or who can write into the file. 
Finally, "X" stands for execute, for who can run the file. 
In Unix, these are represented with numbers, 0 through 7. 
If the file has a 0 next to it, it means there are no permissions. 
A "1" means it can be executed. 
A "2" means it can be written in. 
A "3" means it can be written in and executed. 
A "4" means it can be read. A 5 means it can be read and executed. 
A "6" means it can be read and written in. 
Finally, a "7" means it can be read, written in, and executed. </p>

<h3>man command</h3> 
<p>The "man" command is used to bring up a manual for any command. 
This is extremely useful for when the user needs to search up what a specific command does, or just forget what does what.</p> 

<h3>whoami</h3> 
<p>The "whoami" command simply just shows the user who they are currently logged in as in the terminal. 
It can be useful if there are multiple people who log into and use the computer. </p>

<h3>ls</h3>  
<p>The "ls" command is used to show the user all the directories and files that the user can go to. </p>
</div>

<?php
    include $path.'assets/php/footer.php';
?>