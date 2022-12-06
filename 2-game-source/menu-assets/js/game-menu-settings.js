window.onload = function(){

	const urlParams = new URLSearchParams(window.location.search);
	const serverMessage = urlParams.get('ServerMessage');

    if(serverMessage == "NameUpdated"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "Your name has been updated successfully!";
		document.getElementById("messageBoxSub").style.color = 'green';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

    if(serverMessage == "DatabaseError"){

		document.getElementById("messageBoxMain").style.display = 'block';
		document.getElementById("messageBoxSub").innerHTML = "Something went wrong!";
		document.getElementById("messageBoxSub").style.color = 'red';
        $("#messageBoxMain").delay(5000).slideUp("slow")
	
	}

}