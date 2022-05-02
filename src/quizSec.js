const quizDB = [
  {
    question: "Q1: What is the full form of html?",
    a: "Hello To My Land",
    b: "Hey Text Markup Language",
    c: "HyperText Makeup Language",
    d: "HyperText Markup Language",
    ans: "ans4",
  },
  {
    question: "Q2: What is the full form of CSS?",
    a: "Cascading style Sheets",
    b: "Cascading style Sheep",
    c: "Cartoon Style Sheets",
    d: "Cascading Super Sheets",
    ans: "ans1",
  },
  {
    question: "Q3: What is the full form of HTTP?",
    a: "HyperText Transfer Product",
    b: "HyperText Test Protocol",
    c: "Hey Transfer Protocol",
    d: "HyperText Transfer Protocol",
    ans: "ans4",
  },
  {
    question: "Q4: What is the full form of JS?",
    a: "JasonScream",
    b: "JustinSwift",
    c: "JeepScript",
    d: "JavaScript",
    ans: "ans4",
  },
  {
    question: "Q5:How to create an ordered list in HTML?",
    a: "<ul>",
    b: "<ol>",
    c: "<href>",
    d: "<b>",
    ans: "ans2",
  },
];

const question = document.querySelector(".question");
const option1 = document.querySelector("#option1");
const option2 = document.querySelector("#option2");
const option3 = document.querySelector("#option3");
const option4 = document.querySelector("#option4");
const submit = document.querySelector("#submit");

const answers = document.querySelectorAll(".answer");

const showScore = document.querySelector("#showScore");

let questionCount = 0;
let score = 0;

const loadQuestion = () => {
  const questionList = quizDB[questionCount];
  question.innerText = questionList.question;

  option1.innerText = questionList.a;
  option2.innerText = questionList.b;
  option3.innerText = questionList.c;
  option4.innerText = questionList.d;
};

const deselectAll = () => {
  answers.forEach((curAnswerElem) => (curAnswerElem.checked = false));
};

loadQuestion();
const getCheckAnswer = () => {
  let answer;

  answers.forEach((curAnswerElem) => {
    if (curAnswerElem.checked) {
      answer = curAnswerElem.id;
    }
  });
  return answer;
};

submit.addEventListener("click", () => {
  const checkedAnswer = getCheckAnswer();

  if (checkedAnswer === quizDB[questionCount].ans) {
    score++;
  }
  questionCount++;

  deselectAll();

  if (questionCount < quizDB.length) {
    loadQuestion();
  } else {
    showScore.innerHTML = `
      <h3> you scored ${score}/${quizDB.length} 👌</h3>
      <button class="btn" onclick="location.reload()">Play Again </button>
      `;

    showScore.classList.remove("scoreArea");
  }
});
