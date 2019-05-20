
;(function () {
	document.getElementById("submitFormData").onclick = function (){
		var url = "controllers/submit.php"; // the script where you handle the form input.
		var nomtype = document.getElementById('idTypeName').value;//$("#nomtype").val();
		$.post(url, { nomtype: nomtype },
		function(data) {
			$('#results').html(data);
			$('#myForm')[0].reset();
		});
	}
	
}());