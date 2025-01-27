const words = [
    {
        "word": "Aginaldo",
        "meaning": "Ang aginaldo ng kura sa kanyang mga kababayan ay isang sermon na humikayat sa kanila na magtiis para sa kabutihan ng bayan."
    },
    {
        "word": "Agnos",
        "meaning": "Si Juli ay nagbigay ng kanyang agnos bilang panalangin para sa kaligtasan ng kanyang ama mula sa bilangguan."
    },
    {
        "word": "Batalan ",
        "meaning": "Sa likod ng bahay ni Kabesang Tales ay may batalan na ginagamit nila sa paghuhugas at paliligo."
    },
    {
        "word": "Benindisionan",
        "meaning": "Benindisionan ng pari ang mga gamit pangseremonya bago ito dalhin sa altar."
    },
    {
        "word": "Durungawan",
        "meaning": "Sa durungawan ng kumbento, tahimik na nagmamasid si Padre Florentino sa malawak na dalampasigan."
    },
    {
        "word": "Hungkoy",
        "meaning": "Ang labis na pag-asa sa mga maling pangako ang nagdala sa kanya sa matinding hungkoy ng buhay."
    },
    {
        "word": "Kagaslawan",
        "meaning": "Nakita sa kagaslawan ng mga bata ang kanilang kabataan at kasiglahan sa larangan ng laro."
    },
    {
        "word": "Kahapishapis",
        "meaning": "Ang kahapishapis na kalagayan ng mga Pilipino sa ilalim ng kolonyal na pamamahala ay malinaw na inilarawan sa nobela ni Rizal."
    },
    {
        "word": "Kamisola",
        "meaning": "Sa kabanata VIII ng El Filibusterismo, ang mga kababaihan ay nagsusuot ng kamisola habang nakaupo sa harap ng simbahan at nag-aabang ng mga mangyayari."
    },
    {
        "word": "Katugon",
        "meaning": "Ang katugon ng mga lider ng bayan sa mga suliranin ng kanilang nasasakupan ay hindi basta-basta at kailangan ng masusing pag-aaral."
    },
    {
        "word": "Ketongin",
        "meaning": "Sa kabanata VIII ng El Filibusterismo, ang karakter na si Isagani ay tumawag sa isang tao bilang ketongin upang ipakita ang kanyang pagmamalupit at hindi pagkakapantay-pantay sa lipunan."
    },
    {
        "word": "Kinapawian",
        "meaning": "Siya ay kinapawian ng buhay nang maganap ang aksidente."
    },
    {
        "word": "Kumalatis",
        "meaning": "Habang tumatagal ang pag-uusap, kumalatis sa kanilang mga mata ang tunay na layunin ng misyon."
    },
    {
        "word": "Malaon",
        "meaning": "Malaon nang nawala ang kastilyong iyon, ngunit nananatili pa rin ang mga kuwento tungkol sa mahiwagang prinsesa na nakatira roon."
    },
    {
        "word": "Lumalamlam",
        "meaning": "Habang lumalapit ang gabi, ang mga bituin ay lumalamlam at halos hindi na makita."
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
