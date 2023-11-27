<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    
    <header>
        <div id="lewy">
            <h2>Nasze osiedle</h2>
        </div>

        <div id="prawy">
        <?php
            $connect = mysqli_connect('localhost', 'root', '', 'portal');

                $r = "SELECT COUNT(*) FROM `dane`;";
                
                     $q = mysqli_query($connect, $r);
                     while($row = mysqli_fetch_assoc($q)) {
                        echo "<h5>Liczba użytkowników portalu: ". $row['COUNT(*)']."</h5>";
                     }

                        
                   

            mysqli_close($connect);

            ?>
        </div>

    </header>

    <div class="lewy">
        <h3>Logowanie</h3>

        <form action="uzytkownicy.php" method="post">
            <label >Login:</label>
            <input type="text" required><br>
        
            <label >Hasło:</label>
            <input type="password" required><br>
        
            <button type="submit">Zaloguj</button>
        </form>
    </div>

    <div class="prawy">
    <h3>Wizytówka</h3>
    <div class="wizytówka">
        
        <img src="o3.jpg" alt="osoba">
        <h4>Heniek (29)</h4>
        <p>hobby: film</p>
        <h1><img src="icon-on.png" alt="">20</h1>
        <a href="dane.html"><button id="esa" >Więcej informacji</button></a>
                    </div>
    </div>

    <footer>
        Stronę wykonał: 21?
    </footer>

</body>
</html>


