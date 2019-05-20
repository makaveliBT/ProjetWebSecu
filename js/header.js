
;(function () {
	/*document.getElementById("produfdsitButton").onclick = function (){
		var url = "controllers/produit.php"; // the script where you handle the form input.
		var nomModel = document.getElementById('nomModel').value;//$("#nomtype").val();
		$.post(url, { nomModel: nomModel },
		function(data) {
			alert('test');
		});
	}*/
	
	onDisconnect = function (){
		var url = "home";
		
		var form = document.createElement("form");
		form.setAttribute("method", "post");
		form.setAttribute("action", url);
		
		var hiddenField = document.createElement("input");
		hiddenField.setAttribute("type", "hidden");
		hiddenField.setAttribute("name", "disconnected");
		hiddenField.setAttribute("value", "disconnected");

		form.appendChild(hiddenField);

		document.body.appendChild(form);
		form.submit();
	};
}());