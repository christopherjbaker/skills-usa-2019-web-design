$(document).ready(function() {
    var hamburger = $('.menu__icon');
    hamburger.click(function() {
       hamburger.toggleClass('active');
       return false;
    });
    $('.menu__icon').bind('click', function(){
        if($('.menu__icon').hasClass('active')){
            $('.mobile-nav').css({
                'opacity':'1',
            });
            $('nav').css({
                'box-shadow':'none',
            });
        } else {
            $('.mobile-nav').css({
                'opacity':'0',
            });
            $('nav').css({
                'box-shadow':'rgba(0,0,0,0.270588) 0px 5px 5px',
            });
        }
    })
    $('.mobile-nav a').on('click',function(){
        $('.mobile-nav').css({
            'opacity':'0',
        });
        $('nav').css({
          'box-shadow':'rgba(0,0,0,0.270588) 0px 5px 5px',
      });
        $('.menu__icon').removeClass('active');
    })
       
  });
  
  $(document).ready(function(){
       function scrollNav() {
        $('nav a').click(function(){  
          //Toggle Class
          $(".active-link").removeClass("active-link");      
          $(this).closest('li').addClass("active-link");
          var theClass = $(this).attr("class");
          $('.'+theClass).parent('li').addClass('active-link');
          //Animate
          $('html, body').stop().animate({
              scrollTop: $( $(this).attr('href') ).offset().top - 160
          }, 400);
          return false;
        });
        $('.scrollTop a').scrollTop();
      }
      scrollNav();
  })
  
  $(document).scroll(function(){
    if($(this).scrollTop() > 355) {
      $('.top').css({
        'opacity':'1',
      });
    } else {
      $('.top').css({
        'opacity':'0',
      });
    }
  })