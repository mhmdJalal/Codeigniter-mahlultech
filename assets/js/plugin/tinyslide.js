(function ($, window, document, undefined) {

  var defaults = {
    autoplay: 4000,
    animationDuration: 800,
    hoverPause: true,
    slide: ">figure",
    slides: ">aside",
    beforeTransition: function(){},
    afterTransition: function(){}
  };


  var Tiny = function(container, options){
      var _ = this;

      this.options = $.extend({}, defaults, options),
      this.container = container,
      this.slideContainer = $(this.options.slides,this.container),
      this.slides = $(this.options.slide, this.slideContainer),
      this.numSlides = this.slides.length,
      this.currentSlideIndex = 0,
      this.autoplayTimer,
      this.debounce,
      this.slideWidth,
      this.slideNavigator,
      this.slideNavigatorItems,
      this.$w = $(window),

      //mobile
      this.dragThreshold = .05,
      this.dragStart = null,
      this.percentage = 0,
      this.dragTarget,
      this.previousDragTarget,
      this.delta = 0
    ;

    this.api = {
      getSlide: function(index){
        _.api.pause();
        _.currentSlideIndex = index;
        _.showSlide();
      },

      nextSlide: function(){
        var index = _.currentSlideIndex;
        index++;
        index = (index >= _.numSlides) ? 0 : index;
        _.api.getSlide(index);
      },

      prevSlide: function(){
        var index = _.currentSlideIndex;
        index--;
        index = (index < 0) ? _.numSlides - 1 : index;
        _.currentSlideIndex = index;
        _.api.getSlide(index);
      },

      play: function(){
        //disable autoplay if set to 0
        if( _.options.autoplay == 0 ){
          return;
        }

        _.autoplayTimer = setTimeout(function(){
          _.api.nextSlide();
        }, _.options.autoplay);
      },

      pause: function(){
        clearTimeout(_.autoplayTimer);
      }

    }

    this.touchStart = function(event){

      if (_.dragStart !== null) { return; }
      if (event.originalEvent.touches) {
        event = event.originalEvent.touches[0];
      }

      // where in the viewport was touched
      _.dragStart = event.clientX;

      // make sure we're dealing with a slide
      _.dragTarget = _.slides.eq(_.currentSlideIndex)[0];

      _.previousDragTarget = _.slides.eq(_.currentSlideIndex-1)[0];
    }

    this.touchMove = function(event){

      if (_.dragStart === null) { return; }
      if (event.originalEvent.touches) {
        event = event.originalEvent.touches[0];
      }

      _.delta = _.dragStart - event.clientX;
      _.percentage = _.delta / _.$w.width();

      // Don't drag element. This is important.
      return false;
    }
    this.touchEnd = function(){

      _.dragStart = null;

      if (_.percentage >= _.dragThreshold) {
        _.api.nextSlide();
      }
      else if ( Math.abs(_.percentage) >= _.dragThreshold ) {
        _.api.prevSlide();
      }

      percentage = 0;
    }

    this.init = function(){
      _.dimensions();
      _.drawNavigator();
      _.setTransition();
      _.slides.eq(0).addClass('active')
      _.showSlide();

      _.container.on({
        'touchstart': _.touchStart,
        'touchmove': _.touchMove,
        'touchend': _.touchEnd
      });

      _.$w.resize(function(){
        _.debounce && clearTimeout(_.debounce);
        _.debounce = setTimeout(function(){
          _.dimensions();
          _.showSlide();
        }
        , 20);
      });

    }

    this.drawNavigator = function() {

      if( _.numSlides < 2 ){
        return;
      }

      var output = "<div class='navigator'><ul>\n";
      for(var i=0; i < _.numSlides; i++){
        output += "<li data-index='"+i+"'><span>"+i+"</span></li>\n";
      }
      output += "</ul>";

      _.slideNavigator = $(output);
      _.container.append(_.slideNavigator);
      _.container.addClass('has-navigator');

      _.slideNavigatorItems = $("li",_.slideNavigator);
      $(_.slideNavigatorItems.get(0)).addClass("active");

      _.slideNavigator.on("click","li",function(){
        _.api.getSlide( $(this).data('index') );
      });
    }

    this.dimensions = function(){
      _.slideWidth = _.container.width();
      _.slides.width(_.slideWidth);
      _.slideContainer.width( ( _.slideWidth * _.numSlides) );
    }

    this.setTransition = function(){
      _.slideContainer.css(_.getPrefix()+'transition',_.getPrefix()+'transform '+_.options.animationDuration+'ms cubic-bezier(0.365, 0.84, 0.44, 1)');
    }

    this.translate = function(x){
      _.slideContainer.css(_.getPrefix()+'transform','translateX('+x+'px)');
    }
    this.getPrefix = function () {

			if (!window.getComputedStyle) return '';

			var styles = window.getComputedStyle(document.documentElement, '');
			return '-' + (Array.prototype.slice
				.call(styles)
				.join('')
				.match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
			)[1] + '-';

		}

    this.showSlide = function(){

      _.api.pause();

      _.options.beforeTransition.call(this);

      _.translate( -1 * _.currentSlideIndex * _.slideWidth );

      if( _.numSlides > 1 ){
        _.slideNavigatorItems.eq(_.currentSlideIndex).addClass('active')
          .siblings().removeClass('active');
      }

      _.afterAnimation(function(){
        _.slides.eq(_.currentSlideIndex).addClass('active')
          .siblings().removeClass('active');

        _.options.afterTransition.call(this);
      });

      _.api.play();
    }

    this.afterAnimation = function(callback){
      setTimeout(function(){
        callback();
      }, _.options.animationDuration);
    }

    this.init();

    return this.api;
  }

  $.fn["tiny"] = function(options) {
    return this.each(function () {
      if ( !$.data(this, 'api_tiny') ) {
        $.data(this, 'api_tiny',
         new Tiny($(this), options)
        );
      }
    });
  };

})(jQuery, window, document);