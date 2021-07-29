<?php
    require_once 'checkSession.php';
?>
<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="admin.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <title>admin</title>
    </head>
    <body>
        <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
        <button><a href="deconnexion.php">Déconnexion</a></button>
        <table id="utilisateur" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Rôle</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Télephone</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Poids</th>
                    <th>Sexe</th>
                    <th>Adresse</th>
                    <th>Code Postale</th>
                    <th>Ville</th>
                </tr>
            </thead>
        </table>
    </body>
</html>