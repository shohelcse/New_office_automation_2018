$(document).ready(function(){
2
	$('a').click(function(e){
3
	e.preventDefault();
4
	$("#dynamic").load($(this).attr('href'));
5
	});
6
	});