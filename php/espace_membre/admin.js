$(document).ready( function () {
    $('#utilisateur').DataTable({
//        "serverSide": true,
        "ajax": "http://localhost:8888/tournoi/php/api/getUser.php",
        "columns": [
            { "data": "Nom" },
            { "data": "Role" }
        ]
    });
} );

