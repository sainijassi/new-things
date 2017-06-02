jQuery(document).ready( function( $ ) {
	var i =0;
	 $(".single_line").click(function (){
	 	
	 	
	 	$(".single_line").after("<div class='form-group'><lable class = 'text-area-lable-"+i+"'> single line text</lable><input type='text' class = 'form-control'></div>");
	 	
	 })

	
	  $(".password").click(function (){
	 	
	 	 if(i == 0){
	 	$(".password").after("<div class='form-group'><lable class = 'password-lable-"+i+"'> password</lable><input type='password' class = 'form-control'></div>");
	 	}
	 	i++;
	 })
	
} );"# my_new_repo" 
