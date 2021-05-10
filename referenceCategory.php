<?php
    $path = './';
    $page = 'Reference';
    include $path.'assets/php/header.php';
?>

<div class="commands">
    <h1>Reference</h1>
<p>Here are a list of s that are useful for web development!
Click on any one to learn more.</p>
<p><a href="referenceAlphabet.php">Sort alphabetically</a> | <a id="sortBy" href="referenceCategory.php">Sort by category</a></p>
    <div class="referenceGrid">
        <p><b>Miscellaneous</b></p>
        <p><a href="assets/lessons/BASICmisc.php">ls</a></p>
        <p><a href="assets/lessons/BASICmisc.php">man</a></p>
        <p><a href="assets/lessons/BASICmisc.php">rwx</a></p>
        <p><a href="assets/lessons/ADVANCEDvieditor.php">vi</a></p>
        <p><a href="assets/lessons/ADVANCEDvieditor.php">vi-r</a></p>
        <p><a href="assets/lessons/ADVANCEDvieditor.php">view</a></p>
        <p><a href="assets/lessons/BASICmisc.php">whoami</a></p>

        <p><b>Coding</b></p>
        <p><a href="assets/lessons/ADVANCEDcoding.php">$</a></p>
        <p><a href="assets/lessons/ADVANCEDcoding.php">echo</a></p>
        <p><a href="assets/lessons/ADVANCEDcoding.php">ping</a></p>

        <p><b>Files</b></p>
        <p><a href="assets/lessons/BASICfiles.php">cat</a></p>
        <p><a href="assets/lessons/ADVANCEDfiles.php">chmod</a></p>
        <p><a href="assets/lessons/BASICfiles.php">cp</a></p>
        <p><a href="assets/lessons/ADVANCEDfiles.php">gunzip</a></p>
        <p><a href="assets/lessons/ADVANCEDfiles.php">gzcat</a></p>
        <p><a href="assets/lessons/ADVANCEDfiles.php">gzip</a></p>
        <p><a href="assets/lessons/BASICfiles.php">mv</a></p>
        <p><a href="assets/lessons/BASICfiles.php">rm</a></p>
        <p><a href="assets/lessons/ADVANCEDfiles.php">touch</a></p>
        <p><a href="assets/lessons/ADVANCEDfiles.php">wc</a></p>
        <br> 

        <p><b>Directory</b></p>
        <p><a href="assets/lessons/BASICdirectory.php">cd</a></p>
        <p><a href="assets/lessons/ADVANCEDdirectory.php">clone</a></p>
        <p><a href="assets/lessons/BASICdirectory.php">md</a></p>
        <p><a href="assets/lessons/BASICdirectory.php">mkdir</a></p>
        <p><a href="assets/lessons/ADVANCEDdirectory.php">open</a></p>
        <p><a href="assets/lessons/BASICdirectory.php">pwd</a></p>
    </div>
</div>

<?php
    include $path.'assets/php/footer.php';
?>