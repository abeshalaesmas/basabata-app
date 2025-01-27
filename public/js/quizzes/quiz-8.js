const questions = [
    {
        question: "Paano ginamit ang salitang 'aginaldo' sa pangungusap na ito? 'Ang aginaldo ng kura sa kanyang mga kababayan ay isang sermon na humikayat sa kanila na magtiis para sa kabutihan ng bayan.'",
        answers: [
            {text: "a) Isang regalo na materyal na ibinigay sa mga tao.", correct: false},
            {text: "b) Isang handog na sermon para sa kabutihan ng bayan.", correct: true},
            {text: "c) Isang sermon tungkol sa pananampalataya.", correct: false},
            {text: "d) Isang babala para sa mga mamamayan.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'agnos' sa pangungusap na ito? 'Si Juli ay nagbigay ng kanyang agnos bilang panalangin para sa kaligtasan ng kanyang ama mula sa bilangguan.'",
        answers: [
            {text: "a) Palamuti na isinabit sa bahay", correct: false},
            {text: "b) Relikaryong iniwan bilang tanda ng panalangin", correct: true},
            {text: "c) Medalya para sa karangalan", correct: false},
            {text: "d)  Alahas na ginamit bilang pampaganda", correct: false}
        ]
    },
    {
        question: "",
        answers: [
            {text: "a) Ginamit bilang lugar kung saan naglalaba at naliligo.", correct: true},
            {text: "b) Tumutukoy sa isang palasyo na tinutuluyan ng mayayaman.", correct: false},
            {text: "c) Isang maliit na tulay sa tabi ng bahay.", correct: false},
            {text: "d) Tawag sa panlabas na bahagi ng kusina.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'benindisionan' sa pangungusap. 'Benindisionan ng pari ang kalesa na gagamitin sa prusisyon upang humiling ng ligtas na paglalakbay.'",
        answers: [
            {text: "a) Ang kalesa ay sinira ng pari.", correct: false},
            {text: "b)  Ang kalesa ay itinayo ng pari.", correct: false},
            {text: "c) Ang pari ay nagmamay-ari ng kalesa.", correct: false},
            {text: "d) Ang kalesa ay binasbasan ng pari", correct: true}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'durungawan' sa pangungusap na ito? 'Sa durungawan ng kumbento, tahimik na nagmamasid si Padre Florentino sa malawak na dalampasigan.'",
        answers: [
            {text: "a) Bilang isang lugar na pinagmamasdan ng mga tao", correct: false},
            {text: "b) Bilang isang bahagi ng kumbento na ginagamit para sa pagmamasid", correct: true},
            {text: "c) Bilang isang pinto na pasukan ng mga tao", correct: false},
            {text: "d) Bilang isang kagamitan para sa paglalakbay", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'hungkoy' sa pangungusap na ito? 'Ang labis na pag-asa sa mga maling pangako ang nagdala sa kanya sa matinding hungkoy ng buhay.'",
        answers: [
            {text: "a) Bilang isang kasangkapan", correct: false},
            {text: "b) Bilang isang damdamin", correct: false},
            {text: "c) Bilang isang kalagayan o kabiguan", correct: true},
            {text: "d) Bilang isang lugar", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'kagaslawan' sa pangungusap na ito sa Kabanata VIII ng El Filibusterismo? 'Nakita sa kagaslawan ng mga kabataan ang kasiglahan at saya sa kanilang pagkilos.'",
        answers: [
            {text: "a) Tumutukoy sa pagiging maayos ng kilos ng kabataan.", correct: false},
            {text: "b) Tumutukoy sa pagiging masigla at malikot ng kabataan.", correct: true},
            {text: "c) Tumutukoy sa kanilang tahimik na pag-uugali.", correct: false},
            {text: "d)  Tumutukoy sa pagiging malungkot at seryoso ng kabataan.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'kahapishapis' sa pangungusap. 'Sa gitna ng kanyang kahapishapis na kalagayan, walang ibang nagmalasakit sa kanya kundi ang alingawngaw ng kanyang pagdaing.'",
        answers: [
            {text: "a) Inilalarawan ang kanyang labis na kalungkutan at paghihirap.", correct: ftrue},
            {text: "b) Nagpapakita ng kasayahan sa kanyang sitwasyon.", correct: false},
            {text: "c) Nagtuturo ng tapang sa harap ng pagsubok.", correct: fals},
            {text: "d) Nagpapakita ng kawalang-interes sa kanyang paligid.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'kamisola' sa pangungusap na ito? 'Sa kabanata VIII ng El Filibusterismo, ang mga kababaihan ay nagsusuot ng kamisola habang nakaupo sa harap ng simbahan at nag-aabang ng mga mangyayari.'",
        answers: [
            {text: "a) Ito ay isang uri ng damit na isinusuot ng mga kalalakihan.", correct: false},
            {text: "b) Isang partikular na lugar na tinutukoy sa kabanata.", correct: false},
            {text: "c) Isang uri ng damit na isinusuot ng mga kababaihan.", correct: true},
            {text: "d) Isang pangalang pantangi ng isang karakter.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'katugon' sa sumusunod na pangungusap mula sa El Filibusterismo? 'Ang mga tinuran ng mag-aaral ay nagsilbing katugon sa mga katanungan ng guro.'",
        answers: [
            {text: "a) Tumutukoy ito sa isang bagay na hindi tugma sa pangangailangan.", correct: false},
            {text: "b) Tumutukoy ito sa kasagutan sa isang tanong.", correct: true},
            {text: "c) Tumutukoy ito sa isang bagay na wala nang kaugnayan sa paksa.", correct: false},
            {text: "d) Tumutukoy ito sa isang ideya na hindi maipaliwanag.", correct: false}
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
