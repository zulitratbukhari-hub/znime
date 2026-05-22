<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Znime Login</title>
 <link rel="icon" type="image/png" href="icon.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;

    background:black;
    position:relative;
}


/* ===== CINEMATIC BACKGROUND ===== */
body::before{
    content:"";
    position:fixed;
    inset:0;

    background:url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b73d72a7-6973-4d2b-a7c2-8d9da946e9e1/d7whhq-413f3f6f-4b8f-4ee5-ae56-6a8a5ff9b7cd.png/v1/fill/w_1024,h_768,q_80,strp/red_by_israil_d7whhq-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NzY4IiwicGF0aCI6IlwvZlwvYjczZDcyYTctNjk3My00ZDJiLWE3YzItOGQ5ZGE5NDZlOWUxXC9kN3doaHEtNDEzZjNmNmYtNGI4Zi00ZWU1LWFlNTYtNmE4YTVmZjliN2NkLnBuZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.yTiAC2TlSTLmzd09i8oLr16UA-fRYgMse_2bsnkVL94")
    no-repeat center center;

    background-size:cover;

    /* ZOOM*/
    animation: zoomBg 12s ease-in-out infinite alternate;

    filter:contrast(1.2) brightness(0.7) saturate(1.2);
    z-index:0;
}

@keyframes zoomBg{
    from{
        transform:scale(1);
    }
    to{
        transform:scale(1.15);
    }
}
/* DARK VIGNETTE + DEPTH */
body::after{
    content:"";
    position:absolute;
    inset:0;

    background:
    radial-gradient(circle at center,
        rgba(0,0,0,0.2) 0%,
        rgba(0,0,0,0.65) 60%,
        rgba(0,0,0,0.9) 100%);

    z-index:1;
}

/* soft neon light overlay */
body::before::after{
    content:"";
}

/* floating glow effect */
.glow{
    position:absolute;
    width:400px;
    height:400px;
    background:radial-gradient(circle, rgba(229,9,20,0.25), transparent 60%);
    filter:blur(40px);
    animation:floatGlow 6s ease-in-out infinite alternate;
    z-index:1;
}

@keyframes floatGlow{
    from{transform:translate(-20px,-20px);}
    to{transform:translate(20px,20px);}
}

/* LOGIN BOX */
.login-box{
    position:relative;
    z-index:2;
    width:360px;
    padding:45px;
    border-radius:22px;

    background:rgba(10,10,10,0.75);
    backdrop-filter:blur(14px);

    box-shadow:0 0 50px rgba(229,9,20,0.4);
    text-align:center;

    border:1px solid rgba(255,255,255,0.08);
}

/* TITLE */
.login-box h2{
    color:#ff2a2a;
    margin-bottom:20px;
    font-weight:700;
    letter-spacing:1px;
}

/* INPUTS */
.login-box input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:12px;
    border:1px solid #222;
    background:#111;
    color:white;
    outline:none;
    transition:0.3s;
}

.login-box input:focus{
    border-color:#ff2a2a;
    box-shadow:0 0 12px rgba(255,42,42,0.5);
}

/* BUTTON */
.login-box button{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#e50914;
    border:none;
    color:white;
    font-weight:bold;
    border-radius:12px;
    cursor:pointer;
    transition:0.3s;
    box-shadow:0 0 20px rgba(229,9,20,0.3);
}

.login-box button:hover{
    background:#ff1f2c;
    transform:scale(1.05);
}

/* TEXT */
.login-box p{
    font-size:12px;
    color:#aaa;
    margin-top:15px;
}

</style>
</head>

<body>

<!-- glowing effect layer -->
<div class="glow"></div>

<div class="login-box">
    <h2>Znime Login</h2>

    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Only registered users can access Znime library</p>
</div>

</body>
</html>