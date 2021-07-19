<?php $plantilla = "Plantilla"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./include/header.php"?>
</head>
<body class="sb-nav-fixed">

<?php include_once "./include/navbar.php"?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include_once "./include/sidenav.php"?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- incuir los elementos del la vista para cada cosa-->
            <section class="pt-5 pb-5" style="">
                 <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <div class="row blog">
                                    <div class="card-group">
                                          <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                  <h5 class="card-title">Proyect Tracker</h5>
                                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                            <div class="card-footer">
                                                <div class="btn btn-sm btn-primary float-right">
                                                    <a href="" class="btn btn-sm btn-primary float-right">Ver</a>
                                                </div> <!-- bottom-wrap.// -->
                                              <small class="text-muted">Last updated 3 mins ago</small>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                  <h5 class="card-title">Card title</h5>
                                                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                                </div>
                                            <div class="card-footer">
                                              <small class="text-muted">Last updated 3 mins ago</small>
                                            </div>
                                          </div>
                                          <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Card title</h5>
                                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            </div>
                                            <div class="card-footer">
                                              <small class="text-muted">Last updated 3 mins ago</small>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
<?php include_once "./include/footer.php"?>
    </div>
</div>

<?php include_once "./include/js.php"?>
</body>
</html>