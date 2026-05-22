<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Znime Watch </title>

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

/* NAVBAR */

.nav{
    position:fixed;
    top:0;
    width:100%;
    padding:15px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(0,0,0,0.9);
    backdrop-filter:blur(10px);
    z-index:1000;
}

.logo{
    font-size:28px;
    font-weight:800;
    letter-spacing:1px;
}

.logo span{
    color:#e50914;
}

.nav-links{
    display:flex;
    list-style:none;
    gap:25px;
}

.nav-links a{
    text-decoration:none;
    color:#ccc;
    transition:.3s;
}

.nav-links a:hover{
    color:#e50914;
}

.search-box input{
    padding:10px 15px;
    border:none;
    outline:none;
    border-radius:30px;
    background:#111;
    color:white;
    width:180px;
}

/* HERO */

.hero-banner{
    margin:90px 20px 20px;
    height:75vh;
    border-radius:20px;
    overflow:hidden;
    position:relative;
    background:url('https://tse3.mm.bing.net/th/id/OIP.YGTiL7IocmWon0VjPBkwvgHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3') center/cover;
}

.hero-overlay{
    position:absolute;
    width:100%;
    height:100%;
    background:linear-gradient(to top,#050505,transparent);
}

.hero-content{
    position:absolute;
    bottom:60px;
    left:50px;
    z-index:2;
}

.hero-content h1{
    font-size:55px;
    margin-bottom:10px;
}

.hero-content p{
    color:#ddd;
    margin-bottom:20px;
}

.btn{
    padding:12px 22px;
    border-radius:8px;
    text-decoration:none;
    margin-right:10px;
    font-weight:600;
}

.btn-red{
    background:#e50914;
    color:white;
}

.btn-dark{
    background:#222;
    color:white;
}

/* CATEGORY */

.category{
    padding:40px 60px;
}

.category-title{
    font-size:28px;
    margin-bottom:25px;
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
    border:1px solid #1d1d1d;
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

/* NOT FOUND */

#noResult{
    display:none;
    text-align:center;
    color:#e50914;
    margin-top:20px;
    font-size:20px;
}

/* FOOTER */

footer{
    margin-top:40px;
    text-align:center;
    padding:30px;
    background:#0a0a0a;
    border-top:1px solid #222;
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

.hero-content h1{
    font-size:35px;
}

.hero-content{
    left:25px;
    bottom:40px;
}

.category{
    padding:25px;
}

}

</style>
</head>

<body>

<!-- NAV -->

<nav class="nav">

<div class="logo">ZNIME<span>WATCH</span></div>

<ul class="nav-links">
<li><a href="#">Home</a></li>
<li><a href="Series.php">Series</a></li>
<li><a href="movies.php">Movies</a></li>
<li><a href="about.php">About</a></li>
<li><a href="feed.php">Feedback</a></li>
</ul>

<div class="search-box">
<input type="text" id="searchInput" placeholder="Search Anime...">
</div>

</nav>

<!-- HERO -->

<div class="hero-banner">

<div class="hero-overlay"></div>

<div class="hero-content">

<h1>Attack On Titan</h1>

<p>Humanity fights for survival against Titans.</p>

<a href="aot.php" class="btn btn-red">Watch Now</a>

<a href="about.php" class="btn btn-dark">More Info</a>

</div>

</div>

<!-- SEARCH NOT FOUND -->

<div id="noResult">
Anime Not Found!
</div>

<!-- TRENDING -->

<div class="category">

<h2 class="category-title">🔥 Trending Series</h2>

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

<a href="pok.php" class="anime-card">
<img src="https://i.ebayimg.com/images/g/BMMAAOSwb0xigriF/s-l1200.jpg">
<div class="card-info">
<h3>Pokemon</h3>
<p>Series • ⭐ 7.9</p>
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

<!-- MOVIES -->

<div class="category">

<h2 class="category-title"> 🔥Popular Movies</h2>

<div class="cards-grid">

<a href="https://www.youtube.com/embed/D7juPJwaVUM" class="anime-card">

<img src="https://www.rogerebert.com/wp-content/uploads/2024/08/Weathering-with-You-jpg.webp">

<div class="card-info">
<h3>Weathering With You</h3>
<p>Movie • ⭐ 8.2</p>
</div>

</a>

<a href="https://www.youtube.com/embed/X-EkKB-KWVo" class="anime-card">

<img src="https://2.bp.blogspot.com/-KdOZ8zOrSsA/UVT4Sm4G1OI/AAAAAAAAAEQ/PZOtknEMUps/s1600/English_Spirited_Away_Poster_by_behruz.jpg">

<div class="card-info">
<h3>Spirited Away</h3>
<p>Movie • ⭐ 8.6</p>
</div>

</a>

<a href="https://www.youtube.com/embed/mcSwBhXGcLU" class="anime-card">

<img src="https://tse3.mm.bing.net/th/id/OIP.b182Z_LUDl5Mp-lHSRhmJwHaKc">

<div class="card-info">
<h3>Your Name</h3>
<p>Movie • ⭐ 8.8</p>
</div>

</a>

</div>
</div>

<!-- FOOTER -->

<footer>
© 2026 <span>Znime Watch</span>
</footer>

<!-- SEARCH JS -->

<script>

const input = document.getElementById("searchInput");
const cards = document.querySelectorAll(".anime-card");
const noResult = document.getElementById("noResult");

input.addEventListener("keyup", ()=>{

let value = input.value.toLowerCase();
let found = false;

cards.forEach(card=>{

let text = card.innerText.toLowerCase();

if(text.includes(value)){

card.style.display = "block";
found = true;

}else{

card.style.display = "none";

}

});

if(value===""){
noResult.style.display = "none";
cards.forEach(card=>card.style.display="block");
return;
}

noResult.style.display = found ? "none" : "block";

});

</script>

</body>
</html>