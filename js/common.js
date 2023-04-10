$(function() {

    //slideMenu
    $("#slidein_btn, #slidein_btn a").click(function(){
        if($("#slideMenu").hasClass("opened")){
            $(window).off('.noScroll');
            $("#slideMenu").stop(true, true).slideUp().removeClass("opened");
            $("#header").removeClass("fixed");
        } else {
            $(window).on('touchmove.noScroll', function(e) {
                e.preventDefault();
            });
            $("#slideMenu").stop(true, true).slideDown().addClass("opened");
            $("#header").addClass("fixed");
        }
    });

    $(".close").click(function(){
      $(window).off('.noScroll');
      $("#slideMenu").slideUp();
      $("#header").removeClass("fixed");
    });


    //tel
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0){
        $('.tel-link').each(function(){
            var str = $(this).text();
            $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
        });
    }

    //smoothscroll
    $('a[href^=#]').click(function() {
      var speed = 800;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });


  //accordion
  $(".faq .acbox h3").on("click", function() {
      $(this).next().slideToggle();
  });


  //tab
  $('.faq .navi ul li').click(function() {
    var index = $('.faq .navi ul li').index(this);
    $('.faq .content li').css({display: "none"});
    $('.faq .content li').eq(index).fadeIn();
    $('.faq .navi ul li').removeClass('orange');
    $(this).addClass('orange')
  });

  var showFlag = false;
  var topBtn = $('#page-top');
  topBtn.css('bottom', '-200px');
  var showFlag = false;

  $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
          if (showFlag == false) {
              showFlag = true;
              topBtn.stop().animate({'bottom' : '86px'}, 200);
          }
      } else {
          if (showFlag) {
              showFlag = false;
              topBtn.stop().animate({'bottom' : '-200px'}, 200);
          }
      }
  });

  topBtn.click(function () {
      $('body,html').animate({
          scrollTop: 0
      }, 2000);
      return false;
  });

});
