$(document).ready(function () {
    var filiere = $("#filiere");
    $.ajax({
        url: 'controller/gestionclasses.php',
        data: {op: ''},
        type: 'POST',
        success: function (data, textStatus, jqXHR) {
            /*var option = '<option selected>Choisi une filiere</option>';
                option += '<option value="' + data[i].abr + '">' + data[i].abr + '</option>';
            for (var i = 0; i < data.length; i++) {
                
            }
            filiere.html(option);*/
            remplir(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });
        $("#myform").submit(function (event) {
            event.preventDefault();
        
            
            
            $.ajax({
                url: 'controller/gestionclasses.php',
                data: {op: 'select', IdFiliere: filiere.val()},
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    remplir(data);
                    
                    
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                }
            });
        });
        
    
     function remplir(data) {
        var contenu = $('#table-content');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><th scope="row">' + data[i].id + '</th>';
            ligne += '<td>' + data[i].code + '</td>';
            ligne += '<td>' + data[i].IdFiliere + '</td></tr>';
            
        }
        contenu.html(ligne);
    }
});