/*! For license information please see app.js.LICENSE.txt */
(()=>{var e,t={641:(e,t,i)=>{"use strict";i(376),i(202),i(656),i(312),i(937),i(335),i(60),i(116),i(680),i(659),i(382),i(887),i(9),i(778),i(256),i(110),i(284),i(304)},9:()=>{var e;(e=jQuery)("*[data-thumb-post]").length&&e("*[data-thumb-post]").each((function(){var t=e(this).data("thumb-post");e(this).css("backgroundImage","url("+t+")")}))},335:()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}!function(t){"use strict";function i(e){return(e||"").toLowerCase()}t.fn.cycle=function(n){var s;return 0!==this.length||t.isReady?this.each((function(){var s,o,a,r,l=t(this),c=t.fn.cycle.log;if(!l.data("cycle.opts")){for(var d in(!1===l.data("cycle-log")||n&&!1===n.log||o&&!1===o.log)&&(c=t.noop),c("--c2 init--"),s=l.data())s.hasOwnProperty(d)&&/^cycle[A-Z]+/.test(d)&&(r=s[d],c((a=d.match(/^cycle(.*)/)[1].replace(/^[A-Z]/,i))+":",r,"("+e(r)+")"),s[a]=r);(o=t.extend({},t.fn.cycle.defaults,s,n||{})).timeoutId=0,o.paused=o.paused||!1,o.container=l,o._maxZ=o.maxZ,o.API=t.extend({_container:l},t.fn.cycle.API),o.API.log=c,o.API.trigger=function(e,t){return o.container.trigger(e,t),o.API},l.data("cycle.opts",o),l.data("cycle.API",o.API),o.API.trigger("cycle-bootstrap",[o,o.API]),o.API.addInitialSlides(),o.API.preInitSlideshow(),o.slides.length&&o.API.initSlideshow()}})):(s={s:this.selector,c:this.context},t.fn.cycle.log("requeuing slideshow (dom not ready)"),t((function(){t(s.s,s.c).cycle(n)})),this)},t.fn.cycle.API={opts:function(){return this._container.data("cycle.opts")},addInitialSlides:function(){var e=this.opts(),i=e.slides;e.slideCount=0,e.slides=t(),i=i.jquery?i:e.container.find(i),e.random&&i.sort((function(){return Math.random()-.5})),e.API.add(i)},preInitSlideshow:function(){var e=this.opts();e.API.trigger("cycle-pre-initialize",[e]);var i=t.fn.cycle.transitions[e.fx];i&&t.isFunction(i.preInit)&&i.preInit(e),e._preInitialized=!0},postInitSlideshow:function(){var e=this.opts();e.API.trigger("cycle-post-initialize",[e]);var i=t.fn.cycle.transitions[e.fx];i&&t.isFunction(i.postInit)&&i.postInit(e)},initSlideshow:function(){var e,i=this.opts(),n=i.container;i.API.calcFirstSlide(),"static"==i.container.css("position")&&i.container.css("position","relative"),t(i.slides[i.currSlide]).css({opacity:1,display:"block",visibility:"visible"}),i.API.stackSlides(i.slides[i.currSlide],i.slides[i.nextSlide],!i.reverse),i.pauseOnHover&&(!0!==i.pauseOnHover&&(n=t(i.pauseOnHover)),n.hover((function(){i.API.pause(!0)}),(function(){i.API.resume(!0)}))),i.timeout&&(e=i.API.getSlideOpts(i.currSlide),i.API.queueTransition(e,e.timeout+i.delay)),i._initialized=!0,i.API.updateView(!0),i.API.trigger("cycle-initialized",[i]),i.API.postInitSlideshow()},pause:function(e){var i=this.opts(),n=i.API.getSlideOpts(),s=i.hoverPaused||i.paused;e?i.hoverPaused=!0:i.paused=!0,s||(i.container.addClass("cycle-paused"),i.API.trigger("cycle-paused",[i]).log("cycle-paused"),n.timeout&&(clearTimeout(i.timeoutId),i.timeoutId=0,i._remainingTimeout-=t.now()-i._lastQueue,(i._remainingTimeout<0||isNaN(i._remainingTimeout))&&(i._remainingTimeout=void 0)))},resume:function(e){var t=this.opts(),i=!t.hoverPaused&&!t.paused;e?t.hoverPaused=!1:t.paused=!1,i||(t.container.removeClass("cycle-paused"),0===t.slides.filter(":animated").length&&t.API.queueTransition(t.API.getSlideOpts(),t._remainingTimeout),t.API.trigger("cycle-resumed",[t,t._remainingTimeout]).log("cycle-resumed"))},add:function(e,i){var n,s=this.opts(),o=s.slideCount;"string"==t.type(e)&&(e=t.trim(e)),t(e).each((function(){var e,n=t(this);i?s.container.prepend(n):s.container.append(n),s.slideCount++,e=s.API.buildSlideOpts(n),s.slides=i?t(n).add(s.slides):s.slides.add(n),s.API.initSlide(e,n,--s._maxZ),n.data("cycle.opts",e),s.API.trigger("cycle-slide-added",[s,e,n])})),s.API.updateView(!0),s._preInitialized&&2>o&&s.slideCount>=1&&(s._initialized?s.timeout&&(n=s.slides.length,s.nextSlide=s.reverse?n-1:1,s.timeoutId||s.API.queueTransition(s)):s.API.initSlideshow())},calcFirstSlide:function(){var e,t=this.opts();((e=parseInt(t.startingSlide||0,10))>=t.slides.length||0>e)&&(e=0),t.currSlide=e,t.reverse?(t.nextSlide=e-1,t.nextSlide<0&&(t.nextSlide=t.slides.length-1)):(t.nextSlide=e+1,t.nextSlide==t.slides.length&&(t.nextSlide=0))},calcNextSlide:function(){var e,t=this.opts();t.reverse?(e=t.nextSlide-1<0,t.nextSlide=e?t.slideCount-1:t.nextSlide-1,t.currSlide=e?0:t.nextSlide+1):(e=t.nextSlide+1==t.slides.length,t.nextSlide=e?0:t.nextSlide+1,t.currSlide=e?t.slides.length-1:t.nextSlide-1)},calcTx:function(e,i){var n,s=e;return s._tempFx?n=t.fn.cycle.transitions[s._tempFx]:i&&s.manualFx&&(n=t.fn.cycle.transitions[s.manualFx]),n||(n=t.fn.cycle.transitions[s.fx]),s._tempFx=null,this.opts()._tempFx=null,n||(n=t.fn.cycle.transitions.fade,s.API.log('Transition "'+s.fx+'" not found.  Using fade.')),n},prepareTx:function(e,t){var i,n,s,o,a,r=this.opts();return r.slideCount<2?void(r.timeoutId=0):(!e||r.busy&&!r.manualTrump||(r.API.stopTransition(),r.busy=!1,clearTimeout(r.timeoutId),r.timeoutId=0),void(r.busy||(0!==r.timeoutId||e)&&(n=r.slides[r.currSlide],s=r.slides[r.nextSlide],o=r.API.getSlideOpts(r.nextSlide),a=r.API.calcTx(o,e),r._tx=a,e&&void 0!==o.manualSpeed&&(o.speed=o.manualSpeed),r.nextSlide!=r.currSlide&&(e||!r.paused&&!r.hoverPaused&&r.timeout)?(r.API.trigger("cycle-before",[o,n,s,t]),a.before&&a.before(o,n,s,t),i=function(){r.busy=!1,r.container.data("cycle.opts")&&(a.after&&a.after(o,n,s,t),r.API.trigger("cycle-after",[o,n,s,t]),r.API.queueTransition(o),r.API.updateView(!0))},r.busy=!0,a.transition?a.transition(o,n,s,t,i):r.API.doTransition(o,n,s,t,i),r.API.calcNextSlide(),r.API.updateView()):r.API.queueTransition(o))))},doTransition:function(e,i,n,s,o){var a=e,r=t(i),l=t(n),c=function(){l.animate(a.animIn||{opacity:1},a.speed,a.easeIn||a.easing,o)};l.css(a.cssBefore||{}),r.animate(a.animOut||{},a.speed,a.easeOut||a.easing,(function(){r.css(a.cssAfter||{}),a.sync||c()})),a.sync&&c()},queueTransition:function(e,i){var n=this.opts(),s=void 0!==i?i:e.timeout;return 0===n.nextSlide&&0==--n.loop?(n.API.log("terminating; loop=0"),n.timeout=0,s?setTimeout((function(){n.API.trigger("cycle-finished",[n])}),s):n.API.trigger("cycle-finished",[n]),void(n.nextSlide=n.currSlide)):void 0!==n.continueAuto&&(!1===n.continueAuto||t.isFunction(n.continueAuto)&&!1===n.continueAuto())?(n.API.log("terminating automatic transitions"),n.timeout=0,void(n.timeoutId&&clearTimeout(n.timeoutId))):void(s&&(n._lastQueue=t.now(),void 0===i&&(n._remainingTimeout=e.timeout),n.paused||n.hoverPaused||(n.timeoutId=setTimeout((function(){n.API.prepareTx(!1,!n.reverse)}),s))))},stopTransition:function(){var e=this.opts();e.slides.filter(":animated").length&&(e.slides.stop(!1,!0),e.API.trigger("cycle-transition-stopped",[e])),e._tx&&e._tx.stopTransition&&e._tx.stopTransition(e)},advanceSlide:function(e){var t=this.opts();return clearTimeout(t.timeoutId),t.timeoutId=0,t.nextSlide=t.currSlide+e,t.nextSlide<0?t.nextSlide=t.slides.length-1:t.nextSlide>=t.slides.length&&(t.nextSlide=0),t.API.prepareTx(!0,e>=0),!1},buildSlideOpts:function(n){var s,o,a=this.opts(),r=n.data()||{};for(var l in r)r.hasOwnProperty(l)&&/^cycle[A-Z]+/.test(l)&&(s=r[l],o=l.match(/^cycle(.*)/)[1].replace(/^[A-Z]/,i),a.API.log("["+(a.slideCount-1)+"]",o+":",s,"("+e(s)+")"),r[o]=s);(r=t.extend({},t.fn.cycle.defaults,a,r)).slideNum=a.slideCount;try{delete r.API,delete r.slideCount,delete r.currSlide,delete r.nextSlide,delete r.slides}catch(e){}return r},getSlideOpts:function(e){var i=this.opts();void 0===e&&(e=i.currSlide);var n=i.slides[e],s=t(n).data("cycle.opts");return t.extend({},i,s)},initSlide:function(e,i,n){var s=this.opts();i.css(e.slideCss||{}),n>0&&i.css("zIndex",n),isNaN(e.speed)&&(e.speed=t.fx.speeds[e.speed]||t.fx.speeds._default),e.sync||(e.speed=e.speed/2),i.addClass(s.slideClass)},updateView:function(e,t){var i=this.opts();if(i._initialized){var n=i.API.getSlideOpts(),s=i.slides[i.currSlide];!e&&!0!==t&&(i.API.trigger("cycle-update-view-before",[i,n,s]),i.updateView<0)||(i.slideActiveClass&&i.slides.removeClass(i.slideActiveClass).eq(i.currSlide).addClass(i.slideActiveClass),e&&i.hideNonActive&&i.slides.filter(":not(."+i.slideActiveClass+")").css("visibility","hidden"),0===i.updateView&&setTimeout((function(){i.API.trigger("cycle-update-view",[i,n,s,e])}),n.speed/(i.sync?2:1)),0!==i.updateView&&i.API.trigger("cycle-update-view",[i,n,s,e]),e&&i.API.trigger("cycle-update-view-after",[i,n,s]))}},getComponent:function(e){var i=this.opts(),n=i[e];return"string"==typeof n?/^\s*[\>|\+|~]/.test(n)?i.container.find(n):t(n):n.jquery?n:t(n)},stackSlides:function(e,i,n){var s=this.opts();e||(e=s.slides[s.currSlide],i=s.slides[s.nextSlide],n=!s.reverse),t(e).css("zIndex",s.maxZ);var o,a=s.maxZ-2,r=s.slideCount;if(n){for(o=s.currSlide+1;r>o;o++)t(s.slides[o]).css("zIndex",a--);for(o=0;o<s.currSlide;o++)t(s.slides[o]).css("zIndex",a--)}else{for(o=s.currSlide-1;o>=0;o--)t(s.slides[o]).css("zIndex",a--);for(o=r-1;o>s.currSlide;o--)t(s.slides[o]).css("zIndex",a--)}t(i).css("zIndex",s.maxZ-1)},getSlideIndex:function(e){return this.opts().slides.index(e)}},t.fn.cycle.log=function(){window.console&&console.log&&console.log("[cycle2] "+Array.prototype.join.call(arguments," "))},t.fn.cycle.version=function(){return"Cycle2: 2.1.6"},t.fn.cycle.transitions={custom:{},none:{before:function(e,t,i,n){e.API.stackSlides(i,t,n),e.cssBefore={opacity:1,visibility:"visible",display:"block"}}},fade:{before:function(e,i,n,s){var o=e.API.getSlideOpts(e.nextSlide).slideCss||{};e.API.stackSlides(i,n,s),e.cssBefore=t.extend(o,{opacity:0,visibility:"visible",display:"block"}),e.animIn={opacity:1},e.animOut={opacity:0}}},fadeout:{before:function(e,i,n,s){var o=e.API.getSlideOpts(e.nextSlide).slideCss||{};e.API.stackSlides(i,n,s),e.cssBefore=t.extend(o,{opacity:1,visibility:"visible",display:"block"}),e.animOut={opacity:0}}},scrollHorz:{before:function(e,t,i,n){e.API.stackSlides(t,i,n);var s=e.container.css("overflow","hidden").width();e.cssBefore={left:n?s:-s,top:0,opacity:1,visibility:"visible",display:"block"},e.cssAfter={zIndex:e._maxZ-2,left:0},e.animIn={left:0},e.animOut={left:n?-s:s}}}},t.fn.cycle.defaults={allowWrap:!0,autoSelector:".cycle-slideshow[data-cycle-auto-init!=false]",delay:0,easing:null,fx:"fade",hideNonActive:!0,loop:0,manualFx:void 0,manualSpeed:void 0,manualTrump:!0,maxZ:100,pauseOnHover:!1,reverse:!1,slideActiveClass:"cycle-slide-active",slideClass:"cycle-slide",slideCss:{position:"absolute",top:0,left:0},slides:"> img",speed:500,startingSlide:0,sync:!0,timeout:4e3,updateView:0},t(document).ready((function(){t(t.fn.cycle.defaults.autoSelector).cycle()}))}(jQuery),function(e){"use strict";function t(t,i){var n,s,o,a=i.autoHeight;if("container"==a)s=e(i.slides[i.currSlide]).outerHeight(),i.container.height(s);else if(i._autoHeightRatio)i.container.height(i.container.width()/i._autoHeightRatio);else if("calc"===a||"number"==e.type(a)&&a>=0){if(o="calc"===a?function(t,i){var n=0,s=-1;return i.slides.each((function(t){var i=e(this).height();i>s&&(s=i,n=t)})),n}(0,i):a>=i.slides.length?0:a,o==i._sentinelIndex)return;i._sentinelIndex=o,i._sentinel&&i._sentinel.remove(),(n=e(i.slides[o].cloneNode(!0))).removeAttr("id name rel").find("[id],[name],[rel]").removeAttr("id name rel"),n.css({position:"static",visibility:"hidden",display:"block"}).prependTo(i.container).addClass("cycle-sentinel cycle-slide").removeClass("cycle-slide-active"),n.find("*").css("visibility","hidden"),i._sentinel=n}}function i(t,i,n,s){var o=e(s).outerHeight();i.container.animate({height:o},i.autoHeightSpeed,i.autoHeightEasing)}function n(s,o){o._autoHeightOnResize&&(e(window).off("resize orientationchange",o._autoHeightOnResize),o._autoHeightOnResize=null),o.container.off("cycle-slide-added cycle-slide-removed",t),o.container.off("cycle-destroyed",n),o.container.off("cycle-before",i),o._sentinel&&(o._sentinel.remove(),o._sentinel=null)}e.extend(e.fn.cycle.defaults,{autoHeight:0,autoHeightSpeed:250,autoHeightEasing:null}),e(document).on("cycle-initialized",(function(s,o){function a(){t(0,o)}var r,l=o.autoHeight,c=e.type(l),d=null;("string"===c||"number"===c)&&(o.container.on("cycle-slide-added cycle-slide-removed",t),o.container.on("cycle-destroyed",n),"container"==l?o.container.on("cycle-before",i):"string"===c&&/\d+\:\d+/.test(l)&&(r=(r=l.match(/(\d+)\:(\d+)/))[1]/r[2],o._autoHeightRatio=r),"number"!==c&&(o._autoHeightOnResize=function(){clearTimeout(d),d=setTimeout(a,50)},e(window).on("resize orientationchange",o._autoHeightOnResize)),setTimeout(a,30))}))}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{caption:"> .cycle-caption",captionTemplate:"{{slideNum}} / {{slideCount}}",overlay:"> .cycle-overlay",overlayTemplate:"<div>{{title}}</div><div>{{desc}}</div>",captionModule:"caption"}),e(document).on("cycle-update-view",(function(t,i,n,s){"caption"===i.captionModule&&e.each(["caption","overlay"],(function(){var e=n[this+"Template"],t=i.API.getComponent(this);t.length&&e?(t.html(i.API.tmpl(e,n,i,s)),t.show()):t.hide()}))})),e(document).on("cycle-destroyed",(function(t,i){e.each(["caption","overlay"],(function(){var e=i[this+"Template"];i[this]&&e&&i.API.getComponent("caption").empty()}))}))}(jQuery),function(e){"use strict";var t=e.fn.cycle;e.fn.cycle=function(i){var n,s,o,a=e.makeArray(arguments);return"number"==e.type(i)?this.cycle("goto",i):"string"==e.type(i)?this.each((function(){var r;return n=i,void 0===(o=e(this).data("cycle.opts"))?void t.log('slideshow must be initialized before sending commands; "'+n+'" ignored'):(n="goto"==n?"jump":n,s=o.API[n],e.isFunction(s)?((r=e.makeArray(a)).shift(),s.apply(o.API,r)):void t.log("unknown command: ",n))})):t.apply(this,arguments)},e.extend(e.fn.cycle,t),e.extend(t.API,{next:function(){var e=this.opts();if(!e.busy||e.manualTrump){var t=e.reverse?-1:1;!1===e.allowWrap&&e.currSlide+t>=e.slideCount||(e.API.advanceSlide(t),e.API.trigger("cycle-next",[e]).log("cycle-next"))}},prev:function(){var e=this.opts();if(!e.busy||e.manualTrump){var t=e.reverse?1:-1;!1===e.allowWrap&&e.currSlide+t<0||(e.API.advanceSlide(t),e.API.trigger("cycle-prev",[e]).log("cycle-prev"))}},destroy:function(){this.stop();var t=this.opts(),i=e.isFunction(e._data)?e._data:e.noop;clearTimeout(t.timeoutId),t.timeoutId=0,t.API.stop(),t.API.trigger("cycle-destroyed",[t]).log("cycle-destroyed"),t.container.removeData(),i(t.container[0],"parsedAttrs",!1),t.retainStylesOnDestroy||(t.container.removeAttr("style"),t.slides.removeAttr("style"),t.slides.removeClass(t.slideActiveClass)),t.slides.each((function(){var n=e(this);n.removeData(),n.removeClass(t.slideClass),i(this,"parsedAttrs",!1)}))},jump:function(e,t){var i,n=this.opts();if(!n.busy||n.manualTrump){var s=parseInt(e,10);if(isNaN(s)||0>s||s>=n.slides.length)return void n.API.log("goto: invalid slide index: "+s);if(s==n.currSlide)return void n.API.log("goto: skipping, already on slide",s);n.nextSlide=s,clearTimeout(n.timeoutId),n.timeoutId=0,n.API.log("goto: ",s," (zero-index)"),i=n.currSlide<n.nextSlide,n._tempFx=t,n.API.prepareTx(!0,i)}},stop:function(){var t=this.opts(),i=t.container;clearTimeout(t.timeoutId),t.timeoutId=0,t.API.stopTransition(),t.pauseOnHover&&(!0!==t.pauseOnHover&&(i=e(t.pauseOnHover)),i.off("mouseenter mouseleave")),t.API.trigger("cycle-stopped",[t]).log("cycle-stopped")},reinit:function(){var e=this.opts();e.API.destroy(),e.container.cycle()},remove:function(t){for(var i,n,s=this.opts(),o=[],a=1,r=0;r<s.slides.length;r++)i=s.slides[r],r==t?n=i:(o.push(i),e(i).data("cycle.opts").slideNum=a,a++);n&&(s.slides=e(o),s.slideCount--,e(n).remove(),t==s.currSlide?s.API.advanceSlide(1):t<s.currSlide?s.currSlide--:s.currSlide++,s.API.trigger("cycle-slide-removed",[s,t,n]).log("cycle-slide-removed"),s.API.updateView())}}),e(document).on("click.cycle","[data-cycle-cmd]",(function(t){t.preventDefault();var i=e(this),n=i.data("cycle-cmd"),s=i.data("cycle-context")||".cycle-slideshow";e(s).cycle(n,i.data("cycle-arg"))}))}(jQuery),function(e){"use strict";function t(t,i){var n;return t._hashFence?void(t._hashFence=!1):(n=window.location.hash.substring(1),void t.slides.each((function(s){if(e(this).data("cycle-hash")==n){if(!0===i)t.startingSlide=s;else{var o=t.currSlide<s;t.nextSlide=s,t.API.prepareTx(!0,o)}return!1}})))}e(document).on("cycle-pre-initialize",(function(i,n){t(n,!0),n._onHashChange=function(){t(n,!1)},e(window).on("hashchange",n._onHashChange)})),e(document).on("cycle-update-view",(function(e,t,i){i.hash&&"#"+i.hash!=window.location.hash&&(t._hashFence=!0,window.location.hash=i.hash)})),e(document).on("cycle-destroyed",(function(t,i){i._onHashChange&&e(window).off("hashchange",i._onHashChange)}))}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{loader:!1}),e(document).on("cycle-bootstrap",(function(t,i){var n;i.loader&&(n=i.API.add,i.API.add=function(t,s){function o(t){var o;"wait"==i.loader?(r.push(t),0===c&&(r.sort(a),n.apply(i.API,[r,s]),i.container.removeClass("cycle-loading"))):(o=e(i.slides[i.currSlide]),n.apply(i.API,[t,s]),o.show(),i.container.removeClass("cycle-loading"))}function a(e,t){return e.data("index")-t.data("index")}var r=[];if("string"==e.type(t))t=e.trim(t);else if("array"===e.type(t))for(var l=0;l<t.length;l++)t[l]=e(t[l])[0];var c=(t=e(t)).length;c&&(t.css("visibility","hidden").appendTo("body").each((function(t){function a(){0==--l&&(--c,o(d))}var l=0,d=e(this),u=d.is("img")?d:d.find("img");return d.data("index",t),(u=u.filter(":not(.cycle-loader-ignore)").filter(':not([src=""])')).length?(l=u.length,void u.each((function(){this.complete?a():e(this).load((function(){a()})).on("error",(function(){0==--l&&(i.API.log("slide skipped; img not loaded:",this.src),0==--c&&"wait"==i.loader&&n.apply(i.API,[r,s]))}))}))):(--c,void r.push(d))})),c&&i.container.addClass("cycle-loading"))})}))}(jQuery),function(e){"use strict";function t(t,i,n){var s;t.API.getComponent("pager").each((function(){var o=e(this);if(i.pagerTemplate){var a=t.API.tmpl(i.pagerTemplate,i,t,n[0]);s=e(a).appendTo(o)}else s=o.children().eq(t.slideCount-1);s.on(t.pagerEvent,(function(e){t.pagerEventBubble||e.preventDefault(),t.API.page(o,e.currentTarget)}))}))}function i(e,t){var i=this.opts();if(!i.busy||i.manualTrump){var n=e.children().index(t),s=i.currSlide<n;i.currSlide!=n&&(i.nextSlide=n,i._tempFx=i.pagerFx,i.API.prepareTx(!0,s),i.API.trigger("cycle-pager-activated",[i,e,t]))}}e.extend(e.fn.cycle.defaults,{pager:"> .cycle-pager",pagerActiveClass:"cycle-pager-active",pagerEvent:"click.cycle",pagerEventBubble:void 0,pagerTemplate:"<span>&bull;</span>"}),e(document).on("cycle-bootstrap",(function(e,i,n){n.buildPagerLink=t})),e(document).on("cycle-slide-added",(function(e,t,n,s){t.pager&&(t.API.buildPagerLink(t,n,s),t.API.page=i)})),e(document).on("cycle-slide-removed",(function(t,i,n){i.pager&&i.API.getComponent("pager").each((function(){var t=e(this);e(t.children()[n]).remove()}))})),e(document).on("cycle-update-view",(function(t,i){i.pager&&i.API.getComponent("pager").each((function(){e(this).children().removeClass(i.pagerActiveClass).eq(i.currSlide).addClass(i.pagerActiveClass)}))})),e(document).on("cycle-destroyed",(function(e,t){var i=t.API.getComponent("pager");i&&(i.children().off(t.pagerEvent),t.pagerTemplate&&i.empty())}))}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{next:"> .cycle-next",nextEvent:"click.cycle",disabledClass:"disabled",prev:"> .cycle-prev",prevEvent:"click.cycle",swipe:!1}),e(document).on("cycle-initialized",(function(e,t){if(t.API.getComponent("next").on(t.nextEvent,(function(e){e.preventDefault(),t.API.next()})),t.API.getComponent("prev").on(t.prevEvent,(function(e){e.preventDefault(),t.API.prev()})),t.swipe){var i=t.swipeVert?"swipeUp.cycle":"swipeLeft.cycle swipeleft.cycle",n=t.swipeVert?"swipeDown.cycle":"swipeRight.cycle swiperight.cycle";t.container.on(i,(function(){t._tempFx=t.swipeFx,t.API.next()})),t.container.on(n,(function(){t._tempFx=t.swipeFx,t.API.prev()}))}})),e(document).on("cycle-update-view",(function(e,t){if(!t.allowWrap){var i=t.disabledClass,n=t.API.getComponent("next"),s=t.API.getComponent("prev"),o=t._prevBoundry||0,a=void 0!==t._nextBoundry?t._nextBoundry:t.slideCount-1;t.currSlide==a?n.addClass(i).prop("disabled",!0):n.removeClass(i).prop("disabled",!1),t.currSlide===o?s.addClass(i).prop("disabled",!0):s.removeClass(i).prop("disabled",!1)}})),e(document).on("cycle-destroyed",(function(e,t){t.API.getComponent("prev").off(t.nextEvent),t.API.getComponent("next").off(t.prevEvent),t.container.off("swipeleft.cycle swiperight.cycle swipeLeft.cycle swipeRight.cycle swipeUp.cycle swipeDown.cycle")}))}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{progressive:!1}),e(document).on("cycle-pre-initialize",(function(t,i){if(i.progressive){var n,s,o=i.API,a=o.next,r=o.prev,l=o.prepareTx,c=e.type(i.progressive);if("array"==c)n=i.progressive;else if(e.isFunction(i.progressive))n=i.progressive(i);else if("string"==c){if(s=e(i.progressive),!(n=e.trim(s.html())))return;if(/^(\[)/.test(n))try{n=e.parseJSON(n)}catch(e){return void o.log("error parsing progressive slides",e)}else(n=n.split(new RegExp(s.data("cycle-split")||"\n")))[n.length-1]||n.pop()}l&&(o.prepareTx=function(e,t){var s,o;return e||0===n.length?void l.apply(i.API,[e,t]):void(t&&i.currSlide==i.slideCount-1?(o=n[0],n=n.slice(1),i.container.one("cycle-slide-added",(function(e,t){setTimeout((function(){t.API.advanceSlide(1)}),50)})),i.API.add(o)):t||0!==i.currSlide?l.apply(i.API,[e,t]):(s=n.length-1,o=n[s],n=n.slice(0,s),i.container.one("cycle-slide-added",(function(e,t){setTimeout((function(){t.currSlide=1,t.API.advanceSlide(-1)}),50)})),i.API.add(o,!0)))}),a&&(o.next=function(){var e=this.opts();if(n.length&&e.currSlide==e.slideCount-1){var t=n[0];n=n.slice(1),e.container.one("cycle-slide-added",(function(e,t){a.apply(t.API),t.container.removeClass("cycle-loading")})),e.container.addClass("cycle-loading"),e.API.add(t)}else a.apply(e.API)}),r&&(o.prev=function(){var e=this.opts();if(n.length&&0===e.currSlide){var t=n.length-1,i=n[t];n=n.slice(0,t),e.container.one("cycle-slide-added",(function(e,t){t.currSlide=1,t.API.advanceSlide(-1),t.container.removeClass("cycle-loading")})),e.container.addClass("cycle-loading"),e.API.add(i,!0)}else r.apply(e.API)})}}))}(jQuery),function(e){"use strict";e.extend(e.fn.cycle.defaults,{tmplRegex:"{{((.)?.*?)}}"}),e.extend(e.fn.cycle.API,{tmpl:function(t,i){var n=new RegExp(i.tmplRegex||e.fn.cycle.defaults.tmplRegex,"g"),s=e.makeArray(arguments);return s.shift(),t.replace(n,(function(t,i){var n,o,a,r,l=i.split(".");for(n=0;n<s.length;n++)if(a=s[n]){if(l.length>1)for(r=a,o=0;o<l.length;o++)a=r,r=r[l[o]]||i;else r=a[i];if(e.isFunction(r))return r.apply(a,s);if(null!=r&&r!=i)return r}return i}))}})}(jQuery),function(e){"use strict";e.event.special.swipe=e.event.special.swipe||{scrollSupressionThreshold:10,durationThreshold:1e3,horizontalDistanceThreshold:30,verticalDistanceThreshold:75,setup:function(){var t=e(this);t.bind("touchstart",(function(i){function n(t){if(a){var i=t.originalEvent.touches?t.originalEvent.touches[0]:t;s={time:(new Date).getTime(),coords:[i.pageX,i.pageY]},Math.abs(a.coords[0]-s.coords[0])>e.event.special.swipe.scrollSupressionThreshold&&t.preventDefault()}}var s,o=i.originalEvent.touches?i.originalEvent.touches[0]:i,a={time:(new Date).getTime(),coords:[o.pageX,o.pageY],origin:e(i.target)};t.bind("touchmove",n).one("touchend",(function(){t.unbind("touchmove",n),a&&s&&s.time-a.time<e.event.special.swipe.durationThreshold&&Math.abs(a.coords[0]-s.coords[0])>e.event.special.swipe.horizontalDistanceThreshold&&Math.abs(a.coords[1]-s.coords[1])<e.event.special.swipe.verticalDistanceThreshold&&a.origin.trigger("swipe").trigger(a.coords[0]>s.coords[0]?"swipeleft":"swiperight"),a=s=void 0}))}))}},e.event.special.swipeleft=e.event.special.swipeleft||{setup:function(){e(this).bind("swipe",e.noop)}},e.event.special.swiperight=e.event.special.swiperight||e.event.special.swipeleft}(jQuery)},382:()=>{!function(e){if(e('[class^="single-fz"]').length){var t=parseInt(e("p",".ps-post-content").css("fontSize"));e(".single-fz-plus").on("click",(function(i){i.preventDefault(),t<32&&e("p",".ps-post-content").css("fontSize","".concat(t++,"px"))})),e(".single-fz-minor").on("click",(function(i){i.preventDefault(),t>16&&e("p",".ps-post-content").css("fontSize","".concat(t--,"px"))}))}}(jQuery)},778:()=>{var e;(e=jQuery)(".fotorama").length&&e(".fotorama").fotorama({width:"100%",ratio:16/9,allowfullscreen:!0,nav:"thumbs",spinner:{lines:13,color:"rgba(0, 0, 0, .75)"}})},656:()=>{var e,t,i,n,s,o;e=jQuery,t=new Date,i=String(t.getDate()).padStart(2,"0"),n=["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setemrbro","Outubro","Novembro","Dezembro"][t.getMonth()],s=t.getHours().toString().padStart(2,"0"),o=t.getMinutes().toString().padStart(2,"0"),e(".current-date").html(i+" de "+n),e(".current-hour").html("".concat(s,":").concat(o))},60:()=>{jQuery(".epb-main-menu__news--list").cycle()},312:()=>{var e;(e=jQuery)(".ps-toggle-offcanvas").on("click",(function(t){t.preventDefault(),e(".ps-offcanvas-menu, .ps-offcanvas-over").toggleClass("active")}))},284:()=>{var e;(e=jQuery)(".ps-one-minute").length&&(e(".ps-one-minute--nav-item").on("click",(function(t){t.stopImmediatePropagation(),t.preventDefault();var i=e(this).data("video-id");e(this).addClass("active").siblings().removeClass("active"),e(".ps-one-minute--figure").attr("title",e(this).attr("title")).attr("data-video-id",i).find("img").attr({src:"https://img.youtube.com/vi/".concat(i,"/hqdefault.jpg"),alt:e(this).attr("title")})})),e(".ps-one-minute--figure").on("click",(function(t){t.preventDefault();var i=e(this).attr("data-video-id");e("iframe","#videoHomeModal").attr("src","https://www.youtube.com/embed/"+i)})),e("#videoHomeModal").on("hidden.bs.modal",(function(t){e(this).find("iframe").attr("src","")}))),e(".ps-home-reels").length&&e("a",".ps-home-reels--nav-item").on("click",(function(t){t.preventDefault();var i=e(this).attr("data-video-id");e("iframe","#videoHomeModal").attr("src","https://www.youtube.com/embed/"+i)}))},110:()=>{!function(e){if(e("#ps-radios-online--player").length){var t=document.getElementById("ps-radios-online--player"),i=document.getElementById("ps-top-player"),n=e(".radios-online-player");e("#radios-online").on("change",(function(){var s=e(this).find(":selected").val(),o=e(this).find(":selected").text();i.pause(),n.addClass("active"),e(".ps-radios-online--name").text(o),t.setAttribute("src",s),t.play()})),e(".ps-radios-online--close").on("click",(function(e){e.preventDefault(),n.removeClass("active"),t.pause()}))}}(jQuery)},304:()=>{!function(e){if(e(".ps-audios").length){var t=document.getElementById("ps-radios-online--player"),i=document.getElementById("ps-top-player"),n=e(".radios-online-player");e("a",".ps-audios--nav").on("click",(function(s){if(s.preventDefault(),e(this).hasClass("active"))e(this).removeClass("active"),n.removeClass("active"),t.pause();else{e(this).addClass("active").siblings().removeClass("active");var o=e(this).text(),a=e(this).data("audio");i.pause(),n.addClass("active"),e(".ps-radios-online--name").text(o),t.setAttribute("src",a),t.play()}})),t.addEventListener("ended",(function(){n.removeClass("active"),t.pause(),e("a",".ps-audios--nav").each((function(){e(this).removeClass("active")}))})),e(".ps-radios-online--close").on("click",(function(e){e.preventDefault(),n.removeClass("active"),t.pause()}))}}(jQuery)},659:()=>{var e,t,i;e=jQuery,t=document.getElementById("ps-radios-online--player"),i=e(".radios-online-player"),e("a",".ps-top-radio, .ps-top-mobile-radio").on("click",(function(n){n.preventDefault(),t.pause(),i.removeClass("active");var s=document.getElementById("ps-top-player");e(this).hasClass("active")?(e(this).removeClass("active"),e("> i",this).removeClass("fa-circle-pause").addClass("fa-circle-play"),s.pause()):(e(this).addClass("active"),e("> i",this).removeClass("fa-circle-play").addClass("fa-circle-pause"),s.play())})),e.ajax({url:"https://player.jnbhost.com.br/proxy/7126/currentsong",type:"GET",success:function(t){e("span",".ps-top-playlist").html("Tocando agora: "+t)},error:function(){e("span",".ps-top-playlist").html("Estamos fora do ar")}})},256:()=>{!function(e){if(e(".ps-post-title").length&&e(".ps-post-content").length){e(".single-read-post").on("click",(function(t){t.preventDefault();var i=e(".ps-post-title--text").text(),n=e(".ps-post-content--text").text(),s=new SpeechSynthesisUtterance(i+" "+n);s.lang="pt-br",e(this).hasClass("active")?(e(this).removeClass("active").find("> i").removeClass("fa-volume-xmark").addClass("fa-volume-off"),speechSynthesis.cancel(s)):(e(this).addClass("active").find("> i").removeClass("fa-volume-off").addClass("fa-volume-xmark"),speechSynthesis.speak(s))}))}}(jQuery)},937:()=>{var e,t;e=jQuery,t=0,e(window).on("scroll",(function(){var i=e(this).scrollTop();i>t||i<=200?e(".ps-scroll-menu").removeClass("active"):e(".ps-scroll-menu").addClass("active"),t=i}))},887:()=>{var e;(e=jQuery)(".ps-toggle-search").on("click",(function(){e(".ps-search-content").hasClass("active")?(e(".ps-search-content").removeClass("active"),e("> i",this).removeClass("fa-xmark").addClass("fa-magnifying-glass")):(e(".ps-search-content").addClass("active"),e("input",".ps-search-content").eq(0).trigger("focus"),e("> i",this).removeClass("fa-magnifying-glass").addClass("fa-xmark"))}))},116:()=>{jQuery(".ps-slide-news").cycle()},376:()=>{var e;e=jQuery,localStorage.getItem("epb_location_city")?e(".current-city").html(localStorage.getItem("epb_location_city")+", "):(new BDCReverseGeocode).getClientLocation((function(t){localStorage.setItem("epb_location_city",t.city),e(".current-city").html(localStorage.getItem("epb_location_city")+", ")}))},680:()=>{var e;(e=jQuery)("a",".ps-videos-home--nav").on("click",(function(t){t.preventDefault();var i=e(this).data("youtube-code"),n=e(this).attr("href"),s=e(this).attr("title");e(this).addClass("active"),e(this).siblings().removeClass("active"),e(".ps-videos-home--thumb").css("backgroundImage","url(https://img.youtube.com/vi/"+i+"/hqdefault.jpg)"),e(".ps-videos-home--thumb").attr("data-youtube-code",i),e(".ps-videos-home--thumb").attr("title",s),e(".ps-videos-home--read").attr("title",s),e(".ps-videos-home--read").attr("href",n)})),e(".ps-videos-home--thumb").on("click",(function(t){t.preventDefault();var i=e(this).attr("data-youtube-code");e("iframe","#videoHomeModal").attr("src","https://www.youtube.com/embed/"+i)})),e("a",".ps-videos-home--header").on("click",(function(t){t.preventDefault(),e(this).removeClass("disabled"),e(this).siblings().addClass("disabled"),e(this).hasClass("ps-videos-home-show")?(e(".ps-videos-home--content").each((function(){e(this).addClass("active")})),e(".ps-videos-home--tv").each((function(){e(this).removeClass("active")}))):(e(".ps-videos-home--content").each((function(){e(this).removeClass("active")})),e(".ps-videos-home--tv").each((function(){e(this).addClass("active")})))})),e("[data-video-code]").length&&e("[data-video-code]").on("click",(function(t){t.preventDefault(),e("html, body").scrollTop(0);var i=e(this).attr("href"),n=e(this).data("video-code"),s=e(this).attr("title");e(".ps-single-video--iframe").attr("src","https://www.youtube.com/embed/"+n),e("a",".ps-single-video--title").text(s),e("a",".ps-single-video--title").attr("title",s),e("a",".ps-single-video--title").attr("href",i),e(".ps-single-video--btn").attr("title",s),e(".ps-single-video--btn").attr("href",i)}))},202:()=>{var e,t,i;e=jQuery,(new BDCReverseGeocode).getClientCoordinates((function(n){localStorage.setItem("epb_location_lat",n.coords.latitude),localStorage.setItem("epb_location_lon",n.coords.longitude),t=localStorage.getItem("epb_location_lat"),i=localStorage.getItem("epb_location_lon"),e.ajax({url:"https://api.openweathermap.org/data/2.5/weather?lat=".concat(t,"&lon=").concat(i,"&units=metric&appid=").concat("97e4a06894a76c6c2eaa91f28272752d")}).done((function(t){e(".temp-max").html('<i class="fa-solid fa-temperature-arrow-up"></i> '.concat(parseInt(t.main.temp_max),"°")),e(".temp-min").html('<i class="fa-solid fa-temperature-arrow-down"></i> '.concat(parseInt(t.main.temp_min),"°"))}))}))},366:()=>{}},i={};function n(e){var s=i[e];if(void 0!==s)return s.exports;var o=i[e]={exports:{}};return t[e](o,o.exports,n),o.exports}n.m=t,e=[],n.O=(t,i,s,o)=>{if(!i){var a=1/0;for(d=0;d<e.length;d++){for(var[i,s,o]=e[d],r=!0,l=0;l<i.length;l++)(!1&o||a>=o)&&Object.keys(n.O).every((e=>n.O[e](i[l])))?i.splice(l--,1):(r=!1,o<a&&(a=o));if(r){e.splice(d--,1);var c=s();void 0!==c&&(t=c)}}return t}o=o||0;for(var d=e.length;d>0&&e[d-1][2]>o;d--)e[d]=e[d-1];e[d]=[i,s,o]},n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var i in t)n.o(t,i)&&!n.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={773:0,170:0};n.O.j=t=>0===e[t];var t=(t,i)=>{var s,o,[a,r,l]=i,c=0;if(a.some((t=>0!==e[t]))){for(s in r)n.o(r,s)&&(n.m[s]=r[s]);if(l)var d=l(n)}for(t&&t(i);c<a.length;c++)o=a[c],n.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return n.O(d)},i=self.webpackChunkportalsertao=self.webpackChunkportalsertao||[];i.forEach(t.bind(null,0)),i.push=t.bind(null,i.push.bind(i))})(),n.O(void 0,[170],(()=>n(641)));var s=n.O(void 0,[170],(()=>n(366)));s=n.O(s)})();
//# sourceMappingURL=app.js.map