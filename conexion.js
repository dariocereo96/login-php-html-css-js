
formulario.onsubmit = async(e) => {

	e.preventDefault();

	const data = new FormData(formulario);

	await fetch('login.php', {
	   method: 'POST',
	   body: data
	})
	.then(resp => resp.json())
	.then(data => {
		if(data.status!='success')
		{
			alert(data.message);
		}
		else{
			alert("Bienvenido")
		}
	});
}
	