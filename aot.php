<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Attack on Titan</title>

<style>
body{
    margin:0;
    font-family:'Poppins', Arial;
    background:#050505;
    color:white;
}

/* HERO */
.banner{
    height:520px;
    background:url('https://tse1.explicit.bing.net/th/id/OIP.dWik-fHSXKtX0oZElyo5BgHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3');
    background-size:cover;
    background-position:center;
    position:relative;
    display:flex;
    align-items:flex-end;
}

.banner::after{
    content:"";
    position:absolute;
    top:0;left:0;
    width:100%;
    height:100%;
    background:linear-gradient(to top, #050505 10%, transparent 60%);
}

.info{
    position:relative;
    z-index:2;
    padding:40px;
    max-width:600px;
}

.info h1{
    font-size:45px;
    color:#e50914;
    margin-bottom:10px;
}

.info p{
    color:#ccc;
}

/* BUTTON */
.btn{
    display:inline-block;
    margin-top:15px;
    padding:12px 25px;
    background:#e50914;
    color:white;
    text-decoration:none;
    border-radius:6px;
    font-weight:bold;
    transition:0.3s;
}

.btn:hover{
    background:#ff1f2c;
    transform:scale(1.05);
}

/* SECTION */
.container{
    padding:40px;
}

h2{
    color:#e50914;
    margin-bottom:20px;
}

/* EPISODES GRID */
.videos{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.video{
    background:#111;
    border-radius:15px;
    overflow:hidden;
    transition:0.3s;
    box-shadow:0 0 10px rgba(229,9,20,0.15);
}

.video:hover{
    transform:translateY(-10px);
    box-shadow:0 0 20px rgba(229,9,20,0.4);
}

.video iframe{
    width:100%;
    height:180px;
}

.video h3{
    padding:15px;
    font-size:15px;
}

/* BADGE */
.badge{
    background:#e50914;
    padding:3px 10px;
    border-radius:20px;
    font-size:12px;
    margin-left:10px;
}
</style>
</head>

<body>

<!-- HERO -->
<div class="banner">
    <div class="info">
        <h1>Attack on Titan <span class="badge">Anime</span></h1>
        <p>Humanity giant Titans se bachne ke liye walls ke andar survive karti hai.</p>
       <button class="btn btn-red" onclick="openVideo()">
▶ Watch Now
</button>

<!-- FULL SCREEN MODAL -->
<div id="videoModal" class="modal">

  <div class="modal-content">
    <span class="close" onclick="closeVideo()">&times;</span>

    <iframe 
      src="https://ok.ru/videoembed/2050841315998"
      frameborder="0"
      allow="autoplay"
      allowfullscreen>
    </iframe>

  </div>

</div>

<style>
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
  position:relative;
}

.modal-content iframe{
  width:90%;
  height:90%;
}

.close{
  position:absolute;
  top:15px;
  right:25px;
  font-size:40px;
  color:white;
  cursor:pointer;
}

body.modal-open{
  overflow:hidden;
}
</style>

<script>
function openVideo(){
  document.getElementById("videoModal").style.display = "block";
  document.body.classList.add("modal-open");
}

function closeVideo(){
  document.getElementById("videoModal").style.display = "none";
  document.body.classList.remove("modal-open");
}
</script>
    </div>
</div>

<!-- EPISODES -->
<div class="container">
    <h2>Episodes</h2>

    <div class="videos">

        <div class="video">
            <iframe src="https://www.youtube.com/embed/LV-nazLVmgo" allowfullscreen></iframe>
            <h3>Episode 1 - The Fall of Wall Maria</h3>
        </div>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/75ccB77BtF4" allowfullscreen></iframe>
            <h3>Episode 2 - Titans Return</h3>
        </div>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/mOmhQ54MwG4" allowfullscreen></iframe>
            <h3>Episode 3 - Eren Awakens</h3>
        </div>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/Opr5daXls8g" allowfullscreen></iframe>
            <h3>Episode 4 - Training Begins</h3>
        </div>

        <div class="video">
            <iframe src="https://www.youtube.com/embed/63I9FCeqq3s" allowfullscreen></iframe>
            <h3>Episode 5 - First Battle</h3>
        </div>

    </div>
</div>

</body>
</html>