$(function(){

//댓글 JS
$(".replyDiv .replyTit").on("click",function(){
	$(".replyDiv").toggleClass("off");
	$(this).siblings(".reUl").stop().slideToggle(400);
});

$(".replyDiv .reUl .reLi .reBtn").on("click",function(){
	$(this).find("ul").stop().fadeToggle(400);
	$(this).closest(".reLi").siblings().find("ul").stop().fadeOut(400);
})

})