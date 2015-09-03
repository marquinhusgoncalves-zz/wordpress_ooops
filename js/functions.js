$(document).ready(
	function() {
		$('.menu-principal-container ul li.menu-item-5 a').html('<i class="fa fa-facebook"></i>');
		$('.menu-principal-container ul li.menu-item-6 a').html('<i class="fa fa-twitter"></i>');
		$('.menu-principal-container ul li.menu-item-7 a').html('<i class="fa fa-flickr"></i>');
		$('.menu-principal-container ul li.menu-item-24 a').html('<i class="fa fa-youtube-play"></i>');
	}
);

$(document).ready(
	function() {
	$(".toggle i").click(function() {
		 var $this = $(this);
		 if ($this.hasClass("fa-bars")) {
				$this.removeClass("fa-bars").addClass("fa-times");
				return;
		 }
		 if ($this.hasClass("fa-times")) {
				$this.removeClass("fa-times").addClass("fa-bars");
				return;
			 }
		});
	});