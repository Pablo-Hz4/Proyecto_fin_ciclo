$("document").ready(function(){

    $("#fav").click(function(){
		  console.log($("#idPeli").text());
		  let id = $("#idPeli").text();

		$.ajax({
			url: "/queveo/anadirFav",
			encoding: "UTF-8",
			type: "POST",
			data: { id: id },
			complete: function () {
					location.reload();
			},
			error: function () {
					alert('Se produjo un error');
			}
		});

		

    })
})
