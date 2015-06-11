/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	$(".menu > li").click(function(e){
		switch(e.target.id){
			case "BTech":
				//change status & style menu
				$("#BTech").addClass("active");
				$("#MTech").removeClass("active");
				$("#MBA").removeClass("active");
				$("#MS").addClass("active");
				$("#PhD").removeClass("active");
				//display selected division, hide others
				$("div.BTech").fadeIn();
				$("div.MTech").css("display", "none");
				$("div.MBA").css("display", "none");
				$("div.MS").css("display", "none");
				$("div.PhD").css("display", "none");
			break;
			case "MTech":
				//change status & style menu
				$("#BTech").removeClass("active");
				$("#MTech").addClass("active");
				$("#MBA").removeClass("active");
				$("#MS").removeClass("active");
				$("#PhD").removeClass("active");
				//display selected division, hide others
				$("div.BTech").css("display", "none");
				$("div.MTech").fadeIn();
				$("div.MBA").css("display", "none");
				$("div.MS").css("display", "none");
				$("div.PhD").css("display", "none");
			break;
			case "MBA":
				//change status & style menu
				$("#BTech").removeClass("active");
				$("#MTech").removeClass("active");
				$("#MBA").addClass("active");
				$("#MS").removeClass("active");
				$("#PhD").removeClass("active");
				//display selected division, hide others
				$("div.BTech").css("display", "none");
				$("div.MTech").css("display", "none");
				$("div.MBA").fadeIn();
				$("div.MS").css("display", "none");
				$("div.PhD").css("display", "none");
			break;
			case "MS":
				//change status & style menu
				$("#BTech").removeClass("active");
				$("#MTech").removeClass("active");
				$("#MBA").removeClass("active");
				$("#MS").addClass("active");
				$("#PhD").removeClass("active");
				//display selected division, hide others
				$("div.BTech").css("display", "none");
				$("div.MTech").css("display", "none");
				$("div.MBA").css("display", "none");
				$("div.MS").fadeIn();
				$("div.PhD").css("display", "none");
			break;
			case "PhD":
				//change status & style menu
				$("#BTech").removeClass("active");
				$("#MTech").removeClass("active");
				$("#MBA").removeClass("active");
				$("#MS").removeClass("active");
				$("#PhD").addClass("active");
				//display selected division, hide others
				$("div.BTech").css("display", "none");
				$("div.MTech").css("display", "none");
				$("div.MBA").css("display", "none");
				$("div.MS").css("display", "none");
				$("div.PhD").fadeIn();
			break;
		}
		//alert(e.target.id);
		return false;
	});
});