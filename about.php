<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About - Znime Watch</title>
 <link rel="icon" type="image/png" href="icon.png">

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
    overflow-x:hidden;
}

/* ===== Floating Background Particles ===== */
.particles{
    position:fixed;
    width:100%;
    height:100%;
    z-index:-1;
    overflow:hidden;
}

.particles span{
    position:absolute;
    display:block;
    width:6px;
    height:6px;
    background:#e50914;
    opacity:0.3;
    border-radius:50%;
    animation: float 10s linear infinite;
}

@keyframes float{
    0%{transform:translateY(100vh) scale(0);}
    100%{transform:translateY(-10vh) scale(1);}
}

/* random particles */
.particles span:nth-child(1){left:10%; animation-duration:12s;}
.particles span:nth-child(2){left:25%; animation-duration:8s;}
.particles span:nth-child(3){left:40%; animation-duration:10s;}
.particles span:nth-child(4){left:60%; animation-duration:7s;}
.particles span:nth-child(5){left:80%; animation-duration:11s;}

/* NAV */
.nav{
    position:fixed;
    top:0;
    width:100%;
    padding:15px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(10,10,10,0.8);
    backdrop-filter:blur(10px);
    border-bottom:1px solid #222;
    z-index:100;
}

.logo{
    font-size:24px;
    font-weight:800;
}
.logo span{
    color:#e50914;
}

.nav a{
    color:#ccc;
    text-decoration:none;
    margin-left:20px;
    transition:0.3s;
}
.nav a:hover{
    color:#e50914;
}

/* HERO */
.hero{
    padding:140px 50px 40px;
    animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}

.hero h1{
    font-size:45px;
}

.hero h1 span{
    color:#e50914;
    text-shadow:0 0 20px #e50914;
}

.hero p{
    max-width:800px;
    margin-top:15px;
    color:#aaa;
    line-height:1.8;
}

/* CARDS */
.card{
    margin:30px 50px;
    padding:25px;
    background:rgba(20,20,20,0.7);
    border:1px solid #222;
    border-left:4px solid #e50914;
    border-radius:12px;
    transition:0.4s;
    backdrop-filter:blur(8px);
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 30px rgba(229,9,20,0.3);
}

.card h2{
    color:#e50914;
    margin-bottom:10px;
}

.card p{
    color:#ccc;
    line-height:1.7;
}

/* FOOTER */
footer{
    margin-top:50px;
    padding:25px;
    text-align:center;
    background:#0a0a0a;
    border-top:1px solid #222;
}

footer span{
    color:#e50914;
}

/* ===== MOBILE RESPONSIVE ===== */
@media(max-width:768px){

    .nav{
        padding:15px 20px;
    }

    .hero{
        padding:120px 20px 20px;
    }

    .hero h1{
        font-size:32px;
    }

    .card{
        margin:20px;
        padding:20px;
    }
}

</style>
</head>

<body>

<!-- particles -->
<div class="particles">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- NAV -->
<div class="nav">
    <div class="logo">ZNIME<span>WATCH</span></div>
    <div>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>About <span>Znime Watch</span></h1>
    <p>
        Znime Watch is a modern anime streaming platform designed for anime lovers.
        It provides a cinematic experience where users can explore anime, movies, and series in a clean and stylish interface.
    </p>
</div>

<!-- MISSION -->
<div class="card">
    <h2>Our Mission</h2>
    <p>
        To build a smooth and aesthetic anime platform where users can enjoy trending anime content with a premium UI experience.
    </p>
</div>

<!-- OWNER -->
<div class="card">
    <h2>Owner Information</h2>
    <p>
        Name: Syeda Zulitrat Batool Bukhari <br>
        Age: 20 <br>
        Role: Founder & Developer of Znime Watch <br><br>
        This project is personally designed and developed with passion for anime culture and web design.
    </p>
</div>

<!-- CONTACT -->
<div class="card">
    <h2>Contact</h2>
    <p>
        Email: <span style="color:#e50914;">zulitrat.bukhari@gmail.com</span>
    </p>
</div>

<!-- FOOTER -->
<footer>
    © 2026 <span>Znime Watch</span> | All Rights Reserved
</footer>

</body>
</html>