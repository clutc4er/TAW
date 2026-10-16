<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "islandia";

$conn = mysqli_connect($server, $user, $password, $database);
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
<h1 href="islandia.php">Zwiedzaj Islandie</h1>
    </header>
    <aside>
        <h3>Do zwiedzania</h3>
        
<ul>Wodospady</ul>
<?php 
        $conn = mysqli_connect($server, $user, $password, $database);

        $query = "SELECT nazwa FROM `obiekty` WHERE panstwo = 'Islandia' and idRodzaj = 10;";
        $result = mysqli_query($conn,$query);
        echo "<ol>";
for ($i = 0; $i < mysqli_num_rows($result); $i++){
    $dane = mysqli_fetch_array($result);

    echo "<li>" . $dane['nazwa'] . "<\li>";
}
echo "</ol>";
        ?>

        <ul>Siedliska zwierząt:</ul>
        <?php
$query1 = "SELECT nazwa FROM `obiekty` WHERE panstwo = 'Islandia' and idRodzaj = 14;";
$result1 = mysqli_query($conn,$query1);
echo "<ol>";

for ($i = 0; $i < mysqli_num_rows($result1); $i++){ 
$dane1 = mysqli_fetch_array($result1);
echo "<li>". $dane1['nazwa'] . "</li>";
}

echo "</ol>";
        ?>
        </aside>
    <main>

<h2>Galeria</h2>
<section>
    <form method="GET"><?php

$conn = mysqli_connect($server, $user, $password, $database);
$query2 = "SELECT idObiekt, plik, nazwa FROM `obiekty` WHERE panstwo = 'Islandia';";
$result2 = mysqli_query($conn,$query2);

for ($i = 0; $i < mysqli_num_rows($result2); $i++){

$dane2 = mysqli_fetch_array($result2);
echo "<a href='obiekty.php'><img src='$dane2[plik]' alt='$dane2[nazwa]' title='$dane2[nazwa]' class='miniatury'></a>";
}

?>
</form>

</section>

    </main>
    <footer><p>Autor: chatgpt, naprawde</p></footer>
    <img src="maskonur.jpg" title="lel">
</body>
</html>