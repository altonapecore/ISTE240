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
        <form method="get" action="quizAnswer.php">
        <?php
            $question = 1;
            foreach($records as $this_row){
                # Add a hidden input passing the lesson no. to the next page
                if($question == 1){
                    printf("
                        <input type='hidden' name='lessonNo' value= %s >
                    ", $this_row["lessonNo"]);
                }

                # This is a super long print statement, but it handles each question in a nice statement
                # It iterates through each "question" adding to the question counter afterwards
                printf("
                    <h2>Question %s </h2>
                    <p> %s </p>
                    <input type='radio' id='a' name= %s value='a'>
                    <label for='a'> %s </label><br/>
                    <input type='radio' id='b' name= %s value='b'>
                    <label for='b'> %s </label><br/>
                    <input type='radio' id='c' name= %s value='c'>
                    <label for='c'> %s </label><br/>
                    <input type='radio' id='d' name= %s value='d'>
                    <label for='d'> %s </label><br/>
                ", $question, $this_row["question"], 
                    $question, $this_row["choiceA"],
                    $question, $this_row["choiceB"],
                    $question, $this_row["choiceC"],
                    $question, $this_row["choiceD"]);
            
                $question += 1;
            }
            
        ?>
        <input type="submit" value="Submit">
        </form>
    </div>




<?php
    include $path.'assets/php/footer.php';