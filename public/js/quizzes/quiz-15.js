const questions = [
    {
        question: "'Ang mga kabataang tulad ni Basilio ay nakasususo mula sa mga magulang, at umaasa silang makakatawid sa mas magandang buhay.' Ano ang ibig sabihin ng salitang 'nakasususo'?",
        answers: [
            {text: "a) Pagtulong o pagkilos na may malasakit", correct: false},
            {text: "b) Pag-akyat sa kalagayan o estado ng buhay", correct: true},
            {text: "c) Tunog na malakas o patuloy", correct: false},
            {text: "d) Opisina o tanggapan ng isang abogado", correct: false}
        ]
    },
    {
        question: "'Sa harap ng mga mag-aaral, ipinamalas ni Padre Florentino ang mahusay na retorika sa kanyang talumpati tungkol sa kalayaan.' Ano ang ibig sabihin ng salitang 'retorika'?",
        answers: [
            {text: "a) Pagbibigay diin o pagpapakita ng kahalagahan ng isang bagay", correct: false},
            {text: "b) Ang sining ng pagsasalita o pagtatalo", correct: true},
            {text: "c) Malapit o katabi", correct: false},
            {text: "d) Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya", correct: false}
        ]
    },
    {
        question: "'Habang nag-iisip ng mga hakbang, tumungo si Simoun sa kanyang bufete upang magsimula ng mga legal na proseso.' Ano ang ibig sabihin ng salitang 'retorika'?",
        answers: [
            {text: "a) Pagbibigay diin o pagpapakita ng kahalagahan ng isang bagay", correct: true},
            {text: "b) Ang sining ng pagsasalita o pagtatalo", correct: false},
            {text: "c) Malapit o katabi", correct: false},
            {text: "d) Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya", correct: false}
        ]
    },

    {
        question: "'Ang mga usaping ipinapahayag ni Simoun ay puno ng pagpapasigíd, upang ipakita ang malaking epekto ng mga katiwalian sa bansa.' Ano ang ibig sabihin ng salitang 'pagpapasigíd'?",
        answers: [
            {text: "a) Pagbibigay diin o pagpapakita ng kahalagahan ng isang bagay", correct: true},
            {text: "b) Pag-akyat sa kalagayan o estado ng buhay", correct: false},
            {text: "c) Malapit o katabi", correct: false},
            {text: "d) Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya", correct: false}
        ]
    },
    {
        question: "'Si Basilio ay naglakad patungo sa tahanan ng kanyang kanugnóg upang magtanong ng mga detalye ukol sa paghihiganti.' Ano ang ibig sabihin ng salitang 'kanugnóg'?",
        answers: [
            {text: "a) Malapit, katabi", correct: true},
            {text: "b) Opisina o tanggapan ng isang abogado", correct: false},
            {text: "c) Pagbuo o paggawa ng plano", correct: false},
            {text: "d) Pagpapaamo o pagpapatawad", correct: false}
        ]
    },
    {
        question: "Ang condesa na ito ay may mataas na posisyon sa lipunan, kaya't ang kanyang opinyon ay malaki ang timbang.' Ano ang ibig sabihin ng salitang 'condesa'?",
        answers: [
            {text: "a) Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya", correct: true},
            {text: "b) Tunog na malakas o patuloy", correct: false},
            {text: "c) Pagtulong o pagkilos na may malasakit", correct: false},
            {text: "d) Pagbuo o paggawa ng plano", correct: false}
        ]
    },
    {
        question: "'Si Basilio ay patuloy sa kanyang pang̃ang̃ayupapà, nagtutulungan ang mga tao upang makamit ang kanilang mga layunin.' Ano ang ibig sabihin ng salitang 'pang̃ang̃ayupapà'?",
        answers: [
            {text: "a) Pagtulong o pagkilos na may malasakit", correct: true},
            {text: "b) Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya", correct: false},
            {text: "c) Pag-akyat sa kalagayan o estado ng buhay", correct: false},
            {text: "d) Pagbuo o paggawa ng plano", correct: false}
        ]
    },
    {
        question: "'Bago magdesisyon, kailangan ni Simoun ng munakalà upang maayos niyang maipasa ang kanyang plano sa mga kasamahan.'  Ano ang ibig sabihin ng salitang 'munakalà'?",
        answers: [
            {text: "a) Pagbuo o paggawa ng plano", correct: true},
            {text: "b) Pagbibigay diin o pagpapakita ng kahalagahan ng isang bagay", correct: false},
            {text: "c) Pagtulong o pagkilos na may malasakit", correct: false},
            {text: "d) Tunog na malakas o patuloy", correct: false}
        ]
    },
    {
        question: "'Habang si Simoun ay nagpapaliwanag, ang tunog ng mga gumágaralgal na tambol mula sa malapit na kalsada ay tila nagsisilbing hudyat ng mga pagbabagong darating.' Ano ang ibig sabihin ng salitang 'gumágaralgal'?",
        answers: [
            {text: "a) Tunog na malakas o patuloy", correct: true},
            {text: "b) Pagbuo o paggawa ng plano", correct: false},
            {text: "c) Malapit, katabi", correct: false},
            {text: "d) Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya", correct: false}
        ]
    },
    {
        question: "'Sa kabila ng mga pagkatalo at pagkabigo, si Maria Clara ay nagpakita ng pasaliwâ at ipinatawad ang mga nagkasala sa kanya.' Ano ang ibig sabihin ng salitang 'pasaliwâ'?",
        answers: [
            {text: "a) Pagpapaamo o pagpapatawad", correct: true},
            {text: "b) Pagbuo o paggawa ng plano", correct: false},
            {text: "c) Pag-akyat sa kalagayan o estado ng buhay", correct: false},
            {text: "d) Malapit, katabi", correct: false}
        ]
    }

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
