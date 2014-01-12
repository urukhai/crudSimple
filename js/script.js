(function($) {
    var $updateMarcas = $('.update_marcas_btn'),
            $marcasPopUp = $('#pop_marcas'),
            $close = $('#close'),
            $inputNombre = $('#input_nombre'),
            $inputEmail = $('#input_email');

    $updateMarcas.on('click', function() {
        $marcasPopUp.addClass("show");
        var id = $(this).parent().siblings(".id_marca").text();
        $('#idMarca').val(id);
    });
    $close.on('click', function() {
        $marcasPopUp.removeClass("show");
    });
    $('.eliminar_marca').on('click',function(){
        var id = $(this).parent().siblings(".id_marca").text();
        var r = confirm("Desea eliminar producto con id " + id);
        if (r == true){

          $.post('Marca.php', { id_marca: id, accion: "eliminar" }, respuesta, 'json');
        }

    });

    $("#marcasForm").submit(function(event) {
        event.preventDefault();
        eventForm();
    });
    $("#marcasFormNuevo").submit(function(event) {
        event.preventDefault();

        eventForm1();
    });

})(jQuery);
function eventForm1() {
    
    var str = $("#marcasFormNuevo").serialize();
    $.post('Marca.php', str, respuesta, 'json');
}
function eventForm() {
    if($("#nombreMarcaActualizar").val() != ''){        
        var str = $("#marcasForm").serialize();
        $.post('Marca.php', str, respuesta, 'json');
    }else{
        alert ("falta nombre")
    }
}
function respuesta(r){
    console.log(r);
}