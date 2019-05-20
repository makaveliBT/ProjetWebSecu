
$("#sub").click(function(){
	alert(0);
	var data = <?php echo $_SESSION['loginn']; ?>;;
	$.post($("#myForm").attr("action"),data);
	clearInput();
});

$("#myForm").submit(function(){
return false;
});

function clearInput(){
	$("#myForm :input").each( function() {

		$(this).val('');
	})
};