<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/adminNavBar.php';

if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $row = searchById('admins', $id);
}

?>

<h1 class="text-center">Your Profile</h1>


<div class="container col-3">
    <div class="card  text-center bg-secondary mb-5 ">
        <h3 class="py-3">Admin Profile</h3>
        <img src="/backend-training/6th-task/admin/uploads/<?= $row['image'] ?>" style="height:400px;" alt="">
        <div class="card-body">
            <h1> Name : <?= $row['name'] ?> </h1>
            <h1> email : <?= $row['email'] ?> </h1>
        </div>
    </div>
</div>


<?php
include '../shared/footer.php';
?>