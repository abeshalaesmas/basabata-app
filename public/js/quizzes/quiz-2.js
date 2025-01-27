const questions = [
    {
        question: "Paano ginamit sa pangungusap ang salitang 'curato' sa akdang El Filibusterismo? 'Ang sabi:—walâ akóng masamâng tangkâ, ng̃unì’t sa dahiláng pinatibayan sa akin, na ang lahát ng̃ curato ay nasa kamáy ng̃ mg̃a klérigong taga rito, aní ko, ay: ang mg̃a prayle ay nagpapakamatáy sa isáng curato at pinasasalamatan na ng̃ mg̃a pransiskano yaong pinakamarálitâ.'",
        answers: [
            {text: "a) Bilang isang lugar na pinangangasiwaan ng mga pari o klero", correct: true},
            {text: "b) Bilang simbolo ng kapangyarihan ng mga prayle sa lipunan", correct: false},
            {text: "c) Bilang isang makapangyarihang nilalang na nauugnay sa simbahan", correct: false},
            {text: "d) Bilang isang personal na katangian ng mga klerigo", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang ;ikatitighaw; sa pangungusap mula sa El Filibusterismo? 'Siyá, mg̃a ginoo, halina kayóng magsiinóm ng̃ serbesa, patungkol sa ikatitigháw ng̃ Lalawigan!'",
        answers: [
            {text: "a) Pag-aalok ng kasiyahan o kaligayahan", correct: false},
            {text: "b) Pagpapalakas ng loob o damdamin", correct: false},
            {text: "c) Pagpapalabas ng pagkauhaw o pagsasanggalang", correct: true},
            {text: "d) Pagbibigay ng kalutasan sa pangangailangan ng mga tao", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'liyo' sa pangungusap sa akdang El Filibusterismo? 'Sa isáng súlok, nagkakapipisang warì’y bangkáy, ay natutulog ó nagtátangkâng [19]matulog ang iláng insík na mámimili, mg̃a liyó, nang̃amumutlâ, sumasago ang laway sa mg̃a nakang̃ang̃áng bibíg, at naliligò sa malagkít na pawis ng̃ kaniláng katawán.'",
        answers: [
            {text: "a) Ang 'liyo' ay tumutukoy sa mga tao na malinis at maayos.", correct: false},
            {text: "b) Ang 'liyo' ay tumutukoy sa mga tao na may sakit at mahihina.", correct: true},
            {text: "c) Ang 'liyo' ay tumutukoy sa mga kabataang masigla at malusog.", correct: false},
            {text: "d) Ang 'liyo' ay tumutukoy sa mga mangangalakal na matataas ang kalagayan.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'magkababág' sa pangungusap mula sa El Filibusterismo? 'Kamí ay tubig at kayó’y apóy \nang wikà ninyó; ¡kamí’y sang-ayon! \nmamuhay tayo ng̃ mahinaho’t \nhuwag patanáw sa sunog, ng̃ayón, \nna magkababág! Kun di magtulong \nsa lilim niyong bihasang dunong.'",
        answers: [
            {text: "a) Magkaibang pananaw o layunin", correct: false},
            {text: "b) Pagkakasunduan at pagtutulungan", correct: false},
            {text: "c) Pagkakaroon ng pagkakaiba", correct: true},
            {text: "d) Pagtutol sa isang ideya", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang 'magyao' sa pangungusap na ginamit sa akdang El Filibusterismo?",
        answers: [
            {text: "a) Magtungo sa ibang dako", correct: true},
            {text: "b) Magsimula ng isang bagay", correct: false},
            {text: "c) Maglakbay nang magaan", correct: false},
            {text: "d) Magpahinga mula sa pag-aaral", correct: false}
        ]
    },
    {
        question: "Paano ginamit sa pangungusap ang salitang 'makiyas' sa akdang El Filibusterismo? 'Ang sigáw ni Sandoval—iwasan natin ang mg̃a pagtatalong walâng katuturán, ang mg̃a salitáng walâng kabuluhán, at tumung̃o tayo sa mg̃a pangyayari—ang dugtóng na sinabayán ng̃ makiyás na kilos ang pagsasalitâ—Mg̃a pangyayari, mg̃a ginoo, mg̃a pangyayari; ang hindî gayón ay mg̃a hulòhulòng dî ko ibig tawaging pilibustero.'",
        answers: [
            {text: "a) Nagpapakita ng kasayahan at kasiglahan.", correct: false},
            {text: "b) Nagpapakita ng kalmado at hindi pagkabahala.", correct: false},
            {text: "c) Nagpapakita ng lakas at tapang sa pagsasalita.", correct: false},
            {text: "d) Nagpapakita ng kaaya-aya, marangal, o maayos na tindig.", correct: true}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'mawatasan' sa pangungusap mula sa El Filibusterismo? 'Sinísikó kitá, é: ¿hindî mo nálalamang ang tawag diyan ay Cardenal Moreno? \n—Cardenal Moreno? \n—O Eminencia negra, kung papaano mo ibig. \n—Hindî kitá máwatasan!'",
        answers: [
            {text: "a) Nangangahulugang hindi maintindihan.", correct: true},
            {text: "b) Nangangahulugang hindi makakamtan ang isang bagay.", correct: false},
            {text: "c) Nangangahulugang magbigay ng tulong o suporta.", correct: false},
            {text: "d) Nangangahulugang magtanggol o magsalita para sa isang tao.", correct: false}
        ]
    },
    {
        question: "Ano ang ibig sabihin ng salitang 'pasuwit' sa pangungusap na ginamit sa El Filibusterismo? 'Tinátanáw na matahimik ng̃ ilán ang sarìsarìng anyô ng̃ mg̃a pangpang̃in sa gitnâ ng̃ dagundóng ng̃ mg̃a pala, ing̃ay ng̃ mákina, sagitsít ng̃ nakatatanang sing̃áw, buluwák ng̃ tubig na nahahalò, pasuwít ng̃ pakakak.'",
        answers: [
            {text: "a) Tunog ng pakakak", correct: true},
            {text: "b) Huni ng ibon", correct: false},
            {text: "c) Paglipad ng pakakak", correct: false},
            {text: "d) Pakpak ng pakakak", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'maralita' sa pangungusap mula sa akdang El Filibusterismo? 'Ang mg̃a prayle ay nagpapakamatáy sa isáng curato at pinasasalamatan na ng̃ mg̃a pransiskano yaong pinakamarálitâ, kayâ’t pag ganyáng ipinauubayà nilá sa mg̃a klérigo ay sa dahiláng doon ay hindî kilalá ang mukhâ ng̃ harì.'",
        answers: [
            {text: "a) Isang mataas na uri ng tao.", correct: false},
            {text: "b) Mga taong hindi nakikilala o hindi kilala.", correct: false},
            {text: "c) Mga tao na walang kayamanan at nabibilang sa mababang uri ng lipunan.", correct: true},
            {text: "d) Isang uri ng kapangyarihan.", correct: false}
        ]
    },
    {
        question: "Paano ginamit ang salitang 'tampipi' sa pangungusap mula sa El Filibusterismo? 'Nang̃akaupô sa bangkô at sa maliliít na luklukang kahoy, kasalamuhà ng̃ mg̃a maleta, bakol at tampipì, sa kalapít ng̃ mákina, init ng̃ kaldera, sing̃áw ng̃ katawáng tao at mabahòng amóy ng̃ lang̃ís, ay naroon ang lalòng makapál na taong sakáy.'",
        answers: [
            {text: "a) Isang uri ng kahon na ginagamit sa mga gamit", correct: false},
            {text: "b) Isang uri ng bag na ginagamit sa paglalakbay", correct: true},
            {text: "c) Isang uri ng pagkain na ginagamit sa mga handaan", correct: false},
            {text: "d) Isang uri ng damit na ginagamit sa malamig na panahon", correct: false}
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
