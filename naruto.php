<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Naruto - Znime Watch</title>
<link rel="icon" type="image/png" href="icon.png">

<style>

body{
    margin:0;
    font-family:'Poppins', Arial;
    background:#050505;
    color:white;
}

/* HERO */
.hero{
    height:520px;
    background:url('https://static1.srcdn.com/wordpress/wp-content/uploads/wm/2024/09/naruto-shippuden-konoha-eleven.jpg');
    background-size:cover;
    background-position:center;
    position:relative;
    display:flex;
    align-items:flex-end;
}

.hero::after{
    content:"";
    position:absolute;
    top:0;left:0;
    width:100%;
    height:100%;
    background:linear-gradient(to top,#050505 10%,transparent 60%);
}

.hero-content{
    position:relative;
    padding:40px;
    z-index:2;
    max-width:600px;
}

.hero-content h1{
    font-size:45px;
    color:#e50914;
}

.hero-content p{
    color:#ccc;
}

/* BUTTON */
.btn{
    display:inline-block;
    margin-top:15px;
    padding:12px 25px;
    background:#e50914;
    color:white;
    border-radius:6px;
    border:none;
    cursor:pointer;
    font-weight:bold;
}

/* SECTION */
.container{
    padding:40px;
}

h2{
    color:#e50914;
    margin-bottom:20px;
}

/* EPISODES */
.episodes{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.ep{
    background:#111;
    border-radius:15px;
    overflow:hidden;
    transition:0.3s;
}

.ep:hover{
    transform:translateY(-8px);
}

.ep iframe{
    width:100%;
    height:180px;
    border:none;
}

.ep h3{
    padding:15px;
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
    width:90%;
    height:90%;
    border:none;
}

.close{
    position:absolute;
    top:15px;
    right:25px;
    font-size:40px;
    color:white;
    cursor:pointer;
}

</style>
</head>

<body>

<!-- HERO -->
<div class="hero">
    <div class="hero-content">

        <h1>Naruto <span style="color:#e50914;">Anime</span></h1>

        <p>
            Naruto Uzumaki ki journey from lonely kid to Hokage banne tak ki epic story.
        </p>

        <button class="btn" onclick="openVideo()">▶ Watch Now</button>

    </div>
</div>

<!-- MODAL -->
<div id="videoModal" class="modal">
    <span class="close" onclick="closeVideo()">&times;</span>

    <div class="modal-content">
        <iframe 
            src="https://www.youtube.com/embed/1UcofOMba8c?autoplay=1"
            allowfullscreen>
        </iframe>
    </div>
</div>

<!-- EPISODES -->
<div class="container">
    <h2>Episodes</h2>

    <div class="episodes">

        <div class="ep">
            <iframe src="https://www.youtube.com/embed/-G9BqkgZXRA" allowfullscreen></iframe>
            <h3>Episode 1 - Uzumaki Naruto (The Outcast)</h3>
        </div>

        <div class="ep">
            <iframe src="https://www.youtube.com/embed/QczGoCmX-pI" allowfullscreen></iframe>
            <h3>Episode 2 - The Hokage Dream</h3>
        </div>

        <div class="ep">
            <iframe src="https://www.youtube.com/embed/mo93cOTAvcA" allowfullscreen></iframe>
            <h3>Episode 3 - Team 7 Formation</h3>
        </div>

        <div class="ep">
            <iframe src="https://www.youtube.com/embed/Amr07IIdre4" allowfullscreen></iframe>
            <h3>Episode 4 - Kakashi Sensei Appears</h3>
        </div>

        <div class="ep">
            <iframe src="https://www.youtube.com/embed/c-kiyM9E_PU" allowfullscreen></iframe>
            <h3>Episode 5 - First Mission Begins</h3>
        </div>

    </div>
</div>

<script>
function openVideo(){
    document.getElementById("videoModal").style.display = "block";
}

function closeVideo(){
    document.getElementById("videoModal").style.display = "none";
}
</script>

</body>
</html>