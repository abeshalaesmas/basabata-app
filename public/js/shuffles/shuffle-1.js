const words = [
    {
        "word": "pinakahigan",
        "meaning": "Gawin nang may kahusayan at pagsisikap"
    },
    {
        "word": "kasawian",
        "meaning": "Hindi kanais-nais na kalagayan"
    },
    {
        "word": "tunggak",
        "meaning": "Kulang sa kaalaman at hindi nagpapakita ng matalinong pag-iisip"
    },
    {
        "word": "tulisan",
        "meaning": "Isang tao na magnanakaw o malupit"
    },
    {
        "word": "tulisan",
        "meaning": "Isang tao na magnanakaw o malupit"
    }


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
