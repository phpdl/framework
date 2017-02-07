$(function(){
	//切换主导航css高亮
	+function  (){
		//获取当前地址
		var turl = location.href;
		//获取nav下所有导航链接地址
		$("nav a").each(function () {
			var url = this.getAttribute("href");
			if(url.indexOf(turl)>=0){
				$(this).parent().siblings().find("a").removeClass("navnow");
				$(this).addClass("navnow");
			}
		})
	}();
}) 

 
 