const words = [
    {
        "word": "Nang̃aso",
        "meaning": "Si Pedro ay nagpunta sa kagubatan upang nang̃aso ng usa at maghanap ng pagkain para sa pamilya."
    },
    {
        "word": "Ipinagpuprusisyón",
        "meaning": "Ang mga nagkasalang tao ay ipinagpuprusisyón ng korte upang pagbayaran ang kanilang mga pagkakamali."
    },
    {
        "word": "Kawaní",
        "meaning": "Ang kawaní ng gobyerno ay tumulong sa pagpapamahagi ng mga ayuda sa mga apektadong residente."
    },
    {
        "word": "Manudlâ",
        "meaning": "Ang sundalo ay isang mahusay na manudlâ, na tumpak na naglalagay ng baril at nagpaputok sa layunin."
    },
    {
        "word": "Kagiting̃an",
        "meaning": "Ang mga bayani ng Bataan ay ipagdiriwang sa araw ng kagiting̃an bilang pasasalamat sa kanilang tapang at sakripisyo."
    },
    {
        "word": "Binúbulusán",
        "meaning": "Ang binúbulusán ay ginagamit ng mga panday upang mapanatili ang apoy habang sila'y nagtatrabaho."
    },
    {
        "word": "Pinupunyagi",
        "meaning": "Sa kabila ng lahat ng hamon, patuloy niyang pinupunyagi ang mga aralin upang makapagtapos ng kolehiyo."
    },
    {
        "word": "Nagng̃íng̃itng̃ít",
        "meaning": "Habang binabaybay nila ang kalsada, nagng̃íng̃itng̃ít siya sa galit dahil sa pagka-delay ng kanilang biyahe."
    },
    {
        "word": "Makaimík",
        "meaning": "Habang naroroon siya sa harap ng mga tao, makaimík siya sa takot at hindi alam kung paano magsalita."
    },
    {
        "word": "Kabuhalhalan",
        "meaning": "Ang kabuhalhalan ng kanyang mga kilos ay nagdulot ng kalituhan at gulo sa buong komunidad."
    },
    {
        "word": "Hinihimas",
        "meaning": "Bago matulog, hinihimas ng kanyang ina ang kanyang likod upang siya'y makapagpahinga."
    },
    {
        "word": "Kanónigo",
        "meaning": "Si Father Joseph ay isang kanónigo ng simbahan, at siya ay may malalim na kaalaman sa mga batas ng Simbahan."
    },
    {
        "word": "Durung̃awáng",
        "meaning": "Sa kanyang durung̃awáng, masisilayan niya ang tanawin ng kabundukan at ang likas na ganda ng paligid."
    },
    {
        "word": "Kabiyak",
        "meaning": "Siya ang kabiyak ng kanyang buhay, palagi silang magkasama at nagtutulungan sa lahat ng aspeto ng buhay."
    },
    {
        "word": "Nahihiyasán",
        "meaning": "Bilang bahagi ng kanilang kultura, ang mga kababaihan ay madalas nahihiyasán sa kanilang mga alahas sa kasal."
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
