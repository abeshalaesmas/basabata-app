const questions = [
    {
        question: " Ano ang ibig sabihin ng 'Baitang'?",
        answers: [
            {text: "a) Bahagi ng katawan", correct: false},
            {text: "b) Hakbang o antas", correct: true},
            {text: "c) Isang lugar", correct: false},
            {text: "d) Labanan", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'adorasyon'?",
        answers: [
            {text: "a) Paggalang", correct: false},
            {text: "b) Pagsamba", correct: true},
            {text: "c) Pag-aalala", correct: false},
            {text: "d) Pagka-inis", correct: false}
        ]
    },
    {
        question: " Ano ang ibig sabihin ng 'pagtuturò'?",
        answers: [
            {text: "a) Pagbibigay ng aral", correct: false},
            {text: "b) Pag-uusap", correct: false},
            {text: "c) Pagbibigay ng kaalaman", correct: true},
            {text: "d) Pagpapatawad", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'per se'?",
        answers: [
            {text: "a) Magkaiba", correct: false},
            {text: "b) Sa sarili nito", correct: true},
            {text: "c) Nang walang dahilan", correct: false},
            {text: "d) Sa pamamagitan ng iba", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'requiescat in pace'?",
        answers: [
            {text: "a) Nawa'y magtagumpay", correct: false},
            {text: "b) Nawa'y magpahinga siya sa kapayapaan", correct: true},
            {text: "c) Nawa'y magalak", correct: false},
            {text: "d) Nawa'y magpatuloy", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'concílio'?",
        answers: [
            {text: "a) Council", correct: true},
            {text: "b) Temple", correct: false},
            {text: "c) Gathering", correct: false},
            {text: "d) Ritual", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabiin ng 'amat'?",
        answers: [
            {text: "a) Mag-aaral", correct: false},
            {text: "b) Guro", correct: false},
            {text: "c) Eksperto", correct: true},
            {text: "d) Mang-uusisa", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'apúera de la fuerta'?",
        answers: [
            {text: "a) Pagtanggap", correct: false},
            {text: "b) Pagpapatawad", correct: false},
            {text: "c) Paggalak", correct: false},
            {text: "d) Pagbabanta", correct: true}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'pagtanong'?",
        answers: [
            {text: "a) Pag-uusap", correct: false},
            {text: "b) Pagtatanong o interogasyon", correct: true},
            {text: "c) Pagbibigay ng sagot", correct: false},
            {text: "d) Pag-aalala", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'anománg'?",
        answers: [
            {text: "a) Lahat ng bagay", correct: true},
            {text: "b) Isang tao", correct: false},
            {text: "c) Isang partikular na bagay", correct: false},
            {text: "d) Walang anuman", correct: false}
        ]
    },

];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");
const revealButton = document.getElementById("revealButton");
let currentQuestionIndex = 0;
let score = 0;
let userId = document.querySelector('meta[name="user-id"]').getAttribute('content');

function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click", selectAnswer);
    });
}

function resetState(){
    nextButton.style.display = "none";
    revealButton.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";

    // Deselect any previously selected answer
    Array.from(answerButtons.children).forEach(button => {
        button.classList.remove("selected");
    });

    // Select the new answer
    selectedBtn.classList.add("selected");

    revealButton.style.display = "block";
    revealButton.onclick = () => revealAnswer(isCorrect);
}

function revealAnswer(isCorrect) {
    Array.from(answerButtons.children).forEach(button => {
        setStatusClass(button, button.dataset.correct === "true");
        button.disabled = true;
    });

    if (isCorrect) {
        score++;
    }
    nextButton.style.display = "block";
    revealButton.style.display = "none";
}

function setStatusClass(element, correct) {
    clearStatusClass(element);
    if (correct) {
        element.classList.add('correct');
    } else {
        element.classList.add('wrong');
    }
}

function clearStatusClass(element) {
    element.classList.remove('correct');
    element.classList.remove('wrong');
}

function showScore(){
    resetState();
    questionElement.innerHTML = `You scored ${score} out of ${questions.length}!`;

    fetch('/increment-score', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            user_id: userId,
            score: score
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            console.log(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
    nextButton.innerHTML = "Go Back To Dashboard";
    nextButton.style.display = "block";

    nextButton.addEventListener("click", () => {
        window.location.href = "/quiz"; // Replace with your dashboard route
    });
}

function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }else{
        showScore();
    }
}

nextButton.addEventListener("click", ()=>{
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    }else{
        startQuiz();
    }
});

startQuiz();
