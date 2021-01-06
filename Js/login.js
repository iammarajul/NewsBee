function validateForm() {
	// body...
	var username = $("#username").val();
	var password = $("#password").val();

	$.ajax({
		method: "POST",
		url: "API/login.php",
		data: { 
		'username': username, 
		'password': password
		}
		// beforeSend: function() {
		//   if(load_number) $('div.box').show();
		// },
		// complete: function(){
		//   if(load_number) $('div.box').hide();
		// },
    }).done(function( msg ) {

    	if(msg=="1"){
			
    		window.location = 'index.php';
    	}else {
			alert("Wrong username/password");
    	}

        

    });


	return false;
}