<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>SMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container main">
        
        <?php
        include_once('navbar.php');
        
        switch ($_GET['page']){
            case 'SMS':
                include_once('sms.php');
                break;
            case 'kontakty':
                include_once('kontakty.php');
                break;
            case 'grupy':
                include_once('grupy.php');
                break;
            case 'szablony':
                include_once('szablony.php');
                break;
            case 'logout':
                include_once('logout.php');
                break;
            default:
                include_once('sms.php');
                break;
        }
        
        ?>
            
            
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>