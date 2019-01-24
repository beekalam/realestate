// JavaScript Document

(function() {
  'use strict';

  function ctrls() {
    var _this = this;

    this.counter = 0;
    this.els = {
      decrement: document.querySelector('.ctrl__button--decrement'),
      counter: {
        container: document.querySelector('.ctrl__counter'),
        num: document.querySelector('.ctrl__counter-num'),
        input: document.querySelector('.ctrl__counter-input')
      },
      increment: document.querySelector('.ctrl__button--increment')
    };

    this.decrement = function() {
      var counter = _this.getCounter();
      var nextCounter = (_this.counter > 0) ? --counter : counter;
      _this.setCounter(nextCounter);
    };

    this.increment = function() {
      var counter = _this.getCounter();
      var nextCounter = (counter < 9999999999) ? ++counter : counter;
      _this.setCounter(nextCounter);
    };

    this.getCounter = function() {
      return _this.counter;
    };

    this.setCounter = function(nextCounter) {
      _this.counter = nextCounter;
    };

    this.debounce = function(callback) {
      setTimeout(callback, 100);
    };

    this.render = function(hideClassName, visibleClassName) {
      _this.els.counter.num.classList.add(hideClassName);

      setTimeout(function() {
        _this.els.counter.num.innerText = _this.getCounter();
        _this.els.counter.input.value = _this.getCounter();
        _this.els.counter.num.classList.add(visibleClassName);
      }, 100);

      setTimeout(function() {
        _this.els.counter.num.classList.remove(hideClassName);
        _this.els.counter.num.classList.remove(visibleClassName);
      }, 1100);
    };

    this.ready = function() {
      // _this.els.decrement.addEventListener('click', function() {
      //   _this.debounce(function() {
      //     _this.decrement();
      //     _this.render('is-decrement-hide', 'is-decrement-visible');
      //   });
      // });
      //
      // _this.els.increment.addEventListener('click', function() {
      //   _this.debounce(function() {
      //     _this.increment();
      //     _this.render('is-increment-hide', 'is-increment-visible');
      //   });
      // });
      //
      // _this.els.counter.input.addEventListener('input', function(e) {
      //   var parseValue = parseInt(e.target.value);
      //   if (!isNaN(parseValue) && parseValue >= 0) {
      //     _this.setCounter(parseValue);
      //     _this.render();
      //   }
      // });
      //
      // _this.els.counter.input.addEventListener('focus', function(e) {
      //   _this.els.counter.container.classList.add('is-input');
      // });
      //
      // _this.els.counter.input.addEventListener('blur', function(e) {
      //   _this.els.counter.container.classList.remove('is-input');
      //   _this.render();
      // });
    };
  };

  // init
  var controls = new ctrls();
  document.addEventListener('DOMContentLoaded', controls.ready);
})();
//-----------------------------------------------------
(function() {
 
  window.inputNumber = function(el) {

    var min = el.attr('min') || false;
    var max = el.attr('max') || false;

    var els = {};

    els.dec = el.prev();
    els.inc = el.next();

    el.each(function() {
      init($(this));
    });

    function init(el) {

      els.dec.on('click', decrement);
      els.inc.on('click', increment);

      function decrement() {
        var value = el[0].value;
        value--;
        if(!min || value >= min) {
          el[0].value = value;
        }
      }

      function increment() {
        var value = el[0].value;
        value++;
        if(!max || value <= max) {
          el[0].value = value++;
        }
      }
    }
  }
})();
inputNumber($('.input-number'));


//---------------fix the box-------------------------
//
//if(window.innerWidth > 768 ){
//$(document).ready(function() {
//
//  $(window).scroll(function () {
//      console.log($(window).scrollTop());
//    if ($(window).scrollTop() >100 && $(window).scrollTop() <3000)  {
//      $("#minisearch_box").addClass("fix_the_box");
//    }else{
//      $("#minisearch_box").removeClass("fix_the_box");
//    }
//  });
//});
//}


//---------------------------------------

$(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
});
//-------------------------------------------------------

var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
//--------------------------------------------
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
//----------------------------------------------

(function() {
  'use strict';

  function ctrls() {
    var _this = this;

    this.counter = 0;
    this.els = {
      decrement: document.querySelector('.ctrl__button--decrement'),
      counter: {
        container: document.querySelector('.ctrl__counter'),
        num: document.querySelector('.ctrl__counter-num'),
        input: document.querySelector('.ctrl__counter-input')
      },
      increment: document.querySelector('.ctrl__button--increment')
    };

    this.decrement = function() {
      var counter = _this.getCounter();
      var nextCounter = (_this.counter > 0) ? --counter : counter;
      _this.setCounter(nextCounter);
    };

    this.increment = function() {
      var counter = _this.getCounter();
      var nextCounter = (counter < 9999999999) ? ++counter : counter;
      _this.setCounter(nextCounter);
    };

    this.getCounter = function() {
      return _this.counter;
    };

    this.setCounter = function(nextCounter) {
      _this.counter = nextCounter;
    };

    this.debounce = function(callback) {
      setTimeout(callback, 100);
    };

    this.render = function(hideClassName, visibleClassName) {
      _this.els.counter.num.classList.add(hideClassName);

      setTimeout(function() {
        _this.els.counter.num.innerText = _this.getCounter();
        _this.els.counter.input.value = _this.getCounter();
        _this.els.counter.num.classList.add(visibleClassName);
      }, 100);

      setTimeout(function() {
        _this.els.counter.num.classList.remove(hideClassName);
        _this.els.counter.num.classList.remove(visibleClassName);
      }, 1100);
    };

    this.ready = function() {
      // _this.els.decrement.addEventListener('click', function() {
      //   _this.debounce(function() {
      //     _this.decrement();
      //     _this.render('is-decrement-hide', 'is-decrement-visible');
      //   });
      // });
      //
      // _this.els.increment.addEventListener('click', function() {
      //   _this.debounce(function() {
      //     _this.increment();
      //     _this.render('is-increment-hide', 'is-increment-visible');
      //   });
      // });
      //
      // _this.els.counter.input.addEventListener('input', function(e) {
      //   var parseValue = parseInt(e.target.value);
      //   if (!isNaN(parseValue) && parseValue >= 0) {
      //     _this.setCounter(parseValue);
      //     _this.render();
      //   }
      // });
      //
      // _this.els.counter.input.addEventListener('focus', function(e) {
      //   _this.els.counter.container.classList.add('is-input');
      // });
      //
      // _this.els.counter.input.addEventListener('blur', function(e) {
      //   _this.els.counter.container.classList.remove('is-input');
      //   _this.render();
      // });
    };
  };

  // init
  var controls = new ctrls();
  document.addEventListener('DOMContentLoaded', controls.ready);
})();
//-----------------------------------------------------
(function() {
 
  window.inputNumber = function(el) {

    var min = el.attr('min') || false;
    var max = el.attr('max') || false;

    var els = {};

    els.dec = el.prev();
    els.inc = el.next();

    el.each(function() {
      init($(this));
    });

    function init(el) {

      els.dec.on('click', decrement);
      els.inc.on('click', increment);

      function decrement() {
        var value = el[0].value;
        value--;
        if(!min || value >= min) {
          el[0].value = value;
        }
      }

      function increment() {
        var value = el[0].value;
        value++;
        if(!max || value <= max) {
          el[0].value = value++;
        }
      }
    }
  }
})();
inputNumber($('.input-number'));







