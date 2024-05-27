<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inquire about different medicines and cosmetics">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Health and Drug Pharmacy</title>
</head>
<body>
    <header>
        <a class="Anker" href="index.php"><img src="images/Screenshot_2023-01-12_204827.png" alt="logo"></a> 
        <h1 class="h">Health and Drug Pharmacy</h1>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
            <form action="items.php" method="post">
            <li><label for="branches">view items:</label>
                <select id="branches" name="branch" class="branch">
                <option value="0">select branch</option>
                <option value="1">Amman</option>
                <option value="2">Irbid</option>
                <option value="3">Zarqa</option>
                <option value="4">Aqaba</option>
                <option value="5">Alkarak</option>
                <option value="6">Ma'an</option>
                <input class="button" type="submit" name="submit">
                <br>
              </select></li>
              <?php
                if(isset($_POST['branch'])){
                  $branch = $_POST['branch'];
                  header("location:items.php?branch=$branch");
                }
              ?>
            <li><a href="adminLogin.php">Admin Login</a></li>
            </ul>
            </form>
        </nav>
    </header>
    <br>
    <main>
      <section class="all">
        <section class="BMIHead">
            <h1 class="h1Form1">calculate your BMI</h1><br>
        <form name="bmi" action="Process/BMI_process.php" method="GET" class="BMIForm">
            <label for="height">Height:</label>
            <input type="text" id="height" name="height"><br><br>
            <label for="weight">Weight:</label>
            <input type="text" id="weight" name="weight"><br><br>
            <input name="calculate" class="button" id="submit" type="submit" value="Calculate">
            <div>
            <?php
            if(!empty($_GET)){
              if(isset($_GET['error'])){
                  echo $_GET['error'];
              }
            }
            if(!empty($_GET)){
              if(isset($_GET['result']) && isset($_GET['bmi'])){
                $result1= $_GET['result'];
                $result2= $_GET['bmi'];
                echo $result1."<br>";
                echo $result2;
              }
            }
            ?>
          </div>
          </form>
          </section>
          <br>
          <section class="askHead">
            <h1 class="h1Form2">Ask Dr.Mufeed</h1><br>
          <form action="Process/Dr.Mufeed_process.php" method="POST" class="askForm">
            <label for="enterName">Enter you name:</label>
            <input type="text" id="enterName" name="enterName"><br><br>
            <label for="phoneNumber">Enter your phone number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber"><br><br>
            <label for="Question">Ask your Question:</label>
            <input type="text" id="Question" name="Question"><br><br>
            <input class="button" type="submit" value="Submit">
            <div>
            <?php
              if(!empty($_GET)){
                if(isset($_GET['Error'])){
                    echo $_GET['Error'];
                }
              }
          ?>
          </div>
          </form>
          </section>
      </section>
          
    </main>
    <br><br><br>
    <footer>
    <p>
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        Health and Drug Pharmacy All Rights Reserved
    </p>
    </footer>
</body>
</html>