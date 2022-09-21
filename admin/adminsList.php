<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/adminNavBar.php';


if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    deleteById('admins', $id);
    // header("location: /backend-training/6th-task/admins/adminsList.php");
}
?>



<div class="container mt-5">
    <table class="table table-secondary table-striped  mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">age</th>
                <th scope="col">address</th>
                <th scope="col">phone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (selectAll('admins') as $admin) { ?>
                <tr>
                    <th scope="row"><?= $admin['id'] ?></th>
                    <td><?= $admin['name'] ?></td>
                    <td><?= $admin['age'] ?></td>
                    <td><?= $admin['address'] ?></td>
                    <td><?= $admin['phone'] ?></td>
                    <td>
                        <div class="dropdown">
                            <i type="button" data-bs-toggle="dropdown" aria-expanded="false" class="fa-solid btn btn-light fa-ellipsis-vertical "></i>
                            <div class="dropdown-menu" style="min-width:50px ;">
                                <a class="dropdown-item text-primary" href="/backend-training/6th-task/admin/profile.php?show=<?= $admin['id'] ?>"><i class="fa-solid fa-user"></i></i></a>
                                <a class="dropdown-item text-primary" href="/backend-training/6th-task/admin/updateAdmin.php?edit=<?= $admin['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="dropdown-item text-danger" href="/backend-training/6th-task/admin/adminsList.php?delete=<?= $admin['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
                            </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>




<?php
include '../shared/footer.php';
?>