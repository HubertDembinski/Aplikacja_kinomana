<html>
  <head>
  <title>Aplikacja kinomaniaka</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ikonusy/css/fontello.css">
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
      padding-top: 150px;
      padding-bottom: 20px;
      font-size: 100px;
    }
    
    .logowanie {
      text-align: center;
      width: 100%;
      height: 100%;
    }
    
    .formularz {
      width: 320px;
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
      height: 50px;
      padding-left: 17px;
      padding-top: 13px;
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
    
   
    
    
   
  </style>
  </head>
  <body>
    <div class = "main">
      <div class = "ikona">
        <i class="icon-video"></i>
      </div>
      <div class = "logowanie">
        <center>
          <form name = "formularz-rejestracja" method="get" action="zarejestruj.php" class = "formularz">
            <table>
              <tbody>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <span class = "login-span">
                      <i class="icon-user"></i>
                    </span>
                    <input type="text" class="log" name="login" placeholder="Login">
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <span class = "login-span">
                      <i class="icon-key"></i>
                    </span>
                    <input type="password" class="log" name="haslo" placeholder="Hasło">
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <span class = "login-span">
                      <i class="icon-key"></i>
                    </span>
                    <input type="password" class="log" name="haslo2" placeholder="Powtórz Hasło">
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <input type="submit" class = "przycisk" name="ZAREJESTRUJ" value="ZAREJESTRUJ">
                  </td>
                </tr>
                <tr class = "login-tr">
                  <td class = "login-td">
                    <a href= "zaloguj.php" class = "link">ZALOGUJ SIĘ</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
          <?php
            if(isset($_GET['ZAREJESTRUJ'])){
              $user=$_GET['login']; 
              $pass=$_GET['haslo']; 
              $pass2=$_GET['haslo2']; 
              if(strcmp($pass,$pass2) !== 0 ){
                echo"<script language='javascript'>alert('Hasła nie są identyczne')</script>";
                echo"<script>document.location='zarejestruj.php';</script>";
                exit();
              }
              $link = mysqli_connect("mysql.ct8.pl", $dbuser="m27034_test", $dbpassword="Audiquatro80*", $dbname="m27034_kinoman"); 
              if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); }
              mysqli_query($link, "SET NAMES 'utf8'"); 
              $sql = "INSERT INTO user (login,password) VALUES('$user','$pass')";
              if (mysqli_query($link, $sql)) {
                echo"<script language='javascript'>alert('Rejestracja powiodła się')</script>";
                echo"<script>document.location='zarejestruj.php';</script>";
                //mkdir("/usr/home/hubdem000/domains/hubdem000.ct8.pl/public_html/SEMESTR2/z6/$user");
              } else {
                echo "Error: " . mysqli_error($link);
              }
              mysqli_close($link);  
              
            
            }
              

          ?>
        </center>
      </div>
    </div>
  </body>
</html>
