<?php
  session_start();
?>
<html>
  <head>
  <title>Aplikacja kinomaniaka</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="ikonystrona/css/fontello.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;   
    }
    
    .lewo-gora {
      float: left;
      width: 10%;
      height: 47px;
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
      width: 530px;
      height: 190px;
      margin-bottom: 20px;
      text-align: left;
    }
    
    .tekst {
      float: right;
      font-family: 'Open Sans';
      font-weight: bold;
      border-right-style: solid;
      border-bottom-style: solid;
      border-top-style: solid;
      border-width: 1px;
      width: 388px;
      height: 190px;
      color: #002e5b;
    }
    
    .tytul-rok {
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 20px;
      color: #002e5b;
      margin-top: 5px;
      margin-left: 10px;
    }
    
    .gatunek {
      float: left;
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 15px;
      color: #002e5b;  
      margin-bottom: 5px;
      margin-left: 10px;
      width: 40%;
    }
    
    .rezyser {
      float: right;
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 15px;
      color: #002e5b;  
      margin-bottom: 5px;
      margin-right: 5px;
      width: 50%;
      text-align: right;
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
    
    .video{
      float: left;
      margin-bottom: 20px;
      margin-right: 23%;
      text-align: center;
      }
    
    .przycisk{
      border: none;
      background-color: white;
      font-family: 'Open Sans';
      font-size: 20px;
      color: #002e5b;
      font-weight: bold;
      margin-top: 5px;
      margin-left: 10px;
      }
    
    .ocena{
      margin-left: 10px;
      font-size: 50px;
      margin-top: 30px;
      margin-bottom: 30px;
      }
    
    .komentarz{
      float: left;
      width: 100%;
      margin-top: 5px;
      margin-bottom: 10px;
      text-align: left;
      }
    
    .textarea{
      text-align: left;
      resize: none;
      font-size: 20px;
      width: 500px;
      height: 100px;
      background-color: #fde428;
      border-style: solid;
      border-color: #002e5b;
      font-size: 20px;
      font-weight: bold;
      color: #002e5b;
      font-family: 'Open Sans';
      padding: 5px;
      border-radius: 10px;
      }
    
    .przyciskdwa{
      background-color: #fde428;
      border-color: #fde428;
      color: #002e5b;
      border-style: solid;
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 20px;
      width: 339px;
      margin-top: 10px;
      margin-bottom: 30px;
      padding: 5px;
      border-radius: 10px;
      transition: all 1s ease 0s;
      }
    
    .przyciskdwa:hover{
      background-color: #002e5b;
      border-color: #002e5b;
      color: #fde428;
      }
    
    .selectstyle{
      font-size: 17px;
      font-family: 'Open Sans';
      font-weight: bold;
      color: #002e5b;
      background-color: #fde428;
      border-style: solid;
      border-color: #002e5b;
    }



  </style>
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
               echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='dramat.png' width='80px'  height='80px'></div></a>";        
            }elseif($nazwaa == "Komedia"){
              echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='komedia.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Akcja"){
              echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='akcja.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Horror"){
              echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='horror.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Sci-Fi"){
              echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='science-fiction.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Animacja"){
              echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='animacja.png' width='80px'  height='80px'></div></a>";
              }elseif($nazwaa == "Familijny"){
              echo "<a  href=$nazwaa.php class='test'>$nazwaa<div  class='ikona-w-srodku'><img src='rodzina.png' width='80px'  height='80px'></div></a>";
              }
        }
        
      ?>
    <div class = "tytul-akt">
      Horror
    </div>
           <?php
        $result2 = mysqli_query($connection, "SELECT idf, nazwa_film, miniatura, kategorie.nazwa, rok, rezyser, plik FROM filmy INNER JOIN kategorie ON filmy.idk = kategorie.idk WHERE filmy.idk = 4;") or die ("DB error: $dbname");
        while($row = mysqli_fetch_assoc($result2)){
          $idf=$row['idf'];
          $nazwa_film=$row['nazwa_film'];
          $miniatura=$row['miniatura'];
          $nazwa=$row['nazwa'];
          $rok=$row['rok'];
          $rezyser=$row['rezyser'];
          $plik=$row['plik'];
          $nazwa_filmm = strval($nazwa_film);
          $miniaturaa = strval($miniatura);
          $nazwaa = strval($nazwa);
          $rokk = strval($rok);
          $rezyserr = strval($rezyser);
          $plikk = strval($plik);
          $idff = intval($idf);
          $result3 = mysqli_query($connection, "SELECT ROUND(AVG(ocena), 1) AS ocenka FROM oceny WHERE idf = $idff;") or die ("DB error: $dbname");
          $ro=$result3->fetch_assoc();
          $ocena=$ro['ocenka'];
          echo "<form action='singlefilmy.php' method='post'>";
          echo "<div class='testt'><img src='$miniaturaa' width='142px' height='190px'><div class ='tekst'><button name='divfilm' type='submit' value='$nazwa_filmm' class='przycisk'>$nazwa_filmm<i class='icon-reply'></i></button> <b style='font-size: 20px; margin-left: 10px;'>Rok: $rokk</b><p class = 'ocena'><i class='icon-star' style='color: #FFC107;'></i>$ocena</p><p class ='gatunek'>gatunek $nazwaa</p><p class = 'rezyser'>reżyser $rezyserr</p></div></div><div class ='video'><video width='338' height='190' controls><source src='$plikk' type='video/mp4'></video></div><div class = 'komentarz'>";
              if (!isset($_SESSION['loggedin']))
              {
                echo" ";      
              }else{
                echo"<textarea class='textarea' name='textkom' placeholder='Napisz komentarz'></textarea><br>
                  <div style='margin-top: 10px; font-size: 20px; font-family: Open Sans; font-weight: bold; color: #002e5b;'>
                  WYBIERZ OCENĘ
                  <select name='ocenaliczba' class ='selectstyle'>
                  <option value='1'>1</option>
                  <option value='2' class='optionclass'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                  </select>
                  </div>
                  <button name='dodajkomentarz' type='submit' value='$nazwa_filmm' class='przyciskdwa'>DODAJ KOMENTARZ ORAZ OCENĘ</button>";
                }
          //echo "Dodaj komentarz<br>";
          //echo "<textarea class='komentarz' name='textkom' placeholder='Napisz komentarz'></textarea><br>";
          echo"</div>";
          echo "</form>";
        }
      ?>
 
    </div>
    <div class = "prawo-dol">
        <a class = "sidebar" href = "dodajfilm.php">DODAJ FILM</a>
        <a class = "sidebar" href = "dodajaktualnosci.php">DODAJ NEWS</a>
    </div>
  </body>
</html>