const words = [
    {
        "word": "Balatkayo",
        "meaning": "Si Simoun ay ginamit ang kanyang balatkayo bilang isang mayamang alahero upang maisakatuparan ang kanyang plano ng paghihiganti."
    },
    {
        "word": "Yungib",
        "meaning": "Sa isang yungib nagkubli ang mga tulisan upang planuhin ang kanilang pag-atake laban sa mga Kastila."
    },
    {
        "word": "Arsobispo",
        "meaning": "Ang Arsobispo ay naging bahagi ng mga maykapangyarihan na nagbulag-bulagan sa katiwalian ng pamahalaan."
    },
    {
        "word": "Beateryo",
        "meaning": "Si Juli ay muntik nang pumasok sa isang beateryo upang takasan ang pang-aabuso ng mga nasa kapangyarihan."
    },
    {
        "word": "Buwaya",
        "meaning": "Ang mga opisyal ng pamahalaan ay tinawag na mga buwaya dahil sa kanilang kasakiman sa yaman at kapangyarihan."
    },
    {
        "word": "Paglilibing",
        "meaning": "Ang paglilibing kay Kapitan Tiyago ay nagpakita ng labis na pagpapanggap ng mga tao, lalo na ng mga prayle."
    },
    {
        "word": "Paglalakbay",
        "meaning": "Ang paglalakbay ni Basilio mula sa kanyang pagiging mag-aaral hanggang sa kanyang pagsali sa plano ni Simoun ay puno ng sakripisyo."
    },
    {
        "word": "Pagkamulat",
        "meaning": "Ang pagkamulat ni Basilio sa katotohanan ng karahasan ng mga Kastila ang nagtulak sa kanya upang sumama kay Simoun."
    },
    {
        "word": "Pag-uusig",
        "meaning": "Ang pag-uusig ng mga prayle sa mga Pilipino, lalo na sa mga di nila kapanalig, ay nagdulot ng takot at galit sa bayan."
    },
    {
        "word": "Tulisan",
        "meaning": "Ang mga tulisan sa kwento ay nagmistulang simbolo ng mga naghihimagsik laban sa mapang-abusong pamahalaan."
    },
    {
        "word": "Humupa",
        "meaning": "Hindi humupa ang galit ni Simoun sa mga may kagagawan ng trahedya sa kanyang buhay kahit lumipas ang maraming taon."
    },
    {
        "word": "Marubdob",
        "meaning": "Ang marubdob na damdamin ni Simoun para sa paghihiganti ang nagtulak sa kanya na buuin ang kanyang mapanirang plano."
    },
    {
        "word": "Naglaho",
        "meaning": "Naglaho ang pag-asa ng mga kabataan sa kanilang adhikain matapos silang ipagkanulo ng mga prayle."
    },
    {
        "word": "Nagpangalay",
        "meaning": "Sa sobrang tagal ng pagtayo sa harapan ng mga guro, nagpangalay ang mga mag-aaral habang hinihintay ang desisyon ukol sa kanilang adhikain."
    },
    {
        "word": "Kaumpok",
        "meaning": "Si Basilio, kasama ang kanyang kaumpok na mga mag-aaral, ay nagplanong humiling ng akademya para sa pagtuturo ng wikang Kastila."
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
