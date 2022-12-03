window.onload = function(){

	const urlParams = new URLSearchParams(window.location.search);
	const pageType = urlParams.get('pagetype');

	if(pageType == "signin"){

		document.getElementById('signupbox').classList.remove('is-active');
		document.getElementById('signinbox').classList.add('is-active');
	
	
	}else if(pageType == "signup"){

		document.getElementById('signinbox').classList.remove('is-active');
		document.getElementById('signupbox').classList.add('is-active');
	}
	

	
}

const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
