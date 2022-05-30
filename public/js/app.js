/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

(function ($) {
  "use strict";

  var count = 1;
  var currentPositionPosts = $(window).scrollTop();
  animateElement();
  placeholderToggle();
  setMenu();
  setCustomizerClass();
  $(".site-content").fitVids(); // loadMoreArticleIndex();

  $(window).on('load', function () {
    addMenuNumbers();
    $('#toggle').on("click", multiClickFunctionStop);
    $('.site-content, #toggle').addClass('all-loaded'); // $('.doc-loader').fadeOut();

    $('body').removeClass('wait-preloader');
  });
  $(window).on('scroll', function () {
    animateElement();
    var scrollPosts = $(window).scrollTop();

    if (scrollPosts > currentPositionPosts) {
      //Load only on scroll down
      loadMorePostsItemsOnScroll();
    }

    currentPositionPosts = scrollPosts;
  }); //------------------------------------------------------------------------
  //Helper Methods -->
  //------------------------------------------------------------------------

  function placeholderToggle() {
    $('input, textarea').on('focus', function () {
      $(this).data('placeholder', $(this).attr('placeholder'));
      $(this).attr('placeholder', '');
    });
    $('input, textarea').on('blur', function () {
      $(this).attr('placeholder', $(this).data('placeholder'));
    });
  }

  function placeholderToggle() {
    $('input, textarea').on('focus', function () {
      $(this).data('placeholder', $(this).attr('placeholder'));
      $(this).attr('placeholder', '');
    });
    $('input, textarea').on('blur', function () {
      $(this).attr('placeholder', $(this).data('placeholder'));
    });
  }

  function animateElement() {
    $(".animate").each(function (i) {
      var top_of_object = $(this).offset().top;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window - 70 > top_of_object) {
        $(this).addClass('show-it');
      }
    });
  }

  function multiClickFunctionStop(e) {
    e.preventDefault();
    $('#toggle').off("click");
    $('#toggle').toggleClass("on");
    $('html, body, .menu-holder-back, .menu-holder-front, .site-content').toggleClass("open").delay(500).queue(function (next) {
      $(this).toggleClass("done");
      next();
    });
    $('#toggle').on("click", multiClickFunctionStop);
  }

  function setCustomizerClass() {
    if ($('#cocobasic-customizer-style').length) {
      $('body').addClass('ccb-css');
    }
  }

  function setMenu() {
    //Fix for default menu
    $(".default-menu ul:first").addClass('sm sm-clean main-menu');
    $('.main-menu').smartmenus({
      subMenusSubOffsetX: 1,
      subMenusSubOffsetY: -8,
      markCurrentItem: true
    });
    var $mainMenu = $('.main-menu').on('click', 'span.sub-arrow', function (e) {
      var obj = $mainMenu.data('smartmenus');

      if (obj.isCollapsible()) {
        var $item = $(this).parent(),
            $sub = $item.parent().dataSM('sub');
        $sub.dataSM('arrowClicked', true);
      }
    }).bind({
      'beforeshow.smapi': function beforeshowSmapi(e, menu) {
        var obj = $mainMenu.data('smartmenus');

        if (obj.isCollapsible()) {
          var $menu = $(menu);

          if (!$menu.dataSM('arrowClicked')) {
            return false;
          }

          $menu.removeDataSM('arrowClicked');
        }
      }
    });
  } // function loadMoreArticleIndex() {
  //     if (parseInt(ajax_var.posts_per_page_index) < parseInt(ajax_var.total_index)) {
  //         $('.more-posts').css('visibility', 'visible');
  //         $('.more-posts').animate({opacity: 1}, 1500);
  //     } else {
  //         $('.more-posts, .more-posts-index-holder').css('display', 'none');
  //     }
  //     $('.more-posts:visible').on('click', function () {
  //         $('.more-posts').css('display', 'none');
  //         $('.more-posts-loading').css('display', 'inline-block');
  //         count++;
  //         loadArticleIndex(count);
  //     });
  // }
  // function loadArticleIndex(pageNumber) {
  //     $.ajax({
  //         url: ajax_var.url,
  //         type: 'POST',
  //         data: "action=infinite_scroll_index&page_no_index=" + pageNumber + '&loop_file_index=loop-index&security=' + ajax_var.nonce,
  //         success: function (html) {
  //             $('.blog-holder').imagesLoaded(function () {
  //                 $(".blog-holder").append(html);
  //                 setTimeout(function () {
  //                     animateElement();
  //                     if (count == ajax_var.num_pages_index) {
  //                         $('.more-posts').css('display', 'none');
  //                         $('.more-posts-loading').css('display', 'none');
  //                         $('.no-more-posts').css('display', 'inline-block');
  //                     } else {
  //                         $('.more-posts').css('display', 'inline-block');
  //                         $('.more-posts-loading').css('display', 'none');
  //                         $(".more-posts-index-holder").removeClass('stop-loading');
  //                     }
  //                 }, 100);
  //             });
  //         }
  //     });
  //     return false;
  // }


  function loadMorePostsItemsOnScroll(e) {
    $(".more-posts-index-holder.scroll").not('.stop-loading').each(function (i) {
      var top_of_object = $(this).offset().top;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window - 170 > top_of_object) {
        $(this).addClass('stop-loading');
        count++;
        loadArticleIndex(count);
        $('.more-posts').css('display', 'none');
        $('.more-posts-loading').css('display', 'inline-block');
      }
    });
  }

  function addMenuNumbers() {
    var n = 0;

    if ($("#header-main-menu .main-menu > li").length) {
      $("#header-main-menu .main-menu > li").each(function () {
        $(this).append('<span class="menu-num">' + (n < 9 ? "0" : "") + (n + 1) + '</span>');
        n++;
      });
      $("#header-main-menu .search-form").append('<span class="menu-num">' + (n < 9 ? "0" : "") + (n + 1) + '</span>');
    }
  }

  function is_touch_device() {
    return !!('ontouchstart' in window);
  }

  $(document).ready(function () {
    $('.site-content').fadeIn(1000).removeClass('hidden');
    $('#check8').on('click', function () {
      return $('#other').removeClass('d-none');
    });
  });
  /*check codeis valid or not*/

  $('.save').on('click', function () {
    var code = $('#uniqueCode').val();
    $.ajax({
      url: ajax_var_url,
      type: 'POST',
      headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      },
      data: {
        'code': code
      },
      success: function success(html) {
        var json = JSON.parse(JSON.stringify(html));

        if (json.status) {
          $('.alert-error').hide();
          $('form#redPillModal').submit();
        } else {
          $('.alert-error').show();
        }
      }
    });
  });
})(jQuery);

/***/ }),

/***/ "./resources/src/app.scss":
/*!********************************!*\
  !*** ./resources/src/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/src/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;