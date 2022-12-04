window.onload = function(){

	const urlParams = new URLSearchParams(window.location.search);
	const pageType = urlParams.get('pagetype');

	const serverMessage = urlParams.get('ServerMessage');

	if(pageType == "signin"){

		document.getElementById('signupbox').classList.remove('is-active');
		document.getElementById('signinbox').classList.add('is-active');
	
	
	}else if(pageType == "signup"){

		document.getElementById('signinbox').classList.remove('is-active');
		document.getElementById('signupbox').classList.add('is-active');
	}

	if(serverMessage == "AlreadyExistEmail"){

		document.getElementById("ServerMessage").style.display = 'block';
		document.getElementById("serverMessageHolder").innerHTML = "This email address is already registered!";
		$("#ServerMessage").delay(6000).slideUp("slow")
	}
	

	
}

const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
