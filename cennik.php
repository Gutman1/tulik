<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uslugi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1 class="glowne">GUTMAN CAR DETAILING</h1>
    <div>
        <a href="strona.html"><img src="gcd.PNG" alt="" id="logocennik"></a>
        <h3>Wróć na strone główna:</h3>
    </div>
    <?php
        $c=mysqli_connect('localhost', 'root', '', 'gutman');
        $zap = "SELECT Usługa, Cena FROM `cennik_uslugi`";
        $dane = mysqli_query($c,$zap);
        echo "<table>
        <tr>
            <th>Usługa</th>
            <th>Cennik</th>
        </tr>";
        while($row = mysqli_fetch_assoc($dane))
        {
            $usluga = $row['Usługa'];
            $cena = $row['Cena'];
            echo "<tr><td>$usluga</td><td>$cena </td></tr>";
        }echo "</table>";
        mysqli_close($c);
    ?>
    
</body>

</html>