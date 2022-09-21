<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/adminNavBar.php';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $row = searchById('lawyers', $id);
    if (isset($_POST["updateLawyer"])) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $salary = $_POST["salary"];
        $yearEX = $_POST["yearEX"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = <<<term
        `name`='$name' , age =$age ,`address`='$address', salary =$salary, yearEX =$yearEX, phone =$phone , email ='$email' ,password=$password
        term;
        // echo $query;
        updateQuery('lawyers', $id, $query);
        // header("location:/backend-training/5th-task/departments/view.php");
    }
}
?>
<div class="container">
    <div class="row">
        <div class="card bg-secondary text-white col-6 mx-auto mt-5">
            <div class="card-body">
                <h2>lawyers</h2>
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
                        <label for="exampleInputsalary1" class="form-label">salary</label>
                        <input type="number" class="form-control" name="salary" value="<?= $row['salary'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->

                    <div class="mb-3">
                        <label for="exampleInputsalary1" class="form-label">yearEX</label>
                        <input type="number" class="form-control" name="yearEX" value="<?= $row['yearEX'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->

                    <div class="mb-3">
                        <label for="exampleInputsalary1" class="form-label">phone</label>
                        <input type="number" class="form-control" name="phone" value="<?= $row['phone'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->

                    <div class="mb-3">
                        <label for="exampleInputsalary1" class="form-label">email</label>
                        <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->

                    <div class="mb-3">
                        <label for="exampleInputsalary1" class="form-label">password</label>
                        <input type="text" class="form-control" name="password" value="<?= $row['password'] ?>" id=" exampleInputsalary1">
                    </div><!-- input  salary-->


                    <button name="updateLawyer" class="btn btn-info">update lawyer</button>
                </form>
            </div><!-- card-body -->
        </div><!-- card #lawyers-->
    </div><!-- row -->
</div><!-- container -->

<?php
include '../shared/footer.php';
?>