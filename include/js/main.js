$(function(){

//visual
$(".visual .slideUl").slick({
	autoplay: true,
	autoplaySpeed: 5000,
	slidesToShow: 1,
	slidesToScroll: 1,
	speed: 1000,
	arrows: false,
	dots: true,
});

//youtubeBox
$(".youtubeBox ul").slick({
	autoplay: true,
	autoplaySpeed: 5000,
	slidesToShow: 5,
	slidesToScroll: 1,
	speed: 1000,
	arrows: false,
	dots: true,
	responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				dots: true,
			}
		}	
	]
});

//recomBox
$(".recomBox .slideUl").slick({
	autoplay: true,
	autoplaySpeed: 5000,
	slidesToShow: 4,
	slidesToScroll: 1,
	speed: 1000,
	arrows: false,
	dots: true,
	responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}	
	]
});

//bookBox
$(".bookBox .slideUl").slick({
	autoplay: true,
	autoplaySpeed: 5000,
	slidesToShow: 4,
	slidesToScroll: 1,
	speed: 1000,
	arrows: false,
	dots: true,
	responsive: [
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}	
	]
});




})