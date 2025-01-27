const questions = [
    {
        question: "Ano ang ibig sabihin ng salitang 'pinakaigihan'?",
        answers: [
            {text: "a) Gawin nang walang kahusayan", correct: false},
            {text: "b) Gawin nang may kahusayan at pagsisikap", correct: true},
            {text: "c) Gawin nang walang ayos", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng 'kasawian'?",
        answers: [
            {text: "a) ", correct: false},
            {text: "b) ", correct: false},
            {text: "c) ", correct: true}
        ]
    },
    {
        question: "Alin sa mga sumusunod ang katangian ng isang 'tulisan'?",
        answers: [
            {text: "a) Isang mang-uusap nang maayos", correct: false},
            {text: "b) Isang tao na may mabuting ugali", correct: false},
            {text: "c)  Isang tao na magnanakaw o malupit", correct: true}
        ]
    },
    {
        question: "Ano ang kahulugan ng salitang 'tunggak'?",
        answers: [
            {text: "a) Matalino at may kaalaman", correct: false},
            {text: "b) Kulang sa kaalaman at hindi nagpapakita ng matalinong pag-iisip", correct: true},
            {text: "c) May mataas na antas ng pag-unawa", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang 'nang̃aliligáw'?",
        answers: [
            {text: "a) Laging nasa tamang direksyon", correct: false},
            {text: "b) Nawawala o naliligaw", correct: true},
            {text: "c) Mabilis maglakbay", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng salitang 'pipi'?",
        answers: [
            {text: "a) Isang taong hindi makapagsalita", correct: true},
            {text: "b) Isang taong malakas magsalita", correct: false},
            {text: "c) Isang taong may mataas na boses", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng salitang 'alilà'?",
        answers: [
            {text: "a) Magaling magturo", correct: false},
            {text: "b) Nagdadala ng panganib sa lipunan", correct: true},
            {text: "c) Matalino sa mga negosyo", correct: false}
        ]
    },
    {
        question: "Alin sa mga sumusunod ang isang katangian ng isang 'tulisan'",
        answers: [
            {text: "a) Pagpapaalala", correct: false},
            {text: "b) Pagsasagawa ng isang gawain nang may pinakamataas na antas ng kasanayan", correct: true},
            {text: "c) Pagpapahinga pagkatapos magtrabaho", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng 'pinakaigihan'",
        answers: [
            {text: "a) Pagpapaalala", correct: false},
            {text: "b) Pagsasagawa ng isang gawain nang may pinakamataas na antas ng kasanayan", correct: true},
            {text: "c) Pagpapahinga pagkatapos magtrabaho", correct: false}
        ]
    },
    {
        question: "Alin sa mga ito ang kasingkahulugan ng 'kasawian'?",
        answers: [
            {text: "a) Pagkatalo", correct: true},
            {text: "b) Tagumpay", correct: false},
            {text: "c) Pagka-kasiyahan", correct: true}
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
