<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/adminNavBar.php';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $row = searchById('admins', $id);
    if (isset($_POST["updateadmin"])) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        if ($row['name'] == $_SESSION['admin']) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $query = <<<term
            `name`='$name' , age =$age ,`address`='$address', phone =$phone , email ='$email' ,password=$password
            term;
        } else {
            $query = <<<term
            `name`='$name' , age =$age ,`address`='$address', phone =$phone 
            term;
        }

        // echo $query;
        updateQuery('admins', $id, $query);
        // header("location:/backend-training/5th-task/departments/view.php");
    }
}
?>
<div class="container">
    <div class="row">
        <div class="card bg-secondary text-white col-6 mx-auto mt-5">
            <div class="card-body">
                <h2>admins</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>" id="exampleInputname1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputphone1" class="form-label">age</label>
                        <input type="text" class="form-control" name="age" value="<?= $row['age'] ?>" id=" exampleInputphone1">
                    </div><!-- input  phone-->
                    <div class="mb-3">
                        <label for="exampleInputsalary1" class="form-label">address</label>
                        <input type="text" class="form-control" name="address" value="<?= $row['address'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->

                    <div class="mb-3">
                        <label for="exampleInputsalary1" class="form-label">phone</label>
                        <input type="number" class="form-control" name="phone" value="<?= $row['phone'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->
                    <?php if ($row['name'] == $_SESSION['admin']) { ?>
                        <div class="mb-3">
                            <label for="exampleInputsalary1" class="form-label">email</label>
                            <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>" id=" exampleInputsalary1">
                        </div><!-- input  salary-->

                        <div class="mb-3">
                            <label for="exampleInputsalary1" class="form-label">password</label>
                            <input type="text" class="form-control" name="password" value="<?= $row['password'] ?>" id=" exampleInputsalary1">
                        </div><!-- input  salary-->
                    <?php } ?>

                    <button name="updateadmin" class="btn btn-info">update admin</button>
                </form>
            </div><!-- card-body -->
        </div><!-- card #admins-->
    </div><!-- row -->
</div><!-- container -->

<?php
include '../shared/footer.php';
?>