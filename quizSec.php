<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizB Start</title>
    <link rel="stylesheet" href="./style/quizSec.css">
</head>

<body>

    <div class="main-div">
        <div class="inner-div">
            <h2 class="question">Question come here</h2>
            <ul>
                <li>
                    <input class="answer" type="radio" name="answer" id="ans1">
                    <label for="ans1" id="option1">Answer option</label>
                </li>
                <li>
                    <input class="answer" type="radio" name="answer" id="ans2">
                    <label for="ans2" id="option2">Answer option</label>
                </li>
                <li>
                    <input class="answer" type="radio" name="answer" id="ans3">
                    <label for="ans3" id="option3">Answer option</label>
                </li>
                <li>
                    <input class="answer" type="radio" name="answer" id="ans4">
                    <label for="ans4" id="option4">Answer option</label>
                </li>

            </ul>
            <button id="submit">Submit</button>
            <div id="showScore" class="scoreArea"></div>
        </div>
    </div>
</body>
<script src="./src/quizSec.js"></script>

</html>