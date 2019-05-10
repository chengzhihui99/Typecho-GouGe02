$(document).ready(function() {
	//// 显示&隐藏导航栏
	if((window.screen.width)>768){
		
		var p = 0,
			t = 0;
		
	$(window).scroll(function() {
		p = $(this).scrollTop();
		if(t < p) {
			//下滚
			$('.header').removeClass('sildeDown').addClass('sildeUp');
		} else {
			//上滚            
			$('.header').removeClass('sildeUp').addClass('sildeDown');
		}
		setTimeout(function() {
			t = p;
		}, 0)
	})
	}
	
	
	//返回顶部
	$(window).scroll(function(){
		var scroTop = $(window).scrollTop();
		if(scroTop>100){
			$('#backtotop').fadeIn(500);
		}else{
			$('#backtotop').fadeOut(500);
		}
	});

	$('#backtotop').click(function(){
		$("html,body").animate({scrollTop:0},"fast");
	});
	
	
	//侧边搜索
	$(window).scroll(function(){
		var scroTop = $(window).scrollTop();
		if(scroTop>100){
			$('#web_search').fadeIn(500);
		}else{
			$('#web_search').fadeOut(500);
		}
	});
	
	console.log('\n %c Typecho-Theme:GouGe02 %c https://www.qqzmly.com \n','color: #fadfa3; background: #030307; padding:5px 0;','background: #fadfa3; padding:5px 0;');

	//搜索框遮光罩
	$("#web_search").click(function(){
		$(".web_search_mask").fadeIn(500);
		$(".search_mask").fadeIn(500);
		//禁用滚动
		$(document.body).css("overflow-y","hidden");
	})
	
	$(".web_search_mask").click(function(){
		$(".web_search_mask").fadeOut(500);
		$(".search_mask").fadeOut(500);
		$(document.body).css("overflow-y","auto");
	})
	
})







