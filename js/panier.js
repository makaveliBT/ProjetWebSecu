
;(function () {
	
	document.getElementById("buttonADD").onclick = function (){
		
		var url = "/controllers/addPanier.php";//"handlingData.php?variable1=truc&variable2=bidule"
		var xhr = getXMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
				var resultDiv = document.getElementById('idResultAddPanier').innerHTML = xhr.responseText;
			}
		};
		xhr.open("GET", url + "?nomProduit=" + document.getElementById('nomProduit').innerHTML , true);//+ "?qte=" + document.getElementById().innerHTML
		xhr.send(null);
	}
	
	
	function getXMLHttpRequest() {
		var xhr = null;
		
		if (window.XMLHttpRequest || window.ActiveXObject) {
			if (window.ActiveXObject) {
				try {
					xhr = new ActiveXObject("Msxml2.XMLHTTP");
				} catch(e) {
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}
			} else {
				xhr = new XMLHttpRequest(); 
			}
		} else {
			alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
			return null;
		}
		
		return xhr;
	}
}());