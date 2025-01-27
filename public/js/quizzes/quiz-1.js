const questions = [
    {
        question: "Paano ginamit ang salitang 'alapot' sa pangungusap mula sa akdang El Filibusterismo? 'Nakatayông ang paa’y nakabikakâ upáng makapanimbang warî, ang mg̃a kamáy ay nakapasok sa mg̃a alapót ng̃ kaniyáng chaqueta. 'Nakatayông ang paa’y nakabikakâ upáng makapanimbang warî, ang mg̃a kamáy ay nakapasok sa mg̃a alapót ng̃ kaniyáng chaqueta.'",
        answers: [
            {text: "a) Bilang dekorasyon ng chaqueta", correct: false},
            {text: "b) Bilang bulsa ng chaqueta", correct: true},
            {text: "c) Bilang tela ng chaqueta", correct: false},
            {text: "d) Bilang bahagi ng disenyo ng chaqueta", correct: false}
        ]
    },
    {
        question: "Sa pangungusap mula sa akdang El Filibusterismo, paano ginamit ang salitang 'cubierta'? 'Sa ilalim ng̃ cubierta ay nang̃agdung̃aw ang mg̃a mukhâng kayumanggí at maiitim ng̃ mg̃a taga rito, mg̃a insík at mestiso na nagkakasiksikang kasama ng̃ mg̃a lulang kalakal at mg̃a kabán, samantalang sa itaás, sa ibabaw ng̃ cubierta at sa lilim ng̃ isáng panambil na nagtatanggol sa kanilá sa init ng̃ araw, ay nang̃akaupô sa maginhawang luklukan ang iláng sakáy na suot taga Europa.'",
        answers: [
            {text: "a) Bahagi ng bangka o barko na nagsisilbing silungan para sa mga pasahero at kargamento", correct: true},
            {text: "b) Isang uri ng kasuotan ng mga taga-Europa", correct: false},
            {text: "c) Bahagi ng kagubatan na nagtatakip sa sikat ng araw", correct: false},
            {text: "d) Isang pamagat ng aklat na binanggit sa akda", correct: false}
        ]
    },
    {
        question: "Paano ginamit sa pangungusap sa akdang El Filibusterismo ang salitang 'ikinabuwal'? 'Minsa’y sa pagsunód sa daáng itinuturò ng̃ iláng kawayang nakatirik sa ilog ay lumalakad ng̃ boông kasiyahang loób ang bapor; ng̃unì’t ang isáng biglâng pagkakabagók ay kauntî nang ikinabuwal ng̃ mg̃a sakáy.'",
        answers: [
            {text: "a) a. Ginamit ito upang ipakita ang malubhang epekto ng pagkakabagok sa mga sakay ng bapor.", correct: false},
            {text: "b) Inilalarawan nito ang pagkawala ng balanse ang mga sakay ng bapor dahil sa biglaang sagabal.", correct: true},
            {text: "c) Tumutukoy ito sa damdamin ng mga sakay matapos maapektuhan ng pagkakabagok.", correct: false},
            {text: "d) Ginamit ito upang ilarawan ang biglaang pagkasira ng bapor.", correct: false}
        ]
    },
    {
        question: "Paano ginamit sa akdang El Filibusterismo ang salitang 'bagol' sa pangungusap? 'Ang bapor ay may anyông bagól, halos bilóg na warì’y tabò na siyáng pinanggaling̃an ng̃ kaniyang pang̃alan; nápakarumí kahit na may nasà siyang magíng maputî, malumanay at warìng nagmamalakí dahil sa kaniyang banayad na lakad.'",
        answers: [
            {text: "a) Ginamit upang ilarawan ang hugis ng bapor na bilog at kahawig ng isang tabo.", correct: true},
            {text: "b) Ginamit upang ipakita ang bilis at lakas ng bapor sa paglalayag.", correct: false},
            {text: "c) Ginamit upang ipakita ang linis at makinis na anyo ng bapor.", correct: false},
            {text: "d) Ginamit upang ipahayag ang damdamin ng galit ng may-akda sa bapor.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'burak' sa pangungusap sa akdang El Filibusterismo? 'Ng̃unì’t ang isáng biglâng pagkakabagók ay kauntî nang ikinabuwal ng̃ mg̃a sakáy; nápadumog sa isáng burak na mababaw na hindî hinihinalà nino man.'",
        answers: [
            {text: "a) Tumutukoy ito sa malalim na bahagi ng ilog.", correct: false},
            {text: "b) Isang uri ng halaman sa tabing-ilog.", correct: false},
            {text: "c) Putik o mababaw na lugar na basa at malambot.", correct: true},
            {text: "d) Isang bundok o mataas na lugar na madulas.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'himagsikan' sa pangungusap? 'Warìng isáng matandâng kawal, na matapos mamunò sa mg̃a tao sa isáng maligalig na himagsikan, ay nagíng taga pag-alagà, ng̃ tumandâ, ng̃ batàng masumpung̃in, matigás ang ulo at tamád.'",
        answers: [
            {text: "a) Bilang isang simbolo ng pagbabago at tagumpay", correct: false},
            {text: "b) Bilang paglalarawan sa magulong panahong pinagdaanan ng matandang kawal", correct: true},
            {text: "c) Bilang paraan ng pagbibigay-diin sa tamad at masumpunging bata", correct: false},
            {text: "d) Bilang pagsasalarawan sa mapayapang panahon", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'lulan' sa pangungusap? 'Isáng umaga ng̃ Disiembre ay hiráp na sumasalung̃a sa palikólikông linalakaran ng̃ ilog Pasig ang bapor Tabò, na may lulang maraming tao, na tung̃o sa Lalaguna.'",
        answers: [
            {text: "a) Tumutukoy sa dami ng kargamento sa bapor Tabò", correct: false},
            {text: "b) Nagpapahiwatig na ang bapor Tabò ay may sakay na mga tao", correct: true},
            {text: "c) Ipinapakita ang bilis ng paglalakbay ng bapor Tabò", correct: false},
            {text: "d) Nagsasaad ng direksyong patutunguhan ng bapor Tabò", correct: false}
        ]
    },
    {
        question: "Paano ginamit sa pangungusap ang salitang 'maigkas' sa akdang El Filibusterismo? 'Balót ng̃ liwanag sa umaga, hayo na ang maputî niyang katawán (na iniwawasiwas ang maitim na usok) na nagpapagaláw sa alon ng̃ ilog at nagpapaawit sa hang̃in sa mg̃a maigkás na kawayang nasa sa magkábilang pangpáng.'",
        answers: [
            {text: "a) Tumutukoy ito sa matibay at matigas na kawayang nakikita sa magkabilang pampang.", correct: false},
            {text: "b) Inilalarawan nito ang mabilis at magilas na paggalaw ng mga kawayan na nakikita sa magkabilang pampang.", correct: true},
            {text: "c) Ipinapakita nito ang tahimik at hindi gumagalaw na anyo ng kawayan sa magkabilang pampang.", correct: false},
            {text: "d) Tinutukoy nito ang malalambot at madaling mabali na kawayan sa magkabilang pampang.", correct: false}
        ]
    },
    {
        question: "'Minsa’y sa pagsunód sa daáng itinuturò ng̃ iláng kawayang nakatirik sa ilog ay lumalakad ng̃ boông kasiyahang loób ang bapor; ng̃unì’t ang isáng biglâng pagkakabagók ay kauntî nang ikinabuwal ng̃ mg̃a sakáy.' Paano ginamit sa pangungusap sa akdang El Filibusterismo ang salitang 'ikinabuwal'?",
        answers: [
            {text: "a) Ginamit ito upang ipakita ang malubhang epekto ng pagkakabagok sa mga sakay ng bapor.", correct: false},
            {text: "b) Inilalarawan nito ang pagkawala ng balanse ang mga sakay ng bapor dahil sa biglaang sagabal.", correct: true},
            {text: "c) Tumutukoy ito sa damdamin ng mga sakay matapos maapektuhan ng pagkakabagok.", correct: false},
            {text: "d) Ginamit ito upang ilarawan ang biglaang pagkasira ng bapor.", correct: false}
        ]
    },
    {
        question: "'Isáng umaga ng̃ Disiembre ay hiráp na sumasalung̃a sa palikólikông linalakaran ng̃ ilog Pasig ang bapor Tabò, na may lulang maraming tao, na tung̃o sa Lalaguna.' Paano ginamit sa pangungusap sa akdang El Filibusterismo ang salitang 'bapor Tabò'?",
        answers: [
            {text: "a) Ang bapor Tabò ay isang lumang barko na ginagamit para sa mabilis na paglalakbay sa ilog Pasig.", correct: false},
            {text: "b) Ang bapor Tabò ay inilarawan bilang isang barko na naglalakbay sa liku-likong ilog na may kahirapan.", correct: true},
            {text: "c) Ang bapor Tabò ay ginamit bilang simbolo ng katiwasayan at kaayusan sa ilog Pasig.", correct: false},
            {text: "d) Ang bapor Tabò ay isang makabagong sasakyang-pandagat na simbolo ng progreso sa Pilipinas.", correct: false}
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
