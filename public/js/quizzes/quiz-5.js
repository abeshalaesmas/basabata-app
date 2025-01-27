const questions = [
    {
        question: "Ano ang ibig sabihin ng 'Entresuelo'?",
        answers: [
            {text: "a) Lugar kung saan inililibing ang patay", correct: false},
            {text: "b) Bahagi ng bahay sa pagitan ng sahig at kisame", correct: true},
            {text: "c) Panalangin para sa kaluluwa ng namatay", correct: false},
            {text: "d) Dekorasyong ginagamit tuwing Pasko", correct: false}
        ]
    },
    {
        question: "Ano ang 'Kulesa'?",
        answers: [
            {text: "a) Karwahe na hinihila ng kabayo", correct: true},
            {text: "b) Isang uri ng hayop sa bukid", correct: false},
            {text: "c) Mamahaling bato o alahas", correct: false},
            {text: "d) Lugar ng tirahan ng mga sundalo", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng 'Benditado'?",
        answers: [
            {text: "a) Binendisyunan o binasbasan", correct: true},
            {text: "b) Isang uri ng pagkain sa pista", correct: false},
            {text: "c) Maliliit na dekorasyon", correct: false},
            {text: "d) Binasag gamit ang puwersa", correct: false}
        ]
    },
    {
        question: "Ano ang 'Apuháp'?",
        answers: [
            {text: "a) Malalim na paghinga", correct: false},
            {text: "b) Kilos ng paghahanap gamit ang kamay", correct: true},
            {text: "c) Lugar na imbakan ng pagkain", correct: false},
            {text: "d) Lugar na tirahan ng sundalo", correct: false}
        ]
    },
    {
        question: "Ano ang kahulugan ng 'Sukbit'?",
        answers: [
            {text: "a) Bagay na isinabit sa balikat o beywang", correct: true},
            {text: "b) Tunog na nililikha ng bagay sa mantika", correct: false},
            {text: "c) Dekorasyong inilalagay sa bahay", correct: false},
            {text: "d) Lugar ng panalangin", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Prusisión'?",
        answers: [
            {text: "a) Parada ng mga tao na may dalang relihiyosong imahe", correct: true},
            {text: "b) Mabilis na pagkilos sa trabaho", correct: false},
            {text: "c) Isang uri ng bulaklak", correct: false},
            {text: "d) Pagluluto ng pagkain", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Hapís'?",
        answers: [
            {text: "a) Malungkot o puno ng pighati", correct: true},
            {text: "b) Isang relihiyosong samahan", correct: false},
            {text: "c) Lugar kung saan nagtatrabaho ang sundalo", correct: false},
            {text: "d) Lugar na imbakan ng kayamanan", correct: false}
        ]
    },
    {
        question: " Ano ang 'Guardía Civil'?",
        answers: [
            {text: "a) Mga sundalong nagbabantay sa libingan", correct: false},
            {text: "b) Grupo ng pulis noong panahon ng Espanyol", correct: true},
            {text: "c) Tagabantay ng mga hayop sa sakahan", correct: false},
            {text: "d) Isang grupo ng mang-aawit sa misa", correct: false}
        ]
    },
    {
        question: "Ano ang 'Tanikalâ'?",
        answers: [
            {text: "a) Bakal na kadena na ginagamit panggapós", correct: true},
            {text: "b) Isang uri ng sumbrero na malapad ang gilid", correct: false},
            {text: "c) Bahagi ng bahay sa pagitan ng sahig at kisame", correct: false},
            {text: "d) Tunog na nililikha ng bagay sa mantika", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng 'Andás'?",
        answers: [
            {text: "a) Patungan para sa mga estatwa o imahe", correct: true},
            {text: "b) Lugar kung saan naninirahan ang sundalo", correct: false},
            {text: "c) Lugar ng pagdarasal tuwing gabi", correct: false},
            {text: "d) Tunog ng sigawan sa pista", correct: false}
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
