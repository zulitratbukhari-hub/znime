<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jujutsu Kaisen</title>

<link rel="icon" type="image/png" href="icon.png">
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
    background:url('https://th.bing.com/th/id/R.88f600738cee490bef0b28d20f5df8e7?rik=3XmR4URxPbw31w&pid=ImgRaw&r=0');
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
    font-size:48px;
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
    text-decoration:none;
    font-weight:600;
}

/* SECTION */

.section{
    padding:50px;
}

.section h2{
    color:#e50914;
    font-size:32px;
    margin-bottom:25px;
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
    transition:0.3s;
}

.card:hover{
    transform:translateY(-6px);
}

.card iframe{
    width:100%;
    height:200px;
    border:none;
}

.card h3{
    padding:18px;
    font-size:16px;
}

/* BADGE */

.badge{
    background:#e50914;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
    margin-left:10px;
}

</style>

</head>

<body>

<!-- HERO -->
<div class="top">
<div class="text">

<h1>Jujutsu Kaisen <span class="badge">Anime</span></h1>

<p>
Yuji Itadori enters the world of curses after swallowing Sukuna’s finger.
A deadly battle between sorcerers and curses begins.
</p>

<a class="btn" href="#episodes">▶ Watch Episodes</a>

</div>
</div>

<!-- EPISODES -->
<div class="section" id="episodes">

<h2>Episodes</h2>

<div class="cards">

<div class="card">
<iframe src="https://www.youtube.com/embed/1Id_f3GDlus" allowfullscreen></iframe>
<h3>Episode 1 - Ryomen Sukuna Awakens</h3>
</div>

<div class="card">
<iframe src="https://www.youtube.com/embed/rf2sDaNEJG0" allowfullscreen></iframe>
<h3>Episode 2 - Itadori’s Choice</h3>
</div>

<div class="card">
<iframe src="https://www.youtube.com/embed/3Wl5iihd1wE" allowfullscreen></iframe>
<h3>Episode 3 - Gojo Satoru Appears</h3>
</div>

<div class="card">
<iframe src="https://www.youtube.com/embed/gJD9IQ0DXZY" allowfullscreen></iframe>
<h3>Episode 4 - Jujutsu High Entry</h3>
</div>

<div class="card">
<iframe src="https://www.youtube.com/embed/IPwVbwNSebQ" allowfullscreen></iframe>
<h3>Episode 5 - Curse Training Begins</h3>
</div>

<div class="card">
<iframe src="https://www.youtube.com/embed/VohlhnUnubk" allowfullscreen></iframe>
<h3>Episode 6 - Sukuna’s Power Unleashed</h3>
</div>

</div>

</div>

</body>
</html>