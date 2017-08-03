 //--------------- Ligtbox ---------------- 
	jQuery(document).ready(function($) {

$(".inline_colorbox").each(function(index, element) {
		
var isiPhone = /iphone/i.test(navigator.userAgent.toLowerCase());
var isiPad = /ipad/i.test(navigator.userAgent.toLowerCase());
var isAndroid = /android/i.test(navigator.userAgent.toLowerCase());
var isWindowsPhone = /windows phone/i.test(navigator.userAgent.toLowerCase());
var dwidth = $(this).data("width"); 

	if (isiPhone || isAndroid || isWindowsPhone )
			{
				 var dwidth = "80%"
				
			}
			else if (isiPad)
			{
				 var dwidth = "70%"
				
			}
			
			else 
			{
				 var dwidth = "50%"
				
			}
			   $(this).colorbox({inline:true, width:dwidth});
			
			});
			

$(".features_benefits li").bind("tapone",function(e) {
            $(this).children("abbr").show() 
			$(this).siblings().children("abbr").hide() 
					
            });
				
		$(".features_benefits li abbr").click(function(e) {
                   $(this).hide() 
				});

  		$(".iframe").colorbox({iframe:true, width:"70%", height:"70%"});
});