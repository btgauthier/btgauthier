
			$(function() {
				prettyPrint();
			});

			$(function() {
	
				$('#carousel').carouFredSel({
					prev: '#prev',
					next: '#next',
					auto: {
						button: '#play',
						progress: '#timer',
						pauseOnEvent: 'resume'
					},
					scroll: {
						//fx: 'fade',  // uncomment to fade instead of scroll
        				duration: 700 //The duration of the slide scroll animation				
					}
				});
				$('#wrapper').hover(function() {
					$('#navi').stop().animate({
						bottom: 0
					});
				}, function() {
					$('#navi').stop().animate({
						bottom: -60
					});
				});
			});
			

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-5722599-10']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
			
			$(function() {
				$("#c-cur-down").click(function() {
					_gaq.push(["_trackPageview", "/current/download.html"]);
				});
				$("#c-cur-open").click(function() {
					_gaq.push(["_trackPageview", "/current/open.html"]);
				});
			});
			
			
			

			
			
			
			
			
			
			
