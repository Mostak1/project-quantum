<?php
require __DIR__ . '/vendor/autoload.php';
$page = "Home";

?>
<!-- connetion  -->
<?php
use App\user;
use App\model\category;
use App\db;
$conn = db::connect();
?>
<!-------- Header start---- -->
        <?php
        require __DIR__ . '/components/header.php';
        ?>

<!-------- Header end---- -->
</head>
<body>
    <!-------- body start---- -->
   <!-- manubar -->
   <?php
        require __DIR__ . '/components/menubar.php';
        ?>
   
   <!-- manubar end -->

   <?php
echo testfunc();
$r= $conn->query("SELECT * FROM users WHERE 1");
echo "<h1>Total users $r->num_rows </h1>";
   ?>
   <hr>
   <?php
        
        $u= new user();
        echo $u->testme();


        echo Category::testing();
?>








<!-------- body end---- -->
<!-------- footer---- -->
    <?php
        require __DIR__ . '/components/header.php';
        $conn->close();
    ?>


