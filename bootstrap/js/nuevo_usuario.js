$("document").ready(function(){

    $("#enviar").click(function(){
		
		let usuario= $("#usuario").val();
		let email= $("#email").val();
		let pass= $("#pass").val();
		let rol="1";

		if(!validarUsuario(usuario)){alert ("El usuario no es valido")};
		if(!validarMail(email)){alert ("El correo no es válido")};

		//if(validarUsuario(usuario) && validarMail(email)){altaUsuario(usuario, email, pass)};


		// $.ajax({
        //     url: "NuevoUsuarioController/add_usuario",
        //     encoding: "UTF-8",
        //     type: "POST",
        //     data: {usuario: usuario, email: email, pass: pass},

        //     success: function () {
		// 		//window.location.replace("admin/index_admin");  // para hacer redirecciones desde js
        //     },
        //     error: function () {
        //         alert('Se produjo un error');
        //     }
        // });
		

    })



	function validarUsuario(usuario){
		let re = new RegExp ("^[a-zA-Z]+[ a-zA-Z]*$");      //Caracteres de la a a la z minúscula y mayúsucula y opción de poner nombre compuesto
    	let ok= re.test(usuario);
		if (!ok){
			console.log ("falla nombre y apellidos");
			return false;
		}
		else {console.log ("Guay nombre y apellidos");}
		return true;   

	}

	function validarMail (email){

		let re = new RegExp ("^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]+$");   // caracteres entre la a y la z mayúscula o minúsucula, entre el 0 y el 9 o _ , seguido de @, seguido de caracteres entre la a y la z mayúsucula o minúsucula, seguido de un . seguido de caracteres entre la a y la z
		let ok= re.test(email);
	
		if (!ok){
			console.log ("falla email");
			return false;
		}
		else {console.log ("Guay email");}
		return true;
	
	}


})
