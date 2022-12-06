
$("document").ready(function(){
    $("#buscar").click(function(){
		  //alert($("#titulo").val());
		  let titulo = $("#titulo").val();
		//   $.redirect("/queveo/buscarPeli", {titulo: titulo}, "POST", "_blank");
		  location.href = "/queveo/buscarPeli";


		// $.ajax({
		// 	url: "/queveo/buscarPeli",
		// 	encoding: "UTF-8",
		// 	type: "POST",
		// 	data: { titulo: titulo },
		// 	complete: function () {
		// 			return;
		// 	},
		// 	error: function () {
		// 			alert('Se produjo un error');
		// 	}
		// });

		

    })

})



