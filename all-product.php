<!-- pageinnetions -->
<?php
include 'connection.php';
$pagenum = isset($_GET['page']) ? $_GET['page'] : "1";
$perpage = isset($_POST['perpage']) ? $_POST['perpage'] : "12";
$index = ($pagenum - 1) * $perpage;

$tot = "select id from products where 1";
$totr = $con->query($tot);
$totalrecord = $totr->num_rows;
$totalpage = ceil($totalrecord / $perpage);
?>

<!-- pageinnetions -->
<!-------------------------------- connection with myadmin table------------------------- -->
<?php
require "connection.php";

$selectQuery = "select * from products where 1 limit $index,$perpage";
$result = $con->query($selectQuery);
?>
<!-------------------------------- connection with myadmin table------------------------- -->
<!-------------------------------- HTML Start------------------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>

<body>
    <!-------------------------------- navbar -------------------------------------------->



    <!-------------------------------- navbar -------------------------------------------->
    <!------------------------------------ main body -------------------------------------->

    <div class="row container-xxl mx-auto" id="topp">

        <div class="col-md-9">
            <h2 class="card-title heading"> Our Products:</h2>
            <div class="container-xl mx-auto row row-cols-1 row-cols-md-4 g-4">
                <?php
                if ($result->num_rows) {
                    while ($res = $result->fetch_assoc()) {
                        
                ?>
                            <div class="col">
                                <div class="card h-100 shadow-lg">
                                    <div class="cardsimg">
                                        <img height="100px" src="productimg/<?= $res['images'] ?>" class="card-img-top" alt="Uploading">
                                    </div>
                                    <div class="card-body">

                                        <h5 class="card-title"><?= $res['name'] ?? "" ?></h5>
                                        <p class="card-text">Price:<?= $res['price'] ?? "" ?></p>
                                        <a  href=" product-details.php?id=<?= $res['id'] ?? "" ?>" class="btn">See Details</a>

                                    </div>
                                </div>
                            </div>

                <?php
                        }
                    }
                
                ?>
                
            </div>
            <!-- pageinnetions form -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="?page=1">Start</a>
                    </li>
                    <li class="page-item <?= ($pagenum <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $pagenum - 1; ?>">Previous</a>
                    </li>
                    <?php
                    for ($i = 1; $i <= $totalpage; $i++) {
                        if (abs($i - $pagenum) < 5) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    ?>
                    <li class="page-item <?= ($pagenum == $totalpage) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $pagenum + 1; ?>">Next</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $totalpage ?>">End</a>
                    </li>
                </ul>

            </nav>
            <!-- pagination end -->
        </div>
        <div class="col-md-1">
            
<select name="perpage" id="">
   
<option value="5">5</option>
<option value="10">10</option>
<option value="15">15</option>
</select>
        </div>
        <div class="col-md-2">
            <div class="sidebar-area">

                <div class="category-area">
                    <div class="sidebar-heading">
                        <h3> Category</h3>
                    </div>
                    <ul class="category-list">
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">Smart phone</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">Desktop</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">laptop</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">Networking</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">software</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">accessories</a></li>
                    </ul>
                </div>

                <div class="brand-area">
                    <div class="sidebar-heading">
                        <h3> Brand</h3>
                    </div>
                    <form action="" class="ms-4">
                        <input type="checkbox" name="brand[]" id="" value="hp"> HP <br>
                        <input type="checkbox" name="brand[]" id="" value="dell"> DELL <br>
                        <input type="checkbox" name="brand[]" id="" value="asus"> ASUS <br>
                        <input type="checkbox" name="brand[]" id="" value="samsung"> SAMSUNG <br>
                        <input type="checkbox" name="brand[]" id="" value="apple"> APPLE <br>
                        <input type="checkbox" name="brand[]" id="" value="toshiba"> TOSHIBA <br>
                    </form>
                </div>
                <div class="category-area">
                    <div class="sidebar-heading">
                        <h3> Price</h3>
                    </div>
                    <ul class="category-list">
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">$5000 - $10000</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">$10000 - $15000</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">$15000 - $20000</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">$20000 - $25000</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">$25000 - $30000</a></li>
                        <li><i class="fa-solid me-2 fa-caret-right"></i><a href="">$30000+</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <!----------------------------- main body -------------------------------------->

    <!-- Footer -->

    <!-- Footer -->




    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>