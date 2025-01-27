const words = [
    {
        "word": "Academia de dibujo",
        "meaning": "Ang mga estudyante sa academia de dibujo ay nagpakita ng kanilang mga obra sa art exhibit."
    },
    {
        "word": "Alíngawngaw",
        "meaning": " Narinig namin ang alíngawngaw ng sigawan mula sa kabilang bundok."
    },
    {
        "word": "Araña",
        "meaning": "Dumating ang donya sakay ng isang marangyang araña."
    },
    {
        "word": "Ateneo",
        "meaning": "Nag-aral siya ng literatura sa Ateneo at nagtapos nang may karangalan."
    },
    {
        "word": "Babayàa",
        "meaning": " Mahirap akyatin ang babayàa dahil sa matarik nitong daan."
    },
    {
        "word": "Balabal",
        "meaning": " Gumamit siya ng makapal na balabal upang protektahan ang sarili mula sa lamig."
    },
    {
        "word": "Baláo",
        "meaning": " Ang tindera sa kanto ay may dalang baláo ng iba't ibang kakanin."
    },
    {
        "word": "Bâlang",
        "meaning": " Ang magsasaka ay nagsuot ng bâlang upang hindi maarawan habang nagtatrabaho."
    },
    {
        "word": "Bastón",
        "meaning": "Ginagamit niya ang kanyang bastón bilang suporta habang naglalakad."
    },
    {
        "word": "Bíguelâ",
        "meaning": "Ang tunog ng bíguelâ ay nagbibigay-buhay sa pista ng baryo."
    },
    {
        "word": "Birò",
        "meaning": "Ang kanyang birò ay ikinatawa ng lahat sa mesa."
    },
    {
        "word": "Dalawán",
        "meaning": "Binili niya ang dalawán ng hikaw bilang regalo sa kanyang kapatid."
    },
    {
        "word": "Dambaná",
        "meaning": "Nag-alay sila ng mga bulaklak sa dambaná ng kanilang patron."
    },
    {
        "word": "Dugtóng",
        "meaning": " Ang bagong kabanata ng nobela ay isang nakakapanabik na dugtóng sa kwento."
    },
    {
        "word": "Dúlang",
        "meaning": "Ang malaking dúlang ay punong-puno ng pagkain para sa pista."
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
