<?php
    $path = '../../';
    $page = 'Coding';
    include $path.'assets/php/header.php';
?>
<?php
    include $path.'assets/php/sideBar.php';
?>

<div class="lessonContent">
    <h1>ADVANCED UNIX</h1>
    <h2>Coding</h2>
<h3>$</h3>
<p>The "$"" is called the command prompt. 
    This implies that a command can be inputted and executed when it is present at the start.</p>

<h3>echo</h3> 
<p>The "echo" command is used to print out lines or inputs that the user feeds it. 
    This works with any strings or variables that the user gives it. 
    For example, inputting "$ echo ;'Hello'" would print the word "Hello" on the next line.</p>  

<h3>ping</h3> 
<p>The "ping" command is usually used to check if you are connected to the internet. 
    Usually, a user will ping their own ip address and check to see if they get a ping back in return. 
    This also works with other ip addresses or domains such as Google.com. </p>
 
</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Quick little fix to get footer to stay at bottom. 
    // This solution messes with other pages so it's temporary
    document.getElementsByTagName("footer")[0].style.position = "fixed";
</script>