

$(document).ready(function() {
    

            $('#header').click(function() {
                $('#header').css('background-color','#f0f')
            });
       		$('p').dblclick(function(){
       			$('p').css('font-size','30px')
       		});
       		$('li').hover(function(evvent){
       			$(this).css('color','ff0000');

       		},
       		function(evvent){
       			$(this).css('color','#fff');
       		}
       		);
       	


});