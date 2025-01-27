const questions = [
    {
        question: "Sa pangungusap na 'Nang tinawag ng guro ang kanyang pangalan, agad siyang tumayo at sumagot ng adsum bilang tanda ng kanyang presensya.' Paano ginamit ang salitang adsum?",
        answers: [
            {text: "a) Bilang pangalan ng isang tao.", correct: false},
            {text: "b) Bilang pagpapahayag ng presensya.", correct: true},
            {text: "c) Bilang panawag sa guro.", correct: false},
            {text: "d) Bilang lugar na pinuntahan.", correct: false}
        ]
    },
    {
        question: "Ano ang salitang 'bachillerato'",
        answers: [
            {text: "a) Bilang isang antas ng edukasyon", correct: true},
            {text: "b) Bilang pangalan ng isang tao", correct: false},
            {text: "c) Bilang isang aklat na binabasa", correct: false},
            {text: "d) Bilang isang lugar na pinuntahan", correct: false}
        ]
    },
    {
        question: "'Sa kabila ng gulagulanit na kalagayan ng kanyang kwarto, natagpuan pa rin niya ang mga bagay na kailangan niyang dalhin.' Paano ginamit ang salitang 'gulagulanit' sa pangungusap?",
        answers: [
            {text: "a) Bilang pang-uri upang ilarawan ang kalagayan ng isang kwarto.", correct: true},
            {text: "b) Bilang pangngalan upang tukuyin ang isang partikular na bagay.", correct: false},
            {text: "c) Bilang pandiwa upang ipakita ang aksyon ng pagkakaroon ng kalat.", correct: false},
            {text: "d) Parehonh tamang sagot sa a at b", correct: false}
        ]
    },
    {
        question: "'Sa kabila ng mga kagatol-gatol ng buhay, nagpatuloy siya sa kanyang layunin.' Paano ginamit ang salitang 'kagatol-gatol' sa pangungusap?",
        answers: [
            {text: "a) Bilang isang salitang naglalarawan ng pisikal na sakit.", correct: false},
            {text: "b) Bilang isang paglalarawan ng mga paghihirap at pagsubok sa buhay.", correct: true},
            {text: "c) Bilang isang salitang naglalarawan ng hindi pagkakaayos ng mga bagay.", correct: false},
            {text: "d) Bilang isang salitang naglalarawan ng tamis o saya.", correct: false}
        ]
    },
    {
        question: "'Nasa kapararakan ng kanyang mga kasalanan ang mahihirapan siya.' Paano ginamit ang salitang 'kapararakan' sa pangungusap?",
        answers: [
            {text: "a) Bilang isang pag-asa", correct: false},
            {text: "b) Bilang isang parusa o kalupitan", correct: true},
            {text: "c) Bilang isang tagumpay", correct: false},
            {text: "d) Bilang isang kasiyahan", correct: false}
        ]
    },
    {
        question: "'Ang karuahe ay tumigil sa harap ng bahay ni Don Custodio.' Paano ginamit ang salitang 'karuahe' sa pangungusap?",
        answers: [
            {text: "a) Tumutukoy sa sasakyan na ginagamit pang-transportasyon.", correct: true},
            {text: "b) Tumutukoy sa uri ng hayop na ginagamit sa saksi.", correct: false},
            {text: "c) Tumutukoy sa lugar kung saan nakaparada ang sasakyan.", correct: false},
            {text: "d) Tumutukoy sa isang opisyal na pamamahagi ng mga yaman.", correct: false}
        ]
    },
    {
        question: "'Ang mga mag-aaral ay nagsipagtipon sa katedratikong klase upang pag-usapan ang mga ideya ng rebolusyon.' Paano ginamit ang salitang 'katedratiko' sa pangungusap?",
        answers: [
            {text: "a) Nagpapakita ito ng isang lugar ng pag-aaral.", correct: false},
            {text: "b) Nagpapakita ito ng isang klase ng pagtuturo.", correct: true},
            {text: "c) Nagpapakita ito ng isang aralin na itinuro sa isang hindi pang-akademikong paraan.", correct: false},
            {text: "d) ", correct: false}
        ]
    },
    {
        question: "'Kinasisindakan siya ng balita tungkol sa mga mangyayaring pagbabago sa kanilang bayan.' Paano ginamit ang salitang 'kinasisindakan' sa pangungusap?",
        answers: [
            {text: "a) Nagpapakita ng takot at pangamba.", correct: true},
            {text: "b) Nagpapakita ng kasiyahan at pag-asa.", correct: false},
            {text: "c) Nagpapakita ng pagiging matapang.", correct: false},
            {text: "d) Nagpapakita ng kasiglahan at kagalakan.", correct: false}
        ]
    },
    {
        question: "'Nakita ko sa isang sulok si Don Custodio na may suot na kiyas na nagmukhang isang tunay na mayamang tao.' Paano ginamit ang salitang 'kiyas' sa pangungusap?",
        answers: [
            {text: "a) Tumutukoy ito sa mga alahas na isinusuot ng isang tao.", correct: false},
            {text: "b) Tumutukoy ito sa mga kasuotan o pananamit.", correct: true},
            {text: "c) Tumutukoy ito sa isang uri ng pagkain.", correct: false},
            {text: "d) Tumutukoy ito sa isang uri ng sasakyan.", correct: false}
        ]
    },
    {
        question: "'Ang guro ay nagpasya na hindi na mag-aral pa ng mabuti sapagkat ayaw niyang gumugol ng kuwalta.' Paano ginamit ang salitang 'kuwalta' sa pangungusap?",
        answers: [
            {text: "a) Halaga ng isang bagay.", correct: false},
            {text: "b) Nagpapahiwatig ng pisikal na salapi.", correct: true},
            {text: "c) isang pook na kinatatayuan ng mga negosyo.", correct: false},
            {text: "d) Maling sagot ang b at c", correct: false}
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
