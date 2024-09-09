
<?php require'db.php';?>
<?php 
     $table="articles";
     $articles= afficher($table);
?>
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
    <main>
        <div class="image">
            <div class="contenu">
                <div class="center font-rubik-italic">
                    <h1 style="font-size: 54px;">Blog de voyage autour du monde</h1>
                    <h2 class="font-italic" style="font-size: 24px;">Voyager à traver le monde afin de découvrir votre passions !</h2>
                </div>
            </div>
        </div>
        <article class="articles pl-2">
            <h1 class="font-poppins text-muted" style="text-align: center;">Les derniers articles</h1>
            <div class="articles-content">
                <div class="article-list">
                    <?php foreach ($articles as $article) : ?>
                            <div class="article-item">
                                <div class="head">
                                    <a href="">
                                    <img src=""<?= $article['image'] ?>" alt="image article">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-poppins" style="font-size: 18px;"><?= $article['titre'] ?></h2>
                                    <p>
                                        <?php echo substr($article['contenu'], 0, 50) ?>...
                                    </p>
                                    <div class="footer">
                                        <a class="text-info" href="">
                                            Lire la suite...
                                        </a>
                                        <small class="float-right">  <i class="fas fa-hand-point-right pr-2 h5 text-success   "></i>
                                            <span class="text-danger"> Prix:<?= $article['prix'] ?> </span> PAYS:<span></span>
                                        </small>
                                    </div>
                                </div>
                             </div> 
                    <?php endforeach; ?>                     
                     </div>
                                    
                </div>
                <aside class="categorie-list">
                    <h4 class="text-muted font-poppins"> Rechercher par Pays</h4>
                                            <a href="#Bénin" class="btn btn-cat text-left form-control my-1">
                            <span class="font-rubik-italic font-size-12 d-flex " style="align-items: center;"><i class="fas fa-arrow-circle-right mr-1 "></i>
                             Bénin </span>
                        </a>
                                            <a href="#Italy" class="btn btn-cat text-left form-control my-1">
                            <span class="font-rubik-italic font-size-12 d-flex " style="align-items: center;"><i class="fas fa-arrow-circle-right mr-1 "></i>
                             Italy </span>
                        </a>
                </aside>
            </div>
        </article>
    </main>
    <?php require'footer.php';?>
    