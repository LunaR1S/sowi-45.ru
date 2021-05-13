$(document).ready(function(){
	$('.content_toggle').click(function(){
		$('.content_block').slideToggle(200);      
		return false;
	});
});


var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; // Месяца идут с 0, так что добавляем 1.
var yyyy = today.getFullYear();
if(dd < 10){
	dd='0' + dd
}
if(mm < 10){
	mm='0' + mm
}

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("date").setAttribute("min", today);

