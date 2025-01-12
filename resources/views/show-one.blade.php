<body>
    <header>
        <h1>CHAPTER {{$chapter->id}}: {{$chapter->title}}</h1>

        <form action="{{url('/chapters')}}" method="GET">
            <button type="submit">Go Back</button>
        </form>
    </header>

    <main>
        <p id="chapter-content">{{$chapter->content}}</p>
    </main>

    <form action="{{Route('edit', ['id' => $chapter->id])}}" method="GET">
        <button type="submit">Edit</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const targetWord = "bapor Tabò"; // Word to highlight
            const contentElement = document.getElementById('chapter-content'); // Content area

            if (contentElement) {
                // Wrap the target word in a span with a popup
                const regex = new RegExp(`(${targetWord})`, 'gi');
                contentElement.innerHTML = contentElement.innerHTML.replace(
                    regex,
                    `<span class="highlight word-popup">$1
                        <span class="popup">p, pagiing̃at at pagbabantáy upáng maiwasan ang maliliít na kapang̃aniban.... At yaón dín ang balakid sa araw araw, ang dati ring mabababaw na burak, ang dati ring lakí ng̃ bapor na násasadsád sa mg̃a likô ring yaon, na warì’y isáng matabâng babai sa gitnâ ng̃ siksikan ng̃ tao, kayâ’t ang mabaít na kapitán ay humihintô sa bawà’t sandalî, umuurong, pinagkakalahatì lamang ang tulin, pinagpapalipatlipat sa kaliwâ’t sa kanan ang limáng marinerong may hawak na tikin upáng ipanibulos ang likông itinuturò ng̃ timón. Warìng isáng matandâng kawalAng Bapor Tabo ay ginamit bilang sagisag ng pamahalaang Pilipino </span>
                    </span>`
                );
            }
        });
    </script>

    <style>
        /* Highlight styling */
        body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 20px;
    }

    p{
        font-size: 16px; /* Adjust to your desired size */
        line-height: 1.6; /* Space between lines */
        word-spacing: 0.05em; /* Slight space between words */
        margin: 1em 0; /* Add space between paragraphs */
        text-align: justify; /* Optional: Makes text align evenly */
        text-indent: 2em; /* Indent the first line of each paragraph */
        line-height: 1.6; /* Improve readability with line spacing */
        text-align: justify; /* Align text evenly on both sides */
        margin: 1em 0; /* Add space between paragraphs */
        word-break: break-word;
    }

    .highlight {
        font-weight: bold;
        cursor: pointer;
        position: relative;
        display: inline-block;
    }

    .popup {
        display: none; /* Initially hidden */
        position: absolute; /* Align with the word */
        left: 110%; /* Position to the right of the word */
        transform: translateY(-50%);
        background-color: rgb(187, 176, 19);
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 10px;
        border-radius: 5px;
        width: 300px;
        font-size: 14px;
        z-index: 1000;
    }

.highlight:hover .popup {
    display: block;
}

    </style>
</body>
