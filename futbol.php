<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
    
</head>
<body>
    <?php
        $db = new mysqli('localhost', 'root', '', 'egzamin futbol');
    ?>
    <header id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </header>
    
   <section id="mecze">
       <?php
       $query = $db->prepare("SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'");
       
       $query->execute();
       $result = $query->get_result();
       while ($row = $result->fetch_assoc()) {
           echo " <div id='mecz'>";
           $z1 =$row['zespol1']; 
           $z2 =$row['zespol2'];
           $w = $row['wynik'];
           $data = $row['data_rozgrywki'];
           echo "<h3>$z1 - $z2 </h3>";
           echo "<h4>$w</h4>";
           echo "<p>w dniu: $data</p>";
           echo "</div>";
       }
      
       ?>
   </section>
        <main>
           <h2>Reprezentacja Polski</h2>
        </main>
        <div id="lewy">
        <p>Podaj pozycje zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy)</p>
        <form action="futbol.php" method="post">
            <input type="number" name="" id="">
            <button type="submit">Sprawdż</button>
        </form>
        <ul>
          <li>skrypt2</li>  
        </ul>
        </div>
        <div id="prawy">
            <img src="zad1.png" alt="piłkarz">
            <p>Autor: 86301219619</p>
        </div>
   <?php
    $db->close();
   ?>
</body>
</html>