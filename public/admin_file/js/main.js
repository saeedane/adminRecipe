(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();


 $('#ajaxSubmit').on('click',function(event){
            event.preventDefault();
         
            let url = jQuery("#form_data").attr("action");
           var formData = new FormData($("#form_data")[0]);


            $.ajax({
              url: jQuery("#form_data").attr("action"),
              type:"POST",
              enctype:"multipart/form-data",
              data:formData,
              cache:false,
              contentType: false,
              processData: false,
              beforeSend:function(){
                $(document).find('span.error-text').text('');
              },
              success:function(data){
                
               if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#form_data')[0].reset();
                    $('#msg_success').html(data.msg).show();
                    setTimeout(function(){$('#msg_success').fadeOut();}, 2000);

                }
              },
             
             });
  
        });


	

})();
