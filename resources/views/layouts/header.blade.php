{{-- <header class="site-header group/header absolute inset-x-0 top-0 z-50 text-white transition-[background,shadow] [&amp;.lqd-is-sticky]:text-black" x-data="{ navOffsetTop: $refs.navbar.offsetTop - parseInt(getComputedStyle($refs.navbar).marginTop, 10), isSticky: false }" x-init="window.scrollY > navOffsetTop &amp;&amp; (isSticky = true)" @resize.window.debounce.500ms="navOffsetTop = $refs.navbar.offsetTop - parseInt(getComputedStyle($refs.navbar).marginTop, 10)" @scroll.window="window.scrollY > navOffsetTop ? (isSticky = true) : (isSticky = false)" :class="{ 'lqd-is-sticky': isSticky }">
   <nav class="site-header-nav relative flex items-center justify-between border-b border-white/10 px-7 py-4 h-[75px] text-xs opacity-0 transition-all duration-500 group-[.lqd-is-sticky]/header:fixed group-[.lqd-is-sticky]/header:top-0 group-[.lqd-is-sticky]/header:w-full group-[.lqd-is-sticky]/header:border-black group-[.lqd-is-sticky]/header:border-opacity-5 group-[&amp;.lqd-is-sticky]/header:bg-white group-[.page-loaded]/body:opacity-100 group-[&amp;.lqd-is-sticky]/header:shadow-[0_4px_20px_rgba(0,0,0,0.03)] max-sm:px-2" id="frontend-local-navbar" x-ref="navbar">
      <a class="site-logo relative basis-1/3 max-lg:basis-1/3" href="" 
      x-data="{ isMobile: window.innerWidth < 640 }" 
      @resize.window="isMobile = window.innerWidth < 640">
      
       <!-- Desktop Logo -->
       <img x-show="!isMobile" x-cloak
            class="absolute start-0 top-1/2 -translate-y-1/2 translate-x-3 opacity-0 transition-all group-[.lqd-is-sticky]/header:translate-x-0 group-[.lqd-is-sticky]/header:opacity-100"
            src="{{ asset('images/svg/header_logo.svg') }}" alt="Kraftweb">
   
       <img x-show="!isMobile" x-cloak
            class="transition-all group-[.lqd-is-sticky]/header:peer-first:translate-x-2 group-[.lqd-is-sticky]/header:peer-first:opacity-0"
            src="{{ asset('images/svg/footer_logo.svg') }}" alt="kraftweb">
   
       <!-- Mobile Logo -->
       <img x-show="isMobile" x-cloak
       class="transition-all group-[.lqd-is-sticky]/header:peer-first:translate-x-2 group-[.lqd-is-sticky]/header:peer-first:opacity-0"
       src="{{ asset('images/svg/header_phone_logo.svg') }}" alt="kraftweb Mobile">
       
       <img x-show="isMobile" x-cloak
            class="absolute start-0 top-1/2 -translate-y-1/2 translate-x-3 opacity-0 transition-all group-[.lqd-is-sticky]/header:translate-x-0 group-[.lqd-is-sticky]/header:opacity-100"
            src="{{ asset('images/svg/footer_phone_logo.svg') }}" alt="Kraftweb Mobile">
   </a>
   
      <div class="site-nav-container basis-1/3 transition-all max-lg:absolute max-lg:right-0 max-lg:top-full max-lg:max-h-0 max-lg:w-full max-lg:overflow-hidden max-lg:bg-[#343C57] max-lg:text-white [&amp;.lqd-is-active]:max-lg:max-h-[calc(100vh-150px)]">
         <div class="max-lg:max-h-[inherit] max-lg:overflow-y-scroll">
            <ul class="flex items-center justify-center gap-14 whitespace-nowrap text-center max-xl:gap-10 max-lg:flex-col max-lg:items-start max-lg:gap-5 max-lg:p-10">
               <li>
                  <a href="{{ route('home') }}" target="_self" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10 active">
                  Home
                  </a>
               </li>
               <li>
                  <a href="{{ route('about') }}" target="_self" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10">
                  About
                  </a>
               </li>
               <li>
                  <a href="{{ route('features') }}" target="_self" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10">
                  Features
                  </a>
               </li>
               <li>
                  <a href="{{ route('how-it-works') }}" target="_self" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10">
                  How it Works
                  </a>
               </li>
               <li>
                  <a href="{{ route('home') }}/#pricing" target="_self" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10">
                  Pricing
                  </a>
               </li>
               <li>
                  <a href="{{ route('home') }}/#faq" target="_self" class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10">
                  FAQ
                  </a>
               </li>
            </ul>
            <div class="group relative -mt-3 block border-t border-white/5 px-10 pb-5 pt-6 md:hidden">
               <p class="mb-3 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                     <path d="M3.6 9h16.8"></path>
                     <path d="M3.6 15h16.8"></path>
                     <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                     <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                  </svg>
                  Languages
               </p>
               <a class="block border-b border-black border-opacity-5 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/de" rel="alternate" hreflang="de">🇩🇪
               Deutsch</a>
               <a class="block border-b border-black border-opacity-5 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/en" rel="alternate" hreflang="en">🇺🇸
               English</a>
               <a class="block border-b border-black border-opacity-5 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/es" rel="alternate" hreflang="es">🇪🇸
               español</a>
               <a class="block border-b border-black border-opacity-5 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/fr" rel="alternate" hreflang="fr">🇫🇷
               français</a>
               <a class="block border-b border-black border-opacity-5 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/ar" rel="alternate" hreflang="ar">🇦🇪
               العربية</a>
            </div>
         </div>
      </div>
      <div class="flex basis-1/3 justify-end gap-2 max-lg:basis-2/3">
         <div class="group relative hidden md:block">
            <button class="size-10 inline-flex items-center justify-center rounded-full border-2 border-solid border-white !border-opacity-20 transition-colors before:absolute before:end-0 before:top-full before:h-4 before:w-full group-hover:!border-opacity-100 group-hover:bg-white group-hover:text-black group-[.lqd-is-sticky]/header:border-black group-[.lqd-is-sticky]/header:group-hover:bg-black group-[.lqd-is-sticky]/header:group-hover:text-white">
               <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                  <path d="M3.6 9h16.8"></path>
                  <path d="M3.6 15h16.8"></path>
                  <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                  <path d="M12.5 3a17 17 0 0 1 0 18"></path>
               </svg>
            </button>
            <div class="pointer-events-none absolute end-0 top-[calc(100%+1rem)] min-w-[145px] translate-y-2 rounded-md bg-white text-black opacity-0 shadow-lg transition-all group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100">
               <a class="block border-b border-black border-opacity-5 px-3 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/de" rel="alternate" hreflang="de">🇩🇪
               Deutsch</a>
               <a class="block border-b border-black border-opacity-5 px-3 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/en" rel="alternate" hreflang="en">🇺🇸
               English</a>
               <a class="block border-b border-black border-opacity-5 px-3 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/es" rel="alternate" hreflang="es">🇪🇸
               español</a>
               <a class="block border-b border-black border-opacity-5 px-3 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/fr" rel="alternate" hreflang="fr">🇫🇷
               français</a>
               <a class="block border-b border-black border-opacity-5 px-3 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="/ar" rel="alternate" hreflang="ar">🇦🇪
               العربية</a>
            </div>
         </div>
         <a class="relative inline-flex items-center overflow-hidden rounded-lg border-[2px] border-white !border-opacity-10 px-4 py-2 font-medium text-white transition-all duration-300 hover:scale-105 hover:border-black hover:bg-black hover:text-white hover:shadow-lg group-[.lqd-is-sticky]/header:border-black group-[.lqd-is-sticky]/header:text-black group-[.lqd-is-sticky]/header:hover:text-white" href="/login">
         Sign In
         </a>
         <a class="relative inline-flex items-center overflow-hidden rounded-lg border-[2px] border-white !border-opacity-0 bg-white !bg-opacity-10 px-4 py-2 font-medium text-white transition-all duration-300 hover:scale-105 hover:border-black hover:bg-black hover:!bg-opacity-100 hover:text-white hover:shadow-lg group-[.lqd-is-sticky]/header:bg-black group-[.lqd-is-sticky]/header:text-black group-[.lqd-is-sticky]/header:hover:!bg-opacity-100 group-[.lqd-is-sticky]/header:hover:text-white" href="/register">
         Join Hub
         </a>
         <button class="mobile-nav-trigger size-10 group flex shrink-0 items-center justify-center rounded-full bg-white !bg-opacity-10 group-[.lqd-is-sticky]/header:bg-black lg:hidden">
         <span class="flex w-4 flex-col gap-1">
         <span class="inline-flex h-[2px] w-full bg-white transition-transform first:origin-left last:origin-right group-[.lqd-is-sticky]/header:bg-black group-[&amp;.lqd-is-active]:first:-translate-y-[2px] group-[&amp;.lqd-is-active]:first:translate-x-[3px] group-[&amp;.lqd-is-active]:first:rotate-45 group-[&amp;.lqd-is-active]:last:-translate-x-[2px] group-[&amp;.lqd-is-active]:last:-translate-y-[8px] group-[&amp;.lqd-is-active]:last:-rotate-45"></span>
         <span class="inline-flex h-[2px] w-full bg-white transition-transform first:origin-left last:origin-right group-[.lqd-is-sticky]/header:bg-black group-[&amp;.lqd-is-active]:first:-translate-y-[2px] group-[&amp;.lqd-is-active]:first:translate-x-[3px] group-[&amp;.lqd-is-active]:first:rotate-45 group-[&amp;.lqd-is-active]:last:-translate-x-[2px] group-[&amp;.lqd-is-active]:last:-translate-y-[8px] group-[&amp;.lqd-is-active]:last:-rotate-45"></span>
         </span>
         </button>
      </div>
   </nav>
   <div class="fixed z-50 hidden invisible opacity-0 transition-opacity group-[.lqd-is-sticky]/header:opacity-100 group-[.lqd-is-sticky]/header:visible md:block start-24 bottom-6">
      <a class="flex items-center gap-5 rounded-xl bg-white px-3 py-3 text-[12px] text-[#002A40] text-opacity-60 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:shadow-md" data-fslightbox="html5-youtube-videos" href="https://youtu.be/galNNnEcK7I">
         <span class="lqd-is-in-view inline-flex shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-[#3655df] via-[#A068FA] via-70% to-[#327BD1]">
            <svg style="padding: 16px;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
               <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="#fff"></path>
            </svg>
         </span>
         <span class="[&amp;_strong]:block">See it in action <strong class="text-[0.9rem] text-black">How it works? &nbsp;</strong></span>
      </a>
   </div>
</header>
  --}}
  
<header class="site-header group/header absolute inset-x-0 top-0 z-50 text-white transition-[background,shadow] [&amp;.lqd-is-sticky]:text-black" x-data="{ navOffsetTop: $refs.navbar.offsetTop - parseInt(getComputedStyle($refs.navbar).marginTop, 10), isSticky: false }" x-init="window.scrollY > navOffsetTop &amp;&amp; (isSticky = true)" @resize.window.debounce.500ms="navOffsetTop = $refs.navbar.offsetTop - parseInt(getComputedStyle($refs.navbar).marginTop, 10)" @scroll.window="window.scrollY > navOffsetTop ? (isSticky = true) : (isSticky = false)" :class="{ 'lqd-is-sticky': isSticky }">
   <nav class="site-header-nav relative flex items-center justify-between border-b border-white/10 px-7 py-4 h-[75px] text-xs opacity-0 transition-all duration-500 group-[.lqd-is-sticky]/header:fixed group-[.lqd-is-sticky]/header:top-0 group-[.lqd-is-sticky]/header:w-full group-[.lqd-is-sticky]/header:border-black group-[.lqd-is-sticky]/header:border-opacity-5 group-[&amp;.lqd-is-sticky]/header:bg-white group-[.page-loaded]/body:opacity-100 group-[&amp;.lqd-is-sticky]/header:shadow-[0_4px_20px_rgba(0,0,0,0.03)] max-sm:px-2" id="frontend-local-navbar" x-ref="navbar">
      <a class="site-logo relative basis-1/3 max-lg:basis-1/3" href="" 
      x-data="{ isMobile: window.innerWidth < 640 }" 
      @resize.window="isMobile = window.innerWidth < 640">
      
       <!-- Desktop Logo -->
       <img x-show="!isMobile" x-cloak
            class="absolute start-0 top-1/2 -translate-y-1/2 translate-x-3 opacity-0 transition-all group-[.lqd-is-sticky]/header:translate-x-0 group-[.lqd-is-sticky]/header:opacity-100"
            src="{{ asset('images/svg/header_logo.svg') }}" alt="Kraftweb">
   
       <img x-show="!isMobile" x-cloak
            class="transition-all group-[.lqd-is-sticky]/header:peer-first:translate-x-2 group-[.lqd-is-sticky]/header:peer-first:opacity-0"
            src="{{ asset('images/svg/footer_logo.svg') }}" alt="kraftweb">
   
       <!-- Mobile Logo -->
       <img x-show="isMobile" x-cloak
       class="transition-all group-[.lqd-is-sticky]/header:peer-first:translate-x-2 group-[.lqd-is-sticky]/header:peer-first:opacity-0"
       src="{{ asset('images/svg/header_phone_logo.svg') }}" alt="kraftweb Mobile">
       
       <img x-show="isMobile" x-cloak
            class="absolute start-0 top-1/2 -translate-y-1/2 translate-x-3 opacity-0 transition-all group-[.lqd-is-sticky]/header:translate-x-0 group-[.lqd-is-sticky]/header:opacity-100"
            src="{{ asset('images/svg/footer_phone_logo.svg') }}" alt="Kraftweb Mobile">
    </a>
   
      <div class="site-nav-container basis-1/3 transition-all max-lg:absolute max-lg:right-0 max-lg:top-full max-lg:max-h-0 max-lg:w-full max-lg:overflow-hidden max-lg:bg-[#343C57] max-lg:text-white [&amp;.lqd-is-active]:max-lg:max-h-[calc(100vh-150px)]">
         <div class="max-lg:max-h-[inherit] max-lg:overflow-y-scroll">
            <ul class="flex items-center justify-center gap-14 whitespace-nowrap text-center max-xl:gap-10 max-lg:flex-col max-lg:items-start max-lg:gap-5 max-lg:p-10">
               @foreach ($headerData->nav_links as $link)
               <li>
                   <a href="{{ $link['url'] }}" target="_self" 
                      class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10 
                      {{ (request()->is('/') && $link['title'] === 'Home') || request()->is(trim(parse_url($link['url'], PHP_URL_PATH), '/')) ? 'active' : '' }}">
                       {{ $link['title'] }}
                   </a>
               </li>
               @endforeach
               
            </ul>
            <div class="group relative -mt-3 block border-t border-white/5 px-10 pb-5 pt-6 md:hidden">
               <p class="mb-3 flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                     <path d="M3.6 9h16.8"></path>
                     <path d="M3.6 15h16.8"></path>
                     <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                     <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                  </svg>
                  Languages
               </p>
               @foreach ($headerData->nav_links as $link)
               <li>
                   <a href="{{ $link['url'] }}" target="_self" 
                      class="relative before:absolute before:-inset-x-4 before:-inset-y-2 before:scale-75 before:rounded-lg before:bg-current before:opacity-0 before:transition-all hover:before:scale-100 hover:before:opacity-10 [&.active]:before:scale-100 [&.active]:before:opacity-10 {{ request()->url() === $link['url'] ? 'active' : '' }}">
                       {{ $link['title'] }}
                   </a>
               </li>
               @endforeach
               
               
               
            </div>
         </div>
      </div>
      <div class="flex basis-1/3 justify-end gap-2 max-lg:basis-2/3">
         <div class="group relative hidden md:block">
            <button class="size-10 inline-flex items-center justify-center rounded-full border-2 border-solid border-white !border-opacity-20 transition-colors before:absolute before:end-0 before:top-full before:h-4 before:w-full group-hover:!border-opacity-100 group-hover:bg-white group-hover:text-black group-[.lqd-is-sticky]/header:border-black group-[.lqd-is-sticky]/header:group-hover:bg-black group-[.lqd-is-sticky]/header:group-hover:text-white">
               <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                  <path d="M3.6 9h16.8"></path>
                  <path d="M3.6 15h16.8"></path>
                  <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                  <path d="M12.5 3a17 17 0 0 1 0 18"></path>
               </svg>
            </button>
            <div class="pointer-events-none absolute end-0 top-[calc(100%+1rem)] min-w-[145px] translate-y-2 rounded-md bg-white text-black opacity-0 shadow-lg transition-all group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100">
               @foreach ($headerData->languages as $language)
               <a class="block border-b border-black border-opacity-5 px-3 py-3 transition-colors last:border-none hover:bg-black hover:bg-opacity-5" href="{{ $language['url'] }}" rel="alternate" hreflang="{{ $language['code'] }}">
                  {{ $language['name'] }}
               </a>
               @endforeach  
            </div>
         </div>
         <a class="relative inline-flex items-center overflow-hidden rounded-lg border-[2px] border-white !border-opacity-10 px-4 py-2 font-medium text-white transition-all duration-300 hover:scale-105 hover:border-black hover:bg-black hover:text-white hover:shadow-lg group-[.lqd-is-sticky]/header:border-black group-[.lqd-is-sticky]/header:text-black group-[.lqd-is-sticky]/header:hover:text-white" href="{{ $headerData->sign_in_link }}">
         Sign In
         </a>
         <a class="relative inline-flex items-center overflow-hidden rounded-lg border-[2px] border-white !border-opacity-0 bg-white !bg-opacity-10 px-4 py-2 font-medium text-white transition-all duration-300 hover:scale-105 hover:border-black hover:bg-black hover:!bg-opacity-100 hover:text-white hover:shadow-lg group-[.lqd-is-sticky]/header:bg-black group-[.lqd-is-sticky]/header:text-black group-[.lqd-is-sticky]/header:hover:!bg-opacity-100 group-[.lqd-is-sticky]/header:hover:text-white" href="{{ $headerData->join_link }}">
         Join Hub
         </a>
         <button class="mobile-nav-trigger size-10 group flex shrink-0 items-center justify-center rounded-full bg-white !bg-opacity-10 group-[.lqd-is-sticky]/header:bg-black lg:hidden">
         <span class="flex w-4 flex-col gap-1">
         <span class="inline-flex h-[2px] w-full bg-white transition-transform first:origin-left last:origin-right group-[.lqd-is-sticky]/header:bg-black group-[&amp;.lqd-is-active]:first:-translate-y-[2px] group-[&amp;.lqd-is-active]:first:translate-x-[3px] group-[&amp;.lqd-is-active]:first:rotate-45 group-[&amp;.lqd-is-active]:last:-translate-x-[2px] group-[&amp;.lqd-is-active]:last:-translate-y-[8px] group-[&amp;.lqd-is-active]:last:-rotate-45"></span>
         <span class="inline-flex h-[2px] w-full bg-white transition-transform first:origin-left last:origin-right group-[.lqd-is-sticky]/header:bg-black group-[&amp;.lqd-is-active]:first:-translate-y-[2px] group-[&amp;.lqd-is-active]:first:translate-x-[3px] group-[&amp;.lqd-is-active]:first:rotate-45 group-[&amp;.lqd-is-active]:last:-translate-x-[2px] group-[&amp;.lqd-is-active]:last:-translate-y-[8px] group-[&amp;.lqd-is-active]:last:-rotate-45"></span>
         </span>
         </button>
      </div>
   </nav>
   <div class="fixed z-50 hidden invisible opacity-0 transition-opacity group-[.lqd-is-sticky]/header:opacity-100 group-[.lqd-is-sticky]/header:visible md:block start-24 bottom-6">
      <a class="flex items-center gap-5 rounded-xl bg-white px-3 py-3 text-[12px] text-[#002A40] text-opacity-60 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:shadow-md" data-fslightbox="html5-youtube-videos" href="https://youtu.be/galNNnEcK7I">
         <span class="lqd-is-in-view inline-flex shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-[#3655df] via-[#A068FA] via-70% to-[#327BD1]">
            <svg style="padding: 16px;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
               <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="#fff"></path>
            </svg>
         </span>
         <span class="[&amp;_strong]:block" href="{{ $headerData->promo_video_link }}">See it in action <strong class="text-[0.9rem] text-black">How it works? &nbsp;</strong></span>
      </a>
   </div>
</header>
 