$(document).ready(function(){
	//add to cart script
	  $('.js-add2cart').on('submit', function(){
			$.ajax({
				url: '/ajax/add2Basket.php',
				type: "POST", 
				dataType: "html", 
				data: $(this).serialize(),  
				success: function() { 
					//alert('ok');
				},
				error: function() { 
					//alert('false');
				}
			 });
			 
			 return false;
		});
	
	  //item card slider
	  
	  setTimeout(function () {
			$('.slider-for-item-card').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: true,
			  asNavFor: '.slider-nav-item-card'
			});
			$('.slider-nav-item-card').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  asNavFor: '.slider-for-item-card',
			  dots: false,
			  centerMode: true,
			  focusOnSelect: true
			});
	  },500);
		  
		  $('.popular__slider__wrapper .next__item__card').on('click', function() {
			$('.slider-nav-item-card').slick('slickNext');
		  });
		  $('.popular__slider__wrapper .prev__item__card').on('click', function() {
			$('.slider-nav-item-card').slick('slickPrev');
		  });
	  
		  setTimeout(function () {
			$('.popular__slider').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  arrows: false,
			  responsive: [
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 1
					}
				  } 
				]
			});
		  },500);
	
		  $('.next__item__card').on('click', function() {
			$('.popular__slider').slick('slickNext');
		  });
		  $('.prev__item__card').on('click', function() {
			$('.popular__slider').slick('slickPrev');
		  });
	
		  $('.next__item__card').on('click', function() {
			$('.slider-for-item-card').slick('slickNext');
		  });
		  $('.prev__item__card').on('click', function() {
			$('.slider-for-item-card').slick('slickPrev');
		  });
	
	
		  $('#submit__lk__form').click(function(){
					$('#submit__lk__form').text("Данные обновлены");
					$.post(
						  '/personal/', 
						  $("#lk__form").serialize(), // отправляемые данные          
					  );
					  return false;
					});
	  // slider item card interesting
		setTimeout(function () {
			$('.interesting__slider').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
			  
				responsive: [
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 2
					}
				  } 
				]
			}); 
		},500);
		  $('.interesting__arrow__right').on('click', function() {
			$('.interesting__slider').slick('slickNext');
		  });
		  $('.interesting__arrow__left').on('click', function() {
			$('.interesting__slider').slick('slickPrev');
		  });
	
		  setTimeout(function () {
			$('.earlier__slider').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
			  
				responsive: [
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 2
					}
				  } 
				]
			}); 
		},500);
		  $('.earlier__arrow__right').on('click', function() {
			$('.earlier__slider').slick('slickNext');
		  });
		  $('.earlier__arrow__left').on('click', function() {
			$('.earlier__slider').slick('slickPrev');
		  });
	
	
		  $(document).on('click', '#showMore', function(){
			const page = $('#showMore').data('page');
			const sectionid = $('#showMore').data('sectionid');
			const type = $('#showMore').data('type');
			const color = $('#showMore').data('color');
			const size = $('#showMore').data('size');
			const sort = $('#showMore').data('sort');
			const url = '/ajax/items.php?PAGEN_1='+page+'&SECTION_ID='+sectionid+'&type='+type+'&color='+color+'&size='+size+'&sort='+sort;
			$('#showMore').remove();
			$.ajax({
			  url: url,
			}).then(function(result){
			  
			  $('.catalog__pages:last').after(result);      
			})
		  });
	
		  
		  // end of ready function
		});