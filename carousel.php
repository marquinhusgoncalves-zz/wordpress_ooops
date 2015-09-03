			<div id = "carousel" class = "container carousel slide clearfix" data-ride = "carousel" style = "padding: 0">
				<!-- Indicators -->
				<ol class = "carousel-indicators">
					<li data-target = "#carousel" data-slide-to = "0" class = "active"></li>
					<li data-target = "#carousel" data-slide-to = "1"></li>
					<li data-target = "#carousel" data-slide-to = "2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class = "carousel-inner" role = "listbox">
					<div class = "item active">
						<div class = "carousel-inner-img" style = "background-image: url(<?php bloginfo('stylesheet_directory');?>/img/banner/01.jpg)" ></div>
					</div>
					<div class = "item">
						<div class = "carousel-inner-img" style = "background-image: url(<?php bloginfo('stylesheet_directory');?>/img/banner/01.jpg)" ></div>
					</div>
					<div class = "item">
						<div class = "carousel-inner-img" style = "background-image: url(<?php bloginfo('stylesheet_directory');?>/img/banner/01.jpg)" ></div>
					</div>
				</div>

				<!-- Controls -->
				<a class = "left carousel-control" href = "#carousel" role = "button" data-slide = "prev">
					<span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
					<span class = "sr-only">Previous</span>
				</a>
				<a class = "right carousel-control" href = "#carousel" role = "button" data-slide = "next">
					<span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
					<span class = "sr-only">Next</span>
				</a>
			</div>