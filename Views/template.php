<!DOCTYPE html>
<html>
    <title>PHP MySQL MVC</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="Views/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        
        <legend class="header">
            <h3 class="pull text-success text-center">Students Management</h3>
            <hr>
        </legend>
        
        <?php
        include "Views/" . $data['page'] . ".php";
        ?>     
    </div>

</body>
</html>


