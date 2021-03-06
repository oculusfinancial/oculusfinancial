$(document).foundation();


/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-svgasimg-setclasses !*/
!function(n,e,t){function o(n,e){return typeof n===e}function s(){var n,e,t,s,i,a,l;for(var u in f)if(f.hasOwnProperty(u)){if(n=[],e=f[u],e.name&&(n.push(e.name.toLowerCase()),e.options&&e.options.aliases&&e.options.aliases.length))for(t=0;t<e.options.aliases.length;t++)n.push(e.options.aliases[t].toLowerCase());for(s=o(e.fn,"function")?e.fn():e.fn,i=0;i<n.length;i++)a=n[i],l=a.split("."),1===l.length?Modernizr[l[0]]=s:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=s),r.push((s?"":"no-")+l.join("-"))}}function i(n){var e=c.className,t=Modernizr._config.classPrefix||"";if(d&&(e=e.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");e=e.replace(o,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(e+=" "+t+n.join(" "+t),d?c.className.baseVal=e:c.className=e)}function a(n,e){if("object"==typeof n)for(var t in n)u(n,t)&&a(t,n[t]);else{n=n.toLowerCase();var o=n.split("."),s=Modernizr[o[0]];if(2==o.length&&(s=s[o[1]]),"undefined"!=typeof s)return Modernizr;e="function"==typeof e?e():e,1==o.length?Modernizr[o[0]]=e:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=e),i([(e&&0!=e?"":"no-")+o.join("-")]),Modernizr._trigger(n,e)}return Modernizr}var r=[],f=[],l={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(n,e){var t=this;setTimeout(function(){e(t[n])},0)},addTest:function(n,e,t){f.push({name:n,fn:e,options:t})},addAsyncTest:function(n){f.push({name:null,fn:n})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var u,c=e.documentElement,d="svg"===c.nodeName.toLowerCase();!function(){var n={}.hasOwnProperty;u=o(n,"undefined")||o(n.call,"undefined")?function(n,e){return e in n&&o(n.constructor.prototype[e],"undefined")}:function(e,t){return n.call(e,t)}}(),l._l={},l.on=function(n,e){this._l[n]||(this._l[n]=[]),this._l[n].push(e),Modernizr.hasOwnProperty(n)&&setTimeout(function(){Modernizr._trigger(n,Modernizr[n])},0)},l._trigger=function(n,e){if(this._l[n]){var t=this._l[n];setTimeout(function(){var n,o;for(n=0;n<t.length;n++)(o=t[n])(e)},0),delete this._l[n]}},Modernizr._q.push(function(){l.addTest=a}),Modernizr.addTest("svgasimg",e.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")),s(),i(r),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();n.Modernizr=Modernizr}(window,document);

// SVG / PNG
  if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function () {
    return $(this).attr('src').replace('.svg', '.png');
  });
}


//add class that animates the titles on each page using CSS transitions defined in the main SCSS
$(function() {
  $('#title').addClass('loadedanimation');
});



//add active class to clicked menu items dynamically
$(function(){
  var url = window.location.pathname,
      urlRegExp = new RegExp(url.replace(/\/$/,'') + "$");
       // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there

      // grab every link from the navigation
      $('nav a').each(function(){
          // and test its normalized href against the url pathname regexp
          if(url == '/'){
            console.log('You are on the homepage');
            $(".homeLink").parent().addClass('active');
        } else if (urlRegExp.test(this.href.replace(/\/$/,''))) {
            $(this).parent().addClass('active');
        }
      });
});


// Tabs Hash

function tabDeepLink(selector) {
    $(selector).each(function() {
        var $tabs = $(this);

        // match page load anchor
        var anchor = window.location.hash;
        if (anchor.length && $tabs.find('[href="'+anchor+'"]').length) {
            $tabs.foundation('selectTab', $(anchor));
            // roll up a little to show the header
            var offset = $tabs.offset();
            $(window).load(function() {
                $('html, body').animate({ scrollTop: (offset.top - 200) }, 500);
            });
        }

        // append the hash on click
        $tabs.on('change.zf.tabs', function() {
            var anchor = $tabs.find('.tabs-title.is-active a').attr('href');
            history.pushState({}, "", anchor);
        });
    });
}

// turn this on for all the tabs or a subset
tabDeepLink('.tabs');


// Reload hash links

$('.hashlink').click(function(event){
    location.reload();
    window.scrollTo(0,0);
});

// TimelineLite for title animation hide
// $(function() {
    (new TimelineLite())
	  .to($('#video1-image'), 0, {autoAlpha:1, delay:5})
      .to($('.outer'), 3, {autoAlpha:0, delay:0})
// });


//add read more functionality to long paragraphs
// $('article').readmore({
//   speed: 75,
//   lessLink: '<a href="#">Read less</a>'
// });
