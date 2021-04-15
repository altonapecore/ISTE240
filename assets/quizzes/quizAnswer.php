<?php
    $path = '../../';
    $page = 'Quiz';
    # Database columns are as follows with data types below
    # Question| Choice A  | Choice B  | Choice C  | Choice D  | Correct Answer| LessonNo
    # medtext |varchar(50)|varchar(50)|varchar(50)|varchar(50)|    char       |  int
    # IMPORTANT!!!!!1!! For testing use ONLY a lesson no. of 0 - Lessons 1+ are for actual content

    include ('../../dbConn.php');

    # We'll be getting a quiz number from the header so we need to use that in order to get the questions
    $sql = 'select * from `quizzes` where lessonNo=0';

    $res = $mysqli->query($sql);
    if($res){
        while($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)){
            $records[] = $rowHolder;
        }
    }



?>
<!-- The reason there is a header here is because some of the stuff was wacky with file paths and whatnot -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quiz Time!</title>
    <link rel="stylesheet" href="../../assets/css/mainStyles.css">
</head>
<body>
    <header>
        <img src="../../assets/img/logo.png"></img>
    <div id="navBar">
        <div class="flexContainer">
            <!--Honestly not sure if home logo is 100% necessary-->
            <div class=flexNav><a href="#" id="active">Home</a></div>
            <div class=flexNav><a href="#">Learn</a></div>
            <div class=flexNav><a href="#">Reference</a><div>
        </div>
        <!--Dan suggested moving Our Team to footer so we can do that-->
    </div>
    </header>

    <div id = "content">
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

                # Add a hidden input passing the lesson no. to the next page
                if($question == 1){
                    $firstRow = $this_row["lessonNo"];
                }

                # Get the variables for better looking code
                $guess = $_GET[(string)$question];
                $answer = $this_row["correctAns"];

                # Guessed correctly
                if($guess == $answer){
                    if($guess == "a"){
                        # This is a super long print statement, but it handles each question in a nice statement
                        # It iterates through each "question" adding to the question counter afterwards
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' class='right' id='a' name= %s value='a' checked disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' id='b' name= %s value='b' disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' id='c' name= %s value='c' disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' id='d' name= %s value='d' disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    } else if($guess = "b"){
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' id='a' name= %s value='a' disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' class='right' id='b' name= %s value='b' checked disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' id='c' name= %s value='c' disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' id='d' name= %s value='d' disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    } else if($guess = "c"){
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' id='a' name= %s value='a' disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' id='b' name= %s value='b' disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' class='right' id='c' name= %s value='c' checked disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' id='d' name= %s value='d' disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    } else{
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' id='a' name= %s value='a' disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' id='b' name= %s value='b' disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' id='c' name= %s value='c' disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' class='right' id='d' name= %s value='d' checked disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    }
                } else{
                    if($guess == "a"){
                        # This is a super long print statement, but it handles each question in a nice statement
                        # It iterates through each "question" adding to the question counter afterwards
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' class='wrong' id='a' name= %s value='a' checked disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' id='b' name= %s value='b' disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' id='c' name= %s value='c' disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' id='d' name= %s value='d' disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    } else if($guess = "b"){
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' id='a' name= %s value='a' disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' class='wrong' id='b' name= %s value='b' checked disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' id='c' name= %s value='c' disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' id='d' name= %s value='d' disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    } else if($guess = "c"){
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' id='a' name= %s value='a' disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' id='b' name= %s value='b' disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' class='wrong' id='c' name= %s value='c' checked disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' id='d' name= %s value='d' disabled>
                            <label for='d'> %s </label><br/>
                        ", $question, $this_row["question"], 
                            $question, $this_row["choiceA"],
                            $question, $this_row["choiceB"],
                            $question, $this_row["choiceC"],
                            $question, $this_row["choiceD"]);
                    } else{
                        printf("
                            <h2>Question %s </h2>
                            <p> %s </p>
                            <input type='radio' id='a' name= %s value='a' disabled>
                            <label for='a'> %s </label><br/>
                            <input type='radio' id='b' name= %s value='b' disabled>
                            <label for='b'> %s </label><br/>
                            <input type='radio' id='c' name= %s value='c' disabled>
                            <label for='c'> %s </label><br/>
                            <input type='radio' class='wrong' id='d' name= %s value='d' checked disabled>
                            <label for='d'> %s </label><br/>
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
                ", $firstRow["lessonNo"]);
            ?>
            <input type="submit" value="Retake Quiz">
        </form>
    </div>




<?php
    include $path.'assets/php/footer.php';