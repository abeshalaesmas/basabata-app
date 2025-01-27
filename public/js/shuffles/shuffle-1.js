const words = [
    {
        "word": "Alapot",
        "meaning": "Dahil sa matagal na pagkakalantad sa usok, ang kanyang damit ay may alapot na mahirap alisin."
    },
    {
        "word": "Bagol",
        "meaning": "Nagbigay siya ng bagol sa pulubi bilang tulong."
    },
    {
        "word": "Bapor Tabo",
        "meaning": "Sa gitna ng ilog Pasig, ang bapor tabo ay unti-unting umuusad, habang ang usok mula sa tsimenea nito ay tumataas at nagdudulot ng pangamba sa mga naninirahan sa pampang dahil sa polusyong dulot nito."
    },
    {
        "word": "Burak",
        "meaning": "Sa kabila ng makapal na burak sa daan, patuloy pa rin ang mga magsasaka sa pagtatanim ng palay sa bukid."
    },
    {
        "word": "Cubierta",
        "meaning": "Maingat na pinunasan ni Lita ang cubierta ng mesa bago ilapag ang pagkain."
    },
    {
        "word": "Himagsikan",
        "meaning": "Ang himagsikan ng mga Pilipino laban sa mga dayuhang mananakop ay nagbunga ng kalayaan ng ating bayan."
    },
    {
        "word": "Ikinabuwal",
        "meaning": "Ikinabuwal ng malakas na hangin ang matandang punong kahoy na nakatayo sa gitna ng bukirin."
    },
    {
        "word": "Kalakhan",
        "meaning": "Ang kalakhan ng tagumpay ng proyekto ay dahil sa pagtutulungan ng bawat miyembro ng koponan."
    },
    {
        "word": "Manggagahis",
        "meaning": "Ang tapang at tiyaga ng bayani ang nagpatumba sa manggagahis na matagal nang nang-aapi sa kanilang bayan."
    },
    {
        "word": "Nangangalirang ",
        "meaning": "Ang matinding init ng araw ay nagdulot ng nangangalirang na kalagayan ng mga halaman sa hardin, kaya't kinakailangan nilang madiligan upang muling magbalik ang kanilang sigla."
    },
    {
        "word": "Napakamasindakin ",
        "meaning": "Napakamasindakin ng tunog ng kidlat na tumama sa puno, kaya't lahat kami ay natakot at nagtakbuhan papasok sa bahay."
    },
    {
        "word": "Napapalamutihan (palamuti) ",
        "meaning": "Bago magsimula ang pista, ang mga kalsada ng bayan ay napapalamutihan ng mga bulaklak at banderitas."
    },
    {
        "word": "Panambil ",
        "meaning": "Habang naglalayag, tinitiyak ng kapitan na ang mga saksi sa gilid ng barko ay malayo sa panambil upang maiwasan ang anumang aksidente."
    },
    {
        "word": "Sapantaha ",
        "meaning": "Ang sapantaha ni Maria na hindi darating si Juan ay nabago nang makita niyang dumarating ito mula sa malayo."
    },
    {
        "word": "Sumasalunga ",
        "meaning": "Ang batang si Miguel ay sumasalunga sa mga pagsubok sa buhay, hindi nagpapatalo sa kahit anong hamon na dumarating."
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
