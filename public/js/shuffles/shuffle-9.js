const words = [
    {
        "word": "Kasawìán",
        "meaning": "Sa kabila ng matinding kasawìán na kanyang naranasan, patuloy siyang bumangon at nagsikap upang muling makamit ang tagumpay."
    },
    {
        "word": "Tulisán ",
        "meaning": "Noong panahon ng mga Kastila, maraming tulisán ang lumaban sa mga dayuhan upang ipagtanggol ang kanilang lupain at kalayaan."
    },
    {
        "word": "Pinakaigihan",
        "meaning": "Dapat nating pinakaigihan ang ating trabaho upang makamit ang tagumpay at maipakita ang ating dedikasyon sa ginagawa natin."
    },
    {
        "word": "Tunggák",
        "meaning": "Dahil sa kanyang pagiging tunggák sa matematika, nahirapan siyang makuha ang tamang sagot sa pagsusulit."
    },
    {
        "word": "Nag-aantandáng",
        "meaning": "Nag-aantandâng siya bago magsimula ang misa bilang tanda ng kanyang debosyon at pananampalataya."

    },
    {
        "word": "Kaling̃àin ",
        "meaning": "Ang mga magulang ay kailangang kaling̃ain ang kanilang mga anak upang matutunan nilang magtagumpay sa buhay."
    },
    {
        "word": "Nunò ",
        "meaning": "Ang mga nuno namin ay nagsimula ng makulay na kasaysayan sa bayan ng Lipa na hanggang ngayon ay ipinagmamalaki ng aming pamilya."
    },
    {
        "word": "Nang̃aliligáw",
        "meaning": "Habang naglalakad siya sa kagubatan, nang̃aliligáw siya at hindi na malaman kung paano babalik sa kanyang mga kasama."
    },
    {
        "word": "Pipi",
        "meaning": "Pipi si Marco mula pagkabata, ngunit nagagawa niyang magpahayag ng mga saloobin gamit ang mga galaw ng kamay."
    },
    {
        "word": "Alilà",
        "meaning": "Ang alilà ni Lola ay tumulong sa paglilinis ng bahay tuwing linggo."
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
