<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback - Znime Watch</title>

<!-- ✅ FAVICON (icon.png same folder me hona chahiye) -->
<link rel="icon" type="image/png" href="icon.png">
<link rel="shortcut icon" type="image/png" href="icon.png">

<!-- Optional (better browser support) -->
<link rel="apple-touch-icon" href="icon.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
body{
    margin:0;
    background:#050505;
    color:white;
    font-family:'Poppins', sans-serif;
}

/* CENTER */
.container{
    margin-top:120px;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* FORM CARD */
form{
    width:420px;
    background:rgba(20,20,20,0.95);
    padding:25px;
    border-radius:12px;
    border:1px solid #222;
    box-shadow:0 0 20px rgba(229,9,20,0.25);
    backdrop-filter:blur(10px);
    animation:fadeIn 0.5s ease-in-out;
}

/* TITLE */
form h2{
    margin-bottom:15px;
    font-size:22px;
    text-align:center;
}

/* INPUTS */
input,textarea{
    width:100%;
    margin:10px 0;
    padding:12px;
    background:#111;
    border:1px solid #222;
    border-radius:8px;
    color:white;
    outline:none;
    transition:0.3s;
    font-size:14px;
}

input:focus, textarea:focus{
    border-color:#e50914;
    box-shadow:0 0 10px rgba(229,9,20,0.4);
}

/* BUTTON */
button{
    width:100%;
    padding:12px;
    background:#e50914;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
    transition:0.3s;
}

button:hover{
    background:#ff1a1a;
    transform:scale(1.03);
}

/* ANIMATION */
@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}
</style>
</head>

<body>

<div class="container">

<form action="https://formspree.io/f/xlgvndjp" method="POST">

<h2>💬 Feedback</h2>

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<textarea name="message" rows="6" placeholder="Your Message" required></textarea>

<button type="submit">Send</button>

</form>

</div>

</body>
</html>