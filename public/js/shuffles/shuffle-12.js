const words = [
    {
        "word": "Adsúm",
        "meaning": "Nang tawagin ang kanyang pangalan sa klase, agad siyang sumagot ng Adsúm upang ipakita ang kanyang presensya."
    },
    {
        "word": "Alilà",
        "meaning": " Ang alilà ay nagtatrabaho nang mahabang oras upang suportahan ang kanyang pamilya."
    },
    {
        "word": "Aling",
        "meaning": "Tinanong niya si Aling Nena kung saan mabibili ang pinakamasarap na puto sa bayan."
    },
    {
        "word": "Amaín",
        "meaning": "Ang amaín niya ay ang nag-alaga sa kanya noong siya’y bata pa."
    },
    {
        "word": "Bachiller en artes",
        "meaning": "Si Pedro ay isang bachiller en artes na nagtapos sa isang tanyag na unibersidad."
    },
    {
        "word": "Binatà",
        "meaning": "Ang binatà sa kabilang bayan ay kilala sa kanyang talento sa pagkanta."
    },
    {
        "word": "Carabineros Celestiales",
        "meaning": " Sa kanyang dasal, humingi siya ng tulong mula sa Carabineros Celestiales upang mapawi ang kasamaan."
    },
    {
        "word": "Contrabando herético",
        "meaning": "Natuklasan ng mga sundalo ang mga contrabando herético na nakatago sa loob ng simbahan."
    },
    {
        "word": "Cuacha",
        "meaning": " Nagbahagi siya ng isang cuacha tungkol sa kanyang karanasan sa probinsya na nagpasaya sa lahat."
    },
    {
        "word": "Gurus",
        "meaning": " Ang mga gurus ng teknolohiya ay nagbigay ng mahahalagang tips sa seminar."
    },
    {
        "word": "Guwáhit",
        "meaning": "Ang guwáhit sa kanyang proyekto ay nagpapakita ng isang makabagong ideya."
    },
    {
        "word": "Katalinuhan",
        "meaning": "Ang kanyang katalinuhan ay nagdala sa kanya ng maraming oportunidad sa trabaho."
    },
    {
        "word": "Katedrátiko",
        "meaning": "Ang katedrátiko sa kolehiyo ay kilala sa kanyang malalim na kaalaman sa kasaysayan."
    },
    {
        "word": "Katwiran",
        "meaning": "Ang kanyang katwiran ay malinaw at makatwiran kaya’t agad siyang pinanigan."
    },
    {
        "word": "Katrabaho",
        "meaning": "Pinuri niya ang kanyang katrabaho dahil sa dedikasyon nito sa kanilang proyekto."
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
