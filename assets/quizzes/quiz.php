<?php
    $path = '../../';
    $page = 'Quiz Time!';
    include ($path . 'assets/php/header.php');
    # Database columns are as follows with data types below
    # Question| Choice A  | Choice B  | Choice C  | Choice D  | Correct Answer| LessonNo
    # medtext |varchar(50)|varchar(50)|varchar(50)|varchar(50)|    char       |  int

    include ($path . 'dbConn.php');

    # We'll be getting a quiz number from the header so we need to use that in order to get the questions
    $lessonNo = $_GET["lessonNo"];
    $stmt = $mysqli->prepare("SELECT * from quizzes WHERE lessonNo=?");
    $stmt->bind_param("i", $lessonNo);
    $stmt->execute();
    $res = $stmt->get_result();



?>

    <div id = "content" class="flexContainer">
        <?php include ($path . 'assets/php/sideBar.php'); ?>
        <form id="quiz" method="get" action="quizAnswer.php">
            <div id="title">
                <h1>Lesson <?php echo $lessonNo ?> : SAMPLE TEXT </h1>
            </div>
        <?php
            $question = 1;
            while($this_row = $res->fetch_assoc()){
                # Add a hidden input passing the lesson no. to the next page
                if($question == 1){
                    printf("
                        <input type='hidden' name='lessonNo' value= %s >
                    ", $this_row["lessonNo"]);
                }

                # This is a super long print statement, but it handles each question in a nice statement
                # It iterates through each "question" adding to the question counter afterwards
                printf("
                    <div class='question'>
                        <h2>Question %s : %s</h2>
                        <input type='radio' id='a' name= %s value='a'>
                        <label for='a'> %s </label><br/>
                        <input type='radio' id='b' name= %s value='b'>
                        <label for='b'> %s </label><br/>
                        <input type='radio' id='c' name= %s value='c'>
                        <label for='c'> %s </label><br/>
                        <input type='radio' id='d' name= %s value='d'>
                        <label for='d'> %s </label><br/>
                    </div>
                ", $question, $this_row["question"], 
                    $question, $this_row["choiceA"],
                    $question, $this_row["choiceB"],
                    $question, $this_row["choiceC"],
                    $question, $this_row["choiceD"]);
            
                $question += 1;
            }
            
        ?>
        <input class="submit" type="submit" value="Submit">
        </form>
    </div>

<?php
    include $path.'assets/php/footer.php';
?>

<script>
    // Quick little fix to get footer to stay at bottom. 
    // This solution messes with other pages so it's temporary
    document.getElementsByTagName("footer")[0].style.position = "fixed";
</script>