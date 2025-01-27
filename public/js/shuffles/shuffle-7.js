const words = [
    {
        "word": "Asarol",
        "meaning": "Ginamit ni Mang Juan ang asarol upang bungkalin ang matigas na lupa sa kanilang bakuran."
    },
    {
        "word": "Banayad",
        "meaning": "Ang kanyang banayad na tinig ay nagbigay ng aliw sa mga nakikinig."
    },
    {
        "word": " Bihasa",
        "meaning": "Bihasa siya sa pagtugtog ng piyano kaya't madali niyang naitugtog ang bagong piraso."
    },
    {
        "word": "Dulutan",
        "meaning": "Ang pamahalaan ay nagpasya na dulutan ng tulong ang mga nasalanta ng kalamidad upang mapabilis ang kanilang pagbangon."
    },
    {
        "word": "Ganid",
        "meaning": "Ang ganid na pamumuno ni Simoun ay nagdulot ng kasamaan sa buong bayan."
    },
    {
        "word": "Hubdin",
        "meaning": "Hubdin mo ang mga maling akala upang makita mo ang tunay na layunin ng kanyang mga sinabi."
    },
    {
        "word": "Iaboy",
        "meaning": "Iiaboy ko ang lahat ng balakid upang magtagumpay."
    },
    {
        "word": "Inaandukha",
        "meaning": "Inaandukha niya na magiging matagumpay ang kanilang plano, ngunit hindi siya sigurado."
    },
    {
        "word": "Kabangawan",
        "meaning": "Ang kabangawan ay nagsimulang maghari sa kanyang puso matapos ang masaklap na pangyayari."
    },
    {
        "word": "Lagitlit",
        "meaning": "Ang lagitlit ng mga putok ng baril ay umabot sa buong paligid."
    },
    {
        "word": "Makakaantiluhan",
        "meaning": "Sa kabila ng kanilang mga magkaibang pananaw, ang mga magkaantiluhan sa kanilang ideya ay naging sanhi ng mas matinding pagtatalo."
    },
    {
        "word": "Magsalat",
        "meaning": "Magsalat siya sa kanyang bag upang hanapin ang nawawalang susi."
    },
    {
        "word": "Malirip",
        "meaning": "Ang mga lihim na ito ay malirip lamang sa pamamagitan ng masusing pag-iisip at pagmamasid."
    },
    {
        "word": "Nagdudumali",
        "meaning": "Ang mga tao ay nagdudumali upang makuha ang mga produkto sa pamamahagi, kaya't nagkaroon ng kaguluhan sa gitna ng kalsada."
    },
    {
        "word": "Nag-ibayo",
        "meaning": "Nag-ibayo ang galit ni Simoun nang malaman niyang nagkamali ang kanyang mga alagad sa kanilang plano."
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
