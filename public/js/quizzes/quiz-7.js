const questions = [
    {
        question: "'Warìng hinalungkat ng̃ anino ang mg̃a bulsá at pagkatapos ay tumung̃ó upang ikamá ang dahon ng̃ isáng asaról sa isáng malakíng tungkód: nagulat si Basilio ng̃ makitang kaanyô yaon ng̃ mag-aalahás na si Simoun.' Paano ginamit ang salitang 'asarol' sa pangungusap mula sa El Filibusterismo?",
        answers: [
            {text: "a) Bilang isang simbolo ng trabaho sa bukid", correct: false},
            {text: "b) Bilang bahagi ng paghahanda ng lupa sa pagtatanim", correct: false},
            {text: "c) Bilang kasangkapan na ginamit sa pagpapakilala ng mag-aalahas", correct: true},
            {text: "d) Bilang gamit sa pagpapanday ng alahas", correct: false}
        ]
    },
    {
        question: "'Banayad ang kanyang pananalita, ngunit may bigat ang bawat salitang binitiwan niya.' Paano ginamit ang salitang 'banayad' sa pangungusap?",
        answers: [
            {text: "a) Maingay at magaspang ang pananalita", correct: false},
            {text: "b) Maingat at malumanay ang pananalita", correct: true},
            {text: "c) Walang pakialam sa mga sinasabi", correct: false},
            {text: "d) Madalian at pabigla-bigla ang pananalita", correct: false}
        ]
    },
    {
        question: "'Ang siyam sa bawà’t sampû ninyóng nag-aakalàng kayó’y mg̃a bihasá, ay pawàng tumakwíl sa inyóng tinubùan.' Paano ginamit ang salitang 'bihasa' sa pangungusap na ito?",
        answers: [
            {text: "a) Bilang isang pagsasalarawan sa pagiging eksperto o bihasa sa isang bagay.", correct: true},
            {text: "b) Bilang pagtukoy sa isang tao na bihasa sa pakikisalamuha.", correct: false},
            {text: "c) Bilang isang termino para sa isang grupong hindi marunong.", correct: false},
            {text: "d) Tama ang sagot sa a at c", correct: false}
        ]
    },
    {
        question: "'Sino ang makapagsasabi, mg̃a ginoo, kung hindî ipalagáy ng̃ pamahalàan na kayó’y dulutan ng̃ mabuting condecoración dahil sa kayó’y karapatdapat sa kapurihán ng̃ inyóng bayan!'",
        answers: [
            {text: "a) Ipinagkaloob", correct: true},
            {text: "b) Pinipilit na ibigay", correct: false},
            {text: "c) Nagpapakita ng kakulangan", correct: true},
            {text: "d) Iniiwasan na maibigay", correct: false}
        ]
    },
    {
        question: "'Datapwat gayon man, ang mgga binatang iyon ay mgga ganid na loob, mgga wala sa katwiran!' Paano ginamit ang salitang 'ganid' sa pangungusap?",
        answers: [
            {text: "a) Tumutukoy sa mga taong masyadong matakaw sa pagkain.", correct: false},
            {text: "b) Tumutukoy sa mga binatang walang malasakit at makasarili.", correct: true},
            {text: "c) Tumutukoy sa mga binatang nagtatangkang maghanap ng kaalaman.", correct: false},
            {text: "d)  Tumutukoy sa mga binatang may magandang intensyon at layunin.", correct: false}
        ]
    },
    {
        question: "'Makailáng kong tinangkâ ang lumapit sa inyó, hubdín ang pagbabálatkayô at pawìin ang inyóng pagkakamalí!' Paano ginamit ang salitang 'hubdin' sa pangungusap?",
        answers: [
            {text: "a) Alisin ang pagpapanggap o pagkukunwari", correct: true},
            {text: "b) Tanggalin ang mga kasuotan", correct: false},
            {text: "c) Alisin ang pagkakamali", correct: false},
            {text: "d) Hubarin ang mga kagamitan", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'iaboy' sa pangungusap? 'Ngayon’y nanumbalik ako upang durugin ang pamamahalang iyan, padaliin ang kaniyang pagkabulok, iaboy sa bangin tinutunguhang, kahit na kailangang kong gamitin ang pagbaha ng luha at dugo.'",
        answers: [
            {text: "a) Itapon upang magdulot ng pagkatalo", correct: true},
            {text: "b) Itapon upang magsimula ng pagbabago", correct: false},
            {text: "c) Ihagis upang pabilisin ang pagkalugi", correct: false},
            {text: "d) Ihagis upang magdulot ng pagkamatay", correct: false}
        ]
    },
    {
        question: " Paano ginamit ang salitang 'inaandukha' sa pangungusap na ito? 'Mabuti na lamang at ang inyóng pagsasarilí’y sadyâng dáratíng: ¡inaandukhâ siyá ng̃ mg̃a kalaswâán ng̃ tao!'",
        answers: [
            {text: "a) Ipinagpapalagay na siya ay makatatagpo ng kasamahan.", correct: false},
            {text: "b) Inaasahan niya ang pagdating ng mga kalaswaang dulot ng tao.", correct: true},
            {text: "c) Inaakala niyang magiging maganda ang kalalabasan.", correct: false},
            {text: "d) Inaungkahi niyang magtakda ng bagong batas.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'kabangawan' sa pangungusap na ito? 'Isáng kabang̃awán ang akitin ang pag-iisip ng̃ mg̃a namamahalà.'",
        answers: [
            {text: "a) Isang lugar kung saan nakatanim ang mga halaman", correct: false},
            {text: "b) Isang uri ng kaguluhan sa lipunan", correct: false},
            {text: "c) Isang matinding kalungkutan na nagiging sanhi ng pag-aalala", correct: true},
            {text: "d) Isang matagumpay na pagdiriwang ng mga lider", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'lagitlit' sa pangungusap na ito? 'Náding̃íg ang lagitlit ng̃ isang armás na iniakmâ.'",
        answers: [
            {text: "a) Tunog ng armás na tumama sa isang bagay", correct: false},
            {text: "b) Tunog ng isang bagay na tumama sa hangin", correct: false},
            {text: "c) Tunog ng isang armás na iniakmâ o itinutok", correct: true},
            {text: "d) Tunog ng isang bagay na naputol", correct: false}
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
