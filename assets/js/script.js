  $(document).ready(function(){
    $('.slider').slider({
      indicators  : true,
      height      : 620
    });

    $('.slider#blogs_slider').slider({
      indicators  : true,
      height      : 500,
    });
  });

  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });

  $(document).ready(function(){
    $('.parallax').parallax();
  });
  
  $(function($){
    $(function(){

      $('.sidenav').sidenav();
      $('.parallax').parallax();

    }); // end of document ready
  });

  $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });

  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items             :1,
      margin            : 10,
      loop              :true,
      autoplay          :true,
      autoplayTimeout   :3000,
      autoplayHoverPause:true
    });
  });

  $(document).ready(function() {
    $('.dropdown-trigger').dropdown({
      constrainWidth : true,
      autoTrigger : true,
      alignment : 'right'
    });
  });

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

  $(document).ready(function(){
    $('.modal').modal({
      preventScrolling : false
    });
  });

  $(document).ready(function(){
    $('ul.tabs').tabs({
      swipeable : true,
    });
  });