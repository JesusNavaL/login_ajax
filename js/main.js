jQuery(document).on('submit','#formain',function(event){
	event.preventDefault();

	jQuery.ajax({
		url: "main_app/login.php",
        type: "POST",
        dataType: "json",
        data: $(this).serialize(),
        beforeSend: function(){
            $('.botonlog').val('Validando...');
        }
	})
	.done(function(respuesta){
        console.log(respuesta);
        if (!respuesta.error) {
        	location.href= 'main_app/pagp/'

        } else {
              $('.error').slideDown('slow');
              setTimeout(function(){
                 $('.error').slideUp('slow');
              },3000);
              $('.botonlog').val('Inisiar secion');
        }
	})
	.fail(function(resp){
        console.log(resp.responseText);
	})
	.always(function(){
		console.log("Complete");
	});
});