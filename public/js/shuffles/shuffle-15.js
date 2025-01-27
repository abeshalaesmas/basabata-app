const words = [
    {
        "word": "Bufete",
        "meaning": "Matapos ang ilang linggong paghahanap, natagpuan ni Juli ang isang abogadong magbibigay gabay sa kanilang kaso sa bufete ng isang kilalang abogado."
    },
    {
        "word": "Condesa",
        "meaning": "Si Maria Clara ay tinuring na condesa ng kanyang mga kababayan dahil sa kanyang kabutihang loob at kahusayan sa mga gawain."
    },
    {
        "word": "Nakasususo",
        "meaning": "Ang kanyang sipag at tiyaga ay nagbunga, at siya ay nakasususo mula sa pagiging isang simpleng mag-aaral patungo sa pagiging isang matagumpay na doktor."
    },
    {
        "word": "Retorika",
        "meaning": "Ang mga talumpati ni Don Custodio ay puno ng retorika, kaya't nahirapan ang mga naroroon na makita ang kabutihan sa mga sinabi niya."
    },
    {
        "word": "Pagpapasigíd",
        "meaning": "Nagbigay ng pagpapasigíd si Simoun sa mga kabataang nag-aaklas upang mapagtanto nila ang kahalagahan ng kanilang pakikibaka para sa kalayaan."
    },
    {
        "word": "Kanugnóg",
        "meaning": "Habang ang mga kabataan ay nag-aaral, ang mga kanugnóg nila sa silid ay nagsimulang magkwento ng kanilang mga plano para sa hinaharap."
    },
    {
        "word": "Pang̃ang̃ayupapà",
        "meaning": "Sa kabila ng matinding krisis, ang mga tao sa bayan ay patuloy sa kanilang pang̃ang̃ayupapà upang matulungan ang bawat isa."
    },
    {
        "word": "Munakalà",
        "meaning": "Bago magsimula ang proyekto, si Don Tiburcio ay gumawa ng munakalà upang matiyak na magiging maayos ang lahat ng hakbang."
    },
    {
        "word": "Gumágaralgal",
        "meaning": "Habang naglalakad sa kagubatan, naririnig nila ang mga gumágaralgal na tunog ng mga hayop at mga ibon."
    },
    {
        "word": "Pasaliwâ",
        "meaning": "Nagdesisyon si Kapitan Heneral na magbigay ng pasaliwâ sa mga nagprotesta upang mapawi ang tensyon sa bayan."
    },
    {
        "word": "Putris",
        "meaning": "Habang naglalakad si Basilio sa kabundukan, naamoy niya ang putris na dulot ng mga nabubulok na halaman sa paligid, isang paalala ng kalupitan ng kalikasan sa kanilang paghihirap."
    },
    {
        "word": "Katigatigatig",
        "meaning": "Ang tunog ng mga katigatigatig na yapak ni Simoun habang siya'y nagmamadali ay naririnig sa buong kalye, tanda ng kanyang nagmamadaling misyon."
    },
    {
        "word": "Pagsasapantahàng",
        "meaning": "Sa harap ng mga nangyayari sa bayan, ang pagsasapantahàng ni Isagani tungkol sa mga plano ng mga makapangyarihan ay unti-unting naging totoo."
    },
    {
        "word": "Pariway",
        "meaning": "Sa mga usapan nina Padre Florentino at Simoun, mayroong pariway sa kanilang mga ideya tungkol sa reporma at ang kalagayan ng bayan, na nagbigay daan sa masalimuot na mga alitan."
    },
    {
        "word": "Pahát",
        "meaning": "Habang tinatalakay ni Padre Damaso ang kalagayan ng bayan, nagbigay siya ng pahát sa mga mag-aaral ukol sa kanilang papel sa paglaban sa mga katiwalian sa gobyerno."
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
