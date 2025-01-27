const questions = [
    {
        question: "Ano ang kahulugan ng salitang 'Adsúm'?",
        answers: [
            {text: "a) Narito o Naroroon", correct: true},
            {text: "b) Alipin o Katulong", correct: false},
            {text: "c) Mataas na gusali", correct: false},
            {text: "d) Listahan ng mga bagay", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Carabineros Celestiales'?",
        answers: [
            {text: "a) Mga guro o tagapagturo", correct: false},
            {text: "b) Grupo ng mga celestial na sundalo", correct: true},
            {text: "c) Isang uri ng sining o komedya", correct: false},
            {text: "d) Malupit na pagmumura", correct: false}
        ]
    },
    {
        question: "Ano ang 'Contrabando herético'?",
        answers: [
            {text: "a) Isang klase ng kurso sa kolehiyo", correct: false},
            {text: "b) Ilegal na kalakal na laban sa relihiyon", correct: true},
            {text: "c) Listahan ng mga pangalan o bagay", correct: false},
            {text: "d) Monumento para sa alaala ng yumaong bayani", correct: false}
        ]
    },
    {
        question: "Ano ang salitang tumutukoy sa 'mga guro o tagapagturo'?",
        answers: [
            {text: "a) Alila", correct: false},
            {text: "b) Gurus", correct: true},
            {text: "c) Mecachis", correct: false},
            {text: "d) Zarzuela", correct: false}
        ]
    },
    {
        question: " Ano ang ibig sabihin ng 'Lagdâ'?",
        answers: [
            {text: "a) Isang aksyon ng pagpaparusa o pagpapalo", correct: true},
            {text: "b) Isang uri ng pamana o alaala", correct: false},
            {text: "c) Pagsuot ng damit o kasuotan", correct: false},
            {text: "d) Isang grupo ng mga sundalo", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng 'Pulutóng'?",
        answers: [
            {text: "a) Pagkuha ng ari-arian mula sa iba", correct: false},
            {text: "b) Grupo ng tao na nagtutulungan", correct: true},
            {text: "c) Isang monumento na pampublikong alaala", correct: false},
            {text: "d) Malupit na pagmumura", correct: false}
        ]
    },
    {
        question: "Ano ang 'Katedrátiko'?",
        answers: [
            {text: "a) Isang uri ng dramatikong pagtatanghal", correct: false},
            {text: "b) Guro sa kolehiyo o propesor", correct: true},
            {text: "c) Aksyon ng paghalik o pagpapakita ng pagmamahal", correct: false},
            {text: "d) Isang ekspresyon ng pagkabigla", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Zarzuela'?",
        answers: [
            {text: "a) Komedya na may kasamang awit", correct: true},
            {text: "b) Ilegal na kalakal na laban sa relihiyon", correct: false},
            {text: "c) Aksyon ng pagkuha ng kasuotan", correct: false},
            {text: "d) Isang uri ng monumento", correct: false}
        ]
    },
    {
        question: "Ano ang 'Samsám'?",
        answers: [
            {text: "a) Pagsuway sa utos ng Diyos", correct: false},
            {text: "b) Pagkuha o pagkumpiska ng bagay", correct: true},
            {text: "c) Pagbibigay ng malakas na palo", correct: false},
            {text: "d) Pagiging bahagi ng celestial na hukbo", correct: false}
        ]
    },
    {
        question: "Ano ang 'Tálàan'?",
        answers: [
            {text: "a) Listahan ng pangalan o impormasyon", correct: true},
            {text: "b) Lugar ng pagpaparusa", correct: false},
            {text: "c) Isang uri ng kasabihan o anekdota", correct: false},
            {text: "d) Pagsuot ng kasuotan", correct: false}
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
