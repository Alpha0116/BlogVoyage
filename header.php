<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Formationfullstack/POO/BlogVoyage/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <title>Voyage</title>

    <script>
        $(document).ready(function() {
            $("#dropdown01").click(function() {
                $(".dropdown-item").toggle();
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top ">
        <a class="navbar-brand font-rubik-italic" href="index.php"><img src="./images/logo (1).jpg" alt=""><i class="italic">Blog_Voyage</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> <i class="fas fa-home italic"></i><span class="italic">Accueil</span><span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown pr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte</a>
                    <div class="dropdown-menu dropdown-content" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt"></i> Se connecter</a>
                    <a class="dropdown-item" href="register.php"><i class="fas fa-user-plus"></i>S'inscrire</a>
                    </div>
               </li>
            </ul>
        </div>
    </nav>