  // ## ## ## ## ## ## ## ## ## ## ##  //
 // ## ## ## ##   JQUERY  ## ## ## ## //
// ## ## ## ## ## ## ## ## ## ## ##  //



// ## ## ## ##  PARALLAX  ## ## ## ## //

$(function() {
	$(window).load(function() {
		
	});
	$('body').addClass('pageLoaded');
});

$(function() {
	$('.abrir-ebook').click(function(){
		$('.modal-ebook-completo').addClass('aparece')
		$('html').css('overflow', 'hidden')
	})
	$('.fechar-ebook').click(function(){
		$('.modal-ebook-completo').removeClass('aparece')
		$('html').css('overflow-y', 'visible')
	})
})
$(function() {
	$('.abrir-mais').click(function(){
		$('.modal-mais-completo').addClass('aparece')
		$('html').css('overflow', 'hidden')
	})
	$('.fechar-mais').click(function(){
		$('.modal-mais-completo').removeClass('aparece')
		$('html').css('overflow-y', 'visible')
	})
})

$(function() {
	$('.abrir-especialista').click(function(){
		$('.modal-especialista-completo').addClass('aparece')
		$('html').css('overflow', 'hidden')
	})
	$('.fechar-especialista').click(function(){
		$('.modal-especialista-completo').removeClass('aparece')
		$('html').css('overflow-y', 'visible')
	})
})

$('.btn-mobile').click(function(e){
	$('body').addClass('nav-opened');
});
$('.btn-close').click(function(e){
	$('body').removeClass('nav-opened');
});
$('.overlay-body').click(function(e){
	$('body').removeClass('nav-opened');
//$('li.sub-nav-mobile').removeClass('active-sub');
});
$('.profile').click(function(e){
	e.preventDefault();
	if($('.profile.active').length){
		$('.profile').removeClass('active');
		$('.fa-sort-up').hide();
		$('.fa-sort-desc').show();
	}else{
		$('.profile').addClass('active');
		$('.fa-sort-up').show();
		$('.fa-sort-desc').hide();
	}
});

$('.optionSettings li').click(function(e){
	//e.preventDefault();
	e.stopPropagation();
});


// ## ## ## ##   NEXT SECTION  ## ## ## ## //

$('#nextSecBt').click(function(e){
	e.preventDefault();

	$('html,body').animate({
        scrollTop: $(this).next().next('#ourHistoryHome').offset().top - 0
    }, 1000);
});

//Click event to scroll to top
$('.arrowUp').click(function(){
	$('html, body').animate({scrollTop : 0},1500);
	return false;
});


/*$(window).scroll(function() {    
    var scrollSlider = $(window).scrollTop();

    if (scrollSlider >= 120) {
        $(".slider-main").addClass("fixed");
    } else {
        $(".slider-main").removeClass("fixed");
    }
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 120) {
        $("#navMain").addClass("fixed");
    } else {
        $("#navMain").removeClass("fixed");
    }
});*/
// ## ## ## ##   SLICK   ## ## ## ## //

$(document).ready(function(){
	$('.carrosel-tratamentos').slick({
		dots:false,
		arrows:true,
		infinite:false,
		slidesToShow:1,
		slidesToScroll:1,
		autoplay:true,
		autoplaySpeed:5000,
		responsive:[{breakpoint:480,settings:{dots:false,arrows:false,infinite:false,slidesToShow:1,slidesToScroll:1,autoplay:false}}]});});
$('.slider-main').slick({
      dots: false,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 5000,
      mobileFirst: true,
      responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: false
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false,
	      }
	    }
		]
});

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  arrows: false,
  focusOnSelect: true
});
	


// $('.slider-tratamentos').slick({
//      slidesToShow: 4,
//      slidesToScroll: 1,
// });
$('.slider-at').slick({
	  slidesToShow: 8,
  	  slidesToScroll: 1,
      dots: false,
      arrows: true,
      prevArrow: $('.prev-slide'),
      nextArrow: $('.next-slide'),
      autoplay: true,
      autoplaySpeed: 6000,
      mobileFirst: true,
      responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: false
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
});


  


$(document).ready(function(){
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');
		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});
$(document).ready(function(){
	$('ul.topic-tabs li').click(function(){
		var tab_id = $(this).attr('data-tab-topic');
		$('ul.topic-tabs li').removeClass('current-topic');
		$('.topic-content').removeClass('current-topic');
		$(this).addClass('current-topic');
		$("#"+tab_id).addClass('current-topic');
	});
});

$(document).ready(function(){
	$('div.tabs div').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('div.tabs div').removeClass('current');
		$('.tab-content').removeClass('current');
		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});
$(document).ready(function(){
	$('div.topic-tabs div').click(function(){
		var tab_id = $(this).attr('data-tab-topic');
		$('div.topic-tabs div').removeClass('current-topic');
		$('.topic-content').removeClass('current-topic');
		$(this).addClass('current-topic');
		$("#"+tab_id).addClass('current-topic');
	});
});



// $('ul.tabs .bg-alternate').click(function(e){
// 	e.preventDefault();
// 	if($('.bg-alternate').hasClass('active')){
// 		$('.bg-alternate').removeClass('active');
// 		$(this).addClass('active');
// 	}else{
// 		$('.bg-alternate').addClass('active');
// 		$(this).removeClass('active');
// 	}
// });
$('.tab-1').on('click', function() {
    $('ul.tabs').css({
    	'background-image' : local +'url(assets/img/person-bg.png)', 
    	'background-position' : '0 -100px'
    });
});
$('.tab-2').on('click', function() {
    $('ul.tabs').css({
    	'background-image' : local +'url(assets/img/person-bg.png)', 
    	'background-position' : '0 -772px'
    });
});
$('.tab-3').on('click', function() {
    $('ul.tabs').css({
    	'background-image' : local +'url(assets/img/person-bg.png)', 
    	'background-position' : '0 -1400px'
    });
});

$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
//$(".sub-nav-mobile").click(function(e) {
//	e.preventDefault();
//	$(".sub-nav-mobile").toggleClass("active-sub");
//});

$(document).ready(function() {
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();

        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
$(function(){ 
	$('.thumbs img').click(function(){ 
		var index = $( ".thumbs img" ).index( this ) + 1;
		$('.principal').attr('src', local +'/assets/img/0'+index+'grande.jpg')
	});
})

$(function(){
	$('.footer-fixo-mobile i.fa-phone').click(function(){ 
		$('.telefone-mobile-completo').addClass('aparecer-telefone')
	})
	$('.telefone-mobile-completo i.fa-times').click(function(){ 
		$('.telefone-mobile-completo').removeClass('aparecer-telefone')
	})
	$('.footer-fixo-mobile i.fa-envelope').click(function(){ 
		$('.news-mobile-completo').addClass('aparecer-news')
	})
	$('.news-mobile-completo i.fa-times').click(function(){ 
		$('.news-mobile-completo').removeClass('aparecer-news')
	})
})

$(function(){
	var x = $(window).width()
	if(x < 480){
  		$('.topic-tabs').slick({
	      dots: false,
	      arrows:false,      
	      infinite: false,
	      slidesToShow: 2,
	      slidesToScroll: 2,
	      autoplay: true,
	      autoplaySpeed: 5000
  		});


  		$('.tab-1').on('click', function() {
		    $('ul.tabs').css({
		    	'background-image' : local +'url(assets/img/person-bg.png)', 
		    	'background-position' : '0 -72px'
		    });
		});
		$('.tab-2').on('click', function() {
		    $('ul.tabs').css({
		    	'background-image' : local +'url(assets/img/person-bg.png)', 
		    	'background-position' : '0 -491px'
		    });
		});
		$('.tab-3').on('click', function() {
		    $('ul.tabs').css({
		    	'background-image' : local +'url(assets/img/person-bg.png)', 
		    	'background-position' : '0 -900px'
		    });
		});







	}
})

$(function(){
	var windowHeight = window.innerHeight;
	$('.dl-trigger').click(function(){ 


		$('.dl-menu').css('height', windowHeight);
		$('.dl-submenu').css('height', windowHeight);
			
		$('body').toggleClass('menu-mobile-ativo')
		$('.box-branco-mobile').toggleClass('bloco')
		$('.dl-menuwrapper .dl-menu').toggleClass('bloco-display')
	})

})
$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});



