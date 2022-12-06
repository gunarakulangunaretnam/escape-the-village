window.onload = function(){

	const urlParams = new URLSearchParams(window.location.search);
	const serverMessage = urlParams.get('ServerMessage');

    if(serverMessage == "NameUpdated"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "Your name has been updated successfully!";
		document.getElementById("messageBoxSub").style.color = 'green';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

	if(serverMessage == "PasswordChanged"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "The password has been updated successfully!";
		document.getElementById("messageBoxSub").style.color = 'green';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

    if(serverMessage == "DatabaseError"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "Something went wrong!";
		document.getElementById("messageBoxSub").style.color = 'red';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

	if(serverMessage == "ComfirmPasswordDoesNotMatch"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "The password confirmation does not match!";
		document.getElementById("messageBoxSub").style.color = 'red';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

	if(serverMessage == "CurrentPasswordWrong"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "Your current password is wrong!";
		document.getElementById("messageBoxSub").style.color = 'red';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

	if(serverMessage == "PasswordLimitWrong"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "The password must contain at least 8 characters!!!";
		document.getElementById("messageBoxSub").style.color = 'red';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}
	

}