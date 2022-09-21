<ul class="nav justify-content-center">
    <h4 class="text-primary pt-1">services : </h2>
        <?php foreach (selectAll('services') as $service) : ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=""><?= $service['title'] ?></a>
            </li>
        <?php endforeach; ?>

</ul>

<script src="/backend-training/5th-task/js/bootstrap.bundle.min.js"></script>
<script src="/backend-training/5th-task/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>

</html>