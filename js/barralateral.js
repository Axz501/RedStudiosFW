var mySidebar = document.getElementById("mySidebar");

var overlayBg = document.getElementById("myOverlay");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
document.getElementById("botonbuscar").onclick = function() {
    document.getElementById("formbuscar").submit();
}

$(document).ready(function(){

var mensaje = document.getElementById("mensaje");
if (mensaje.innerHTML.includes("Nuevo Email") || mensaje.innerHTML.includes("Contraseña actual")){
    mensaje.setAttribute("class","alert alert-danger");
}
$('#quitarimagen').click(function(){
    var quitarimagen = document.getElementById('quitarimagen');
    if (quitarimagen.checked === true){
        $('#imageneditar').attr('src', "/RedStudiosFW/img/iconoUsuario.jpg");
        document.getElementById("elegirimagen").value = "";
    }
});

$("#elegirimagen").change(function(){
    var x = document.getElementById("elegirimagen");
    if (x.files && x.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageneditar').attr('src', e.target.result);
        };
        reader.readAsDataURL(x.files[0]);
    }
    document.getElementById('quitarimagen').disabled = true;
});
    

});