<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Znime Watch - Movies</title>

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
    font-family:'Poppins',sans-serif;
    background:#050505;
    color:#fff;
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
    background:rgba(10,10,10,0.9);
    backdrop-filter:blur(10px);
    border-bottom:1px solid #222;
    z-index:1000;
}

.logo{
    font-size:26px;
    font-weight:800;
}
.logo span{ color:#e50914; }

.nav a{
    color:#ccc;
    text-decoration:none;
    margin-left:20px;
    transition:0.3s;
}
.nav a:hover{
    color:#e50914;
}

/* HEADER */
.header{
    padding:120px 60px 20px;
}

.header h1{
    font-size:40px;
}

.header h1 span{
    color:#e50914;
}

/* CATEGORY */
.category{
    padding:20px 60px 60px;
}

.category-title{
    font-size:24px;
    margin-bottom:20px;
}

.category-title span{
    color:#e50914;
}

/* GRID */
.cards-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
    gap:25px;
}

/* CARD */
.anime-card{
    background:#141414;
    border-radius:10px;
    overflow:hidden;
    position:relative;
    text-decoration:none;
    color:#fff;
    transition:0.4s;
}

.anime-card:hover{
    transform:translateY(-10px);
    box-shadow:0 10px 30px rgba(229,9,20,0.3);
}

.anime-card img{
    width:100%;
    height:280px;
    object-fit:cover;
}

.anime-card-overlay{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:linear-gradient(to top,rgba(0,0,0,0.9),transparent);
    opacity:0;
    transition:0.3s;
}

.anime-card:hover .anime-card-overlay{
    opacity:1;
}

.card-info{
    padding:12px;
}

.card-info h3{
    font-size:16px;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

.card-meta{
    display:flex;
    justify-content:space-between;
    font-size:13px;
    color:#aaa;
}

.rating{
    color:#ffd700;
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
        padding:15px 20px;
    }

    .header{
        padding:110px 20px 10px;
    }

    .category{
        padding:20px;
    }
}
</style>
</head>

<body>

<!-- NAV -->
<div class="nav">
    <div class="logo">ZNIME<span>WATCH</span></div>
    <div>
        <a href="home.php">Home</a>
        <a href="movies.php">Movies</a>
        <a href="about.php">About</a>
    </div>
</div>

<!-- HEADER -->
<div class="header">
    <h1> 🎞  <span>Movies Collection</span></h1>
</div>

<!-- CATEGORY -->
<div class="category">

    <h2 class="category-title">🔥 Popular Movies</h2>

    <div class="cards-grid">

        <a href="https://www.youtube.com/embed/D7juPJwaVUM" class="anime-card">
            <img src="https://www.rogerebert.com/wp-content/uploads/2024/08/Weathering-with-You-jpg.webp" alt="Weathering With You">
            <div class="anime-card-overlay"></div>
            <div class="card-info">
                <h3>Weathering With You</h3>
                <div class="card-meta">
                    <span>Movie</span>
                    <span class="rating">★ 9.4</span>
                </div>
            </div>
        </a>

        <a href="https://www.youtube.com/embed/X-EkKB-KWVo" class="anime-card">
            <img src="https://2.bp.blogspot.com/-KdOZ8zOrSsA/UVT4Sm4G1OI/AAAAAAAAAEQ/PZOtknEMUps/s1600/English_Spirited_Away_Poster_by_behruz.jpg" alt="Spirited Away">
            <div class="anime-card-overlay"></div>
            <div class="card-info">
                <h3>Spirited Away</h3>
                <div class="card-meta">
                    <span>Movie</span>
                    <span class="rating">★ 9.9</span>
                </div>
            </div>
        </a>

        <a href="https://www.youtube.com/embed/mcSwBhXGcLU" class="anime-card">
            <img src="https://tse3.mm.bing.net/th/id/OIP.b182Z_LUDl5Mp-lHSRhmJwHaKc?r=0&w=638&h=900&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Your Name">
            <div class="anime-card-overlay"></div>
            <div class="card-info">
                <h3>Your Name</h3>
                <div class="card-meta">
                    <span>Movie</span>
                    <span class="rating">★ 9.7</span>
                </div>
            </div>
        </a>

    </div>
</div>

<!-- FOOTER -->
<footer>
    © 2026 <span>Znime Watch</span> | Movies Collection
</footer>

</body>
</html>