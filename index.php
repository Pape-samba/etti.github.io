<?php

$pages=scandir('pages/');

if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){

        $page=$_GET['page'];

    }else{

        $page='home';

    }
$pages_functions=scandir('functions/');

if(in_array($page.'.func.php',$pages_functions)){

    include 'functions/'.$page.'.func.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--boutstrap-->
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  
   

    <!--feuille de style-->
    <link rel="stylesheet" href="css/style.css">
    <!--animation-->
    <title>ETTIG-SUARL</title>
</head>
<body>
     <?php include'includes/topbar.php';?>
     
     <div class="container-fluid">
     <?php include'pages/'.$page.'.php'; ?>
     </div>
     <?php include'includes/footer.php';?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        
            $('.menu-toggle').click(function () {
                $('nav').toggleClass('activ');
            })
        })
</script>
    <?php
    $pages_js=scandir('js/');
    if(in_array($page.'.func.js',$pages_js)){
        ?>
        <script src="js/<?=$page?>.func.js"></script>
        <?php
    }
    ?>
</body>
</html>