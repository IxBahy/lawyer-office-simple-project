<?php
include '../shared/head.php';
include '../functions/queries.php';



if (isset($_POST["Create"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = <<<term
    ( null , ' $name',$age, '$address',$phone, '$email',$password )
    term;
    addQuery('users', $query);
    header("location: /backend-training/6th-task/user/welcome.php ");
}
?>


<div class="container">
    <div class="row">
        <div class="card bg-secondary text-white col-6 mx-auto mt-5">
            <div class="card-body">
                <h2>Create User</h2>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">age</label>
                        <input type="number" class="form-control" name="age" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">address</label>
                        <input type="text" class="form-control" name="address" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">phone</label>
                        <input type="number" class="form-control" name="phone" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">email</label>
                        <input type="text" class="form-control" name="email" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">password</label>
                        <input type="number" class="form-control" name="password" id="exampleInputtitle1">
                    </div><!-- input name -->

                    <button name="Create" class="btn btn-primary">Create account</button>
                </form>
            </div><!-- card-body -->
        </div><!-- card #employees-->
    </div><!-- row -->
</div><!-- container -->





<?php
include '../shared/footer.php';
?>