const questions = [
    {
        question: "Ano ang kahulugan ng 'balatkayo'?",
        answers: [
            {text: "a) Banal na gawain", correct: false},
            {text: "b) Pagkukunwari o pagtatago ng tunay na anyo", correct: true},
            {text: "c) Matinding lungkot", correct: false},
            {text: "d) Matapang na damdamin", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng 'yungib'?",
        answers: [
            {text: "a) Bundok", correct: false},
            {text: "b) Lambak", correct: false},
            {text: "c) Kuweba", correct: true},
            {text: "d) Gubat", correct: false}
        ]
    },
    {
        question: "Anong salita ang madalas ginagamit upang tukuyin ang taong sakim at mapagsamantala?",
        answers: [
            {text: "a) Pagkamulat", correct: false},
            {text: "b) Alibugha", correct: false},
            {text: "c) Buwaya", correct: true},
            {text: "d) Talipandas", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng 'pag-uusig'?",
        answers: [
            {text: "a) Pagtulong", correct: false},
            {text: "b) Persekusyon", correct: true},
            {text: "c) Pagkakaibigan", correct: false},
            {text: "d) Pang-aakit", correct: false}
        ]
    },
    {
        question: "Alin sa mga sumusunod ang salitang tumutukoy sa magnanakaw o kriminal?",
        answers: [
            {text: "a) Linangin", correct: false},
            {text: "b) Alibugha", correct: false},
            {text: "c) Tulisan", correct: true},
            {text: "d) Naglaho", correct: false}
        ]
    },
    {
        question: "Ano ang kasingkahulugan ng 'marubdob'?",
        answers: [
            {text: "a) Malamig", correct: false},
            {text: "b) Matindi o maalab", correct: true},
            {text: "c) Mabagal", correct: false},
            {text: "d) Mabigat", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'kaumpok'?",
        answers: [
            {text: "a) Kasama sa isang maliit na pangkat", correct: true},
            {text: "b) Kalaban sa digmaan", correct: false},
            {text: "c) Kaibigan mula pagkabata", correct: false},
            {text: "d) Kalaro sa paligsahan", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng 'linangin'?",
        answers: [
            {text: "a) Tanggalin o sirain", correct: false},
            {text: "b) Pagyamanin o paunlarin", correct: false},
            {text: "c) Ilagay sa lugar ng iba", correct: true},
            {text: "d) Iwanan sa kung saan", correct: false}
        ]
    },
    {
        question: "Alin sa mga sumusunod ang pinakamalapit na kahulugan ng 'sagrado'?",
        answers: [
            {text: "a) Mabagsik", correct: false},
            {text: "b) Banal", correct: true},
            {text: "c) Mapanganib", correct: false},
            {text: "d) Malilimutin", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'pagtutol'? ",
        answers: [
            {text: "a) Pagkakaroon ng kasunduan", correct: false},
            {text: "b) Pagpapakita ng galit", correct: false},
            {text: "c) Pag-aalala para sa nakatataas", correct: false},
            {text: "d) Pagtanggi o hindi pagsang-ayon sa isang bagay", correct: true}
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
