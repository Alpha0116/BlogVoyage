<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Formationfullstack/POO/BlogVoyage//css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <title>Inscription</title>
    <style>
    body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    main.form-contenant {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(./images/logo\ \(1\).jpg) no-repeat fixed center;
    background-size: cover;
}
    .font-rubik-italic {
    font-family: "Rubik Italic", cursive;
    }
    .form-contenu{
        width: 450px;
        height: 620px;
        margin: 80px 300px;
        background-color: #fff;
    }
    .text-center {
        text-align: center !important;
    }
    label {
    display: inline-block;
    margin-bottom: .5rem;
    margin-left: 20px;
    }
    .form-control {
    display: block;
    width: 90%;
    margin: auto;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
    .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
    }
    .form-contenu.font-poppins{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-start;
    }
    .font-rubik-italic {
    font-family: "Rubik Italic", cursive;
    }
    .form-group {
    margin-bottom: 1rem;
    }
    input{
        margin-left: 300px;
        margin-top: 10px;
        height: 30px;

    }
    </style>
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
    <main class="form-contenant">
        <div class="form-contenu">
            <h1 class="text-center font-rubik-italic">Enrégistrement</h1>
            <span style="color: red;"></span>
            <span style="color: red;"></span>
            <form action="http://localhost/Formationfullstack/POO/BlogVoyage/index.php?controleur=utilisateur&action=stockerUser" method="post" class="font-poppins">
                <div class="form-group">
                    <label for="nom" class="font-rubik-italic">Nom: </label>
                    <input type="text" name="nom" id="nom" class="form-control font-rubik-italic" placeholder="Veuillez entrer votre nom !!"> 
                    <span style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="prenom" class="font-rubik-italic">Prenom: </label>
                    <input type="text" name="prenom" id="prenom" class="form-control font-rubik-italic" placeholder="Veuillez entrer votre prenom !!"> 
                    <span style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="email" class="font-rubik-italic">Email: </label>
                    <input type="text" name="email" id="email" class="form-control font-rubik-italic" placeholder="Veuillez entrer votre email !!"> 
                    <span style="color: red;"></span>
                </div>
                <div class="form-group font-rubik-italic">
                    <label for="password">Mot de passe: </label>
                    <input type="password" name="password" id="password" class="form-control font-rubik-italic" placeholder="Votre mot de passe !!"> 
                    <span style="color: red;"></span>
                </div>
                <div class="form-group font-rubik-italic">
                    <label for="password">Confirm mot de passe: </label>
                    <input type="password" name="Confirmpassword" id="password" class="form-control font-rubik-italic" placeholder="Confirmez votre mot de passe !!"> 
                    <span style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="photo" class="font-rubik-italic">Photo: </label>
                    <input type="file" name="photo" id="photo" class="form-control font-rubik-italic" placeholder=""> 
                    <span style="color: red;"></span>
                </div>

                <input type="submit" name="submit" id="btn-submit" class="btn btn-outline-dark ml-auto font-rubik-italic" value="S'enrégistrer">
            </form>
        </div>
    </main>
</body>
</html>