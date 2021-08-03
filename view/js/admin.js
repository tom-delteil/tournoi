$(document).ready( function () {
    $('#utilisateur').DataTable({
//        "serverSide": true,
//           scrollY: 400,
        "ajax": "http://localhost:8888/CRM_MMA/model/api/getUser.php",
        "columns": [
            { "data": "Role" },
            { "data": "Nom" },
            { "data": "Prenom" },
            { "data": "Telephone" },
            { "data": "Email" },
            { "data": "Date de naissance" },
            { "data": "Poids" },
            { "data": "Sexe" },
            { "data": "Adresse" },
            { "data": "Code postal" },
            { "data": "Ville" }
        ]
    });
    
} );



