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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <main>
        <br>
        <button class="but2"><a href="adminHome.php" class="homeAnk">Admin Home</a></button>
        <section>
            <?php
                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
            ?>
        </section>
        <table>
            <tr>
                <th>Questions</th>
                <th>Customer name</th>
                <th>Customer phone number</th>
            </tr>
            <?php
                include("Config/db_config.php");

                $items_query="SELECT * FROM question";
                $items_response= mysqli_query($connection, $items_query);
                while($data=mysqli_fetch_assoc($items_response)){
                    echo "<tr>";
                    echo "<td>".$data['Title']."</td>";
                    echo "<td>".$data['userName']."</td>";
                    echo "<td>".$data['userPhoneNumber']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
    <br><br>
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