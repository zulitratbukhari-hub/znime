<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spy x Family</title>

<link rel="icon" href="icon.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#050505;
    color:white;
}

/* HERO */

.top{
    height:520px;
    background:url('https://4kwallpapers.com/images/wallpapers/spy-x-family-loid-2560x1440-11194.png');
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:flex-end;
    position:relative;
}

.top::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(to top,#050505 10%,transparent 60%);
}

.text{
    position:relative;
    z-index:2;
    padding:40px;
    max-width:650px;
}

.text h1{
    font-size:48px;
    color:#e50914;
}

.text p{
    color:#ddd;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:#e50914;
    color:white;
    border-radius:6px;
    border:none;
    cursor:pointer;
    font-weight:600;
}

/* SECTION */

.section{
    padding:50px;
}

.section h2{
    color:#e50914;
    font-size:32px;
}

/* GRID */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

/* CARD */

.card{
    background:#111;
    border-radius:15px;
    overflow:hidden;
    cursor:pointer;
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.card h3{
    padding:12px;
    font-size:15px;
}

/* FULLSCREEN PLAYER */

.modal{
    display:none;
    position:fixed;
    inset:0;
    background:black;
    z-index:9999;
}

.modal iframe{
    width:100%;
    height:100%;
    border:none;
}

.close{
    position:absolute;
    top:15px;
    right:25px;
    font-size:45px;
    color:white;
    cursor:pointer;
    z-index:10000;
}

</style>
</head>

<body>

<!-- HERO -->
<div class="top">
<div class="text">

<h1>Spy x Family</h1>
<p>A spy, assassin, and telepath form a fake family for a secret mission.</p>

<button class="btn" onclick="openPlayer('m5TxWbtQ7qU')">
▶ Watch Now
</button>

</div>
</div>

<!-- FULL SCREEN PLAYER -->
<div id="player" class="modal">
<span class="close" onclick="closePlayer()">&times;</span>
<iframe id="videoFrame" src=""></iframe>
</div>

<!-- EPISODES -->
<div class="section">

<h2>Episodes</h2>

<div class="cards">

<div class="card" onclick="openPlayer('h_tL16PZ0IE')">
<img src="https://img.youtube.com/vi/h_tL16PZ0IE/maxresdefault.jpg">
<h3>Episode 1 - Operation Strix Begins</h3>
</div>

<div class="card" onclick="openPlayer('NIgOI38wYzc')">
<img src="https://img.youtube.com/vi/NIgOI38wYzc/maxresdefault.jpg">
<h3>Episode 2 - Anya’s Secret Power</h3>
</div>

<div class="card" onclick="openPlayer('ziiXFMl2nto')">
<img src="https://img.youtube.com/vi/ziiXFMl2nto/maxresdefault.jpg">
<h3>Episode 3 - Fake Family Formation</h3>
</div>

<div class="card" onclick="openPlayer('0V9Z--9wiLo')">
<img src="https://img.youtube.com/vi/0V9Z--9wiLo/maxresdefault.jpg">
<h3>Episode 4 - Eden Academy Entrance</h3>
</div>

<div class="card" onclick="openPlayer('iuWEhuT8EFk')">
<img src="https://img.youtube.com/vi/iuWEhuT8EFk/maxresdefault.jpg">
<h3>Episode 5 - Yor’s Hidden Identity</h3>
</div>

<div class="card" onclick="openPlayer('-4JBrnZbJKQ')">
<img src="https://img.youtube.com/vi/-4JBrnZbJKQ/maxresdefault.jpg">
<h3>Episode 6 - Family Secrets Unfold</h3>
</div>

</div>

</div>

<script>

function openPlayer(id){
document.getElementById("player").style.display = "block";
document.getElementById("videoFrame").src =
"https://www.youtube.com/embed/" + id + "?autoplay=1&mute=1";
}

function closePlayer(){
document.getElementById("player").style.display = "none";
document.getElementById("videoFrame").src = "";
}

</script>

</body>
</html>