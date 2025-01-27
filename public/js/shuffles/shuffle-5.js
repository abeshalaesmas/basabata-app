const words = [
    {
        "word": "Andás",
        "meaning": "Inilagay nila ang imahe ng santo sa andás upang dalhin sa prusisyon."
    },
    {
        "word": "Agua bendita",
        "meaning": "Pinatak ng pari ang agua bendita sa noo ng sanggol bilang bahagi ng binyag."
    },
    {
        "word": "Alinsunod",
        "meaning": " Ang plano ng proyekto ay ginawa alinsunod sa mga patakaran ng gobyerno."
    },
    {
        "word": "Alperes",
        "meaning": " Ang alperes ang namuno sa pag-aresto ng mga lumabag sa batas."
    },
    {
        "word": "Anyô",
        "meaning": " Napansin ng guro ang kakaibang anyô ng likhang sining ng kanyang estudyante."
    },
    {
        "word": " Apuháp",
        "meaning": " Sa dilim, nag-apuháp siya upang mahanap ang kanyang naiwang susi."
    },
    {
        "word": " Asusena",
        "meaning": " Ang asusena sa hardin ay nagkalat ng mabangong halimuyak sa buong paligid."
    },
    {
        "word": " Autopsia",
        "meaning": " Isinagawa ang autopsia upang matukoy ang sanhi ng hindi inaasahang pagkamatay."
    },
    {
        "word": " Bantóg",
        "meaning": " Siya ay bantóg na pintor na kinikilala sa buong mundo dahil sa kanyang obra."
    },
    {
        "word": " Batàng malulungkót",
        "meaning": " Ang programa ay layuning tulungan ang mga batàng malulungkót na nakararanas ng kahirapan."
    },
    {
        "word": " Batàng lalaki",
        "meaning": " Ang batàng lalaki ay abala sa paglalaro ng bola sa bakuran."
    },
    {
        "word": " Batàng babae",
        "meaning": " Ang batàng babae ay mahilig magpinta ng makukulay na larawan."
    },
    {
        "word": " Benditado",
        "meaning": " Ang bahay nila ay benditado na ng pari matapos ang isang espesyal na seremonya."
    },
    {
        "word": " Binaltak",
        "meaning": " Bigla niyang binaltak ang pinto nang malaman niyang may paparating na panganib."
    },
    {
        "word": " Binaluktot",
        "meaning": " Ang bakal na poste ay binaluktot ng malakas na bagyo."
    },
    {
        "word": " Bubusbós",
        "meaning": " Nasa bubusbós siya sa pagkain ng almusal dahil huli na siya sa klase."
    },
    {
        "word": " Buntónghining̃á",
        "meaning": " Napansin ang kanyang buntónghining̃á matapos ang isang mahirap na araw."
    },
    {
        "word": " Cantores",
        "meaning": " Ang mga cantores ay nagtipon upang mag-ensayo para sa darating na misa."
    },
    {
        "word": " Ceremonias",
        "meaning": " Ang mga ceremonias ay isinagawa bilang bahagi ng pagdiriwang ng pista ng bayan."
    },
    {
        "word": " Divina Pastora",
        "meaning": " Sa prusisyon, maraming deboto ang nag-alay ng bulaklak sa imahe ng Divina Pastora."
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
