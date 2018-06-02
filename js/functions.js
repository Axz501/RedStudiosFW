$(document).ready(function(){

$('#lista').change(function(){
	document.getElementById("fav").disabled = true;
	$('#imagenperro').hide();
	$('#cargando').show();
	var raza = this.value.split(" ");
	 $.ajax({
        type: 'POST', //tipo de request
        url: 'obtenerimg.php',
        dataType: 'text', // tipo de dato esperado en la respuesta(text, json, etc.)
        data: {// Parametros que se pasan en el request
            raza: raza[1]
        },
        success: function (data) { //en el success ponemos lo que queremos hacer cuando obtenemos la respuesta
		   var x = data.trim();
		   document.getElementById("imagenperro").setAttribute("class","img-thumbnail");
		   document.getElementById("imagenperro").setAttribute("src",x);
		   $('#cargando').hide();
		   $('#imagenperro').show();
		   document.getElementById("fav").disabled = false;
        }
		});
    
}); 

$('#cerrarsesion').click(function(){
	$.ajax({
        type: 'POST', //tipo de request
        url: 'obtenerimg.php',
        dataType: 'text', // tipo de dato esperado en la respuesta(text, json, etc.)
        data: {// Parametros que se pasan en el request
            cerrarsesion: true
        },
        success: function (data) {
			alert("Sesión Finalizada");
			window.location.replace('index.php');
		}
	});
});

$('#loginform').submit(function(e){
	e.preventDefault();
	document.getElementById("loginaviso").style.display = "none";
	document.getElementById("loginaviso").innerHTML = "Credenciales Inválidas";
	var correo = document.getElementById("loginci").value;
	var pass = document.getElementById("loginpass").value;
	if (correo!=="" && pass!==""){
		//var contrasenia = sha1(pass);
		var url = 'http://localhost/RedStudiosFW/usuario/login/'+correo;
		$.ajax({
        type: 'POST', //tipo de request
        url: url,
        data: {// Parametros que se pasan en el request
			loginpass : pass
        },
        success: function (data){
        	if(data.status=="si"){
				window.location.assign("/RedStudiosFW/usuario/listado");				
			}
			else{
				document.getElementById("loginaviso").style.display = "block";
				document.getElementById("loginaviso").innerHTML = "Credenciales Inválidas";
			}
        }
        //url: 'http://localhost/RedStudiosFW/usuario/invitado',
        // dataType: 'text', // tipo de dato esperado en la respuesta(text, json, etc.)
   //      

   //      success: function (data) { //en el success ponemos lo que queremos hacer cuando obtenemos la respuesta
			// 	//alert(data);
			// 	if(data==="si"){
			// 		alert("Sesión Iniciada");
			// 		location.reload(true);				
			// 	}
			// 	else{
			// 		alert ("Credenciales Inválidas");
			// 		document.getElementById("loginaviso").style.display = "block";
			// 	}
			// }
		});
	}
	if (correo==="" || pass===""){
		document.getElementById("loginaviso").style.display = "block";
		document.getElementById("loginaviso").innerHTML = "Hay Campos Vacíos";
	}
});

// $('#loginok').click(function(){
	
// });


$('#fav').click(function(){
	var img = document.getElementById("imagenperro");
	if (img.hasAttribute("src")){
		var imgsrc = $("#imagenperro").attr('src');
		$.ajax({
        type: 'POST', //tipo de request
        url: 'obtenerimg.php',
        dataType: 'text', // tipo de dato esperado en la respuesta(text, json, etc.)
        data: {// Parametros que se pasan en el request
            url: imgsrc
        },
        success: function (data) { //en el success ponemos lo que queremos hacer cuando obtenemos la respuesta
			alert ("Favorito Guardado");
			}
		});
	}

});

$('#cerrarmodal2').click(function(){
	document.getElementById("loginaviso").style.display = "none";
});

$('#cerrarmodal1').click(function(){
	document.getElementById("avisonombre").style.display = "none";
	document.getElementById("avisoapellido").style.display = "none"; 
	document.getElementById("avisonick").style.display = "none";
	document.getElementById("avisoedad").style.display = "none";
	document.getElementById("avisocontra").style.display = "none";
	document.getElementById("avisocontra2").style.display = "none";
	document.getElementById("avisocorreo").style.display = "none";
	$('#imagenregistrar').attr('src', "/RedStudiosFW/img/iconoUsuario.jpg");
	document.getElementById("elegirimagen").value = "";
});

$('#aceptarusuario').click(function(){
	document.getElementById("avisonombre").style.display = "none";
	document.getElementById("avisoapellido").style.display = "none"; 
	document.getElementById("avisonick").style.display = "none";
	document.getElementById("avisoedad").style.display = "none";
	document.getElementById("avisocontra").style.display = "none";
	document.getElementById("avisocontra2").style.display = "none";
	document.getElementById("avisocorreo").style.display = "none";
	if (document.getElementById("elegirimagen").value !==""){
		var img = document.getElementById("elegirimagen").value;
		}	
	var nombre = document.getElementById("username");
	var apellido = document.getElementById("surname");
	var ni = document.getElementById("Nick").value;
	var correo = document.getElementById("mail").value;
	var edad = document.getElementById("age");
	var contra = document.getElementById("password").value;
	var recontra = document.getElementById("password2").value;
	if (nombre.value!=="" && correo!=="" ){
		if (apellido.value!==""){
			if(ni!==""){
				if(edad.value!==""){
					if(contra!==""){
						if(recontra!==""){
							if (edad.value<18 || edad.value>99){
								alert("Edad Inválida");
							}
							else{
								if((ni.length)<4 || (contra.length)<6){
									alert("Nick y/o Contraseña Demasiados Cortos");
								}
								else{
									// var contrasenia = sha1(contra);
									// var vcontrasenia = sha1(recontra);
									if (contra !== recontra){
										alert("Las contraseñas no coinciden");
										document.getElementById("avisocontra2").style.display = "block";
										}
									else{
										var url = 'http://localhost/RedStudiosFW/usuario/nuevo/'+nombre.value+'/'+apellido.value+'/'+ni+'/'+edad.value+'/'+correo+'/'+img
										$.ajax({
										type: 'POST', //tipo de request
										url: url,
										//dataType: 'text', // tipo de dato esperado en la respuesta(text, json, etc.)
										data: {// Parametros que se pasan en el request
											pass: contra
										},
										success: function (data) { //en el success ponemos lo que queremos hacer cuando obtenemos la respuesta
											if (data.status=="no"){
												alert("Nick y/o Correo en uso");
											}
											if (data.status==="si"){
												alert("Registro Completo");
												window.location.reload(true);
											}
											
										}
										});
									}
								}
							}
						}
						else{
							alert("Hay campos vacíos");
						}
					}
					else{
						alert("Hay campos vacíos");
					}
				}
				else{
					alert("Hay campos vacíos");
				}
			}
			else{
				alert("Hay campos vacíos");
			}
		}
		else{
			alert("Hay campos vacíos");
		}
	}
	else{
		alert("Hay campos vacíos");
	}
	if (nombre.value==="")
		document.getElementById("avisonombre").style.display = "block";
	if (apellido.value==="")
		document.getElementById("avisoapellido").style.display = "block"; 
	if (ni==="")
		document.getElementById("avisonick").style.display = "block";
	if (edad.value==="")
		document.getElementById("avisoedad").style.display = "block";
	if (contra==="")
		document.getElementById("avisocontra").style.display = "block";
	if (recontra==="")
		document.getElementById("avisocontra2").style.display = "block";
	if (correo==="")
		document.getElementById("avisocorreo").style.display = "block";
});

$("#elegirimagen").change(function(){
    var x = document.getElementById("elegirimagen");
    if (x.files && x.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imagenregistrar').attr('src', e.target.result);
        };
        reader.readAsDataURL(x.files[0]);
    }
    $("#formcrear").submit();
});


});







