const words = [
    {
        "word": "Adorasyon",
        "meaning": "Ang mga deboto ay nagsama-sama sa simbahan para sa adorasyon sa Mahal na Birhen."
    },
    {
        "word": "Amat",
        "meaning": "Si P. Amat ay isang tanyag na guro sa larangan ng pilosopiya."
    },
    {
        "word": "Ampliación",
        "meaning": "Ang ampliación ng paaralan ay nagbigay ng karagdagang silid-aralan para sa mga estudyante."
    },
    {
        "word": "Anománg",
        "meaning": "Anománg nais mong gawin, siguruhing tama at makatarungan ito."
    },
    {
        "word": "Apúera de la fuerta",
        "meaning": " Nang matalo siya sa laro, sumigaw siya ng Apúera de la fuerta! sa inis."
    },
    {
        "word": "Baitang",
        "meaning": "Siya ay nasa ika-anim na baitang ng elementarya ngayong taon."
    },
    {
        "word": "Bantóg",
        "meaning": "Ang bantóg na makata ay nagbigay ng talumpati sa harap ng maraming tao."
    },
    {
        "word": "Budhî",
        "meaning": "Ang kanyang budhî ang nagtulak sa kanya upang magsabi ng totoo."
    },
    {
        "word": "Cánones",
        "meaning": "Ang mga cánones ng simbahan ay mahigpit na sinusunod ng mga parokyano."
    },
    {
        "word": "Camarón con cangrejo",
        "meaning": "Ang kanilang plano ay tila camarón con cangrejo—hindi malinaw at magulo."
    },
    {
        "word": "Concílio",
        "meaning": "Nagtipon ang mga lider ng simbahan para sa isang concílio upang talakayin ang mga usapin ng pananampalataya."
    },
    {
        "word": "Concedo antecedentum",
        "meaning": "Ang mga kasunduan ay sinimulan ng pahayag na Concedo antecedentum bilang tanda ng pagsang-ayon."
    },
    {
        "word": "Cosa",
        "meaning": "Ano ang pinakamahalagang cosa na iyong natutunan ngayong araw?"
    },
    {
        "word": "Dalíg",
        "meaning": "Ginamit niya ang isang makapal na tela bilang dalíg sa kanilang bagong mesa."
    },
    {
        "word": "Deus meus, Deus meus, quare dereliquiste me",
        "meaning": "Sa gitna ng kanyang paghihirap, nausal niya ang mga salitang Deus meus, Deus meus, quare dereliquiste me."
    },

];

function shuffleWord() {
    if (words.length === 0) return;

    const randomIndex = Math.floor(Math.random() * words.length);
    const word = words[randomIndex];

    document.getElementById('word').innerText = word.word;
    document.getElementById('meaning').innerText = word.meaning;
}

// Initial shuffle on page load
document.addEventListener('DOMContentLoaded', shuffleWord);
