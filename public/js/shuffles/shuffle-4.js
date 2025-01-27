const words = [
    {
        "word": "Agnós",
        "meaning": "Ang mga agnós na isinusuot ng mga miyembro ng aristokrasiya ay karaniwang gawa sa ginto at mga hiyas."
    },
    {
        "word": ". Alilà",
        "meaning": "Ang alilà sa kanilang tahanan ay laging tumutulong sa mga gawaing bahay at pag-aalaga sa mga bata."
    },
    {
        "word": "Aliláng kagagalitan",
        "meaning": "Ang aliláng kagagalitan ay nagpasya nang umalis mula sa kanyang amo matapos silang magka-away."
    },
    {
        "word": "Apatía",
        "meaning": "Naramdaman ko ang apatía ng mga tao sa paligid ko nang hindi sila tumulong sa pag-aayos ng kalat."
    },
    {
        "word": " Basilio",
        "meaning": "Si Basilio ay nag-aral ng medisina upang matulungan ang kanyang inang si Sisa."
    },
    {
        "word": " Bantang",
        "meaning": "Ipinadala ng gobyerno ang isang bantang pag-aresto sa mga lumalabag sa batas."
    },
    {
        "word": " Bâlità",
        "meaning": "Ang bâlità tungkol sa pagkapanalo ng kanilang koponan ay mabilis kumalat sa buong bayan."
    },
    {
        "word": " Bitag",
        "meaning": "Gumamit sila ng bitag upang hulihin ang mga ligaw na hayop sa kagubatan."
    },
    {
        "word": " Boông lugód",
        "meaning": "Tuwang-tuwa si Juan nang tanggapin ng kanyang pamilya ang boông lugód ng kanyang tagumpay."
    },
    {
        "word": " Brillante",
        "meaning": "Ang brillante niyang singsing ay kumikislap sa ilalim ng araw."
    },
    {
        "word": " Buwís",
        "meaning": "Ang mga mamamayan ay obligadong magbayad ng buwís upang mapondohan ang mga proyekto ng gobyerno."
    },
    {
        "word": "  Canon",
        "meaning": " Bawat taon, nagbabayad siya ng canon upang gamitin ang lupang ipinagbibili sa kanya ng kanyang kapitbahay."
    },
    {
        "word": "  Chaqueta",
        "meaning": " Ang chaqueta na isinusuot ni Carla sa kasal ay may mga kumikinang na palamuti."
    },
    {
        "word": "  Corporación",
        "meaning": " Ang isang malaking corporación ay may mga sangay sa iba't ibang bahagi ng bansa."
    },
    {
        "word": " Datapwa’t",
        "meaning": " Magaling siya sa matematika, datapwa’t nahirapan siya sa agham."
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
