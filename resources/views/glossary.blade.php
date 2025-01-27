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
            width: 100px;
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
        <div class="card-title">Bapor Tabò</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> tumutukoy sa isang barkong pandagat na bilog o mataba ang anyo</p>
            <p><strong>Kasingkahulugan:</strong> barko, sasakyang-dagat, bapor</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>

    <div class="card">
        <div class="card-title">Aso</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> tumutukoy sa isang barkong pandagat na bilog o mataba ang anyo</p>
            <p><strong>Kasingkahulugan:</strong> barko, sasakyang-dagat, bapor</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
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
        <div class="card-title">Bapor Tabò</div>
        <div class="card-content">
            <p><strong>Kahulugan:</strong> tumutukoy sa isang barkong pandagat na bilog o mataba ang anyo</p>
            <p><strong>Kasingkahulugan:</strong> barko, sasakyang-dagat, bapor</p>
            <p><strong>Uri ng Salita:</strong> Pangngalan</p>
        </div>
    </div>

    @include('components.navbar')
    
</body>
</html>
