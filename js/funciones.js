$(document).ready(function() {
    $("#aceptar").click(function() {
        upload_file();
    });
});

function upload_file() {

    validate_file();

    var file = $("#file").prop('files')[0];
    console.log(file);

    var formData = new FormData();
    formData.append('file', file);

    $.ajax({
            url: 'php/subir.php',
            type: 'POST',
            dataType: 'text',
            cache: false,
            processData: false,
            contentType: false,
            data: formData,
        })
        .done(function(data) {
            console.log("success");
            $("#actualizartabla").load('index.php');
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

}

function validate_file() {
    var archivo = document.getElementById('file');
    var tamanio = $("#file")[0].files[0].size;
    var name = $("#file")[0].files[0].name;
    console.log(tamanio);
    console.log(name);

    if (tamanio > 3000000) {
        alert("El archivo supera los 3MB");
        archivo.value = '';
        return false;
    } else {
        var ext = name.split('.').pop();
        switch (ext) {
            case 'pdf':
                break;
            default:
                alert("Error de archivo: La extensión es la incorrecta")
                archivo.value = '';
        }
    }
}

$(document).ready(function() {
	$("#cargar").load('cargartabla/cargartabla.php');
});

