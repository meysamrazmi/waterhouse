$(function() {

	$(".scroll").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: ($($(this).attr('href')).offset().top)
		}, 700);
	});	
	
	$("ul.navigat li").click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: ($('#'+ $(this).attr('to-id')).offset().top)
		}, 1000);
	});
   

    
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 12, 2017 07:00:00").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
        
        // Get todays date and time
        var now = new Date().getTime();
        
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the result in the element with id="demo"
        /*document.getElementById("demo").innerHTML = days + "روز" + hours + "ساعت"+ minutes + "دقیقه" + seconds + "ثانیه";*/
        $('#demo .day div').html(days);
        $('#demo .hour div').html(hours);
        $('#demo .min div').html(minutes);
        $('#demo .sec div').html(seconds);
        
        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "انقضا";
        }
    }, 1000);
    
    /*
    * for adding multiple products to car at the same time
    * http://waterhouse.ir/cart/add/p382_a7o30
    */
    
    var mablagh = 0;
    
    $('#registration .kharid').append('<p class="mablagh">'+mablagh+'</p><a href="http://waterhouse.ir/cart/add/" class="add-all-to-cart">افزودن به سبد خرید</a>');
    
    $('#registration input').change(function(){
        var href = $('.add-all-to-cart').attr('href');
        if ($(this).is( ":checked" )) {
            if(href.indexOf('p382_a7o') > 0){
                $('.add-all-to-cart').attr('href', href +'-');
            }
            $('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href') +'p382_a7o'+ $(this).attr('value'));
            mablagh = mablagh + parseInt($(this).attr('mablagh'),10);
        }
        else{
            var j = href.indexOf('p382_a7o' + $(this).attr('value'));
            if(j > 0){
                if( href.indexOf('p382_a7o' + $(this).attr('value') + '-') > 0){
                    $('.add-all-to-cart').attr('href', href.substring(0, j) + href.substring(j + 11));
                }else{
                    $('.add-all-to-cart').attr('href', href.substring(0, j));			
                }
                if($('.add-all-to-cart').attr('href').slice(-1) == '-'){
                    $('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href').substring(0, $('.add-all-to-cart').attr('href').length - 1));				
                }
            }
            mablagh = mablagh - parseInt($(this).attr('mablagh'),10);
        }
        
        $('.mablagh').text(mablagh.toLocaleString());
    });
    $('.add-all-to-cart').click(function(e){
        e.preventDefault();
        window.location.href = $(this).attr('href') + "?destination=cart";
    });
    
    //when registration hit the top, we fix the header
    /*$(window).scroll(function(){
		var itemOffset = $('#registration').offset().top;
		var placeoffset = $('#place').offset().top;
        var scrollTop = $(window).scrollTop();
        if(scrollTop > itemOffset && scrollTop < (placeoffset - 120)){
            $('ul.navigat li:nth-child(6)').addClass('hover');
        }
        else{
            $('ul.navigat li:nth-child(6)').removeClass('hover');
		}
		if(scrollTop > (placeoffset - 120) && scrollTop < itemOffset  ){
			$('#registration:not(.crossed)').addClass('crossed');
		}
        else{
			$('#registration.crossed').removeClass('crossed');
		}
    });*/
    

    //for colorboxing the poster
    $('#section1 a.poster.view').colorbox({width:'auto',height:'100%',close:'close'});

    //tabs for timing plans
    $('#timing .tab1').click(function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('#timing .tab1-section').addClass('active');
            $('#timing .tab2').removeClass('active');
            $('#timing .tab2-section').removeClass('active');
        }
    });
    $('#timing .tab2').click(function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('#timing .tab2-section').addClass('active');
            $('#timing .tab1').removeClass('active');
            $('#timing .tab1-section').removeClass('active');
        }
    });


    //alert for registration
    /*$('.sabtenam:nth-child(3) a.linksabtenam').click(function(event){
        alert('ثبت نام در این بخش از تاریخ 7 آبان ماه فعال می شود');  
        event.preventDefault();
    });*/
});
