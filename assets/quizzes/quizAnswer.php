<?php
    $path = '../../';
    $page = 'Answer Time!';
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
    if($res){
        while($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)){
            $records[] = $rowHolder;
        }
    }



?>

    <div id = "content" class="flexContainer">
        <?php include ($path . 'assets/php/sideBar.php'); ?>
        <div id="quiz">
            <div id="title">
                <h1>Lesson <?php echo $lessonNo ?> : SAMPLE TEXT </h1>
            </div>
            <?php
                $question = 1;
                $firstRow = "";
                foreach($records as $this_row){
                    # Way I'm going to factor in answers
                    # Try to figure out what the right answer was before I make each question
                        # Compare answer given and correct answer
                        # We're color coding whatever answer the user gives so
                        # we would have 4 cases
                            # Chose option a, b, c, etc.
                            # In each case there would be an if statement asking if the answer is correct
                            # If it is green. If not, red

                    # Get the variables for better looking code
                    $guess = $_GET[(string)$question];
                    $answer = $this_row["correctAns"];

                    # Guessed correctly
                    if($guess == $answer){
                        if($guess == "a"){
                            # This is a super long print statement, but it handles each question in a nice statement
                            # It iterates through each "question" adding to the question counter afterwards
                            printf("
                                <div class='question right'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' checked>
                                    <label for='a'> %s  <i>Good answer!</i></label><br/>
                                    <input type='radio' id='b' name= %s value='b' disabled>
                                    <label for='b'> %s </label><br/>
                                    <input type='radio' id='c' name= %s value='c' disabled>
                                    <label for='c'> %s </label><br/>
                                    <input type='radio' id='d' name= %s value='d' disabled>
                                    <label for='d'> %s </label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        } else if($guess == "b"){
                            printf("
                                <div class='question right'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' disabled>
                                    <label for='a'> %s </label><br/>
                                    <input type='radio' id='b' name= %s value='b' checked>
                                    <label for='b'> %s  <i>Way to go!</i></label><br/>
                                    <input type='radio' id='c' name= %s value='c' disabled>
                                    <label for='c'> %s </label><br/>
                                    <input type='radio' id='d' name= %s value='d' disabled>
                                    <label for='d'> %s </label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        } else if($guess == "c"){
                            printf("
                                <div class='question right'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' disabled>
                                    <label for='a'> %s </label><br/>
                                    <input type='radio' id='b' name= %s value='b' disabled>
                                    <label for='b'> %s </label><br/>
                                    <input type='radio' id='c' name= %s value='c' checked>
                                    <label for='c'> %s  <i>You got it!</i></label><br/>
                                    <input type='radio' id='d' name= %s value='d' disabled>
                                    <label for='d'> %s </label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        } else{
                            printf("
                                <div class='question right'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' disabled>
                                    <label for='a'> %s </label><br/>
                                    <input type='radio' id='b' name= %s value='b' disabled>
                                    <label for='b'> %s </label><br/>
                                    <input type='radio' id='c' name= %s value='c' disabled>
                                    <label for='c'> %s </label><br/>
                                    <input type='radio' id='d' name= %s value='d' checked>
                                    <label for='d'> %s  <i>You're a natural!</i></label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        }
                    } else{
                        // Got it wrong
                        if($guess == "a"){
                            # This is a super long print statement, but it handles each question in a nice statement
                            # It iterates through each "question" adding to the question counter afterwards
                            printf("
                                <div class='question wrong'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' checked>
                                    <label for='a'> %s  <i>Almost!</i></label><br/>
                                    <input type='radio' id='b' name= %s value='b' disabled>
                                    <label for='b'> %s </label><br/>
                                    <input type='radio' id='c' name= %s value='c' disabled>
                                    <label for='c'> %s </label><br/>
                                    <input type='radio' id='d' name= %s value='d' disabled>
                                    <label for='d'> %s </label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        } else if($guess == "b"){
                            printf("
                                <div class='question wrong'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' disabled>
                                    <label for='a'> %s </label><br/>
                                    <input type='radio' id='b' name= %s value='b' checked>
                                    <label for='b'> %s  <i>You'll get it next time!</i></label><br/>
                                    <input type='radio' id='c' name= %s value='c' disabled>
                                    <label for='c'> %s </label><br/>
                                    <input type='radio' id='d' name= %s value='d' disabled>
                                    <label for='d'> %s </label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        } else if($guess == "c"){
                            printf("
                                <div class='question wrong'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' disabled>
                                    <label for='a'> %s </label><br/>
                                    <input type='radio' id='b' name= %s value='b' disabled>
                                    <label for='b'> %s </label><br/>
                                    <input type='radio' id='c' name= %s value='c' checked>
                                    <label for='c'> %s  <i>So close!</i></label><br/>
                                    <input type='radio' id='d' name= %s value='d' disabled>
                                    <label for='d'> %s </label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        } else{
                            printf("
                                <div class='question wrong'>
                                    <h2>Question %s </h2>
                                    <p> %s </p>
                                    <input type='radio' id='a' name= %s value='a' disabled>
                                    <label for='a'> %s </label><br/>
                                    <input type='radio' id='b' name= %s value='b' disabled>
                                    <label for='b'> %s </label><br/>
                                    <input type='radio' id='c' name= %s value='c' disabled>
                                    <label for='c'> %s </label><br/>
                                    <input type='radio' id='d' name= %s value='d' checked>
                                    <label for='d'> %s  <i>Don't worry it's a tricky one!</i></label><br/>
                                </div>
                            ", $question, $this_row["question"], 
                                $question, $this_row["choiceA"],
                                $question, $this_row["choiceB"],
                                $question, $this_row["choiceC"],
                                $question, $this_row["choiceD"]);
                        }
                    }

                    # Add to question counter to properly iterate
                    $question += 1;
                }
            ?>
            <form method="get" action="quiz.php">
                <?php
                    printf("
                        <input type='hidden' name='lessonNo' value= %s >
                    ", $lessonNo);
                ?>
                <div class="flexContainer">
                    <input class="specialSubmit" type="submit" value="Retake Quiz">
                    <a class="specialSubmit" href="<?php echo $path . 'assets/lessons/INTROkernel.php'; ?>">Go Back To Lesson</a>
                </div>
            </form>
        </div>
    </div>

<?php
    include $path.'assets/php/footer.php';
?>