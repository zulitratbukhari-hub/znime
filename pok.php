<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pokémon</title>

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
    background:url('https://static1.cbrimages.com/wordpress/wp-content/uploads/2019/09/Pokemon-Ash-Feature-Image-1.jpg');
    background-size:cover;
    background-position:center;
    position:relative;
    display:flex;
    align-items:flex-end;
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
    line-height:1.6;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:13px 28px;
    background:#e50914;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:600;
}

/* SECTION */

.section{
    padding:50px;
}

.section h2{
    color:#e50914;
}

/* GRID */

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

/* CARD */

.card{
    background:#111;
    border-radius:18px;
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
    padding:15px;
    font-size:16px;
}

/* MODAL FULLSCREEN */

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

<h1>Pokémon</h1>

<p>Ash Ketchum travels across regions with Pikachu to become a Pokémon Master.</p>

<button class="btn" onclick="openPlayer('egDYQSUEsHg')">
▶ Watch Trailer
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

<div class="card" onclick="openPlayer('1mc0vU4UFvk')">
<img src="https://img.youtube.com/vi/1mc0vU4UFvk/maxresdefault.jpg">
<h3>Episode 1 - Pikachu’s First Encounter</h3>
</div>

<div class="card" onclick="openPlayer('ivM4OvgzMhs')">
<img src="https://img.youtube.com/vi/ivM4OvgzMhs/maxresdefault.jpg">
<h3>Episode 2 - Starting the Journey</h3>
</div>

<div class="card" onclick="openPlayer('XQop2eTEsSI')">
<img src="https://img.youtube.com/vi/XQop2eTEsSI/maxresdefault.jpg">
<h3>Episode 3 - First Gym Battle</h3>
</div>

<div class="card" onclick="openPlayer('VMtP-uNuSUU')">
<img src="https://img.youtube.com/vi/VMtP-uNuSUU/maxresdefault.jpg">
<h3>Episode 4 - Team Rocket Appears</h3>
</div>

<div class="card" onclick="openPlayer('SGGPeYYA7IE')">
<img src="https://img.youtube.com/vi/SGGPeYYA7IE/maxresdefault.jpg">
<h3>Episode 5 - Legendary Encounter</h3>
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