<?php
include '../shared/head.php';
// include '../functions/queries.php';
include '../shared/adminNavBar.php';


if (isset($_POST["addArticale"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $author = $_POST["author"];
    $imageName = time() . $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $path = "./uploads/" . $imageName;
    move_uploaded_file($tmpName, $path);

    $query = <<<term
    ( null , ' $title', '$description', '$author','$imageName',now(),now() )
    term;
    addQuery('articales', $query);
}
?>


<div class="container">
    <div class="row">
        <div class="card bg-secondary text-white col-6 mx-auto mt-5">
            <div class="card-body">
                <h2>Add Articale</h2>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">discription</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <div class="mb-3">
                        <label for="exampleInputtitle1" class="form-label">title</label>
                        <input type="file" class="form-control" name="image" id="exampleInputtitle1">
                    </div><!-- input name -->
                    <button name="addArticale" class="btn btn-primary">Add article</button>
                </form>
            </div><!-- card-body -->
        </div><!-- card #employees-->
    </div><!-- row -->
</div><!-- container -->





<?php
include '../shared/footer.php';
?>