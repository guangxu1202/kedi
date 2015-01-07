(function(){

	$(".hsub").hover(function(){
		$(this).find(".sub").show();
		$(this).addClass("hover");
	},
	function(){
		$(this).find(".sub").hide();
		$(this).removeClass("hover");
	})
	if ($(".i_newlist").length >0) {

		$(".i_newlist dt").click(function(){
			$(this).parents("li").find("dl").removeClass("open");
			$(this).parents("li").find("dt").removeClass("selected");

			$(this).addClass("selected");
			$(this).parent("dl").addClass("open");
			//if ($(this).attr("class")=="selected") {
			//	$(this).removeClass("selected");
			//	$(this).parent("dl").removeClass("open");
			//}else{
			//	$(this).addClass("selected");
			//	$(this).parent("dl").addClass("open");
			//};
		});
		$(".i_newlist p a").click(function(){
			$(this).parents("ul").find("li").removeClass("selected");
			$(this).parents("li").addClass("selected");
		})
	};

	if ($(".pro_mlist").length >0) {
		$(".pro_mlist dt").click(function(){
			var b=0;
			if ($(this).parent().attr("class")=="open") {b=2};
			$(this).parents(".prod").find("dl").removeClass("open");
			if (b!==2) {$(this).parent().addClass("open");};
			
		})
	};
})();


function ctab(e,n){
	$(e).parent().find("li").removeClass("selected");
	$(e).addClass("selected");
	for(var i=1; i<=$(".prod").length; i++){
		$(".pro_0"+i).css("display","none")
	}
	$(".pro_0"+n).css("display","block")
}
function setKey(n){
	var k = ")!@#$%^&*(".split("");
	var c = n.split("");
	var x="";
	for(var i = 0; i < c.length; i++){
		x=x+k[c[i]];
	}
	return x;
}
function checkUser(){
	var k = "*$&%#*@)";
	var s = ")!@#$%^&*(".split("");
	var uname = "dlkedi";
	var pw = $("#password").val();
	var un = $("#uname").val();
	if (uname !== un || k !== setKey(pw)) {
		alert("用户名或密码错误");
		return false;
	};
	$("#fomr2").submit();
}

