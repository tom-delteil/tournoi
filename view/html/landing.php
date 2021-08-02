<?php
   require_once 'checkSession.php';
   require_once 'config.php';
   
   $email = $_SESSION['user'];
   $check = $bdd->prepare('SELECT * FROM utilisateur WHERE mail = ?;');
   $check->execute(array($email));
   $data = $check->fetch();
   $row = $check->rowCount();
//   print_r($data);
?>
<!doctotype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Mon compte</title>
    </head>
    <body>
        <header></header>
        <main>
            <div class="container-fluid mt-5">
                <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
                <a href="deconnexion.php" class="btn btn-primary my-3">Déconnexion</a>
                <div class=" align-items-start col-2">
                    <h3>Mes informations</h3>
                    <form class="row g-3 needs-validation">
                        <h4>Nom</h4>
                        <p><?php echo $data['name'] ?></p>
                        <h4>Prénom</h4>
                        <p><?php echo $data['firstname'] ?></p>
                        <h4>Téléphone</h4>
                        <p><?php echo $data['phone'] ?></p>
                        <h4>Email</h4>
                        <p><?php echo $data['mail'] ?></p>
                        <h4>Date de naissance</h4>
                        <p><?php echo $data['birthday'] ?></p>
                        <h4>Poids</h4>
                        <p><?php echo $data['weight'] ?></p>
                        <h4>Adresse</h4>
                        <p><?php echo $data['address'] ?></p>
                        <h4>Code Postale</h4>
                        <p><?php echo $data['postal code'] ?></p>
                        <h4>Ville</h4>
                        <p><?php echo $data['town'] ?></p>
                    </form>
                </div>
                <?php
                if (isset($data[0])) {
                    echo '<a href="adhesion.php" class="btn btn-primary my-3">Modifiez mes informations</a>';
                } else {
                    echo '<a href="adhesion.php" class="btn btn-primary my-3">Devenir adhérent</a>';
                }
                ?>
            </div>
        </main>
    </body>
</html>
