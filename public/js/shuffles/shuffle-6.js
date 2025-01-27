const words = [
    {
        "word": "Adsum",
        "meaning": "Nang tinawag ng guro ang kanyang pangalan, agad siyang tumayo at sumagot ng adsum bilang tanda ng kanyang presensya."
    },
    {
        "word": "Bachillerato",
        "meaning": "Natapos ni Juan ang kanyang bachillerato bago siya nagpatuloy sa unibersidad."
    },
    {
        "word": "Gulagulanit",
        "meaning": "Ang mga gamit sa bahay ay gulagulanit matapos ang malakas na lindol."
    },
    {
        "word": "Kagatol-gatol",
        "meaning": "Matapos ang mahabang paghihirap, naramdaman niya ang kagatol-gatol ng kanyang katawan at kaluluwa."
    },
    {
        "word": "Kapararakan",
        "meaning": "Ang kapararakan ng mga nagkasala sa bayan ay hindi maiiwasan."
    },
    {
        "word": "Karuahe",
        "meaning": "Sumakay sila sa karuahe upang dumaan sa kalsadang punong-puno ng mga tao."
    },
    {
        "word": "Katedratiko",
        "meaning": "Ang katedratikong pagtuturo ni G. Cruz ay nakatulong sa aming pang-unawa ng mga komplikadong konsepto sa agham."
    },
    {
        "word": "Kinasisindakan",
        "meaning": "Kinasisindakan ng mga mag-aaral ang balitang magkakaroon ng malaking pagsusulit sa susunod na linggo."
    },
    {
        "word": "Kiyas",
        "meaning": "Ang kiyas ni Maria sa kasal ay talagang kahanga-hanga at punong-puno ng detalye."
    },
    {
        "word": "Kuwalta",
        "meaning": "Ang mga kabataan ay naghahangad ng kuwalta upang makabili ng mga gamit na gusto nila."
    },
    {
        "word": "Lisyon",
        "meaning": "Ang mga malalaking lisyon sa bansa ay nagdulot ng labis na pagkasira sa mga pook at buhay ng mga tao."
    },
    {
        "word": "Magninilay",
        "meaning": "Si Isagani ay magmagninilay sa tabing-dagat upang pag-isipan ang kanyang mga plano para sa hinaharap."
    },
    {
        "word": "Mapangunyapit",
        "meaning": "Ang mga mapangunyapit na negosyante ay madalas gumagamit ng mga pekeng pangako upang makuha ang tiwala ng mga tao."
    },
    {
        "word": "Nagliglig",
        "meaning": "Nagliglig ang mga puno nang magdapo ang malakas na hangin sa kagubatan."
    },
    {
        "word": "Nakababatyag",
        "meaning": "Ang itsura ng lumang bahay ay nakababatyag, kaya’t walang maglakas-loob na pumasok dito."
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
