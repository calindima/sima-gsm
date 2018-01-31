<?php

if (isset($_POST['sub'])) {
    
    $fisier = 'Nume: ' . $_POST['nume'] . "\r\n" . 'Prenume: ' . $_POST['prenume'] . "\r\n" . 'E-Mail: ' . $_POST['email'] . "\r\n" . 'Telefon: ' . $_POST['telefon'] . "\r\n" . 'Mesaj: ' . $_POST['mesaj'] . "\r\n" . '-----------------------' . "\r\n" ;
    $inscriere = fopen("mesaje.txt", "a+");
    fwrite($inscriere, $fisier);
    fclose($inscriere);
    
    $trimis = "<p style='color:#0ea035;font-size:20px;'>Formularul a fost trimis! In cel mai scurt timp vă vom contacta!</p>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sima GSM</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="slogan">

        <header>
            <img src="logo.png" alt="Logo" class="logo" onclick="location='index.html'">
            <i id="openBtn" class="fa fa-bars" aria-hidden="true"></i>
            <nav id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" id="closeBtn">&times;</a>
                <a href="index.html">Despre</a>
                <a href="produse.html">Produse</a>
                <a href="contact.php">Contact</a>
            </nav>
        </header>
        <h1>ACCESORII TELEFOANE</h1>
        <h2>CARCASE - FOLII PROTECTIE</h2>
    </section>
    <hr class="style-eight">
    <section class="formular">
        <h2>Contacteaza-ne!</h2>
        <?php echo "</br>" . $trimis . "</br>" ;?>
      <form method="post" name="myForm" onsubmit="return validateForm();">
           <p>Nume:</p>
           <input name="nume" placeholder="Popescu" />
           <p>Prenume:</p>
           <input name="prenume" placeholder="Ion"/>
           <p>E-Mail:</p>
           <input type="email" name="email" placeholder="yourmail@example.com"/>
           <p>Telefon:</p>
           <input name="telefon" placeholder="07** *** ***"/>
           <p>Mesaj:</p>
          <textarea name="mesaj" rows="5" cols="40">As dori sa comand urmatoarele produse:
          </textarea>
          <input type="submit" name="sub" value="Trimite!"/>
        
        </form>
    
    </section>
    <hr class="style-eight">
    <footer class="contactinfo">
        <article class="phoneno">
            <h2>Contact</h2>
            <a href="tel:+40728691615">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                0728 691 615</a>
            <a href="tel:+40728691615">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                0728 691 615</a>
            <a href="tel:+40728691615">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                0728 691 615</a>
        </article>
        <article class="socialmedia">
            <a href="http://facebook.com" target="_blank">
                <img src="instagram.png" alt="instagram" /> </a>
            <a href="http://facebook.com" target="_blank">
                <img src="email.png" alt="email" /> </a>
            <a href="http://facebook.com" target="_blank">
                <img src="facebook.png" alt="facebook" /> </a>
        </article>
        <p>Copyright &copy; 2018
            <span>SIMA EVOLUTION S.R.L.</span>
        </p>
    </footer>
    <script src="main.js"></script>
</body>

</html>