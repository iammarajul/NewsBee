

function validateForm() {
	// body...
	var username = $("#username").val();
	var password = $("#password").val();
	var email = $("#email").val();
	var name = $("#name").val();
	var country = $("#Country option:selected").val();

	$.ajax({
		method: "POST",
		url: "API/register.php",
		data: { 
		'username': username, 
		'password': password,
		'email': email,
		'name':name,
		'country': country
		}
		// beforeSend: function() {
		//   if(load_number) $('div.box').show();
		// },
		// complete: function(){
		//   if(load_number) $('div.box').hide();
		// },
    }).done(function( msg ) {

    	if(msg=="1"){
    		alert("user-name already exist");
    	}else if(msg=="2"){
    		alert("email already exist");
    	}else if(msg="3"){
    		alert("Registration successful!! Log In to continue");
    		location.href =  'login.php';
    	}else if(msg="4"){
    		alert("server problem");

    	}
    	else if(msg="4"){
    		alert("password should be at least 6 digit");
    	}

        console.log(msg);

    });


	return false;
}