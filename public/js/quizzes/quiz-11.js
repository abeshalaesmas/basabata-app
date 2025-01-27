const questions = [
    {
        question: "Ano ang kahulugan ng salitang Nang̃aso?",
        answers: [
            {text: "a) Pagtatanim ng mga puno", correct: false},
            {text: "b) Pagtugis at paghuli sa mga hayop", correct: true},
            {text: "c) Pag-aalaga ng mga hayop", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng salitang Ipinagpuprusisyón?",
        answers: [
            {text: "a) Martsa", correct: true},
            {text: "b) Pag-awit", correct: false},
            {text: "c) Pag-kanta", correct: false}
        ]
    },
    {
        question: "Ano ang tawag sa isang tao na nagtatrabaho sa isang opisina, negosyo, o gobyerno?",
        answers: [
            {text: "a) Manggagawa", correct: false},
            {text: "b) Kawani", correct: true},
            {text: "c) Magtatanim", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang Manudlâ?",
        answers: [
            {text: "a) Gumamit ng baril upang magpaputok", correct: true},
            {text: "b) Magtanim ng puno", correct: false},
            {text: "c) Magsimula ng isang negosyo", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng salitang Kagiting̃an?",
        answers: [
            {text: "a) Kabayanihan", correct: true},
            {text: "b) Pagkatalo", correct: false},
            {text: "c) Kaligayahan", correct: false}
        ]
    },
    {
        question: "Ano ang ginagamit sa pandayan para sa pag-ihip ng hangin at pagpapalakas ng apoy?",
        answers: [
            {text: "a) Pamaypay", correct: false},
            {text: "b) Binubulusan", correct: true},
            {text: "c) Hapak", correct: true}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang Pinupunyagi?",
        answers: [
            {text: "a) Pagbibigay ng tulong", correct: false},
            {text: "b) Matibay na pagsusumikap", correct: true},
            {text: "c) Pagpaplano", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng salitang Nagng̃íng̃itng̃ít?",
        answers: [
            {text: "a) Pagkagalit", correct: true},
            {text: "b) Pagtawa", correct: false},
            {text: "c) Pagkalungkot", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang Kabuhalhalan?",
        answers: [
            {text: "a) Kaayusan", correct: false},
            {text: "b) Kalokohan", correct: true},
            {text: "c) Pagkakasal", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang Hinihimas?",
        answers: [
            {text: "a) Pinapahiran", correct: false},
            {text: "b) Hinahaplos", correct: true},
            {text: "c) Binubuhos", correct: false}
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
