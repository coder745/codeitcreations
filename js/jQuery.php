<script type="text/javascript">
//<![CDATA[                       
$(document).ready(function(){
	
	$('#plus').click(function() {
		$('#morePortfolio').slideToggle('slow', function() {
		});
	});
	
	$('#imgCont a').lightBox({
		imageLoading:	'images/lightbox/lightbox-ico-loading.gif',
		imageBtnPrev:	'images/lightbox/lightbox-btn-prev.gif',
		imageBtnNext:	'images/lightbox/lightbox-btn-next.gif',
		imageBtnClose:	'images/lightbox/lightbox-btn-close.gif',
		imageBlank:		'images/lightbox/lightbox-blank.gif',
		fixednavigation:	true	
	});
	
	$('#imgCont2 a').lightBox({
		imageLoading:	'images/lightbox/lightbox-ico-loading.gif',
		imageBtnPrev:	'images/lightbox/lightbox-btn-prev.gif',
		imageBtnNext:	'images/lightbox/lightbox-btn-next.gif',
		imageBtnClose:	'images/lightbox/lightbox-btn-close.gif',
		imageBlank:		'images/lightbox/lightbox-blank.gif',
		fixednavigation:	true	
	});
	
	/* Smooth Scrolling */
	$('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
    
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 1000);   
                return false;
            } 
        }  
    });
    
      //old:
    $(".sdfd").hover(function() {
		var hoverText = $(this).attr("title");
		$var = 'test';
		$("hsdaft").append($var);
    });

/*
	//Top section text additions:
    $(".section.top .sub.struct").mouseenter(function() {
          $('h1.struct span').fadeIn('900'); 
    });
     $(".section.top .sub.struct").mouseleave(function() {
          $('h1.struct span').fadeOut('900'); 
    });
    
    $(".section.top .sub.process").mouseenter(function() {
          $('h1.process span').fadeIn('900'); 
    });
     $(".section.top .sub.process").mouseleave(function() {
          $('h1.process span').fadeOut('900'); 
    });
    
    $(".section.top .sub.wedo").mouseenter(function() {
          $('h1.wedo span').fadeIn('900'); 
    });
     $(".section.top .sub.wedo").mouseleave(function() {
          $('h1.wedo span').fadeOut('900'); 
    });
*/

}); 
//]]>
</script>  