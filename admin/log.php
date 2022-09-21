<?php
include '../shared/head.php';
include '../functions/queries.php';


session_start();
if (isset($_POST["login"])) {
    $name = $_POST["userName"];
    $password = $_POST["password"];
    $select = "SELECT * FROM `admins` WHERE `name`='$name' AND `password`='$password'";
    $admin = mysqli_query($GLOBALS['connection'], $select);
    $row = mysqli_fetch_assoc($admin);
    $count = mysqli_num_rows($admin);
    if ($count == 1) {
        $_SESSION['admin'] = $name;
        $_SESSION['adminId'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        header("location: /backend-training/6th-task/admin/welcome.php ");
    } else {
        $select = "SELECT * FROM `lawyers` WHERE `name`='$name' AND `password`='$password'";
        $lawyer = mysqli_query($GLOBALS['connection'], $select);
        $row = mysqli_fetch_assoc($lawyer);
        $count = mysqli_num_rows($lawyer);
        if ($count == 1) {
            $_SESSION['admin'] = $name;
            $_SESSION['adminId'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            header("location: /backend-training/6th-task/admin/welcome.php ");
        }
    }
}
?>




<h1 class="text-white fs-1 text-center mt-5">Login</h1>
<div class="container text-white " style="height:100%;">
    <div class="card text-bg-secondary  mx-auto my-auto  " style="width:400px; height:300px;">
        <form method="POST">
            <div class="mb-3 mt-5 px-4  ">
                <input type="text" class="form-control " name="userName" placeholder="Name" id="exampleInputname1">
            </div><!-- input name -->
            <div class="mb-3 mt-4 px-4 ">
                <input type="password" class="  form-control " name="password" placeholder="Password" id=" exampleInputPassword1">
            </div><!-- input  password-->
            <div class="d-flex justify-content-center mx-auto">
                <button name="login" class="btn btn-lg btn-outline-dark"> Submit</button>
            </div>
        </form>
    </div>
</div>


<?php
include '../shared/footer.php';
?>