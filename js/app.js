$(document).ready(function(){
	
	var form = document.getElementById('register-form');
	
	$('#register').click(function(event) {	
		if (form.checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
	    	form.classList.add('was-validated');

		}else{

	    	event.preventDefault();

			var $firstName   = $('#firstName').val(),
			    $lastName    = $('#lastName').val(),
			    $email       = $('#email').val(),
			    $phoneNumber = $('#phoneNumber').val(),
			    $password    = $('#password').val(),
			    $dateOfBirth = $('#dateOfBirth').val(),
			    $address     = $('#address').val();
			
			if(!(/^[a-zA-Z]+$/.test($firstName))){

				swal("Oops!", "first name must contain alphabetic character only. Ex: gabriel, Lynda,etc.", "error");

			}else if(!(/^[a-zA-Z]+$/.test($lastName))){

				swal("Oops!", "last name must contain alphabetic character only. Ex: Niyonsaba, Niyera,etc.", "error");
			
			}else if(!(/^[+]?[0-9]+$/.test($phoneNumber))){

				swal("Oops!", "telephone can not contain letters", "error");
			
			}else{
				//here we make an ajax call to the server and wait for the answer
				$.post(
					'http://localhost/VMS_GTBank/public/registerVisitor.php', 
					{
						firstName   : $firstName,
						lastName    : $lastName,
						email       : $email,
					    phoneNumber : $phoneNumber,
						password    : $password,
						dateOfBirth : $dateOfBirth,
						address     : $address
					}
					, function(data){
						console.log(data);
						$("#exampleModal").modal('hide');
						if(data.error || data.emailExist){
							swal("Cant register", "This email is already used by another account", "error").then(function(){
								$("#exampleModal").modal('show');
							});	
						}else{
							swal("Success", "Your account has been created successfully", "success").then(function(){
								window.location.href = "http://localhost/VMS_GTBank/public/visitorProfile.php";
							});
						}
					},

					'json'
				);
			}
		}
	});
})