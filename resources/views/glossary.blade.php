<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basa Bata</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 15px;
            
        }
        .search-bar {
            margin: 18px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 1px;
        }

        .card {
            background-color: #fff;
            margin: 5px 40px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .card-content p {
            margin: 5px 0;
            font-size: 14px;
            line-height: 1.5;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #ffd65a;
            padding: 10px 0;
        }

        .footer-icon {
            font-size: 20px;
            color: #000;
            text-decoration: none;
        }
        #logo{
            width: 70px;
            padding-left:35px;
            padding-top:30px;
        }
        
    </style>
    <script>
        function searchCards() {
            let input = document.getElementById('searchInput').value.toLowerCase();
            let cards = document.getElementsByClassName('card');
            for (let i = 0; i < cards.length; i++) {
                let title = cards[i].getElementsByClassName('card-title')[0].innerText.toLowerCase();
                if (title.includes(input)) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    @include("components.header")

    {{-- <img id="logo" src="{{ asset('images/logo-w.png') }}" alt="Logo"> --}}

    <div class="search-bar">
        
        <input type="text" id="searchInput" onkeyup="searchCards()" placeholder="Search anything ...">
    </div>

    <div class="card">
        <div class="card-title">Bapor Tabò</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> tumutukoy sa isang barkong pandagat na bilog o mataba ang anyo</p>
            <p><strong>Kasingkahulugan:</strong> barko, sasakyang-dagat, bapor</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>

    <div class="card">
        <div class="card-title">Abá</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang pahayag na nagpapakita ng pagkamangha o pagkabigla.</p>
            <p><strong>Kasingkahulugan:</strong> Exclamation</p>
            <p><strong>Uri ng Salita:</strong> Pahayag</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Academia de dibujo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang paaralan para sa mga nag-aaral ng pagguhit o sining.</p>
            <p><strong>Kasingkahulugan:</strong> Noun</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Alagas</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang relikya o bagay na may kaugnayan sa relihiyon.</p>
            <p><strong>Kasingkahulugan:</strong> Relikya; bagay na panrelihiyon.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Alimura</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang "alimura" ay tumutukoy sa pag-alipusta o pagbibitiw ng mga salitang nakakababa sa dangal ng isang tao.</p>
            <p><strong>Kasingkahulugan:</strong> insult, hiyain, kutya, alipusta</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Alilà</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tao na nasa ilalim ng utos at sumusunod sa kagustuhan ng kanyang amo, nagtatrabaho sa mga gawaing bahay o iba pang utos</p>
            <p><strong>Kasingkahulugan:</strong> Kasambahay, katulong, tagapangalaga</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan (noun)</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Alinsunod</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ayon, batay, o sumusunod sa pamantayan, utos, alituntunin, batas, o kagustuhan ng isang awtoridad, dokumento, o iba</p>
            <p><strong>Kasingkahulugan:</strong> Sang-ayon, Alinsabay, Batay, Ayon</p>
            <p><strong>Uri ng Salita:</strong> Pang-ukol (preposition)</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Alapak</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Marka o dumi sa katawan o damit na resulta ng matagal na pagkakalantad sa maruming kapaligiran o bagay, karaniwang mahirap tanggalin.</p>
            <p><strong>Kasingkahulugan:</strong> Bulsa, sisidlan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bachiller en artes</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang taong nagtapos ng kurso sa sining.</p>
            <p><strong>Kasingkahulugan:</strong> Nagtapos sa sining; Bachelor of Arts</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bachillerato</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa antas ng sekondaryang edukasyon sa maraming bansang nagsasalita ng Espanyol, katumbas ng high school diploma o pre-university education.</p>
            <p><strong>Kasingkahulugan:</strong> Sekondarya, High School, Edukasyong Pangalawang Antas</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bagol</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Hugis bilog, barya.</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bakapán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng kasuotan o balabal na ginagamit upang magtakip ng katawan.</p>
            <p><strong>Kasingkahulugan:</strong> Cloak</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Banság</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kilala o tanyag.</p>
            <p><strong>Kasingkahulugan:</strong> Sikat; kilala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bantóg</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tanyag o kilala dahil sa mga tagumpay o katangian.</p>
            <p><strong>Kasingkahulugan:</strong> Sikat; kilala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bato</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang matigas na bagay na kadalasang ginagamit bilang pantahanan o materyales sa pagtatayo.</p>
            <p><strong>Kasingkahulugan:</strong> Lupa, batong-buhay</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Binúbulusán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Aparadong ginagamit sa pandayan para sa pag-ihip ng hangin, nagpapanatili ng pag-alab ng uling at tumutulong sa paggawa ng apoy.</p>
            <p><strong>Kasingkahulugan:</strong> Pamaypay, Hapak</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan (noun)</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Biyaya</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagpapala o pagpapakita ng kabutihang-loob mula sa isang Diyos o may kapangyarihan.</p>
            <p><strong>Kasingkahulugan:</strong> Pagpapala, biyaya, kabutihang-loob</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Bunga</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang resulta o epekto ng isang gawain o pangyayari.</p>
            <p><strong>Kasingkahulugan:</strong> Resulta, kinalabasan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>

    <div class="card">
        <div class="card-title">Carabineros</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Mga sundalong armado na may tungkuling magbantay.</p>
            <p><strong>Kasingkahulugan:</strong> Bantay; tanod</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Celestiales</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa mga bagay na makalangit.</p>
            <p><strong>Kasingkahulugan:</strong> Makalangit; banal</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Chaqueta</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng panlabas na kasuotan na ginagamit bilang jacket.</p>
            <p><strong>Kasingkahulugan:</strong> Dyaket; amerikana.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Condesa</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang mataas na titulong pang-uri para sa mga babae ng aristokrasya.</p>
            <p><strong>Kasingkahulugan:</strong> Aristokrata, maharlika</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Concilio</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang pagtitipon ng mga lider ng simbahan upang magpasiya sa mahahalagang usapin.</p>
            <p><strong>Kasingkahulugan:</strong> Pagtitipon; konseho</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Cubierta (deck)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Parte ng bapor kung saan nagtitipon ang mga mayayaman at may posisyon sa lipunan; literal na ibig sabihin ay ang palapag sa ibabaw ng barko.</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Cuacha</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Maliit na halaga ng pera o baryang sentimo.</p>
            <p><strong>Kasingkahulugan:</strong> Barya; sentimo</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>

    <div class="card">
        <div class="card-title">Dámbaná</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Altar, lugar ng pagsamba.</p>
            <p><strong>Kasingkahulugan:</strong> Place of worship</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dalawán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Doble o magkapares.</p>
            <p><strong>Kasingkahulugan:</strong> Double, in pairs</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">De Cola</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Damit o kasuotan na may mahabang buntot o dulo, karaniwang ginagamit sa mga seremonya.</p>
            <p><strong>Kasingkahulugan:</strong> Trahe; damit na mahaba ang laylayan.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">De Rejillas</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Uri ng salaming pang-araw na may butas-butas o proteksyon na parang rehas upang bawasan ang direktang sikat ng araw.</p>
            <p><strong>Kasingkahulugan:</strong> Salaming may butas, salaming may rehas</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ding̃as</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Apoy o ningas.</p>
            <p><strong>Kasingkahulugan:</strong> Apoy; liyab</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dóminus</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "panginoon" o "ginoo".</p>
            <p><strong>Kasingkahulugan:</strong> Panginoon; ginoo</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dúlang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang malaking lamesa o mesa.</p>
            <p><strong>Kasingkahulugan:</strong> Large table</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dugtóng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Karugtong o pagpapatuloy.</p>
            <p><strong>Kasingkahulugan:</strong> Continuation</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dulutan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ibigay o ipagkaloob.</p>
            <p><strong>Kasingkahulugan:</strong> Pagkalooban, ibigay, ihatid</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dusta</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pag-alipusta, panlalait, o pagpapahiya sa isang tao. Tumutukoy ito sa pagsasalita o pagkilos na nagpapababa sa dangal ng iba.</p>
            <p><strong>Kasingkahulugan:</strong> alipusta, paghamak, panlalait, pang-iinsulto</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun, Pandiwa | verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Durungawang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng bintana na karaniwang gawa sa kahoy o kawayan, ginagamit upang bigyang-daan ang liwanag at hangin na makapasok sa isang silid.</p>
            <p><strong>Kasingkahulugan:</strong> Bintana</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Durung̃awáng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Bahagi ng bahay o gusali na daanan ng liwanag at hangin, at punto kung saan masisilayan ang tanawin o kapaligiran sa labas.</p>
            <p><strong>Kasingkahulugan:</strong> Balkonahe, Bintana</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan (noun)</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Dunggít</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang malupit na pahayag o opinyon.</p>
            <p><strong>Kasingkahulugan:</strong> Harsh statement</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Driada</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng diwata na namumuhay sa mga puno o kagubatan.</p>
            <p><strong>Kasingkahulugan:</strong> Diwata, ninfa.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Eskirma</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng martial arts o sistema ng pakikipaglaban gamit ang mga espada o tungkod.</p>
            <p><strong>Kasingkahulugan:</strong> Martial arts</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Enseñanza</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Edukasyon o pagtuturo.</p>
            <p><strong>Kasingkahulugan:</strong> Aral; edukasyon</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Entresuelo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang palapag na nasa pagitan ng dalawa, karaniwang mababa.</p>
            <p><strong>Kasingkahulugan:</strong> Mezzanine; palapag sa gitna</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Eternam</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang panalangin na tumutukoy sa walang-hanggang kapayapaan.</p>
            <p><strong>Kasingkahulugan:</strong> Walang-hanggan; walang katapusan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ergo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "kung gayon" o "dahil dito".</p>
            <p><strong>Kasingkahulugan:</strong> Kaya; kung gayon</p>
            <p><strong>Uri ng Salita:</strong> Pang-ugnay | Conjunction</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Escribano</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tagasulat o tagatala, karaniwang opisyal na gawain.</p>
            <p><strong>Kasingkahulugan:</strong> Tagatala; manunulat.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Esmeralda</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng mamahaling bato o hiyas na kulay berde.</p>
            <p><strong>Kasingkahulugan:</strong> Hiyas; berdeng bato.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Faciem</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "mukha".</p>
            <p><strong>Kasingkahulugan:</strong> Mukha; anyo</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Facultad</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kagawaran o departamento ng isang unibersidad.</p>
            <p><strong>Kasingkahulugan:</strong> Department</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Gabinete</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang maliit na silid o lugar para sa pagpupulong o para sa mga kasangkapan.</p>
            <p><strong>Kasingkahulugan:</strong> Kabinete; opisina</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ganid</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Labis na pagkagutom o pagnanasa sa mga bagay, tulad ng pera o kapangyarihan.</p>
            <p><strong>Kasingkahulugan:</strong> Sakim, makasarili, ambisyoso</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Gulagulanit</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Magulo o magkasunod-sunod na kalat o aberya, madalas na ginagamit upang ilarawan ang isang sitwasyon na puno ng kalituhan o hindi maayos.</p>
            <p><strong>Kasingkahulugan:</strong> Magulo, Magahol, Aburido, Gulo</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Gumágaralgal</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tunog na malakas o patuloy.</p>
            <p><strong>Kasingkahulugan:</strong> Alingawngaw, kasabay na tunog</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Gusì</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng lalagyan na gawa sa porselana o seramika.</p>
            <p><strong>Kasingkahulugan:</strong> Banga; tapayan.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Gugol</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagkonsumo o paggamit ng yaman o salapi.</p>
            <p><strong>Kasingkahulugan:</strong> Gastos, pag-aaksaya.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hagad</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Hagdang pader.</p>
            <p><strong>Kasingkahulugan:</strong> Stepped wall</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Himaling</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matinding damdamin o obsesyon sa isang bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Obsesyon; pagkaulol</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hinánakit</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Sakit ng loob, kalungkutan.</p>
            <p><strong>Kasingkahulugan:</strong> Heartache, sorrow</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hinibùan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Binago o inayos mula sa orihinal na anyo.</p>
            <p><strong>Kasingkahulugan:</strong> Binago; inayos</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hinihimas (palit)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang paggamit ng malumanay at maingat na galaw ng mga kamay sa isang bagay o parte ng katawan upang magbigay ng ginhawa o kasiyahan.</p>
            <p><strong>Kasingkahulugan:</strong> Hinaplos, Pinapahiran, Hinahaplos-haplos</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hudyóng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Judío (Jew), tao ng karera ng judyo.</p>
            <p><strong>Kasingkahulugan:</strong> Jew</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hungkoy</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang hungkoy ay nangangahulugang mabigat na kalagayan o pagkahulog sa isang mahirap na sitwasyon. Maaari rin itong tumukoy sa pagkadurog ng pag-asa o kabiguan.</p>
            <p><strong>Kasingkahulugan:</strong> Kabiguan, Pagbagsak, Kawalan ng pag-asa, pagkalugmok</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Husito</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang kasapi ng isang kilusang panrelihiyon noong panahon ng mga Husita.</p>
            <p><strong>Kasingkahulugan:</strong> Rebelde; tagasunod ng kilusan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hungkìan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang lugar ng digmaan o labanan.</p>
            <p><strong>Kasingkahulugan:</strong> Larangan; pook ng digmaan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hubdin</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Alisin o tanggalin ang isang bagay, partikular ang pagtatakip o pagpapanggap.</p>
            <p><strong>Kasingkahulugan:</strong> Hubarin, tanggalin, alisin</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Huepe</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang malakas na sigaw o hiyaw.</p>
            <p><strong>Kasingkahulugan:</strong> Hiyaw; sigaw</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Hitsó</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng nganga na ginagamit bilang pampalipas-oras.</p>
            <p><strong>Kasingkahulugan:</strong> Nganga; nganganga</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Himagsikan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pag-aalsa o pagrerebelde ng taumbayan laban sa pamahalaan.</p>
            <p><strong>Kasingkahulugan:</strong> Rebolusyon, rebelyon</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Iaboy</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ihagis o itapon, kadalasang may kasamang puwersa.</p>
            <p><strong>Kasingkahulugan:</strong> Itapon, maghagis</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ikatitighaw</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ginagamit sa pagpapahayag ng aksyon ng pagpapawi ng uhaw o pagkakaroon ng kasiyahan sa isang bagay na kinahihiligan.</p>
            <p><strong>Kasingkahulugan:</strong> magpawi</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ikinabuwal</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Natumba sa pagkakatayo.</p>
            <p><strong>Kasingkahulugan:</strong> Natumba, napahiga</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ilalathalà</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ilalagay sa publiko sa pamamagitan ng paglilimbag.</p>
            <p><strong>Kasingkahulugan:</strong> Ipapalimbag; ipapahayag</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ilustrisimo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tawag sa obispo, arsobispo, at matataas na opisyal ng pamahalaan.</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Ilustrisima</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang mataas na antas o ranggo sa lipunan.</p>
            <p><strong>Kasingkahulugan:</strong> Marangal, mataas ang posisyon.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Inaandukha</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Inaasahan o tinataya.</p>
            <p><strong>Kasingkahulugan:</strong> Inaakala, tinataya, ipinagpapalagay</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Iniuukilkil</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ipinipilit o itinulak na pumasok sa isipan o puso ng isang tao.</p>
            <p><strong>Kasingkahulugan:</strong> Ipinipilit, pinipiga.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kabuhalhalan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa pagiging magulo, maingay, at walang preno sa kilos at pananalita, madalas ay labag sa kaugalian.</p>
            <p><strong>Kasingkahulugan:</strong> Kalokohan, Kaguluhan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kabiyak</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang tao na katuwang sa buhay, maaaring asawa o esposo, o isa sa dalawang bahagi na bumubuo sa kabuuan, simboliko para sa mag-asawa.</p>
            <p><strong>Kasingkahulugan:</strong> Asawa, Katuwang, Ka-partner</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kahapishapsis</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Malungkot, kaawa-awa, o puno ng dalamhati.</p>
            <p><strong>Kasingkahulugan:</strong> Kalunos-lunos, kaawa-awa, nakahahabag</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kaawàawàng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Karapat-dapat na kaawaan.</p>
            <p><strong>Kasingkahulugan:</strong> Worthy of pity</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kabuktután</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kalokohan o kasamaan.</p>
            <p><strong>Kasingkahulugan:</strong> Foolishness, wickedness</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kahalayan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kabastusan o masamang gawi.</p>
            <p><strong>Kasingkahulugan:</strong> Lewdness, immorality</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kalawít</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng panghuli o panghuli ng isda.</p>
            <p><strong>Kasingkahulugan:</strong> Fishing tool</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kalanay</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kalamanang ipinapaabot o ang kaligayahan ng bawat isa sa kanila.</p>
            <p><strong>Kasingkahulugan:</strong> Shared happiness</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kapisanán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang samahan o grupo.</p>
            <p><strong>Kasingkahulugan:</strong> Organization, group</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Katwâán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kaligayahan, kasiyahan.</p>
            <p><strong>Kasingkahulugan:</strong> Happiness, contentment</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Katalasán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Katalasan, katalinuhan.</p>
            <p><strong>Kasingkahulugan:</strong> Sharpness, intelligence</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kawani</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Opisyal, miyembro ng isang organisasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Official, member</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kabatirán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kaalaman o impormasyon tungkol sa isang paksa.</p>
            <p><strong>Kasingkahulugan:</strong> Impormasyon; kaalaman</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kamagóng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng matibay at mamahaling kahoy.</p>
            <p><strong>Kasingkahulugan:</strong> Kahoy; ebony</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Karali</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng matigas na kahoy na karaniwang ginagamit sa paggawa ng kasangkapan.</p>
            <p><strong>Kasingkahulugan:</strong> Kahoy; materyal</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kabuhalhalan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa pagiging magulo, maingay, at walang preno sa kilos at pananalita, madalas ay labag sa kaugalian.</p>
            <p><strong>Kasingkahulugan:</strong> Kalokohan, Kaguluhan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kabiyak</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang tao na katuwang sa buhay, maaaring asawa o esposo, o isa sa dalawang bahagi na bumubuo sa kabuuan, simboliko para sa mag-asawa.</p>
            <p><strong>Kasingkahulugan:</strong> Asawa, Katuwang, Ka-partner</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kanónigo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa mga alituntunin o batas ng Simbahang Katoliko Romano; ayon sa mga patakaran ng simbahan; ukol sa mga usaping pangsimbahan.</p>
            <p><strong>Kasingkahulugan:</strong> Batas ng simbahan, Alituntunin ng simbahan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kagiting̃an</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang katangian ng pagiging matapang at determinadong harapin ang panganib o pagsubok para sa kapakanan ng iba, nagpapakita ng kahanga-hangang tapang.</p>
            <p><strong>Kasingkahulugan:</strong> Tapang, Kabayanihan, Kahusayan, Katapangan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kawaní</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang indibidwal na nagtatrabaho at sumusuporta sa opisina, organisasyon, negosyo, institusyon, o gobyerno, tumutulong sa mga gawain at pangangailangan sa ilalim ng kasunduan.</p>
            <p><strong>Kasingkahulugan:</strong> Empleyado, Trabahador, Manggagawa, Opisyal, Kasapi</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinapapatung̃an</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang bahagi o pundasyon na ginagamit sa paglalagay o pagsuporta sa mga bagay upang manatili itong nakatayo, matatag, o bilang panimulang punto sa pagtatayo.</p>
            <p><strong>Kasingkahulugan:</strong> Pundasyon, Saligan, Haligi</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kura</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang paring Katoliko na namumuno at nagsasagawa ng ritwal at misa bilang espiritwal na lider ng isang parokya sa lokal na lugar.</p>
            <p><strong>Kasingkahulugan:</strong> Pari, Pastor, Alagad ng Simbahan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kaparang̃an</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang malawak na bukas na espasyo sa labas, karaniwang natatakpan ng damo at iba pang maliliit na halaman, kadalasang ginagamit para sa pagpapastol o paglilibang.</p>
            <p><strong>Kasingkahulugan:</strong> Kapatagan, parang, pastulan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Katuturán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang antas ng kahalagahan, kabuluhan, o epekto ng isang bagay, ideya, o pangyayari sa isang partikular na konteksto o sitwasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Kabuluhan, halaga, saysay, layunin, diwa</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinakandili</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang pagbibigay suporta at malasakit sa isang tao, lalo na sa pangangailangan, upang makatulong sa kanilang pag-unlad o pagbangon sa mga pagsubok.</p>
            <p><strong>Kasingkahulugan:</strong> Pag-aaruga, pag-aalaga, pagsuporta</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kolyar</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Piraso ng tela sa leeg ng damit o kasuotan ng alagang hayop para sa tali o identipikasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Kwelyo, leeg-pisi</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kudya</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tradisyonal na instrumentong pangmusika ng Pilipinas, yari sa kahoy, hugis bangka, may dalawang kuwerdas, at ginagamit sa iba't ibang seremonya at okasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Kudyapi, Kutiyapi, Gitara</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinahabagán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Magpakita at maramdaman ang awa o habag para sa kalagayan o sitwasyon ng isang tao o hayop, kasama ang pagpapahayag ng pag-aalala.</p>
            <p><strong>Kasingkahulugan:</strong> Naawa, Naantig, Nahabag, Nagmalasakit, Nadamayan</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinatakutan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang bagay o pangyayari na nagdudulot ng takot o pangamba sa isang tao o grupo ng tao.</p>
            <p><strong>Kasingkahulugan:</strong> Kinakatakutan, takot, pangamba</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinumpara</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang proseso ng pagpapakita ng pagkakaiba o pagkakapareho ng dalawang bagay o ideya sa pamamagitan ng pag-aaral sa kanilang mga katangian.</p>
            <p><strong>Kasingkahulugan:</strong> Inihambing, Inilapat, Ipinagkumpara</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinhawahan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang pakiramdam ng ginhawa o kaluwagan mula sa pagod, sakit, o problema.</p>
            <p><strong>Kasingkahulugan:</strong> Ginhawa, Kaluwagan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kinalugdan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa pagpapakita ng kasiyahan o kaligayahan sa isang kaganapan, gawain, o pangyayari na nagustuhan o pinahahalagahan.</p>
            <p><strong>Kasingkahulugan:</strong> Pabor, Kasiyahan, Kaligayahan</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kapalit</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang taong o bagay na pumapalit o nag-aake sa isang posisyon, bagay, o tungkulin.</p>
            <p><strong>Kasingkahulugan:</strong> Kapalit, Pamalit, Kahalili</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kuminang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang pagbigay o paglabas ng maliwanag na liwanag o kislap, karaniwang mula sa isang matalim o makintab na bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Kumislap, Nagningning, Kumutik</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kusang-loob</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang bagay na ginagawa ng isang tao nang walang pinipilit o ipinag-uutos, sa sariling kagustuhan o desisyon.</p>
            <p><strong>Kasingkahulugan:</strong> Voluntaryo, Layon ng sarili</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Katalinuhan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang kakayahan ng isang tao na mag-isip nang mabilis at tama, at makapagbigay ng mga matalinong solusyon sa mga problema.</p>
            <p><strong>Kasingkahulugan:</strong> Talino, Kabihasaan, Katalinohan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Katamisan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang kalidad ng pagiging matamis o malasa, maaaring tumukoy sa pagkain o sa mga karanasan.</p>
            <p><strong>Kasingkahulugan:</strong> Kahalayan, Kaligayahan, Kaakit-akit</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kalikuan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang gawain o ugali na labag sa mga alituntunin o moralidad, tulad ng kasalanan o maling gawa.</p>
            <p><strong>Kasingkahulugan:</strong> Kasalanan, Pagkakamali, Kalokohan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Kakaibang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa isang bagay na natatangi o hindi pangkaraniwan, madalas na ginagamit sa mga bagong ideya o anyo.</p>
            <p><strong>Kasingkahulugan:</strong> Hindi pangkaraniwan, Natatangi, Lihim</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lagitlit</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tunog na matinis o mabilis na kaluskos.</p>
            <p><strong>Kasingkahulugan:</strong> Kaluskos</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Layo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pakiramdam ng pagkahilo o kawalan ng balanse na maaaring sinasabayan ng pagduduwal.</p>
            <p><strong>Kasingkahulugan:</strong> hilo, pagduduwal</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lapastang̃anin</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang sadyang paggawa ng bagay na nagpapakita ng kawalan ng respeto o pagpapahalaga sa mga itinuturing na banal, sagrado, o sa mga tuntunin at batas.</p>
            <p><strong>Kasingkahulugan:</strong> Hamakin, bastusin, alipustahin</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lelong</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang salitang "lelong" ay isang termino na ginagamit upang tumukoy sa isang matandang lalaki o lolo, karaniwang sa isang malalim na pagpapakita ng paggalang sa edad at karanasan ng tao.</p>
            <p><strong>Kasingkahulugan:</strong> Lolo, matandang lalaki, ama ng magulang</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Liluk</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Sining ng paglikha ng pigura o disenyo sa pamamagitan ng pag-ukit o pagbawas ng mga parte mula sa materyales tulad ng kahoy, bato, at iba pa.</p>
            <p><strong>Kasingkahulugan:</strong> Pag-uukit, Carving, Paglilok, Eskultura</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Liniligíd</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Inililibot o inaararo.</p>
            <p><strong>Kasingkahulugan:</strong> Inililibot; iniikot.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Liwasan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang pampublikong lugar na maluwag at bukas.</p>
            <p><strong>Kasingkahulugan:</strong> Plaza; parke</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lisyon</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Laban, digmaan, o kaguluhan sa lipunan o politika.</p>
            <p><strong>Kasingkahulugan:</strong> Digmaan, Laban, Komplikasyon, Alitan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lulong</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Lupon ng mga tao o samahan.</p>
            <p><strong>Kasingkahulugan:</strong> Samahan, grupo</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lulo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang bloke ng bato o ladrilyo na ginagamit sa konstruksyon.</p>
            <p><strong>Kasingkahulugan:</strong> Ladrilyo; bato</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lumalamlam</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang salitang lumalamlam ay nangangahulugang humina o nababawasan ang liwanag o ningning. Karaniwan itong ginagamit upang ilarawan ang kalagayan ng liwanag na nawawala ang kalakasan o ang pagiging maliwanag nito, o kaya ay ang pakiramdam ng kalungkutan at pagiging malungkot.</p>
            <p><strong>Kasingkahulugan:</strong> Nalalabo, nanghihina, nababawasan</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Luklukan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang upuan o trono, karaniwang inuukitan ng simbolo ng kapangyarihan.</p>
            <p><strong>Kasingkahulugan:</strong> Trono, upuan.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Liyo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pakiramdam ng pagkahilo o kawalan ng balanse na maaaring sinasabayan ng pagduduwal.</p>
            <p><strong>Kasingkahulugan:</strong> hilo, pagduduwal</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Lulan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nasa loob, sakay, o kasama ng mga taong o bagay na naglalakbay gamit ang transportasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Malaon</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matagal na panahon.</p>
            <p><strong>Kasingkahulugan:</strong> Matagal, mahabang panahon.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Malingal</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Napakaganda, marangya, o kahanga-hanga sa anyo, kilos, o kabuuan.</p>
            <p><strong>Kasingkahulugan:</strong> marilag, magarbo, dakila, kahanga-hanga, marangya.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Malirip</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Makita o matukoy sa pamamagitan ng pag-iisip o pagsusuri.</p>
            <p><strong>Kasingkahulugan:</strong> Malalaman, mauunawaan, matutuklasan.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makata</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tao na may kasanayan o kahusayan sa pagsulat ng mga tula.</p>
            <p><strong>Kasingkahulugan:</strong> Manunula, taga-tula, makathang-tao.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makiyas</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagpapakita ng kaaya-aya, marangal, o maayos na tindig.</p>
            <p><strong>Kasingkahulugan:</strong> Matikas, marangal, maayos.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makaimík (palit)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Hindi makapagsalita o magbigay ng tugon dahil sa pagkabigla, takot, pagkamangha, o kawalan ng kakayahang magkomento sa isang sitwasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Nabigla, naguguluhan.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makamangha</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa isang bagay o tao na may nakakapukaw na epekto o damdamin.</p>
            <p><strong>Kasingkahulugan:</strong> Nakaka-amaze, nakakabilib.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Mapahinuhod</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Madaling mapapayag o madaling makumbinsi sa isang bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Madaling makumbinsi, sunod-sunuran, masunurin.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Mapaglaláng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> May maling layunin o balak.</p>
            <p><strong>Kasingkahulugan:</strong> Having wrong intent.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Magsalat (pandiwa | verb)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Maghanap o mag-imbestiga gamit ang kamay.</p>
            <p><strong>Kasingkahulugan:</strong> Maghanap, mag-usisa, mag-imbestiga.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Mangdaragit (pangngalan | noun)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tao na nanghuhuli o nagnanakaw gamit ang dahas.</p>
            <p><strong>Kasingkahulugan:</strong> Tulisan, bandido, mang-aagaw.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Marmol</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng mamahaling bato na karaniwang ginagamit sa konstruksyon o eskultura.</p>
            <p><strong>Kasingkahulugan:</strong> Bato; marmol.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Metápisiko</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang pilosopiya na nag-aaral ng mga bagay na lampas sa pisikal.</p>
            <p><strong>Kasingkahulugan:</strong> Metapisika; pilosopiya.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Misa de aguinaldo</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang misa sa madaling-araw na ginaganap tuwing panahon ng Kapaskuhan.</p>
            <p><strong>Kasingkahulugan:</strong> Simbang Gabi; misa sa Kapaskuhan.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Misa mayor</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang Misa Mayor ay tumutukoy sa isang malakihang misa o seremonyang panrelihiyon na ginaganap sa Simbahang Katoliko, karaniwang may kasamang musika, insenso, at maringal na pagdiriwang.</p>
            <p><strong>Kasingkahulugan:</strong> Pangunahing misa, misa solmne, malaking misa.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Malaon</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matagal na panahon.</p>
            <p><strong>Kasingkahulugan:</strong> Matagal, mahabang panahon.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makaimík (palit)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Hindi makapagsalita o magbigay ng tugon dahil sa pagkabigla, takot, pagkamangha, o kawalan ng kakayahang magkomento sa isang sitwasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Nabigla, Naguguluhan.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makata</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tao na may kasanayan o kahusayan sa pagsulat ng mga tula.</p>
            <p><strong>Kasingkahulugan:</strong> Manunula, taga-tula, makathang-tao.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makamiyás</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kilos o galaw.</p>
            <p><strong>Kasingkahulugan:</strong> Movements, gestures.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Makamangha</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang bagay o pangyayari na nakakabilib o nakaka-amaze.</p>
            <p><strong>Kasingkahulugan:</strong> Kagilas-gilas, kahanga-hanga.</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Mag-aalahás</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang eksperto sa pagdidisenyo, paggawa, pag-ayos, at pagbenta ng alahas gamit ang mahahalagang metal at bato.</p>
            <p><strong>Kasingkahulugan:</strong> Alahero, Panday alahas, Alahasero, Ginto, Makinilyero (kung tumutukoy sa mga taong gumagawa ng mga metal na alahas).</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Magmongha</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Babaeng miyembro ng relihiyosong kongregasyon, nanunumpa ng kahirapan, pagkakalinis, at pagsunod, nakatuon sa paglilingkod at pananalangin sa simbahan at komunidad.</p>
            <p><strong>Kasingkahulugan:</strong> Madre.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan (noun)</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Magkaantiluhan (pandiwa | verb)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Magkakaroon ng hindi pagkakaunawaan o alitan.</p>
            <p><strong>Kasingkahulugan:</strong> Magkakagalit, magkakaalitan, magtatalo.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Magpapakalabis</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Gumawa ng higit pa sa nararapat o akma; pagbibigay-diin o pagpapakita ng sobra kaysa sa tunay na kalagayan o nararapat.</p>
            <p><strong>Kasingkahulugan:</strong> Magpapasobra, maglalampas, magmamaliw.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Mang̃abóng̃abó</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Natirang pinong-pino at abuhing sangkap mula sa nasunog na bagay, madalas ginagamit bilang pataba o sa ritwal.</p>
            <p><strong>Kasingkahulugan:</strong> Alikabok, Abo.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Marmol</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng mamahaling bato na karaniwang ginagamit sa konstruksyon o eskultura.</p>
            <p><strong>Kasingkahulugan:</strong> Bato; marmol.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Mangdaragit</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tao na nanghuhuli o nagnanakaw gamit ang dahas.</p>
            <p><strong>Kasingkahulugan:</strong> Tulisan, bandido, mang-aagaw.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Malirip (pandiwa | verb)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Makita o matukoy sa pamamagitan ng pag-iisip o pagsusuri.</p>
            <p><strong>Kasingkahulugan:</strong> Malalaman, mauunawaan, matutuklasan.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Magsalat (pandiwa | verb)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Maghanap o mag-imbestiga gamit ang kamay.</p>
            <p><strong>Kasingkahulugan:</strong> Maghanap, mag-usisa, mag-imbestiga.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>

    <div class="card">
        <div class="card-title">Nag-aantandâng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kilos ng paggawa ng simbolo ng krus gamit ang daliri sa noo, dibdib, at mga balikat bilang tanda ng pananampalataya o pagdarasal</p>
            <p><strong>Kasingkahulugan:</strong> Nagbabayad-galang o nagdarasal</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nag-apuháp</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Naghanap gamit ang pandama, karaniwan sa dilim</p>
            <p><strong>Kasingkahulugan:</strong> Nangapa; naghanap</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagbulaybulay</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagmumuni-muni o pagpapalalim ng isip sa mga bagay-bagay</p>
            <p><strong>Kasingkahulugan:</strong> Pagninilay-nilay, pagmumuni</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagdisimula</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nag-umpisa</p>
            <p><strong>Kasingkahulugan:</strong> Started</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nag-iiyukan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nag-iiyakan o nagdadalamhati</p>
            <p><strong>Kasingkahulugan:</strong> Nagluluksuhan; nagdadalamhati</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Naglagalag</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Maglakbay o maglibot nang walang tiyak na destinasyon</p>
            <p><strong>Kasingkahulugan:</strong> Naglakbay, naglibot, nag-ikot</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagliglig</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa galaw o pagsabog na nagdudulot ng kalituhan o pagkabasag</p>
            <p><strong>Kasingkahulugan:</strong> Nag-alimpuyo, Nagsabog, Nagpagalaw</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagng̃íng̃itng̃ít</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matinding galit o inis na nararamdaman dahil sa labis na pagkadismaya o pagkagalit sa isang sitwasyon o tao, na may sobrang intensidad ng emosyon</p>
            <p><strong>Kasingkahulugan:</strong> Pagkagalit</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun / Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakababatyag</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagdudulot ng takot o pangamba; nakakasindak</p>
            <p><strong>Kasingkahulugan:</strong> Nakakatakot, Nakakabahala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakabanaag</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Mapansin nang malabo o mahina</p>
            <p><strong>Kasingkahulugan:</strong> Makita, matanaw, magkaruon ng pangitain</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakabayak</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa kakayahang magdulot ng masamang epekto</p>
            <p><strong>Kasingkahulugan:</strong> Nakasisira, Nakakasama, Nakakapinsala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nangangalirang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Labis na pagkatuyo o pagkawala ng sigla ng isang tao o bagay</p>
            <p><strong>Kasingkahulugan:</strong> Labis na natutuyo, tigang, lanta, payat</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nag-aantandâng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kilos ng paggawa ng simbolo ng krus gamit ang daliri sa noo, dibdib, at mga balikat bilang tanda ng pananampalataya o pagdarasal</p>
            <p><strong>Kasingkahulugan:</strong> Nagbabayad-galang o nagdarasal</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nag-apuháp</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Naghanap gamit ang pandama, karaniwan sa dilim</p>
            <p><strong>Kasingkahulugan:</strong> Nangapa; naghanap</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagbulaybulay</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagmumuni-muni o pagpapalalim ng isip sa mga bagay-bagay</p>
            <p><strong>Kasingkahulugan:</strong> Pagninilay-nilay, pagmumuni</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nag-iiyukan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nag-iiyakan o nagdadalamhati</p>
            <p><strong>Kasingkahulugan:</strong> Nagluluksuhan; nagdadalamhati</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Naglagalag</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Maglakbay o maglibot nang walang tiyak na destinasyon</p>
            <p><strong>Kasingkahulugan:</strong> Naglakbay, naglibot, nag-ikot</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagliglig</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa galaw o pagsabog na nagdudulot ng kalituhan o pagkabasag</p>
            <p><strong>Kasingkahulugan:</strong> Nag-alimpuyo, Nagsabog, Nagpagalaw</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nagng̃íng̃itng̃ít</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matinding galit o inis na nararamdaman dahil sa labis na pagkadismaya o pagkagalit sa isang sitwasyon o tao, na may sobrang intensidad ng emosyon</p>
            <p><strong>Kasingkahulugan:</strong> Pagkagalit</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun / Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakababatyag</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagdudulot ng takot o pangamba; nakakasindak</p>
            <p><strong>Kasingkahulugan:</strong> Nakakatakot, Nakakabahala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakabanaag</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Mapansin nang malabo o mahina</p>
            <p><strong>Kasingkahulugan:</strong> Makita, matanaw, magkaruon ng pangitain</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakakainsulto</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagpapakita ng kawalan ng galang o respeto sa ibang tao sa pamamagitan ng pang-iinsulto</p>
            <p><strong>Kasingkahulugan:</strong> Nakakainsulto, nakahihiya, mapanlait, mapanirang-puri</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun / Pang-uri</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakakalunos</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nakakapanlumo o nakakalungkot</p>
            <p><strong>Kasingkahulugan:</strong> Nakakalunos, nakakabahala</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nakakabahala</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagdudulot ng takot o pangamba</p>
            <p><strong>Kasingkahulugan:</strong> Nakakatakot, nakakapangilabot</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nangangalirang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Labis na pagkatuyo o pagkawala ng sigla ng isang tao o bagay</p>
            <p><strong>Kasingkahulugan:</strong> Labis na natutuyo, tigang, lanta, payat</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Nanglilimahid</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagpapakita ng dumi o karumihan</p>
            <p><strong>Kasingkahulugan:</strong> Marumi, Magulo</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Napakamasiba</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang taong hindi nasisiyahan sa anumang bagay, laging gutom sa mga materyal na bagay</p>
            <p><strong>Kasingkahulugan:</strong> Matakaw, sakim</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Napakamasindakin</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Lubhang nakakatakot o labis na nakakabahala</p>
            <p><strong>Kasingkahulugan:</strong> Nakakatakot, nakakabahala, nakakakilabot</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Napapalamutihan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang isang bagay o lugar ay pinapalamutian o pinapaganda sa pamamagitan ng dekorasyon</p>
            <p><strong>Kasingkahulugan:</strong> Pinapaganda, dekorasyon</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Napapalaták</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tunog mula sa dila na pinaghihiwalay sa bubong ng bibig bilang reaksyon o pagpapahayag ng damdamin sa hindi inaasahang pangyayari</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pagbulalá</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagpapalaya o pag-laya mula sa isang bagay o kalagayan.</p>
            <p><strong>Kasingkahulugan:</strong> Pagpapalaya, pag-laya</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pagkábulalás</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagkagulo o pagkakalito.</p>
            <p><strong>Kasingkahulugan:</strong> Pagkalito, kaguluhan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pagpapasigíd</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagbibigay diin o pagpapakita ng kahalagahan ng isang bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Pagdiin, pagpapakita</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pagsasapantaháng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagtantiya o paghula tungkol sa isang bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Paghula, pagtantiya</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pahát</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Paalala o pahayag.</p>
            <p><strong>Kasingkahulugan:</strong> Paalala, pahayag</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Palikawlikaw</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagiging hindi diretsong paggalaw o pagkilos.</p>
            <p><strong>Kasingkahulugan:</strong> Paikot-ikot, paikot</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pang̃ang̃ayupapà</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagtulong o pagkilos na may malasakit o nagmamalasakit.</p>
            <p><strong>Kasingkahulugan:</strong> Tulong, malasakit</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pariway</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salungatan o pakikisalamuha.</p>
            <p><strong>Kasingkahulugan:</strong> Alitan, salungatan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pasaliwâ</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagpapaamo o pagpapatawad.</p>
            <p><strong>Kasingkahulugan:</strong> Pagpapatawad, pag-amin</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pigtâ</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagkasira o pagkabasag ng isang bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Pagbasag, sira</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Putris</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nangamoy o nabubulok na bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Nabubulok, amoy</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pagsusalitâ</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagsasabi o pagbibigay ng pahayag.</p>
            <p><strong>Kasingkahulugan:</strong> Speaking, statement</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pilibustero</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tao na nagsasagawa ng mga hindi tamang gawain laban sa pamahalaan o sa mga may kapangyarihan.</p>
            <p><strong>Kasingkahulugan:</strong> Person against government</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>

    <div class="card">
        <div class="card-title">Pagtutunggali</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Laban o pag-aaway, karaniwang may kinalaman sa mga opinyon, layunin, o interes.</p>
            <p><strong>Kasingkahulugan:</strong> laban, komprontasyon, alitan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pawalán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang pagpapalaya o pagtanggal ng kontrol.</p>
            <p><strong>Kasingkahulugan:</strong> Palayain; pakawalan.</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pigtâ</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagkasira o pagkabasag ng isang bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Pagbasag, sira</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pilibustero</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tao na nagsasagawa ng mga hindi tamang gawain laban sa pamahalaan o sa mga may kapangyarihan.</p>
            <p><strong>Kasingkahulugan:</strong> Person against government</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pinablúaanan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagtanggi o pagkitil ng isang pahayag o akusasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Itinanggi, Pinasubalian</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pinakahihirapan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pinakamahihirap o lubos na nagdarahop.</p>
            <p><strong>Kasingkahulugan:</strong> pinakamatinding nangangailangan, pinakakawawa</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pinakaigihan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Gawin nang may kahusayan, pagsisikap, at ayos upang pagbutihin ang kalidad o resulta ng isang gawain o proyekto.</p>
            <p><strong>Kasingkahulugan:</strong> Pinakamahusay, pinahusay, pinagbuti, inoptimisa</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Piligro</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa panganib o bagay na nagdudulot ng takot.</p>
            <p><strong>Kasingkahulugan:</strong> Panganib, delikado</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Pilsbury</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang komersyal na tatak na ginagamit sa pagkain.</p>
            <p><strong>Kasingkahulugan:</strong> (Walang kasingkahulugan)</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Quæ</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "na" o "kung saan".</p>
            <p><strong>Kasingkahulugan:</strong> Na; kung saan</p>
            <p><strong>Uri ng Salita:</strong> Panghalip | Pronoun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Quia vocatur</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "sapagkat ito ay tinatawag".</p>
            <p><strong>Kasingkahulugan:</strong> Sapagkat tinawag; dahil tinatawag</p>
            <p><strong>Uri ng Salita:</strong> Pangungusap | Phrase</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Reberendo (reverend)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pamagat ng paggalang na ikinakabit sa pangalan ng mga pari, ministro, o pastor.</p>
            <p><strong>Kasingkahulugan:</strong> Kagalang-galang, kapita-pitagan</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Rekimeternam</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang relihiyosong ritwal o dasal para sa mga yumao.</p>
            <p><strong>Kasingkahulugan:</strong> Ritwal; panalangin para sa yumao.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Requescat in pace</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "sumalangit nawa ang kanyang kaluluwa".</p>
            <p><strong>Kasingkahulugan:</strong> Paalam; dasal para sa patay</p>
            <p><strong>Uri ng Salita:</strong> Pangungusap | Phrase</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Rebolber</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng baril na may umiikot na silindro para sa bala.</p>
            <p><strong>Kasingkahulugan:</strong> Baril; pistola.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Rebesino</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng makapal na tela o materyal.</p>
            <p><strong>Kasingkahulugan:</strong> Tela; materyal</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Relikias</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> [No available details]</p>
            <p><strong>Kasingkahulugan:</strong> [No available details]</p>
            <p><strong>Uri ng Salita:</strong> [No available details]</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Retorica</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang sining ng pagsasalita o pagtatalo.</p>
            <p><strong>Kasingkahulugan:</strong> Pagtatalo, wika</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Requiem</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang misa o panalangin para sa mga yumao.</p>
            <p><strong>Kasingkahulugan:</strong> Misa para sa patay; dasal para sa yumao</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Saláwál</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang bahagi ng kasuotan, karaniwang pang-ibaba.</p>
            <p><strong>Kasingkahulugan:</strong> Lower garment</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sambalilong</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang uri ng sombrero o takip sa ulo.</p>
            <p><strong>Kasingkahulugan:</strong> Sombrero; takip sa ulo.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Salakot na Timsim</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tradisyonal na malapad na sombrero mula sa Pilipinas, karaniwang yari sa kawayan, rattan, o dahon ng palma; ginagamit bilang proteksyon laban sa araw at ulan.</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Salambaw (lift net)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Malaking lambat na ginagamit sa pangingisda, nakakabit sa balsa para sa maramihang huli.</p>
            <p><strong>Kasingkahulugan:</strong> Lambat, pukot, tangkal</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sapantaha</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang ideya o palagay na nabuo nang walang katiyakan o sapat na ebidensya.</p>
            <p><strong>Kasingkahulugan:</strong> Hinuha, hinala, haka-haka, akala, palagay, bintang</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sapantahâ</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Hinala, pagsuspetsa.</p>
            <p><strong>Kasingkahulugan:</strong> Suspicion, doubt</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sapantahang</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang hinala, akala, o palagay na walang sapat na katibayan.</p>
            <p><strong>Kasingkahulugan:</strong> Hinala, akala, palagay, duda</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Samsamin</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang marahas na pag-agaw o pagkumpiska sa ari-arian ng iba nang walang pahintulot, karaniwang sa pamamagitan ng lakas o kapangyarihan</p>
            <p><strong>Kasingkahulugan:</strong> Kumpiskahin, Agawin, Sakupin, Kamkamin, Bawiin</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Secchi</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang instrumento o disk na ginagamit sa pagsusukat ng kalinawan ng tubig.</p>
            <p><strong>Kasingkahulugan:</strong> Disk ng Secchi; panukat ng tubig</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Segunda</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ikalawa sa pagkakasunod-sunod.</p>
            <p><strong>Kasingkahulugan:</strong> Pangalawa; ikalawa</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sentido (noun)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang kabatiran, pag-unawa, o kakayahan sa pag-iisip.</p>
            <p><strong>Kasingkahulugan:</strong> Pang-unawa, kahulugan.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sinapantahà</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pinaghinalaan o inakala.</p>
            <p><strong>Kasingkahulugan:</strong> Inakala; pinaghinalaan</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sutla</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang "sutla" ay isang uri ng makinis, makintab, at malambot na tela na karaniwang ginagamit sa paggawa ng mamahaling kasuotan.</p>
            <p><strong>Kasingkahulugan:</strong> Seda, telang makinis, lino</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sumasalunga</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Naglalakbay o nagpapakita ng galaw patungo sa isang direksyon.</p>
            <p><strong>Kasingkahulugan:</strong> Wala</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sumisilakbo (pandiwa | verb)</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Biglaang pagsikò o pagsabog ng damdamin.</p>
            <p><strong>Kasingkahulugan:</strong> Sumabog, Umapaw</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Santos Madre Iglesia</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang Santa Madre Iglesia o Banal na Simbahan.</p>
            <p><strong>Kasingkahulugan:</strong> Holy Church</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Sagitsit</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tunog o ingay mula sa bagay na mabilis na dumadaan o gumagalaw sa hangin.</p>
            <p><strong>Kasingkahulugan:</strong> Huni, sipol, siklab</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">TampiPí</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Lalagyan na gawa sa hinabing kawayan o nipa, ginagamit upang maglagay ng damit o iba pang gamit.</p>
            <p><strong>Kasingkahulugan:</strong> basket, bag, maleta</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">TampiPí</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Ang tampipi ay isang lalagyan o kahon na gawa sa hinabing dahon ng nipa o buli, karaniwang ginagamit bilang sisidlan ng mga damit o gamit.</p>
            <p><strong>Kasingkahulugan:</strong> Bayong, sisidlan, bagahe</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tablero</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang patag na ibabaw na ginagamit bilang bahagi ng isang kasangkapan o para sa pagsusulat o paglalaro.</p>
            <p><strong>Kasingkahulugan:</strong> Lamesa; plaka</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">También</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Espanyol na nangangahulugang "gayundin" o "rin".</p>
            <p><strong>Kasingkahulugan:</strong> Rin; din</p>
            <p><strong>Uri ng Salita:</strong> Pang-abay | Adverb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tyndall</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang siyentipiko na nag-aaral ng epekto ng liwanag sa mga particle sa himpapawid.</p>
            <p><strong>Kasingkahulugan:</strong> Siyentipiko; mananaliksik</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tagintíng</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tunog na malinaw at mataas na tono, na nililikha ng pagtama o pagkiskis ng mga bagay na metal, porselana, at iba pa, na kadalasang mahina ngunit malinaw.</p>
            <p><strong>Kasingkahulugan:</strong> Tunog, himig, alingawngaw</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tapyás</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang maliit na piraso o bahagi na natanggal mula sa isang mas malaking bagay dahil sa pagputol o pagbawas, lumilitaw sa pagbabago ng orihinal nitong anyo.</p>
            <p><strong>Kasingkahulugan:</strong> Piraso, Hiwa, Putol</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tolda</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matibay at magaspang na tela na ginagamit sa paggawa ng tolda, pagtakip, at proteksyon laban sa ulan, araw, at iba pang elemento ng kapaligiran.</p>
            <p><strong>Kasingkahulugan:</strong> Telang pangtolda, Canvas, Matibay na tela</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tulisán</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tao na lumalabag sa batas, karaniwang nagnanakaw o umaatake sa mga manlalakbay sa mga daan o liblib na lugar.</p>
            <p><strong>Kasingkahulugan:</strong> Bandido, tulisan, magnanakaw</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tunggák</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Kulang sa kaalaman at hindi nagpapakita ng matalinong pag-iisip o pagkilos sa mga bagay-bagay.</p>
            <p><strong>Kasingkahulugan:</strong> Hangal, mangmang, mapurol</p>
            <p><strong>Uri ng Salita:</strong> Pang-uri | Adjective</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tumiwasay</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Lumayo o umalis mula sa isang sitwasyon.</p>
            <p><strong>Kasingkahulugan:</strong> Lumayo, Umiwas</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Takbá</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang bilis ng pagtakbo o paggalaw.</p>
            <p><strong>Kasingkahulugan:</strong> Takbo, galaw</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tangláw</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang liwanag na nagbibigay-gabay.</p>
            <p><strong>Kasingkahulugan:</strong> Ilaw, gabay</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Taripa</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Bayad o buwis na ipinapataw sa mga kalakal o serbisyo.</p>
            <p><strong>Kasingkahulugan:</strong> Buwis, presyo</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tulisan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tao na gumagawa ng krimen o karahasan (bandido).</p>
            <p><strong>Kasingkahulugan:</strong> Bandido, salte</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tigatig</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Matinding sakit o kirot, karaniwang dulot ng isang matinding pagkatalo.</p>
            <p><strong>Kasingkahulugan:</strong> Sakit, pasakit</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Tumitimon</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Nagmamaneho o nagpapatakbo ng sasakyan o bangka; tumutukoy sa pagkontrol ng direksyon.</p>
            <p><strong>Kasingkahulugan:</strong> Nagmamaneho, nagpapatnubay, nag-uugit</p>
            <p><strong>Uri ng Salita:</strong> Pandiwa | Verb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Upaw</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pag-aalaga o pagmamanipula ng bagay o tao.</p>
            <p><strong>Kasingkahulugan:</strong> Pag-aalaga, pagmamanipula</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Uldóg</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang mabagal o tamad na kilos.</p>
            <p><strong>Kasingkahulugan:</strong> Tamad; mabagal.</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Vice-Rector</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pangalawang pinuno o administrador ng isang paaralan o unibersidad.</p>
            <p><strong>Kasingkahulugan:</strong> Pangalawang pinuno, tagapamahala</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Vobiscum</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Salitang Latin na nangangahulugang "kasama ninyo".</p>
            <p><strong>Kasingkahulugan:</strong> Kasama; kaakibat</p>
            <p><strong>Uri ng Salita:</strong> Pang-abay | Adverb</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Victoria</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang tagumpay o panalo.</p>
            <p><strong>Kasingkahulugan:</strong> Panalo; tagumpay</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Walang-patutunguhan</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Tumutukoy sa isang tao o hayop na walang tiyak na direksyon, gumagala nang walang layunin, at hindi malaman kung saan patungo o kung paano makakabalik sa pinagmulan o tahanan</p>
            <p><strong>Kasingkahulugan:</strong> Maligaw, Naliligaw, Walang patutunguhan</p>
            <p><strong>Uri ng Salita:</strong> Pang-uring pangnagdaan (verb in past tense)</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Yabág</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Pagmamagaling o pagpapakita ng higit na kabutihan kaysa sa iba.</p>
            <p><strong>Kasingkahulugan:</strong> Pagmamayabang, paghahambog</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-title">Yungib</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> Isang kuweba o likas na pasilyo sa ilalim ng lupa.</p>
            <p><strong>Kasingkahulugan:</strong> Kuweba, pasilyo</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan | Noun</p>
        </div>
    </div>    
    
    

    @include('components.navbar')
    
</body>
</html>
