<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['loggedin']))
  {
    header('Location: zaloguj.php');
  }
?>
<html>
  <head>
  <title>Aplikacja kinomaniaka</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ikonystrona/css/fontello.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;   
    }
    
    .main {
      float: left;
      width: 100%;
      height: 100%;
    }
    
    .ikona {
      text-align: center;
      width: 100%;
      padding-top: 30px;
      padding-bottom: 20px;
      font-size: 100px;
    }
    
    .logowanie {
      text-align: center;
      width: 100%;
      height: 100%;
    }
    
    .formularz {
      width: 420px;
      height: 100%;
      position: relative;
    }
    
    table {
      display: block;
      }
    
    tbody {
      display: block;
      }
    
    .login-tr {
      display: flex;
      margin-bottom: 10px;
    }
    
    .login-td {
      display: flex;
      width: 100%;
    }
    
    .login-span {
      display: flex;
      width: 20%;
      border-left-style: solid;
      border-top-style: solid;
      border-bottom-style: solid;
      border-width: 1px;
      padding-left: 22px;
      padding-top: 3px;
      height: 50px;
      background-color: #fde428;
      font-size: 20px;
      color: #002e5b;
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px;
    }
    
    .log {
      display: block;
      width: 80%;
      height: 50px;
      padding-left: 10px;
      border-style: solid;
      border-color: black;
      border-width: 1px;
      background-color: white;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
      font-family: 'Open Sans';
      font-size: 20px;
      outline-color: #fde428;
      }
    
    .przycisk {
      width: 100%;
      height: 50px;
      border-style: solid;
      background-color: #fde428;
      color: #002e5b;
      border-color: #fde428;
      border-radius: 4px;
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 20px;
      transition: all 1s ease 0s;
    }
    
    .przycisk:hover {
      color: #fde428;
      background-color: #002e5b;
      border-color: #002e5b;
    }
    
    .link{
      width: 100%;
      height: 50px;
      border-style: solid;
      background-color: #fde428;
      color: #002e5b;
      border-color: #fde428;
      border-radius: 4px;
      font-family: 'Open Sans';
      font-weight: bold;
      font-size: 20px;
      text-decoration: none;
      text-align: center;
      transition: all 1s ease 0s;
      padding-top: 9px;
      }
    
    .link:hover {
      color: #fde428;
      background-color: #002e5b;
      border-color: #002e5b;
    }
    
    .error-tr {
      display: flex;
      margin-bottom: 10px;
      word-wrap: break-word;
    }
    
    .error-td {
      padding-left: 15px;
      display: flex;
      width: 100%;
      font-family: 'Open Sans';
      color: #ff0000;
      font-weight: bold;
      font-size: 20px;
      word-wrap: break-word;
    }
    
    .opis-tr {
      display: flex;
      margin-bottom: 10px;
    }
    
    .opis-td {
      display: flex;
      width: 100%;
    }
    
    .opis-span {
      display: flex;
      width: 20%;
      border-left-style: solid;
      border-top-style: solid;
      border-bottom-style: solid;
      border-width: 1px;
      height: 80px;
      padding-left: 7px;
      padding-top: 6px;
      background-color: #fde428;
      font-size: 20px;
      color: #002e5b;
      border-top-left-radius: 4px;
      border-bottom-left-radius: 4px;
    }
    
    .opis {
      display: block;
      width: 80%;
      height: 80px;
      padding-left: 10px;
      border-style: solid;
      border-color: black;
      border-width: 1px;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
      font-family: 'Open Sans';
      font-size: 20px;
      outline-color: #fde428;
      resize: none;
      }
    
    .logg {
      display: block;
      width: 80%;
      height: 50px;
      padding-left: 10px;
      padding-top: 7px;
      border-style: solid;
      border-color: black;
      border-width: 1px;
      background-color: white;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
      font-family: 'Open Sans';
      font-size: 20px;
      outline-color: #fde428;
      }
    

   
    .log-miniaturki {
      display: block;
      width: 80%;
      height: 50px;
      padding-top: 12px;
      border-style: solid;
      border-color: black;
      border-width: 1px;
      background-color: white;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px;
      font-family: 'Open Sans';
      font-size: 15px;
      outline-color: #fde428;
      text-align: center;
      }
    
    input[type="file"] {
    display: none;
    }
   
    .miniaturki-upload{
      cursor: pointer;
      border-style: solid;
      border-color: #002e5b;
      background-color: #fde428;
      color: #002e5b;
      font-weight: bold;
      border-radius: 10px;
      padding: 2px;
      }
    
    .miniaturki-uploadd{
      cursor: pointer;
      border-style: solid;
      border-color: #002e5b;
      background-color: #fde428;
      color: #002e5b;
      font-weight: bold;
      border-radius: 10px;
      padding: 2px;
      }
 
  </style>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

  </head>
  <body>
    <?php
      $link = mysqli_connect("mysql.ct8.pl", $dbuser="m27034_test", $dbpassword="Audiquatro80*", $dbname="m27034_kinoman");
      //$result = mysqli_query($link, "SELECT * FROM kategorie");
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
          $tytulAktualnosc=$_POST['tytulAktualnosc'];
          $tekstAktualnosc=$_POST['tekstAktualnosc'];
          
          $link = mysqli_connect("mysql.ct8.pl", $dbuser="m27034_test", $dbpassword="Audiquatro80*", $dbname="m27034_kinoman");
          
          $target_dir = "miniaturki";
        
          $target_file = $target_dir . "/". basename($_FILES["miniaturkiUpload"]["name"]);
        
          $uploadOk = 1;
        
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" )
          {
            $_SESSION["error"] = "Możesz wrzuać pliki tylko i wyłącznie z formatami: JPG, JPEG, PNG";
            $uploadOk = 0;
          }
         
          //$srcimg = "<img src=\"{$target_file}\" width=\"150px\" height=\"150px\">";
          $srcimg = "$target_file";
        
          if ($uploadOk == 0)
          {
            $_SESSION["error"] = "Twoja miniatura nie została przesłana";
          }
          else
          {
            if (move_uploaded_file($_FILES["miniaturkiUpload"]["tmp_name"], $target_file))
            {
              $_SESSION["error"] = "Plik ".htmlspecialchars( basename( $_FILES['miniaturkiUpload']['name'])). " został przesłany";
              $result2 = mysqli_query($link, "INSERT INTO aktualnosci (tytul,zdjecie,tresc) VALUES('$tytulAktualnosc','$srcimg','$tekstAktualnosc')");
            }
            else
            {
              $_SESSION["error"] = "Błąd przy wysyłaniu miniatury";
            }
          }
        
        
        //$result2 = mysqli_query($link, "INSERT INTO aktualnosci (tytul,zdjecie,tresc) VALUES('$tytulAktualnosc','$srcimg','$tekstAktualnosc')");
        mysqli_close($link);
        
          
        }
          
  
    ?>
    <div class = "main">
      <div class = "ikona">
        <i class="icon-video"></i>
      </div>
      <div class = "logowanie">
        <center>
          <form name = "formularz-login" class = "formularz" method="post" action="" enctype="multipart/form-data">
            <table>
              <tbody>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <span class = "login-span">
                     <img src='tytul.png' width='40px' height='40px'>
                    </span>
                    <input type="text" class="log" name="tytulAktualnosc" placeholder="Tytul">
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <span class = "login-span">
                     <img src='miniatura.png' width='40px' height='40px'>      
                    </span>
                    <div class = "log-miniaturki">
                      <label class="miniaturki-upload">
                        <i class="icon-upload"></i>
                        Dodaj miniature
                      <input type="file" name="miniaturkiUpload" id="miniaturkiUpload"/>
                      </label>
                      <span>
                        <strong style="padding-left: 5px;">Plik:</strong>
                        <span id ="nazwa-pliku">brak</span>
                      </span>
                      <script>
                        let inputFile = document.getElementById('miniaturkiUpload');
                        let nazwaPliku = document.getElementById('nazwa-pliku');
                        inputFile.addEventListener('change', function(event){
                          let przeslanyPlik = event.target.files[0].name;
                          nazwaPliku.textContent = przeslanyPlik;                           
                        })
                      </script>
                    </div>
                  </td>
                </tr>
                <tr class = "opis-tr">
                  <td class = "opis-td">
                    <span class = "opis-span">
                     <img src='opis.png' width='70px' height='70px'>  
                    </span>
                    <textarea class="opis" name="tekstAktualnosc" placeholder="Tekst"></textarea>
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <input type="submit" class = "przycisk" value="DODAJ AKTUALNOŚĆ">
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <a href= "index.php" class = "link">STRONA GŁÓWNA</a>
                  </td>
                </tr>
                <tr class = "error-tr">
                  <td class = "error-td">
                    <?php if (isset($_SESSION["error"])) { ?>
                    <?= $_SESSION["error"]; ?>
                    <?php unset($_SESSION["error"]); } ?>
                    <br>
                    <?php if (isset($_SESSION["error2"])) { ?>
                    <?= $_SESSION["error2"]; ?>
                    <?php unset($_SESSION["error2"]); } ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </center>
      </div>
    </div>
  </body>
</html>
