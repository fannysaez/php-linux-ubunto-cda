<?php
//Logique
$firstName = "Fanny";
$lastName = "Saez";
$age = 40;
$books = [
    [
        "title" => "Le seigneur des anneaux",
        "genre" => "Fantastique",
        "edition" => ["pocket", "collector"],
        "image" => "https://cdn-www.konbini.com/files/2024/08/lotr-feat-1.jpg?width=3840&quality=75&format=webphttps://cdn-www.konbini.com/files/2024/08/lotr-feat-1.jpg?width=3840&quality=75&format=webp",
    ],
    [
        "title" => "Foudation",
        "genre" => "Science fiction",
        "edition" => ["classic"],
        "image" => "https://images-ext-1.discordapp.net/external/Rf62aytNsTfoQMefPv7V9mhhivqEypTdb4o3QMunSAY/%3Fq%3Dtbn%3AANd9GcQkhpbwo7hiB-WmYGNaCA9tc7PuOleG4J2KCHsNt0bv8A%26s%3D10/https/encrypted-tbn0.gstatic.com/images?format=webp",
    ],
]; 
$data = file_get_contents("https://hp-api.onrender.com/api/characters");
$dataDecoded = json_decode($data, associative:true);
var_dump($dataDecoded);
?>


<?php foreach ($books as $book) : ?>
    <img src="<?= $book["image"] ?>">
    <div class="card-book">
        <h2><?= $book["title"] ?></h2>
        <p>Genre : <?= $book['genre'] ?></p>
        <ul>
            <?php foreach ($book['edition'] as $edition) : ?>
                <li><?= $edition ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endforeach; ?>



<?php if ($age < 18): ?>
    <p>je suis mineur</p>
<?php else: ?>
    <p>je suis majeur</p>
<?php endif; ?>