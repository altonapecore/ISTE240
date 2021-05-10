<?php
    $path = './';
    $page = 'Home Page';
    include $path.'assets/php/header.php';
?>

<div class="homeMain">
    <h1>Welcome to UNIX Webcamp!</h1>
    <!--Taken mostly straight from the design doc-->
    <p>Unix is a multi-tasking, multi-user operating system which was first developed in the 1960s.
        It offers a wide array of functionality, allowing users to alter, create, and delete files alongside other users.
        Though it may be old, it's still in use today in a wide variety of fields.
        
    </p>
    <p>One such field is web development! On this site, we will guide you step-by-step through learning Unix for web development.
    The lessons are designed to educate anyone at any skill level. 
    For absolute beginners who have no knowledge of Unix, the website will include starter-level Unix lessons that will build the needed skills to level up their website development skills. 
    After completing beginner-level exercises, the website will also include more advanced lessons. 
    These are designed for people who may be at an intermediate or even expert level of Unix knowledge. 
    Lessons are designed so that after completion, the users will emerge as fully formed, Unix competent butterflies, ready to take on more advanced works.
    </p>
    <p>After completion, we trust that our users will have learned enough skills to participate in the world of amateur web development, and possibly even move into the professional world. 
    While our goal is to educate, it is important to us that our users feel good about their work. 
    We do not believe in hard drills or forced pattern memorization, but rather have taken a more wholesome approach to guide our students into the beautiful butterflies they had inside them all along.
    </p>
    <p>Good luck, and happy coding!</p>

    <div class="homeButtons">
    <section>
        <h3>Want to start learning?</h3>
        <h3><a href="assets/lessons/INTROkernel.php">Learn</a></h3>
    </section>
    <section>
        <h3>Need a list of commands?</h3>
        <h3><a href="referenceAlphabet.php">Reference</a></h3>
    </section>
    </div>
    <img src="assets/img/homeKeyboard.png" alt="homeKeyboard">
    
</div>

<?php
    include $path.'assets/php/footer.php';
?>