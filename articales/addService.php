<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/adminNavBar.php';


if (isset($_POST["addService"])) {
    $title = $_POST["title"];
    $adminID = $_SESSION['adminId'];
    $query = <<<term
    ( null , ' $title', $adminID )
    term;
    addQuery('services', $query);
}
?>


<div class="container">
    <div class="row">
        <div class="card bg-secondary text-white col-6 mx-auto mt-5">
            <div class="card-body">
                <h2>Add Service</h2>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <button name="addService" class="btn btn-primary">Add Service</button>
                </form>
            </div><!-- card-body -->
        </div><!-- card #employees-->
    </div><!-- row -->
</div><!-- container -->





<?php
include '../shared/footer.php';
?>