<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Death Note</title>

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
    background:url('https://tse2.mm.bing.net/th/id/OIP.W6gBCoPVffow2T_BinPKLQHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3');
    background-size:cover;
    background-position:center;
    position:relative;
    display:flex;
    align-items:flex-end;
}

.top::after{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:linear-gradient(to top,#050505 10%,transparent 60%);
}

.text{
    position:relative;
    z-index:2;
    padding:40px;
    max-width:650px;
}

.text h1{
    font-size:50px;
    color:#e50914;
}

.text p{
    color:#ddd;
    line-height:1.6;
}

/* BUTTON */

.btn{
    display:inline-block;
    margin-top:20px;
    padding:13px 28px;
    background:#e50914;
    color:white;
    border-radius:8px;
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
    margin-bottom:25px;
    font-size:32px;
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
    transform:translateY(-6px);
}

.card iframe{
    width:100%;
    height:200px;
    border:none;
    pointer-events:none; /* important so click opens modal */
}

.card h3{
    padding:18px;
    font-size:16px;
}

/* MODAL */

.modal{
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:black;
    z-index:9999;
}

.modal-content{
    width:100%;
    height:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.modal-content iframe{
    width:95%;
    height:95%;
    border:none;
}

.close{
    position:absolute;
    top:15px;
    right:30px;
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

<h1>Death Note</h1>

<p>
Light Yagami discovers a notebook that can kill anyone whose name is written in it.
A deadly mind game begins between him and detective L.
</p>

<button class="btn" onclick="openVideo('https://www.youtube.com/embed/NlJZ-YgAt-c?autoplay=1&mute=1')">
▶ Watch Trailer
</button>

</div>
</div>

<!-- MODAL -->
<div id="videoModal" class="modal">

<span class="close" onclick="closeVideo()">&times;</span>

<div class="modal-content">
<iframe id="videoFrame" src=""></iframe>
</div>

</div>

<!-- EPISODES -->
<div class="section">

<h2>Episodes</h2>

<div class="cards">

<div class="card" onclick="openVideo('https://www.dailymotion.com/embed/video/x7ykhcv')">
<iframe src="https://www.dailymotion.com/embed/video/x7ykhcv"></iframe>
<h3>Episode 1 - Rebirth</h3>
</div>

<div class="card" onclick="openVideo('https://www.dailymotion.com/embed/video/x83a2wx')">
<iframe src="https://www.dailymotion.com/embed/video/x83a2wx"></iframe>
<h3>Episode 2 - L Appears</h3>
</div>

<div class="card" onclick="openVideo('https://www.dailymotion.com/embed/video/x92dqf6')">
<iframe src="https://www.dailymotion.com/embed/video/x92dqf6"></iframe>
<h3>Episode 3 - Deal with Death</h3>
</div>

<div class="card" onclick="openVideo('https://www.dailymotion.com/embed/video/x92nkfo')">
<iframe src="https://www.dailymotion.com/embed/video/x92nkfo"></iframe>
<h3>Episode 4 - The First Kill</h3>
</div>

</div>

</div>

<script>

function openVideo(link){
    document.getElementById("videoFrame").src = link;
    document.getElementById("videoModal").style.display = "block";
}

function closeVideo(){
    document.getElementById("videoModal").style.display = "none";
    document.getElementById("videoFrame").src = "";
}

</script>

</body>
</html>