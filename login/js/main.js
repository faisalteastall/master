
(function ($) {
    "use strict";


     /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    
$('.validate-form').on('submit',function(){
    event.preventDefault();
    var formdata=new FormData();
    var email=$('#email').val();
    var password=$('#password').val();
    var formdata = {
        'email': email,
        'password': password
};

     
    $.ajax({
        headers: {
            'access_token':'8f3a07f4b8575c447078a203ff97d21806384458f8cfb3e4def94773dfc6077f62588383408be7c2',     
                  
        },
        data:formdata,
        method:'post',
        url:'/utter/api/login/login',     

        success:function(res){
            if($.trim(res.status)=='true'){
          
            sessionStorage.setItem("user",JSON.stringify(res.user));
            sessionStorage.setItem("access_token",res.access_token);
            var path=window.location.origin+window.location.pathname;
                path=path.split('/login');
               var base_path=path[0];
               sessionStorage.setItem("base_path",JSON.stringify(base_path));
              window.location.href = base_path+"/admin/";
            }
        },


    })
     
})

})(jQuery);
