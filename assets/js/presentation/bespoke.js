(function(e,t,n){var r=function(e,t){var r=n.querySelector(e),s=[].slice.call(r.children,0),c=s[0],h={},p=0,v=function(e,t){if(!s[e]){return}a(h,"deactivate",w(c,t));c=s[e];s.map(m);a(h,"activate",w(c,t));f(c,"active");l(c,"inactive")},m=function(e,t){var n=t-s.indexOf(c),r=n>0?"after":"before";["before(-\\d+)?","after(-\\d+)?","active","inactive"].map(l.bind(null,e));e!==c&&["inactive",r,r+"-"+Math.abs(n)].map(f.bind(null,e))},g=function(e,t){a(h,"slide",w(s[e],t))&&v(e,t)},y=function(e){var t=s.indexOf(c)+1;a(h,"next",w(c,e))&&v(t,e)},b=function(e){var t=s.indexOf(c)-1;a(h,"prev",w(c,e))&&v(t,e)},w=function(e,t){t=t||{};t.index=s.indexOf(e);t.slide=e;return t},E={on:o.bind(null,h),off:u.bind(null,h),fire:a.bind(null,h),slide:g,next:y,prev:b,parent:r,slides:s};f(r,"parent");s.map(function(e){f(e,"slide");$(e).attr("rel",p);p++});Object.keys(t||{}).map(function(e){var n=t[e];n&&d[e](E,n===true?{}:n)});v(0);i.push(E);return E},i=[],s={},o=function(e,t,n){(e[t]||(e[t]=[])).push(n)},u=function(e,t,n){e[t]=(e[t]||[]).filter(function(e){return e!==n})},a=function(e,t,n){return(e[t]||[]).concat(e!==s&&s[t]||[]).reduce(function(e,t){return e&&t(n)!==false},true)},f=function(t,n){t.classList.add(e+"-"+n)},l=function(t,n){t.className=t.className.replace(new RegExp(e+"-"+n+"(\\s|$)","g")," ").replace(/^\s+|\s+$/g,"")},c=function(e){return function(t){i.map(function(n){n[e].call(null,t)})}},h=function(e){return{from:function(t,n){(n=n||{})[e]=true;return r(t,n)}}},p=function(e){return function(t){var r,i;n.addEventListener("keydown",function(n){var r=n.which;if(e==="X"){r===37&&t.prev();(r===32||r===39)&&t.next()}else{r===38&&t.prev();(r===32||r===40)&&t.next()}});t.parent.addEventListener("touchstart",function(t){if(t.touches.length){r=t.touches[0]["page"+e];i=0}});t.parent.addEventListener("touchmove",function(t){if(t.touches.length){t.preventDefault();i=t.touches[0]["page"+e]-r}});t.parent.addEventListener("touchend",function(){Math.abs(i)>50&&(i>0?t.prev():t.next())})}},d={horizontal:p("X"),vertical:p("Y")};t[e]={from:r,slide:c("slide"),next:c("next"),prev:c("prev"),horizontal:h("horizontal"),vertical:h("vertical"),on:o.bind(null,s),off:u.bind(null,s),plugins:d}})("bespoke",this,document)