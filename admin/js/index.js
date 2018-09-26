if(!sessionStorage.getItem('user')&&!sessionStorage.getItem('access_token')){
	
 var path=window.location.origin+window.location.pathname;
                path=path.split('/admin');
               var base_path=path[0];
	window.location.href = base_path+"/login/";
}
 var user= JSON.parse(sessionStorage.getItem('user'));
 $(".user-auth-img").attr("src",user.image_url);
$('#logout').on('click',function(){
                 sessionStorage.clear();
               var path=window.location.origin+window.location.pathname;
                path=path.split('/admin');
               var base_path=path[0];
                window.location.href = base_path+"/login/";
                });


function pagination(div,res,page,ajax='ajax')

{
   

	$("#"+div+"").append('<div class="clearfix"></div><ul class="pagination pagination-sm mt-10 mb-15 mr-15 pull-right"><li class=" disabled first"> <a href="#" id="first">First</a> </li><li class="disabled prev"> <a href="#" id="prev"><i class="fa fa-angle-left"></i></a> </li></ul> ')
                        var count=Math.ceil(res.count/4);
                        var li='';
                       var i;
                        for(i=0; i<count;i++)
                        {
                            if(i===3)
                            {
                                break;
                            }
                         
                         $("#"+div+" .pagination").append('<li id="li'+(page+i)+'"> <a onclick="'+ajax+'('+(page+i)+')" href="#" id="page'+(i+page)+'" >'+(i+page)+'</a> </li>');
                        }
                         
                         $("#"+div+" .pagination").append('<li class="disabled next"> <a href="#" id="next"><i class="fa fa-angle-right"></i></a> </li><li class=" disabled last"> <a href="#" id="last">Last</a> </li>');
                        console.log(count/2);
                         if(page<=count)                       
                         {
                            
                            $('#'+div+' #li'+(count)).nextAll('li').not('li:last').remove();
                           
                        }
                         if (!$('#'+div+' #next').length) {
                            $('#'+div+' .last').before('<li class="disabled next"> <a href="#" id="next"><i class="fa fa-angle-right"></i></a> </li>');
                                     }
                        $('#'+div+' #li'+(page)).addClass('active');
                         if(page>1){
                            $('#'+div+' .prev').removeClass('disabled');
                            $('#'+div+' .first').removeClass('disabled');
                            $('#'+div+' #first').attr("onclick",ajax+'('+1+')');
                            $('#'+div+' #prev').attr("onclick",ajax+'('+(page-1)+')');
                          
                        }
                        if(page<count){
                            $('#'+div+' .next').removeClass('disabled');
                            $('#'+div+' .last').removeClass('disabled');
                            $('#'+div+' #last').attr("onclick",ajax+'('+count+')' );
                            $('#'+div+' #next').attr("onclick",ajax+'('+(page+1)+')');
                            
                        }

}