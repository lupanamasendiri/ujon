<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DASHBOARD ::.</title>
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <?php 
        $uri = $_SERVER['REQUEST_URI'];
        $url = parse_url($uri);
        $parse = parse_str('page', $url);
        print_r($parse);
        $page = $p;
        if(!empty($page)){
            echo '<link rel="stylesheet" href="pages/assets/css/global.css">';
        }else{
            echo '<link rel="stylesheet" href="pages/assets/css/all.css">';
        }
    ?>
</head>
<body>
    <?php 
    if(!empty($page)){
        include('navbar.php');
    }else{
        
    }
    