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
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path>
                        </svg>
                        <!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown">
                                    <label>
                                        <select class="dataTable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                        entries per page
                                    </label>
                                </div>
                                <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                            </div>
                            <div class="dataTable-container">
                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                    <tr>
                                        <th data-sortable="" style="width: 19.5983%;"><a href="#" class="dataTable-sorter">Name</a></th>
                                        <th data-sortable="" style="width: 28.9714%;"><a href="#" class="dataTable-sorter">Position</a></th>
                                        <th data-sortable="" style="width: 15.5813%;"><a href="#" class="dataTable-sorter">Office</a></th>
                                        <th data-sortable="" style="width: 9.19051%;"><a href="#" class="dataTable-sorter">Age</a></th>
                                        <th data-sortable="" style="width: 15.2161%;"><a href="#" class="dataTable-sorter">Start date</a></th>
                                        <th data-sortable="" style="width: 11.4425%;"><a href="#" class="dataTable-sorter">Salary</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
        <?php include_once "./include/footer.php"?>
    </div>
</div>
<?php include_once "./include/js.php"?>
</body>
</html>