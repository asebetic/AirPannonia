		$(document).ready(function() {

			var menu = "close";

			$('.menu-toggle').click(function() {

				if(menu == "close") {	
					$('.navbar').css('-webkit-transform', 'translate(0, 0');
					$('.navbar').css('-moz-transform', 'translate(0, 0');
					$('.navbar').css('transform', 'translate(0, 0');

				menu = "open";
			} else {
				$('.navbar').css('-webkit-transform', 'translate(-100%, 0');
				$('.navbar').css('-moz-transform', 'translate(-100%, 0');
				$('.navbar').css('transform', 'translate(-100%, 0');

				menu = "close";

			}
			});

		});