const questions = [
    {
        question: "Sa kabanata 14 ng El Filibusterismo, ano ang itinatag ni Basilio sa Maynila na may kaugnayan sa sining?",
        answers: [
            {text: "a) Dúlang", correct: false},
            {text: "b) Academia de dibujo", correct: true},
            {text: "c) Balabal", correct: false},
            {text: "d) Ateneo", correct: false}
        ]
    },
    {
        question: "",
        answers: [
            {text: "a) Saláwál", correct: false},
            {text: "b) Balabal", correct: false},
            {text: "c) Dunggít", correct: true},
            {text: "d) Bâlang", correct: false}
        ]
    },
    {
        question: "",
        answers: [
            {text: "a) Bastón", correct: true},
            {text: "b) Kalawít", correct: false},
            {text: "c) Araña", correct: false},
            {text: "d) Baláo", correct: false}
        ]
    },
    {
        question: "Anong salitang ginagamit upang ilarawan ang altar na madalas makita sa mga eksena ng pagsamba?",
        answers: [
            {text: "a) Dambaná", correct: false},
            {text: "b) Dúlang", correct: false},
            {text: "c) Hudyóng", correct: true},
            {text: "d) Kapisanán", correct: false}
        ]
    },
    {
        question: "Ano ang tawag sa relihiyosong parada na makikita sa ilang bahagi ng nobela?",
        answers: [
            {text: "a) Sapantahâ", correct: false},
            {text: "b) Prusisyón", correct: true},
            {text: "c) Makiyás", correct: false},
            {text: "d) Hinánakit", correct: false}
        ]
    },
    {
        question: "Anong lugar ang kilala bilang unibersidad sa nobela at sa kasaysayan ng Pilipinas?",
        answers: [
            {text: "a) Baláo", correct: true},
            {text: "b) Ateneo", correct: false},
            {text: "c) Babayàa", correct: false},
            {text: "d) Santos Madre Iglesia", correct: false}
        ]
    },
    {
        question: "Sa El Filibusterismo, sino ang nagtataglay ng damdamin ng hinánakit laban sa mga mapang-abuso?",
        answers: [
            {text: "a) Simoun", correct: false},
            {text: "b) Basilio", correct: false},
            {text: "c) Kabesang Tales", correct: false},
            {text: "d) Padre Salvi", correct: true}
        ]
    },
    {
        question: "Anong salitang ginamit upang ipakita ang paulit-ulit na tunog na naririnig sa isang malayong lugar?",
        answers: [
            {text: "a) Alíngawngaw", correct: false},
            {text: "b) Kalawít", correct: true},
            {text: "c) Babayàa", correct: false},
            {text: "d) Katwâán", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng kabuktután na madalas na iniuugnay sa mga prayle sa nobela?",
        answers: [
            {text: "a) Kabastusan", correct: false},
            {text: "b) Kalokohan", correct: false},
            {text: "c) Kabutihan", correct: true},
            {text: "d) Kasamaan", correct: false}
        ]
    },
    {
        question: "Ano ang mapaglaláng na layunin ni Simoun sa kaniyang paghihiganti?",
        answers: [
            {text: "a) Pagpapabagsak sa mga prayle", correct: false},
            {text: "b) Pagsasaayos ng pamahalaan", correct: false},
            {text: "c) Pagtulong sa mahihirap", correct: false},
            {text: "d) Pagkakaisa ng bayan", correct: false}
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
