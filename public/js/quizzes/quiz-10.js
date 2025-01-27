const questions = [
    {
        question: "Ano ang kahulugan ng 'Lona'?",
        answers: [
            {text: "a) Tela na ginagamit sa mga damit", correct: false},
            {text: "b) Matibay at magaspang na tela para sa proteksyon", correct: true},
            {text: "c) Tela na ginagamit sa mga sapatos", correct: false}
        ]
    },
    {
        question: "Anong kasingkahulugan ang tumutukoy sa isang kilalang tao?",
        answers: [
            {text: "a) Kabantugan", correct: true},
            {text: "b) Mag-aalahas", correct: false},
            {text: "c) Manugang", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Mag-aalahas'?",
        answers: [
            {text: "a) Isang uri ng damit", correct: false},
            {text: "b) Isa pang tawag sa isang pari", correct: false},
            {text: "c) Eksperto sa paggawa ng alahas", correct: true}
        ]
    },
    {
        question: "Sino ang tinutukoy ng salitang 'Manugang'?",
        answers: [
            {text: "a) Asawa ng anak", correct: true},
            {text: "b) Kapatid ng asawa", correct: false},
            {text: "c) Anak ng magulang", correct: false}
        ]
    },
    {
        question: "Ano ang tawag sa mataas na ranggo ng pari sa Simbahang Katoliko?",
        answers: [
            {text: "a) Liwaliwan", correct: false},
            {text: "b) Buslo", correct: false},
            {text: "c) Arsobispo", correct: true}
        ]
    },
    {
        question: "Ano ang 'Buslo'?",
        answers: [
            {text: "a) Isang uri ng hayop", correct: false},
            {text: "b) Isang lalagyan na gawa sa yantok", correct: true},
            {text: "c) Isang uri ng pagkain", correct: false}
        ]
    },
    {
        question: "Anong ibig sabihin ng 'Liwaliwan'?",
        answers: [
            {text: "a) Pagtatrabaho sa bukid", correct: false},
            {text: "b) Mataas na bundok", correct: false},
            {text: "c) Pook na may kasiyahan at relaksasyon", correct: true}
        ]
    },
    {
        question: "Ano ang 'Liluk'?",
        answers: [
            {text: "a) Paghahanda ng pagkain", correct: false},
            {text: "b) Sining ng pag-ukit o pagbawas ng mga bahagi", correct: true},
            {text: "c) Isang uri ng hayop", correct: fals}
        ]
    },
    {
        question: "Ano ang kahulugan ng 'Kudya'?",
        answers: [
            {text: "a) Uri ng masarap na inumin", correct: false},
            {text: "b) Pagkain na niluluto sa baho", correct: false},
            {text: "c) Instrumento pangmusika ng Pilipinas", correct: true}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Agnos?'",
        answers: [
            {text: "a) Isang sagrado na anting-anting", correct: true},
            {text: "b) Uri ng pagkain sa mga seremonya", correct: false},
            {text: "c) Isang makinarya para sa paggawa ng tela", correct: false}
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
