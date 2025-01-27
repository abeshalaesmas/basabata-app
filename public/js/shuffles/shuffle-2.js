const words = [
    {
        "word": "Alimura",
        "meaning": "Ang kanyang sinabi ay puro alimura at wala namang mabuting layunin."
    },
    {
        "word": "Dusta",
        "meaning": "Huwag mong dustain ang iyong kapwa."
    },
    {
        "word": "Maghihitsong",
        "meaning": "Sa hinaharap, maghihitsong ginto ang batong ito dahil sa proseso ng pagpapakinis."
    },
    {
        "word": "Magyao",
        "meaning": "Kinakailangang magyao si Andres upang sunduin ang kanyang asawa sa bayan."
    },
    {
        "word": "Makata",
        "meaning": "Ang makata ay hinangaan ng marami dahil sa kanyang kakayahang maglarawan ng damdamin at kalikasan sa kanyang mga obra."
    },
    {
        "word": "Makiyas",
        "meaning": "Ang matandang hukom ay may makiyas at maayos na tindig na kinikilala ng lahat sa korte."
    },
    {
        "word": "Mapagpahinuhod",
        "meaning": "Si Ana ay likas na mapahinuhod, kaya't hindi mahirap kumbinsihin siyang sumama sa proyekto ng kanilang grupo."
    },
    {
        "word": "Maringal",
        "meaning": "Ang maringal na pagdiriwang ay nagpakita ng yaman at kultura ng kanilang lahi."
    },
    {
        "word": "Mawatasan",
        "meaning": "Nang magtagal sa pag-aaral ng mga sinaunang teksto, saka lamang mawatasan ni Juan ang mga ibig iparating ng may-akda tungkol sa kalagayan ng bayan."
    },
    {
        "word": "Nakababatid",
        "meaning": "Ang mga guro ay nakababatid sa mga pangangailangan ng kanilang mga estudyante upang matulungan silang magtagumpay sa kanilang pag-aaral."
    },
    {
        "word": "Nakamapanghamok",
        "meaning": "Ang nakamapanghamok na kilos ng kalaban ay nagdulot ng takot sa buong komunidad."
    },
    {
        "word": "Nangingimi",
        "meaning": "Si Marco ay nangingimi na magsalita sa harap ng klase dahil sa takot na magkamali."
    },
    {
        "word": "Nangagsisihitit",
        "meaning": "Nangagsisihitit ang mga mang-uukit ng kahoy sa pagnanais nilang magtulungan sa paggawa ng kanilang proyekto."
    },
    {
        "word": "Pagtutunggali",
        "meaning": "Ang pagtutunggali sa pagitan ng dalawang koponan ay naging matindi, ngunit sa huli, ang koponang ito ay nagwagi."
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
