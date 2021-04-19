<?php
    $path = '../../';
    $page = 'Kernel';
    include $path.'assets/php/header.php';
?>
<div id="content">
    <?php
        include $path.'assets/php/sideBar.php';
    ?>

    <div class="lessonContent">
        <h1>INTRODUCTION</h1>
        <h2>Kernel</h2>
        <p>bro no way... we are writing lesson?!?! this one is KERNEL</p>
    </div>
</div>

<?php
    include $path.'assets/php/footer.php';
?>

<script>
    // Quick little fix to get footer to stay at bottom. 
    // This solution messes with other pages so it's temporary
    document.getElementsByTagName("footer")[0].style.position = "fixed";
</script>