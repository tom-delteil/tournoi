<?php
    require_once '../../controller/checkSession.php';
?>
<!doctype html>
<html>
    <head>
        <script type="text/javascript" src="/CRM_MMA/node_modules/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/CRM_MMA/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="/CRM_MMA/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/CRM_MMA/node_modules/fullcalendar/main.min.js"></script>
        <script type="text/javascript" src="/CRM_MMA/view/js/admin.js"></script>
        <script type="text/javascript" src="/CRM_MMA/view/js/adminNavbar.js"></script>
        <script type="text/javascript" src="/CRM_MMA/view/js/adminCallendar.js"></script>        
        
        <link rel="stylesheet" href="/CRM_MMA/view/css/adminNavbar.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/CRM_MMA/lib/fullcalendar-5.9.0/lib/main.min.css">
        
        <title>admin</title>
    </head>
    <body>
        <div id="tab" class="tab">
          <button class="tablinks" onclick="opentab(event, 'adherent')">Adhérent</button>
          <button class="tablinks" onclick="opentab(event, 'evenement')">Évenement</button>
        </div>

        <div id="adherent" class="tabcontent">
         <div class="container-fluid mt-5">
            <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
            <a href="/CRM_MMA/controller/deconnexion.php" class="btn btn-primary my-3">Déconnexion</a>
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