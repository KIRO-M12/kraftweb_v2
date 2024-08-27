import{f as b,e as a,m as w,c as v,L as C}from"./clipboard-4db12c4b.js";const S="modulepreload",k=function(e){return"/build/"+e},f={},g=function(i,t,s){if(!t||t.length===0)return i();const n=document.getElementsByTagName("link");return Promise.all(t.map(r=>{if(r=k(r),r in f)return;f[r]=!0;const o=r.endsWith(".css"),c=o?'[rel="stylesheet"]':"";if(!!s)for(let h=n.length-1;h>=0;h--){const d=n[h];if(d.href===r&&(!o||d.rel==="stylesheet"))return}else if(document.querySelector(`link[href="${r}"]${c}`))return;const l=document.createElement("link");if(l.rel=o?"stylesheet":S,o||(l.as="script",l.crossOrigin=""),l.href=r,document.head.appendChild(l),o)return new Promise((h,d)=>{l.addEventListener("load",h),l.addEventListener("error",()=>d(new Error(`Unable to preload CSS for ${r}`)))})})).then(()=>i()).catch(r=>{const o=new Event("vite:preloadError",{cancelable:!0});if(o.payload=r,window.dispatchEvent(o),!o.defaultPrevented)throw r})};typeof window.pusherConfig<"u"?g(()=>import("./echo-4c3fda6b.js"),[]).then(({default:e})=>{g(()=>import("./pusher-32a7bc32.js").then(i=>i.p),[]).then(({default:i})=>{window.Pusher=i;let t=window.pusherConfig;window.Echo=new e({broadcaster:"pusher",key:t.key,cluster:t.cluster,wsHost:t.wsHost??`ws-${t.cluster}.pusher.com`,wsPort:t.port??80,wssPort:t.port??443,forceTLS:(t.scheme??"https")==="https",enabledTransports:["ws","wss"]})}).catch(i=>console.log("Failed to load Pusher:",i))}).catch(e=>console.log("Failed to load Echo:",e)):console.log("window.pusherConfig is not defined.");function P(e={show:!1,focusable:!1}){return{show:e.show,focusable:e.focusable,closeModal(){this.show=!1},openModal(){this.show=!0},focusables(){let i="a, button, input:not([type='hidden']), textarea, select, details, [tabindex]:not([tabindex='-1'])";return[...this.$el.querySelectorAll(i)].filter(t=>!t.hasAttribute("disabled"))},firstFocusable(){return this.focusables()[0]},lastFocusable(){return this.focusables().slice(-1)[0]},nextFocusable(){return this.focusables()[this.nextFocusableIndex()]||this.firstFocusable()},prevFocusable(){return this.focusables()[this.prevFocusableIndex()]||this.lastFocusable()},nextFocusableIndex(){return(this.focusables().indexOf(document.activeElement)+1)%(this.focusables().length+1)},prevFocusableIndex(){return Math.max(0,this.focusables().indexOf(document.activeElement))-1},init(){this.$watch("show",i=>{i?(document.body.classList.add("overflow-y-hidden"),this.focusable!==!1&&setTimeout(()=>this.firstFocusable().focus(),100)):document.body.classList.remove("overflow-y-hidden")})}}}function p(){return p=Object.assign?Object.assign.bind():function(e){for(var i=1;i<arguments.length;i++){var t=arguments[i];for(var s in t)Object.prototype.hasOwnProperty.call(t,s)&&(e[s]=t[s])}return e},p.apply(this,arguments)}var T={strings:["These are the default values...","You know what you should do?","Use your own!","Have a great day!"],stringsElement:null,typeSpeed:0,startDelay:0,backSpeed:0,smartBackspace:!0,shuffle:!1,backDelay:700,fadeOut:!1,fadeOutClass:"typed-fade-out",fadeOutDelay:500,loop:!1,loopCount:1/0,showCursor:!0,cursorChar:"|",autoInsertCss:!0,attr:null,bindInputFocusEvents:!1,contentType:"html",onBegin:function(e){},onComplete:function(e){},preStringTyped:function(e,i){},onStringTyped:function(e,i){},onLastStringBackspaced:function(e){},onTypingPaused:function(e,i){},onTypingResumed:function(e,i){},onReset:function(e){},onStop:function(e,i){},onStart:function(e,i){},onDestroy:function(e){}},E=new(function(){function e(){}var i=e.prototype;return i.load=function(t,s,n){if(t.el=typeof n=="string"?document.querySelector(n):n,t.options=p({},T,s),t.isInput=t.el.tagName.toLowerCase()==="input",t.attr=t.options.attr,t.bindInputFocusEvents=t.options.bindInputFocusEvents,t.showCursor=!t.isInput&&t.options.showCursor,t.cursorChar=t.options.cursorChar,t.cursorBlinking=!0,t.elContent=t.attr?t.el.getAttribute(t.attr):t.el.textContent,t.contentType=t.options.contentType,t.typeSpeed=t.options.typeSpeed,t.startDelay=t.options.startDelay,t.backSpeed=t.options.backSpeed,t.smartBackspace=t.options.smartBackspace,t.backDelay=t.options.backDelay,t.fadeOut=t.options.fadeOut,t.fadeOutClass=t.options.fadeOutClass,t.fadeOutDelay=t.options.fadeOutDelay,t.isPaused=!1,t.strings=t.options.strings.map(function(l){return l.trim()}),t.stringsElement=typeof t.options.stringsElement=="string"?document.querySelector(t.options.stringsElement):t.options.stringsElement,t.stringsElement){t.strings=[],t.stringsElement.style.cssText="clip: rect(0 0 0 0);clip-path:inset(50%);height:1px;overflow:hidden;position:absolute;white-space:nowrap;width:1px;";var r=Array.prototype.slice.apply(t.stringsElement.children),o=r.length;if(o)for(var c=0;c<o;c+=1)t.strings.push(r[c].innerHTML.trim())}for(var u in t.strPos=0,t.currentElContent=this.getCurrentElContent(t),t.currentElContent&&t.currentElContent.length>0&&(t.strPos=t.currentElContent.length-1,t.strings.unshift(t.currentElContent)),t.sequence=[],t.strings)t.sequence[u]=u;t.arrayPos=0,t.stopNum=0,t.loop=t.options.loop,t.loopCount=t.options.loopCount,t.curLoop=0,t.shuffle=t.options.shuffle,t.pause={status:!1,typewrite:!0,curString:"",curStrPos:0},t.typingComplete=!1,t.autoInsertCss=t.options.autoInsertCss,t.autoInsertCss&&(this.appendCursorAnimationCss(t),this.appendFadeOutAnimationCss(t))},i.getCurrentElContent=function(t){return t.attr?t.el.getAttribute(t.attr):t.isInput?t.el.value:t.contentType==="html"?t.el.innerHTML:t.el.textContent},i.appendCursorAnimationCss=function(t){var s="data-typed-js-cursor-css";if(t.showCursor&&!document.querySelector("["+s+"]")){var n=document.createElement("style");n.setAttribute(s,"true"),n.innerHTML=`
        .typed-cursor{
          opacity: 1;
        }
        .typed-cursor.typed-cursor--blink{
          animation: typedjsBlink 0.7s infinite;
          -webkit-animation: typedjsBlink 0.7s infinite;
                  animation: typedjsBlink 0.7s infinite;
        }
        @keyframes typedjsBlink{
          50% { opacity: 0.0; }
        }
        @-webkit-keyframes typedjsBlink{
          0% { opacity: 1; }
          50% { opacity: 0.0; }
          100% { opacity: 1; }
        }
      `,document.body.appendChild(n)}},i.appendFadeOutAnimationCss=function(t){var s="data-typed-fadeout-js-css";if(t.fadeOut&&!document.querySelector("["+s+"]")){var n=document.createElement("style");n.setAttribute(s,"true"),n.innerHTML=`
        .typed-fade-out{
          opacity: 0;
          transition: opacity .25s;
        }
        .typed-cursor.typed-cursor--blink.typed-fade-out{
          -webkit-animation: 0;
          animation: 0;
        }
      `,document.body.appendChild(n)}},e}()),m=new(function(){function e(){}var i=e.prototype;return i.typeHtmlChars=function(t,s,n){if(n.contentType!=="html")return s;var r=t.substring(s).charAt(0);if(r==="<"||r==="&"){var o;for(o=r==="<"?">":";";t.substring(s+1).charAt(0)!==o&&!(1+ ++s>t.length););s++}return s},i.backSpaceHtmlChars=function(t,s,n){if(n.contentType!=="html")return s;var r=t.substring(s).charAt(0);if(r===">"||r===";"){var o;for(o=r===">"?"<":"&";t.substring(s-1).charAt(0)!==o&&!(--s<0););s--}return s},e}()),L=function(){function e(t,s){E.load(this,s,t),this.begin()}var i=e.prototype;return i.toggle=function(){this.pause.status?this.start():this.stop()},i.stop=function(){this.typingComplete||this.pause.status||(this.toggleBlinking(!0),this.pause.status=!0,this.options.onStop(this.arrayPos,this))},i.start=function(){this.typingComplete||this.pause.status&&(this.pause.status=!1,this.pause.typewrite?this.typewrite(this.pause.curString,this.pause.curStrPos):this.backspace(this.pause.curString,this.pause.curStrPos),this.options.onStart(this.arrayPos,this))},i.destroy=function(){this.reset(!1),this.options.onDestroy(this)},i.reset=function(t){t===void 0&&(t=!0),clearInterval(this.timeout),this.replaceText(""),this.cursor&&this.cursor.parentNode&&(this.cursor.parentNode.removeChild(this.cursor),this.cursor=null),this.strPos=0,this.arrayPos=0,this.curLoop=0,t&&(this.insertCursor(),this.options.onReset(this),this.begin())},i.begin=function(){var t=this;this.options.onBegin(this),this.typingComplete=!1,this.shuffleStringsIfNeeded(this),this.insertCursor(),this.bindInputFocusEvents&&this.bindFocusEvents(),this.timeout=setTimeout(function(){t.strPos===0?t.typewrite(t.strings[t.sequence[t.arrayPos]],t.strPos):t.backspace(t.strings[t.sequence[t.arrayPos]],t.strPos)},this.startDelay)},i.typewrite=function(t,s){var n=this;this.fadeOut&&this.el.classList.contains(this.fadeOutClass)&&(this.el.classList.remove(this.fadeOutClass),this.cursor&&this.cursor.classList.remove(this.fadeOutClass));var r=this.humanizer(this.typeSpeed),o=1;this.pause.status!==!0?this.timeout=setTimeout(function(){s=m.typeHtmlChars(t,s,n);var c=0,u=t.substring(s);if(u.charAt(0)==="^"&&/^\^\d+/.test(u)){var l=1;l+=(u=/\d+/.exec(u)[0]).length,c=parseInt(u),n.temporaryPause=!0,n.options.onTypingPaused(n.arrayPos,n),t=t.substring(0,s)+t.substring(s+l),n.toggleBlinking(!0)}if(u.charAt(0)==="`"){for(;t.substring(s+o).charAt(0)!=="`"&&(o++,!(s+o>t.length)););var h=t.substring(0,s),d=t.substring(h.length+1,s+o),y=t.substring(s+o+1);t=h+d+y,o--}n.timeout=setTimeout(function(){n.toggleBlinking(!1),s>=t.length?n.doneTyping(t,s):n.keepTyping(t,s,o),n.temporaryPause&&(n.temporaryPause=!1,n.options.onTypingResumed(n.arrayPos,n))},c)},r):this.setPauseStatus(t,s,!0)},i.keepTyping=function(t,s,n){s===0&&(this.toggleBlinking(!1),this.options.preStringTyped(this.arrayPos,this));var r=t.substring(0,s+=n);this.replaceText(r),this.typewrite(t,s)},i.doneTyping=function(t,s){var n=this;this.options.onStringTyped(this.arrayPos,this),this.toggleBlinking(!0),this.arrayPos===this.strings.length-1&&(this.complete(),this.loop===!1||this.curLoop===this.loopCount)||(this.timeout=setTimeout(function(){n.backspace(t,s)},this.backDelay))},i.backspace=function(t,s){var n=this;if(this.pause.status!==!0){if(this.fadeOut)return this.initFadeOut();this.toggleBlinking(!1);var r=this.humanizer(this.backSpeed);this.timeout=setTimeout(function(){s=m.backSpaceHtmlChars(t,s,n);var o=t.substring(0,s);if(n.replaceText(o),n.smartBackspace){var c=n.strings[n.arrayPos+1];n.stopNum=c&&o===c.substring(0,s)?s:0}s>n.stopNum?(s--,n.backspace(t,s)):s<=n.stopNum&&(n.arrayPos++,n.arrayPos===n.strings.length?(n.arrayPos=0,n.options.onLastStringBackspaced(),n.shuffleStringsIfNeeded(),n.begin()):n.typewrite(n.strings[n.sequence[n.arrayPos]],s))},r)}else this.setPauseStatus(t,s,!1)},i.complete=function(){this.options.onComplete(this),this.loop?this.curLoop++:this.typingComplete=!0},i.setPauseStatus=function(t,s,n){this.pause.typewrite=n,this.pause.curString=t,this.pause.curStrPos=s},i.toggleBlinking=function(t){this.cursor&&(this.pause.status||this.cursorBlinking!==t&&(this.cursorBlinking=t,t?this.cursor.classList.add("typed-cursor--blink"):this.cursor.classList.remove("typed-cursor--blink")))},i.humanizer=function(t){return Math.round(Math.random()*t/2)+t},i.shuffleStringsIfNeeded=function(){this.shuffle&&(this.sequence=this.sequence.sort(function(){return Math.random()-.5}))},i.initFadeOut=function(){var t=this;return this.el.className+=" "+this.fadeOutClass,this.cursor&&(this.cursor.className+=" "+this.fadeOutClass),setTimeout(function(){t.arrayPos++,t.replaceText(""),t.strings.length>t.arrayPos?t.typewrite(t.strings[t.sequence[t.arrayPos]],0):(t.typewrite(t.strings[0],0),t.arrayPos=0)},this.fadeOutDelay)},i.replaceText=function(t){this.attr?this.el.setAttribute(this.attr,t):this.isInput?this.el.value=t:this.contentType==="html"?this.el.innerHTML=t:this.el.textContent=t},i.bindFocusEvents=function(){var t=this;this.isInput&&(this.el.addEventListener("focus",function(s){t.stop()}),this.el.addEventListener("blur",function(s){t.el.value&&t.el.value.length!==0||t.start()}))},i.insertCursor=function(){this.showCursor&&(this.cursor||(this.cursor=document.createElement("span"),this.cursor.className="typed-cursor",this.cursor.setAttribute("aria-hidden",!0),this.cursor.innerHTML=this.cursorChar,this.el.parentNode&&this.el.parentNode.insertBefore(this.cursor,this.el.nextSibling)))},e}();window.Typed=L;window.fetchEventSource=b;const O=localStorage.getItem("lqdDarkMode"),A=localStorage.getItem("docsViewMode"),x=localStorage.getItem("lqdNavbarShrinked");window.Alpine=a;a.plugin(w);document.addEventListener("alpine:init",()=>{a.data("modal",e=>P(e)),a.data("clipboard",e=>v(e)),a.store("navbarShrink",{active:a.$persist(!!x).as("lqdNavbarShrinked"),toggle(e){this.active=e?e==="shrink":!this.active,document.body.classList.toggle("navbar-shrinked",this.active)}}),a.data("navbarItem",()=>({dropdownOpen:!1,toggleDropdownOpen(e){this.dropdownOpen=e?e==="collapse":!this.dropdownOpen},item:{"x-ref":"item","@mouseenter"(){if(!a.store("navbarShrink").active)return;const e=this.$el.getBoundingClientRect(),i=this.$refs.item.querySelector(".lqd-navbar-dropdown");if(["y","height","bottom"].forEach(t=>this.$refs.item.style.setProperty(`--item-${t}`,`${e[t]}px`)),i){const t=i.getBoundingClientRect();["height"].forEach(s=>this.$refs.item.style.setProperty(`--dropdown-${s}`,`${t[s]}px`))}}}})),a.store("mobileNav",{navCollapse:!0,toggleNav(e){this.navCollapse=e?e==="collapse":!this.navCollapse},templatesCollapse:!0,toggleTemplates(e){this.templatesCollapse=e?e==="collapse":!this.templatesCollapse},searchCollapse:!0,toggleSearch(e){this.searchCollapse=e?e==="collapse":!this.searchCollapse}}),a.store("darkMode",{on:a.$persist(!!O).as("lqdDarkMode"),toggle(){this.on=!this.on,document.body.classList.toggle("theme-dark",this.on),document.body.classList.toggle("theme-light",!this.on)}}),a.store("appLoadingIndicator",{showing:!1,show(){this.showing=!0},hide(){this.showing=!1},toggle(){this.showing=!this.showing}}),a.store("docsViewMode",{docsViewMode:a.$persist(A||"list").as("docsViewMode"),change(e){this.docsViewMode=e}}),a.store("generatorsFilter",{init(){const e=new URLSearchParams(window.location.search);this.filter=e.get("filter")||"all"},filter:"all",changeFilter(e){if(this.filter!==e){if(!document.startViewTransition)return this.filter=e;document.startViewTransition(()=>this.filter=e)}}}),a.store("documentsFilter",{init(){const e=new URLSearchParams(window.location.search);this.sort=e.get("sort")||"created_at",this.sortAscDesc=e.get("sortAscDesc")||"desc",this.filter=e.get("filter")||"all",this.page=e.get("page")||"1"},sort:"created_at",sortAscDesc:"desc",filter:"all",page:"1",changeSort(e){e===this.sort?this.sortAscDesc=this.sortAscDesc==="desc"?"asc":"desc":this.sortAscDesc="desc",this.sort=e},changeAscDesc(e){this.ascDesc!==e&&(this.ascDesc=e)},changeFilter(e){this.filter!==e&&(this.filter=e)},changePage(e){(e===">"||e==="<")&&(e=e===">"?Number(this.page)+1:Number(this.page)-1),this.page!==e&&(this.page=e)}}),a.store("chatsFilter",{init(){const e=new URLSearchParams(window.location.search);this.filter=e.get("filter")||"all",this.setSearchStr(e.get("search")||"")},searchStr:"",setSearchStr(e){this.searchStr=e.trim().toLowerCase()},filter:"all",changeFilter(e){if(this.filter!==e){if(!document.startViewTransition)return this.filter=e;document.startViewTransition(()=>this.filter=e)}}}),a.data("generatorV2",()=>({itemsSearchStr:"",setItemsSearchStr(e){this.itemsSearchStr=e.trim().toLowerCase(),this.itemsSearchStr!==""?this.$el.closest(".lqd-generator-sidebar").classList.add("lqd-showing-search-results"):this.$el.closest(".lqd-generator-sidebar").classList.remove("lqd-showing-search-results")},sideNavCollapsed:!1,toggleSideNavCollapse(e){var i;this.sideNavCollapsed=e?e==="collapse":!this.sideNavCollapsed,this.sideNavCollapsed&&((i=tinymce==null?void 0:tinymce.activeEditor)==null||i.focus())},generatorStep:0,setGeneratorStep(e){if(e!==this.generatorStep){if(!document.startViewTransition)return this.generatorStep=Number(e);document.startViewTransition(()=>this.generatorStep=Number(e))}},selectedGenerator:null})),a.store("mobileChat",{sidebarOpen:!1,toggleSidebar(e){this.sidebarOpen=e?!1:!this.sidebarOpen}}),a.data("dropdown",({triggerType:e="hover"})=>({open:!1,toggle(i){this.open=i?i!=="collapse":!this.open,this.$refs.parent.classList.toggle("lqd-is-active",this.open)},parent:{"@mouseenter"(){e==="hover"&&this.toggle("expand")},"@mouseleave"(){e==="hover"&&this.toggle("collapse")},"@click.outside"(){this.toggle("collapse")}},trigger:{"@click.prevent"(){e==="click"&&this.toggle()}},dropdown:{}})),a.store("notifications",{notifications:[],loading:!1,add(e){this.notifications.unshift(e)},remove(e){this.notifications.splice(e,1)},markThenHref(e){const i=this.notifications.indexOf(e);if(i!==-1){var t=new FormData;t.append("id",e.id),this.loading=!0,$.ajax({url:"/dashboard/notifications/mark-as-read",type:"POST",data:t,cache:!1,contentType:!1,processData:!1,success:s=>{},error:s=>{console.error(s)},complete:()=>{this.markAsRead(i),window.location=e.link,this.loading=!1}})}},markAsRead(e){this.notifications=this.notifications.map((i,t)=>(t===e&&(i.unread=!1),i))},markAllAsRead(){this.loading=!0,$.ajax({url:"/dashboard/notifications/mark-as-read",type:"POST",success:e=>{e.success&&this.notifications.forEach((i,t)=>{this.markAsRead(t)})},error:e=>{console.error(e)},complete:()=>{this.loading=!1}})},setNotifications(e){this.notifications=e},hasUnread:function(){return this.notifications.some(e=>e.unread)}}),a.data("notifications",e=>({notifications:e||[]}))});C.start();