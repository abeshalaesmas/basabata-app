const words = [
    {
        "word": "Lona",
        "meaning": "Habang umuulan, pinagtibay ng mga nag-oorganisa ng karnabal ang kanilang mga tolda gamit ang lona upang hindi mabasa ang mga kagamitan."
    },
    {
        "word": "Kabantungan",
        "meaning": "Si Juan de la Cruz ay isang kabantugan sa kanilang baryo dahil sa kanyang kahusayan sa pagtulong sa mga nangangailangan."
    },
    {
        "word": "Mag-aalahas",
        "meaning": "Si Lola ay isang mag-aalahas na kilala sa paggawa ng mga magagandang alahas na gawa sa mga mamahaling bato at ginto."
    },
    {
        "word": "Manugang",
        "meaning": "Ang aking manugang ay laging tumutulong sa mga gawaing bahay tuwing Sabado."
    },
    {
        "word": "Arsobispo",
        "meaning": "Ang Arsobispo ng Maynila ay nagsalita ukol sa mga isyu ng relihiyon sa kanilang nakaraang pulong."
    },
    {
        "word": "Buslo",
        "meaning": "Nagtipon ng prutas sa buslo ang mga magsasaka upang ibenta sa palengke."
    },
    {
        "word": "Liwaliwan",
        "meaning": "Ang pamilya ni Pedro ay nagsimula ng isang liwaliwan sa tabing-dagat tuwing tag-init upang magkaisa at mag-relaks mula sa kanilang mga abalang gawain sa trabaho at paaralan."
    },
    {
        "word": "Liluk",
        "meaning": "Ang mga mamamayan sa tribo ay bihasa sa liluk, isang sining na ipinamamana mula sa kanilang mga ninuno."
    },
    {
        "word": "Kudya",
        "meaning": "Habang nagaganap ang seremonya, ang tunog ng kudya ay nagbibigay ng malasakit at kahalagahan sa okasyon."
    },
    {
        "word": "Nagpapalatak",
        "meaning": "Napapalaták si Maria nang makita niyang nawawala ang kanyang mahal na alahas, kaya't nagmamadali siyang nagtanong sa lahat ng naroroon."
    },
    {
        "word": "Agnos ",
        "meaning": "Sa tradisyunal na kasalan, ipinasa ni Lola ang Agnos kay Maria upang magsilbing proteksyon sa kanyang bagong buhay may-asawa."
    },
    {
        "word": "Tapyas  ",
        "meaning": "Ang mga tapyás ng kahoy na nakakalat sa sahig ay mula sa inukit na laruan ng batang si Juan."
    },
    {
        "word": "Mangabongabo",
        "meaning": "Matapos ang sunog, ang bakuran ay natabunan ng mang̃abóng̃abó na ginamit nilang pataba sa mga halaman."
    },
    {
        "word": "Nakapagpapalamlam",
        "meaning": "Ang mga ulap na nagtakip sa araw ay nakapagpapalamlám sa buong kapaligiran, at nagdulot ng kalungkutan sa mga naglalakad sa parke."
    },
    {
        "word": "Taginting",
        "meaning": "Habang naglalakad kami sa kagubatan, narinig namin ang taginting ng mga alon sa ilog."
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
