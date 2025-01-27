const questions = [
    {
        question: "Ano ang tawag sa buwis na hinihingi mula sa lupaing binubungkal ni Kabesa Tales?",
        answers: [
            {text: "a) Bantang", correct: false},
            {text: "b) Canon", correct: true},
            {text: "c) Maharlika", correct: false},
            {text: "d) Esmeralda", correct: false}
        ]
    },
    {
        question: "Alin sa mga salitang ito ang tumutukoy sa matinding paghihirap na dinaranas ni Kabesa Tales sa pagkawala ng kanyang mga ari-arian?",
        answers: [
            {text: "a) Kasawian", correct: true},
            {text: "b) Tanging lugod", correct: false},
            {text: "c) Alilang kagagalitan", correct: false},
            {text: "d) Pag-iisip", correct: false}
        ]
    },
    {
        question: "Anong uri ng sandata ang ginamit ni Kabesa Tales upang ipaglaban ang kanyang karapatan?",
        answers: [
            {text: "a) Tabak", correct: true},
            {text: "b) Kalabaw", correct: false},
            {text: "c) Kalasag", correct: false},
            {text: "d) Suklay", correct: false}
        ]
    },
    {
        question: "Ano ang tawag sa paniniwala ni Kabesa Tales na dapat siyang maglingkod sa kanyang pamilya kahit gaano kahirap ang buhay?",
        answers: [
            {text: "a) Matimping", correct: false},
            {text: "b) Pagtulong", correct: true},
            {text: "c) Tanging lugod", correct: false},
            {text: "d) Katwiran", correct: false}
        ]
    },
    {
        question: "Sa pagkawala ng lupain ni Kabesa Tales, ano ang naramdaman niya na maaaring maiugnay sa salitang 'Pagpangulila'?",
        answers: [
            {text: "a) Hinala", correct: false},
            {text: "b) Maharlika", correct: false},
            {text: "c) Pagkamuhi", correct: false},
            {text: "d) Pagpangulila", correct: true}
        ]
    },
    {
        question: "Ano ang tawag sa matibay na paninindigan ni Kabesa Tales sa pagnanais niyang mabawi ang kanyang lupa?",
        answers: [
            {text: "a) Kamatigan", correct: true},
            {text: "b) Apatia", correct: false},
            {text: "c) Kalipunan", correct: false},
            {text: "d) Kalihislihis", correct: false}
        ]
    },
    {
        question: "Alin sa mga salitang ito ang maaaring tumukoy sa bayad na hinihingi ng mga prayle mula sa mga magsasaka?",
        answers: [
            {text: "a) Buwis", correct: true},
            {text: "b) Chaqueta", correct: false},
            {text: "c) Pamanhay", correct: false},
            {text: "d) Salawal", correct: false}
        ]
    },
    {
        question: "Ang pagkawala ng mga mahal sa buhay ni Kabesa Tales ay maihahalintulad sa salitang:",
        answers: [
            {text: "a) Pagtugon", correct: false},
            {text: "b) Kasawian", correct: true},
            {text: "c) Pusakal", correct: false},
            {text: "d) Pieltro", correct: false}
        ]
    },
    {
        question: "Anong salita ang tumutukoy sa mga bagay na lubos na pinahahalagahan ni Kabesa Tales, tulad ng kanyang lupa at pamilya?",
        answers: [
            {text: "a) Tanging Yaman", correct: true},
            {text: "b) Canon", correct: false},
            {text: "c) Esmeralda", correct: false},
            {text: "d) Handog", correct: false}
        ]
    },
    {
        question: "Alin sa mga salitang ito ang nangangahulugan ng karaniwang tao na nagsusumikap sa bukirin, tulad ni Kabesa Tales?",
        answers: [
            {text: "a) Alila", correct: false},
            {text: "b) Kasangkapang lupa", correct: true},
            {text: "c) HUkom", correct: false},
            {text: "d) Gusi", correct: false}
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
