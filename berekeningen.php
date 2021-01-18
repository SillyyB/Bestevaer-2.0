<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <?php include("ships.php"); ?>
    <title>Contact pagina</title>
</head>
<body>
<main>
    <div class="navbar">
        <a class="logo" href="index.html">⚓︎ Rederij Bestevaer</a>
        <ul class="nav">
          <li class="nav-list"><a class="nav-link" href="index.html">🏠 Home</a></li>
          <li class="nav-list"><a class="nav-link" href="schepen.html">🚢 Onze schepen</a></li>
          <li class="nav-list"><a class="nav-link" href="berekeningen.php">🧮 Berekeningen</a></li>
          <li class="nav-list"><a class="nav-link" href="contact.html">📱 Contact</a></li>
        </ul>
      </div>
</main>
        <div class="ship-form">
          <br><br><br><br><br><br><br><br>
          <p class="ship-form-title">Berekening van uw schip</p>
          <p class="ship-form-text">Kies hier uw boot van keuze en hoeveel ton lading u meeneemt.</p>
          <br><br>
            <form method="post">
              <select name="schip_select" id="select-box">
                <option value="bestevaer">Bestevaer</option>
                <option value="angela">NS Angela</option>
                <option value="triumph">Triumph IV</option>
                <option value="lucky star">Lucky star</option>
                 <option value="sabrina">Sabrina</option>
                 <option value="hermes">Hermes</option>
              </select>
            <label for="lading" id="label-text">Lading in ton:</label>
              <input type="text" name="lading" id="lading">
              <input type="submit" name="submit" value="Bereken">
            </form>
            <br>
        
            <?php if(isset($_GET["ship"]))
            {
              
              $name = $_GET["ship"];
              $ship = GetShip($name);
              echo "<h1>$name</h1>";
              echo "<p>GWT = {$ship['GT']}</p>";
              echo "<p>M3 = {$ship['M3']}</p>";
            }
              if(isset($_POST["submit"])) {
              $gekozen_schip = $_POST["schip_select"];
              $ship = GetShip($gekozen_schip);


              $max_lading = $ship['GT'];
              $nieuwe_lading = $_POST['lading'];
              echo "De maximale lading is: $max_lading";
              echo "<br>";
              echo "De ingevoerde lading is: $nieuwe_lading";
              echo "<br><br>";
              }

            if ($max_lading >= $nieuwe_lading) {
              echo "Uw vracht is goedgekeurd,<br><a href=contact.html id=yeet>neem contact met ons op</a>";
            } else {
              echo "Uw vracht is afgekeurd, kies een andere boot of <br><a href=contact.html id=yeet>neem contact met ons op</a>";
            }
            ?>
            
          </div>

          <footer>
      <div class="footer">

        <div class="footer-mail">
        <h3 class="footer-title">e-mail adres:</h3> <br>
        <ul>
          <li><span>RederijBestevaer@gmail.com</span></li>
        </ul>
      </div>

        <div class="footer-telefoon">
        <h3 class="footer-title">telefoonnummer:</h3> <br>
        <ul>
          <li><span>+0621251092</span></li>
        </ul>
       </div>

       <div class="footer-address">
        <h3 class="footer-title">Address:</h3> <br>
        <ul>
          <li><span>Jan-pieterstraat 8, Rotterdam</span></li>
        </ul>
      </div> 

      </div>
    </footer>
          
</body>
</html>