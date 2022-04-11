<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 5</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="d-flex flex-column justify-content-center align-items-center w-100">
            <h1>Formulaire Bootstrap :</h1>

            <div class="alert alert_success"></div>


            <form action="traitement.php" method="post" id="formajax" class="w-50">
                <div class="alert_name"></div>

                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="exampleInputName1">
                </div>

                <div class="alert_firstname"></div>

                <div class="mb-3">
                    <label for="exampleInputFirstname1" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputFirstname1" name="exampleInputFirstname1">
                </div>

                <div class="alert_mail"></div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse Mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="exampleInputEmail1">
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div id="var_dump">Voir la console après le submit pour voir le tableau</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="ajax.js"></script>
    </body>
</html>