<?php
  session_start();
?>
<html>
  <head>
  <title>Aplikacja kinomaniaka</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="ikonystrona/css/fontello.css">
  <script src="first.js"></script> 
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box; 
    }
    
    .lewo-gora {
      float: left;
      height: 47px;
      width: 10%;
      text-align: center;
      font-size: 20px;
      padding: 10px;
      font-family: 'Open Sans';
      font-weight: bold;
      background-color: #fde428;
      color: #fde428;  
    }
    
    .logo {
      float: left;
      width: 20%;
      height: 47px;
      background-color: #fde428;
      color: #002e5b;
      text-decoration: none;
      text-align: center;
      font-size: 20px;  
      padding: 10px;  
      font-family: 'Open Sans';
      font-weight: bold;
      transition: all 1s ease 0s;
    }
    
    .logo:hover {
      color: #fde428;
      background-color: #002e5b;
    }
     
    .filmy {
      float: left;
      width: 20%;
      background-color: #fde428;
      color: #002e5b;
      text-decoration: none;
      text-align: center; 
      font-size: 20px;
      padding: 10px;
      font-family: 'Open Sans';
      font-weight: bold;
      transition: all 1s ease 0s;
    }
    
    .filmy:hover {
      color: #fde428;
      background-color: #002e5b;
    }
    
    .seriale {
      float: left;
      width: 20%;
      height: 47px;
      background-color: #fde428;
      color: #002e5b;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
      padding: 10px;
      font-family: 'Open Sans';  
      font-weight: bold;
      transition: all 1s ease 0s;
    }
    
    .seriale:hover {
      color: #fde428;
      background-color: #002e5b;
    }
    
    .zaloguj {
      float: left;
      width: 20%;
      height: 47px;
      background-color: #fde428;
      color: #002e5b;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
      padding: 10px;
      font-family: 'Open Sans';
      font-weight: bold;  
      transition: all 1s ease 0s;
    }
        
    .zaloguj:hover {
      color: #fde428;
      background-color: #002e5b;
    }
    
    .prawo-gora {
      float: left;
      width: 10%;
      height: 47px;
      text-align: right;
      font-size: 25px;
      font-family: 'Open Sans';
      font-weight: bold;
      background-color: #002e5b;
    }
    
    .kategorie {
      float: left;
      width: 100%;
    }
    
    .lewo-dol {
      float: left;
      width: 10%;
      height: 100%;
      text-align: center;
      font-size: 20px;
      padding: 10px;
      font-family: 'Open Sans';
      font-weight: bold;
      color: white; 
    }
    
    .srodek {
      float: left;
      width: 80%;
      height: 100%;
      padding-top: 5px;
      text-align: center;
    }
    
    .prawo-dol {
      float: left;
      width: 10%;
      height: 100%;
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 15px;
 
    }
    
    
    .tytul-kat {
      width: 100%;
      font-family: 'Open Sans';
      font-weight: bold;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 30px;
      font-size: 40px;
      color: #002e5b;
    }
    
    .tytul-akt {
      width: 100%;
      float: left;
      font-family: 'Open Sans';
      font-weight: bold;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 30px;
      font-size: 40px;
      color: #002e5b;
    }
    
    .test {
      float: left;
      font-family: 'Open Sans';
      font-weight: bold;
      text-align: center;
      margin-left: 5px;
      margin-bottom: 5px;
      padding-top: 10px;
      border-style: solid;
      border-color: #fde428;
      border-width: 2px;
      width: 150px;
      height: 150px;
      border-radius: 100px;
      text-decoration: none;
      color: #002e5b;
      background-color: #fde428;
      font-size: 20px;
    }
    
    
    .ikona-w-srodku {
      margin-top: 10px;
    }
    
    .testt {
      float: left;
      width: 30%;
      text-align: center;
      width: 230px;
      height: 230px; 
      margin-right: 30px;
      transition: all 1s ease 0s;
      font-family: 'Open Sans';
    }
    
    .testt:hover {
      box-shadow: 0px 0px 33px 3px rgba(7, 7, 7, 1);
      transform: scale(1.1);
      
    }
    
    .tytul-film {
      width: 100%;
      float: left;
      font-family: 'Open Sans';
      font-weight: bold;
      text-align: center;
      margin-top: 5px;
      font-size: 20px;
      color: #002e5b;
      text-decoration: none;
      text-align: center;
      margin-bottom: 5px;
    }
    
    .loginn {
      margin-top: 3px;
      margin-left: 3px;
      float: left;
      font-size: 15px;
      font-family: 'Open Sans';
      font-weight: bold;
      color: #fde428;
      padding-bottom: 5px;
    }
    
    
    .sidebar{
      display: block;
      text-align: center;
      color: #fde428;
      text-decoration: none;
      width: 100%;
      padding: 5px;
      background-color: #002e5b;
      transition: all 1s ease 0s;
      }
    
    .sidebar:hover{
      color: #002e5b;
      background-color: #fde428;
      }
    
    .tresc{
      float: left;
      width: 100%;
      font-family: 'Open Sans';
      }
    
    .nazwa-film{
      float: left;
      width: 100%;
      font-family: 'Open Sans';
      font-size: 30px;
      font-weight: bold;
      color: #002e5b;
      text-align: center;
      margin-bottom: 5px;
      }
    
    .akapit{
      float: left;
      width: 100%;
      text-align: left;
      font-size: 20px;
      margin-top: 20px;
      border-bottom-style: solid;
      border-bottom-color: #002e5b;
      padding-bottom: 10px;
      color: #002e5b;
      }
    
    .akapit:first-letter{
     font-size: 400%;
     float: left;
      }
    
    .responsive{
     width: 50%;
     height: auto;
      }
    
     .dodajkom{
      text-align: left;
      float: left;
      margin-top: 10px;
      font-size: 20px;
      font-weight: bold;
      color: #002e5b;
      width: 100%;
      }
    
    .komentarz{
      margin-top: 10px;
      outline-color: #fde428;
      resize: none;
      font-size: 20px;
      width: 300px;
      }
    
    .komentarzefilm{
      float: left;
      width: 100%;
      text-align: left;
      font-weight: bold;
      font-family: 'Open Sans';
      }
 

  </style>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
  </head>
  <body>

    <div class = "lewo-gora">
      k
    </div>
    <a class = "logo" href = "index.php">STRONA</a>
    <a class = "filmy" href = "index.php">FILMY</a>
    <a class = "seriale" href = "zarejestruj.php">ZAREJESTRUJ</a>
    <a class = "zaloguj" href = "zaloguj.php">ZALOGUJ</a>
    <div class = "prawo-gora">
      <p class = "loginn"><?php echo "Login:" . "<br>" . $_SESSION['login'];?></p>
      <a href = "logout.php" style ="margin-top: 3px; color: #fde428;"><i class="icon-logout"></i></a>
    </div>
    <div class = "lewo-dol">
      k
    </div>
    <div class = "srodek">
      <div class = "tytul-kat">
      Kategorie filmów
      </div>
      <?php
        $dbhost="mysql.ct8.pl"; $dbuser="m27034_test"; $dbpassword="Audiquatro80*"; $dbname="m27034_kinoman";
        $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
        if (!$connection)
        {
          echo " MySQL Connection error." . PHP_EOL;
          echo "Errno: " . mysqli_connect_errno() . PHP_EOL;
          echo "Error: " . mysqli_connect_error() . PHP_EOL;
          exit;
        }
        $result = mysqli_query($connection, "SELECT nazwa FROM kategorie") or die ("DB error: $dbname");
        while($row = mysqli_fetch_assoc($result)){
          $nazwa=$row['nazwa'];
          $nazwaa = strval($nazwa);
          if($nazwaa == "Dramat"){
               echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='dramat.png' width='80px'  height='80px'></div></a>";        
            }elseif($nazwaa == "Komedia"){
              echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='komedia.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Akcja"){
              echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='akcja.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Horror"){
              echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='horror.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Sci-Fi"){
              echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='science-fiction.png'  width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Animacja"){
              echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='animacja.png'  width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Familijny"){
              echo "<a  href=$nazwaa.php  class='test'>$nazwaa<div  class='ikona-w-srodku'><img  src='rodzina.png' width='80px'  height='80px'></div></a>";
              }
        }
        
      ?>
    <div class = "tytul-akt">
      Aktualności
    </div>
     <?php
       $wartosc=$_POST['divfilm'];
       $result2 = mysqli_query($connection, "SELECT nazwa_film, opis, miniatura FROM filmy WHERE nazwa_film ='$wartosc'") or die ("DB error: $dbname");
       $roww=$result2->fetch_assoc();
       $tytul=$roww['nazwa_film'];
       $opis_film=$roww['opis'];
       $zdjecie=$roww['miniatura'];
       $tytull = strval($tytul);
       $opis = strval($opis_film);
       $miniatura = strval($zdjecie);
       $result8 = mysqli_query($connection, "SELECT idf FROM filmy WHERE nazwa_film = '$wartosc'") or die ("DB err: $dbname");
       $wiersze=$result8->fetch_assoc();
       $ajdi=$wiersze['idf'];
       $ajdif = intval($ajdi);
  
  
       $user = $_SESSION['login'];
       $wartoscc=$_POST['dodajkomentarz'];
       $result6 = mysqli_query($connection, "SELECT nazwa_film, opis, miniatura FROM filmy WHERE nazwa_film ='$wartoscc'") or die ("DB error: $dbname");
       $rowww=$result6->fetch_assoc();
       $tytull=$rowww['nazwa_film'];
       $opis_filmm=$rowww['opis'];
       $zdjeciee=$rowww['miniatura'];
       $tytulll = strval($tytull);
       $opiss = strval($opis_filmm);
       $miniaturaa = strval($zdjeciee);
       
  
       $result3 = mysqli_query($connection, "SELECT idu FROM user WHERE login='$user'") or die ("DB er: $dbname");
       $wiersz=$result3->fetch_assoc();
       $idu=$wiersz['idu'];
       $iduu = intval($idu);
       $result4 = mysqli_query($connection, "SELECT idf FROM filmy WHERE nazwa_film = '$wartoscc'") or die ("DB err: $dbname");
       $wierszkolejny=$result4->fetch_assoc();
       $idf=$wierszkolejny['idf'];
       $idff = intval($idf);
       $komtext=$_POST['textkom'];
       $wartoscocena=$_POST['ocenaliczba'];
  
       $result7 = mysqli_query($connection, "SELECT user.login, komentarz FROM komentarze INNER JOIN user ON komentarze.idu = user.idu WHERE komentarze.idf = '$idff'") or die ("DB err: $dbname");
  
       $result9 = mysqli_query($connection, "SELECT user.login, komentarz FROM komentarze INNER JOIN user ON komentarze.idu = user.idu WHERE komentarze.idf = '$ajdif'") or die ("DB err: $dbname");
       
       $result10 = mysqli_query($connection, "SELECT COUNT(komentarz) AS liczbakom FROM komentarze WHERE idf = '$ajdif'") or die ("DB err: $dbname");
       $liczbakomentarzy=$result10->fetch_assoc();
       $liczba=$liczbakomentarzy['liczbakom'];
       $liczbakom = strval($liczba);
  
       $result11 = mysqli_query($connection, "SELECT COUNT(komentarz) AS liczbakomm FROM komentarze WHERE idf = '$idff'") or die ("DB err: $dbname");
       $liczbakomentarzyy=$result11->fetch_assoc();
       $liczbaa=$liczbakomentarzyy['liczbakomm'];
       $liczbakomm = strval($liczbaa);
         
      
       //$result11 = mysqli_query($connection, "SELECT COUNT(komentarz) FROM komentarze WHERE idf = '$ajdif'") or die ("DB err: $dbname");
  
       //$komtextt = strval($komtext);
       if (isset($_POST['divfilm'])) {
         echo "<div  class = 'tresc'><div class =  'nazwa-film'>$tytull</div><img src='$miniatura' class = 'responsive'><div class =  'akapit'>$opis</div>";
           echo "<div class = 'komentarzefilm'><p style = 'font-size: 25px;'>Komentarze ($liczbakom)</p>";
           while($wszystkiewiersze = mysqli_fetch_assoc($result9)){
             $log=$wszystkiewiersze['login'];
             $logg = strval($log);
             $kom=$wszystkiewiersze['komentarz'];
             $komm = strval($kom);
             echo"<div style='font-size: 25px;'>$logg</div><div style='font-size: 20px; margin-left: 8px; padding: 5px; background-color: #E4E4E4; width: 700px;'>$komm</div>";
           }
           //echo "halo";
           echo "</div>";
           echo "</div>";
         mysqli_close($connection);
         }elseif (isset($_POST['dodajkomentarz'])) {
           $result5 = mysqli_query($connection, "INSERT INTO komentarze (idu,idf,komentarz) VALUES('$iduu','$idff','$komtext');") or die ("DB erro: $dbname");
           $result20 = mysqli_query($connection, "INSERT INTO oceny (ocena,idf) VALUES('$wartoscocena','$idff')") or die ("DB erro: $dbname");
           echo "<div  class = 'tresc'><div class =  'nazwa-film'>$tytulll</div><img src='$miniaturaa' class = 'responsive'><div class =  'akapit'>$opiss</div>";
           echo "<div class = 'komentarzefilm'><p style = 'font-size: 25px;'>Komentarze ($liczbakomm)</p>";
           while($wszystkiewierszee = mysqli_fetch_assoc($result7)){
             $log=$wszystkiewierszee['login'];
             $loggg = strval($log);
             $kom=$wszystkiewierszee['komentarz'];
             $kommm = strval($kom);
             echo"<div style='font-size: 25px;'>$loggg</div><div style='font-size: 20px; margin-left: 8px; padding: 5px; background-color: #E4E4E4; width: 700px;'>$kommm</div>";
           }
           //echo "halo";
           echo "</div>";
           echo "</div>";
           //mysqli_close($connection);
           }
       
     ?>  
    </div>
    <div class = "prawo-dol">

        <a class = "sidebar" href = "dodajfilm.php">DODAJ FILM</a>
        <a class = "sidebar" href = "dodajaktualnosci.php">DODAJ NEWS</a>
    </div>

  </body>
</html>