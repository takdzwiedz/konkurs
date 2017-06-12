$(function(){
    
//    alert ('WOW');
    
    $('#example-email-input').blur(function(){

//        alert ('WOW');

        if($(this).val().length > 1){

            $.ajax({

                url:'check_email.php?mail='+$(this).val(),

                success: function(s){

                    if(s==='Y'){
                        $('#mailSpan').html('This e-mail already exists').css('color','red');
                    } 
                    else {
                        $('#mailSpan').html('e-mail OK!').css('color','green');
                    }
                },

                error:function(e){

                    alert('Connection error');

                }

            });

        }

    });
    
});
