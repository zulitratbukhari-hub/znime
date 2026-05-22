<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Znime Watch - Series</title>

<!-- ✅ FAVICON (icon.png same folder me hona chahiye) -->
<link rel="icon" type="image/png" href="icon.png">
<link rel="shortcut icon" type="image/png" href="icon.png">

<!-- Optional (better browser support) -->
<link rel="apple-touch-icon" href="icon.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#050505;
    font-family:'Poppins',sans-serif;
    color:white;
}

/* NAV */

.nav{
    position:fixed;
    top:0;
    width:100%;
    padding:15px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(0,0,0,0.9);
    z-index:1000;
    backdrop-filter:blur(10px);
}

.logo{
    font-size:28px;
    font-weight:800;
}

.logo span{
    color:#e50914;
}

.nav-links{
    display:flex;
    gap:25px;
    list-style:none;
}

.nav-links a{
    color:#ccc;
    text-decoration:none;
    transition:.3s;
}

.nav-links a:hover{
    color:#e50914;
}

.search-box input{
    padding:10px 15px;
    border-radius:30px;
    border:1px solid #333;
    background:#111;
    color:white;
    outline:none;
}

/* CATEGORY */

.category{
    padding:120px 60px 40px;
}

.category-title{
    margin-bottom:25px;
    font-size:30px;
}

/* GRID */

.cards-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
    gap:25px;
}

/* CARD */

.anime-card{
    background:#111;
    border-radius:15px;
    overflow:hidden;
    text-decoration:none;
    color:white;
    transition:.3s;
    border:1px solid #1c1c1c;
}

.anime-card:hover{
    transform:translateY(-8px) scale(1.03);
    box-shadow:0 10px 25px rgba(229,9,20,.3);
}

.anime-card img{
    width:100%;
    height:300px;
    object-fit:cover;
}

.card-info{
    padding:15px;
}

.card-info h3{
    font-size:18px;
    margin-bottom:6px;
}

.card-info p{
    color:#bbb;
    font-size:14px;
}

/* FOOTER */

footer{
    text-align:center;
    padding:30px;
    background:#0a0a0a;
    border-top:1px solid #222;
    margin-top:40px;
}

footer span{
    color:#e50914;
}

/* MOBILE */

@media(max-width:768px){

.nav{
    padding:15px;
    flex-wrap:wrap;
    gap:10px;
}

.category{
    padding:100px 20px 20px;
}

}

</style>
</head>

<body>

<!-- NAV -->

<nav class="nav">

<div class="logo">ZNIME<span>WATCH</span></div>

<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="Series.php">Series</a></li>
<li><a href="movies.php">Movies</a></li>
<li><a href="about.php">About</a></li>
<li><a href="feed.php">Feedback</a></li>
</ul>

<div class="search-box">
<input type="text" placeholder="Search Series...">
</div>

</nav>

<!-- SERIES -->

<div class="category">

<h2 class="category-title">Anime Series</h2>

<div class="cards-grid">

<a href="naruto.php" class="anime-card">
<img src="https://mcdn.wallpapersafari.com/medium/49/86/Z01tor.jpg">
<div class="card-info">
<h3>Naruto</h3>
<p>Series • ⭐ 8.4</p>
</div>
</a>

<a href="aot.php" class="anime-card">
<img src="https://m.media-amazon.com/images/S/pv-target-images/abce4f3146841f9aa66e9963531ab38e64108ecaa79b93e5a2781c89c59ebaac.jpg">
<div class="card-info">
<h3>Attack on Titan</h3>
<p>Series • ⭐ 9.1</p>
</div>
</a>

<a href="demonslayer.php" class="anime-card">
<img src="digital-standard.jpg">
<div class="card-info">
<h3>Demon Slayer</h3>
<p>Series • ⭐ 8.7</p>
</div>
</a>

<a href="spy.php" class="anime-card">
<img src="https://assets.mycast.io/posters/spy-x-family-fan-casting-poster-557384-large.jpg?1741456929">
<div class="card-info">
<h3>Spy x Family</h3>
<p>Series • ⭐ 8.9</p>
</div>
</a>

<a href="juju.php" class="anime-card">
<img src="https://down-ph.img.susercontent.com/file/sg-11134201-23020-hygz75uktpnvae">
<div class="card-info">
<h3>Jujutsu Kaisen</h3>
<p>Series • ⭐ 8.5</p>
</div>
</a>

<a href="dn.php" class="anime-card">
<img src="https://wallpapers.com/images/hd/death-note-light-yagami-l-and-ryuk-htruruirspqq0zot.jpg">
<div class="card-info">
<h3>Death Note</h3>
<p>Series • ⭐ 9.0</p>
</div>
</a>

<a href="mha.php" class="anime-card">
<img src="https://i1.sndcdn.com/artworks-zkVsXkXQ8y5rtfF4-4Kzmrw-t500x500.jpg">
<div class="card-info">
<h3>My Hero Academia</h3>
<p>Series • ⭐ 8.1</p>
</div>
</a>

</div>
</div>

<!-- FOOTER -->

<footer>
© 2026 <span>Znime Watch</span>
</footer>

</body>
</html>