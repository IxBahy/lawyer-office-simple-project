<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/userNavBar.php';
?>

<?php
foreach (selectAll('articales') as $article) {
    $path = "../articales/uploads/" . $article['image'];
    echo "
        <div class='container mt-5'>
            <div class='card bg-secondary mx-auto mt-5' style='width: 600px;'>
                <img src='$path' class='card-img-top' >
                <div class='card-body mt-2'>
                    <h5 class='card-title'> Title:" . $article['title'] . "</h5>
                    <p class='card-text'> " . $article['description'] . "</p>
                    <h6 class='card-title'> Author: " . $article['author'] . "</h6>
                </div>
            </div>
        </div>";
?>

<?php } ?>














<?php
include '../shared/footerServices.php';
?>