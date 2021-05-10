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
<h3>$ - Start of Command Prompt</h3>
<p>The "$"" is called the command prompt. 
    When inputting any commands into the terminal, you can see that it might have a $ or a # symbol before you start typing. 
	The $ symbol means that the user is a normal user. The # symbol means that the user is the system administrator. 
	A user can set variables, but variables cannot do calculations, thus if a user attempts to, 
	it will print out the exact thing written inside of the variable.  </p>

<h3>echo</h3> 
<p>
The echo command is used to print out lines or inputs that the user feed it. 
This works with strings or variables that the user gives it. 
For example, inputting $echo “Hello” with provide the user with the word Hello on the next line.  </p>  

<h3>ping</h3> 
<p>
The ping command is usually used to check if you are connected to the internet. 
Usually, a user will ping their own ip address and check to see if they get a ping back in return. 
This also works with other ip addresses or domains such as Google.com. 
 </p>
 
</div>

<?php
    include $path.'assets/php/footer.php';
?>
<script>
    // Fix to make footer stay on bottom for pages with little content
    document.getElementsByTagName("footer")[0].style.marginTop = "10%";
</script>