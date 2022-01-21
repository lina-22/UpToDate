<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="./asset/bootstrap-5.1.3/css/bootstrap.css">
    <!-- CSS -->
    <link rel="stylesheet" href="asset/css/style.css">



    <title><?php echo $title; ?></title>
</head>
<body>
    <?php include "fragments/menu.php"; ?>
    <main class="min-vh-100 container-fluid" >
    <?php echo $content ; ?>
    </main>
    <?php include "fragments/footer.php"; ?>
    <!-- JS bootstrap -->
    <script src="./asset/bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
</body>
</html>