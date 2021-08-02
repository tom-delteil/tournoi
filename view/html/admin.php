<?php
    require_once 'checkSession.php';
?>
<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../lib/fullcalendar-5.9.0/lib/main.min.js"></script>
        <script type="text/javascript" src="admin.js"></script>
        <script type="text/javascript" src="adminNavbar.js"></script>
        <script type="text/javascript" src="adminCallendar.js"></script>
        
        
        <link rel="stylesheet" href="adminNavbar.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/fullcalendar-5.9.0/lib/main.min.css">
        
        <title>admin</title>
    </head>
    <body>
        <div class="tab">
          <button class="tablinks" onclick="opentab(event, 'adherent')">Adhérent</button>
          <button class="tablinks" onclick="opentab(event, 'evenement')">Évenement</button>
        </div>

        <div id="adherent" class="tabcontent">
         <div class="container-fluid mt-5">
            <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
            <a href="deconnexion.php" class="btn btn-primary my-3">Déconnexion</a>
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
        </div>
        </div>

        <div id="evenement" class="tabcontent">
           <div id='calendar'></div>
        </div>
    </body>
</html>