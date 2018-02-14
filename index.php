<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div>
        <video id="player" width="560" height="350" poster="./wordpress.png">
            <source src="./video.mov"/>
            Your browser not support this tag!!!
        </video>

        <div>
            <button onclick="play()">Play</button> |
            <button onclick="pause()">Pause</button> |
            <button onclick="stop()">Stop</button> |
            <input id="volume" type="range" min="0" max="100" onchange="volume()"> |
            <button id="muted" onclick="muted()">Mute</button> |
            <button onclick="full()">Full Screen</button> |
        </div>

        <div>
            <table id="tableList" class="table"></table>
        </div>
    </div>

    <div>
        <audio id="audio" width="560" height="350" controls>
            <source src="./video.mov"/>
            Your browser not support this tag!!!
        </audio>
        <div>
            <button onclick="playAudio()">Play</button> |
            <button onclick="pauseAudio()">Pause</button> |
            <button onclick="stopAudio()">Stop</button> |
            <input id="volumeAudio" type="range" min="0" max="100" onchange="volumeAudio()"> |
            <button id="mutedAudio" onclick="mutedAudio()">Mute</button>
        </div>
    </div>

    <div>
        <iframe width="560" height="315"
                src="https://www.youtube.com/embed/S12OgVD036g?listType=playlist&playlist=R_3y4Gl8XpA,Im9WTcDJ-2Y">
        </iframe>
    </div>
    <br>
    <br>
    <div class="row text-center">
        <iframe width="560" height="315"
                src="https://www.youtube.com/embed?listType=playlist&list=PLt3tq0MBSMpk8ozG5GNIC1U14PTiZf7Fy">
        </iframe>
    </div>


    <script src="./video.js"></script>
    <script src="./audio.js"></script>
</body>
</html>