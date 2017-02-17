 $(document).ready(function() {

	 		function initialization(){
	 			$('#container').fullpage({
	               
	        anchors: ['1', '2', '3', '4', '5', '6'],
	        resize: false,
	        animateAnchor:false,
					scrollOverflow: true,
					autoScrolling:true,
					responsive: 900,
					fitSection: false,
					menu: '#menu',
					navigation:false,
					continuousVertical:false,
	                css3: true,
					onLeave: function(index, nextIndex, direction){
						console.log("onLeave--" + "index: " + index + " nextIndex: " + nextIndex + " direction: " +  direction);
					},
	       			afterLoad: function(anchorLink, index){
						console.log("afterLoad--" + "anchorLink: " + anchorLink + " index: " + index );
	       			},
					afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
						console.log("afterSlideLoad--" + "anchorLink: " + anchorLink + " index: " + index + " slideAnchor: " + slideAnchor + " slideIndex: " + slideIndex);
					},
	        		onSlideLeave: function(anchorLink, index, slideIndex, direction){
						console.log("onSlideLeave--" + "anchorLink: " + anchorLink + " index: " + index + " slideIndex: " + slideIndex + " direction: " + direction);
	        		},
	        		afterRender: function(){
						console.log("afterRender");
	        		},
	        		afterResize: function(){
						console.log("afterResize");
	        		}
	            });
	 		}

	 		//fullPage.js initialization
            initialization();


			$('#moveSectionUp').click(function(e){
				e.preventDefault();
				$.fn.fullpage.moveSectionUp();
			});

			$('#moveSectionDown').click(function(e){
				e.preventDefault();
				$.fn.fullpage.moveSectionDown();
			});

			$('#moveTo').click(function(e){
				e.preventDefault();
				$.fn.fullpage.moveTo(3, 2);
			});

			$('#moveSlideRight').click(function(e){
				e.preventDefault();
				$.fn.fullpage.moveSlideRight();
			});

			$('#moveSlideLeft').click(function(e){
				e.preventDefault();
				$.fn.fullpage.moveSlideLeft();
			});

			$('#setAutoScrollingFalse').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setAutoScrolling(false);
			});

			$('#setAutoScrollingTrue').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setAutoScrolling(true);
			});

			$('#setAllowScrollingFalse').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setAllowScrolling(false);
			});

			$('#setAllowScrollingTrue').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setAllowScrolling(true);
			});

			$('#setKeyboardScrollingFalse').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setKeyboardScrolling(false);
			});

			$('#setKeyboardScrollingTrue').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setKeyboardScrolling(true);
			});

			$('#setScrollingSpeed1500').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setScrollingSpeed(2500);
			});

			$('#setScrollingSpeed700').click(function(e){
				e.preventDefault();
				$.fn.fullpage.setScrollingSpeed(700);
			});

			$('#destroy').click(function(e){
				e.preventDefault();
				$.fn.fullpage.destroy('all');
			});

			$('#undestroy').click(function(e){
				e.preventDefault();

				//fullPage.js initialization
				initialization();
			});

			$('#reBuild').click(function(e){
				e.preventDefault();
				$.fn.fullpage.reBuild();
			});
        });