<?php
session_start();
?>
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
                <option value="1">select branch</option>
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
        <section class="addHead">
            <h1 class="h1Form4">Add Items</h1><br>
            <center>
            <form action="Process/add_process.php" method="GET" class="addForm">
              <label for="name">Item name</label>
              <input type="text" id="name" name="name" required><br><br>
              <label for="type">Item type</label>
              <input type="text" id="type" name="type" required><br><br>
              <label for="price">Item price</label>
              <input type="text" id="price" name="price" required><br><br>
              <label for="id">branch ID</label>
              <input type="text" id="id" name="id" required><br><br>
              <section class="butt">
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
                <button class="but1"><a href="adminHome.php" class="homeAnk">Admin Home</a></button>
              </section>
              
            </form>
            </center>
        </section>
</main>
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