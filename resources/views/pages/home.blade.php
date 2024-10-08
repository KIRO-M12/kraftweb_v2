@extends('layouts.master')
@section('title', 'Home')
@section('content')
{{-- <section class="site-section relative flex min-h-screen items-center justify-center overflow-hidden py-52 text-center text-white max-md:pb-16 max-md:pt-48 lqd-is-in-view" id="banner">
   <div class="absolute start-0 top-0 h-full w-full transform-gpu overflow-hidden [backface-visibility:hidden]">
      <div class="banner-bg absolute left-0 top-0 h-full w-full"></div>
   </div>
   <div class="container relative">
      <div class="mx-auto flex w-2/3 flex-col items-center max-lg:w-2/4 max-md:w-full">
         <h6 class="relative mb-8 translate-y-6 overflow-hidden rounded-2xl bg-white bg-opacity-15 px-3 py-1 text-white opacity-0 blur-lg transition-all ease-out group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100 group-[.page-loaded]/body:blur-0">
            <div class="banner-subtitle-gradient absolute -inset-3 blur-3xl transition-all duration-500 group-[.page-loaded]/body:opacity-0">
               <div class="animate-hue-rotate absolute inset-0 bg-gradient-to-br from-violet-600 to-red-500"></div>
            </div>
            <span class="relative">Empower Your</span>
            <span class="dot relative"></span>
            <span class="relative opacity-60">Vision with Strategic Digital Craftsmanship</span>
         </h6>
         <div class="text-container">
            <h1 class="banner-title mb-7 translate-y-7 font-body leading-tight font-bold -tracking-wide text-white opacity-0 transition-all ease-out group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
               Shape your
               <svg class="lqd-split-text-words inline transition-all duration-[2850ms] lightning-svg" width="47" height="62" viewBox="0 0 47 62" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                     <linearGradient id="border-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#8a85ff; stop-opacity:1" />
                        <!-- Soft lavender -->
                        <stop offset="100%" style="stop-color:#d4c7ff; stop-opacity:1" />
                        <!-- Pale violet -->
                     </linearGradient>
                  </defs>
                  <path d="M27.95 0L0 38.213H18.633V61.141L46.583 22.928H27.95V0Z" fill="none" stroke="url(#border-gradient)" />
               </svg>
               <span class="lqd-text-rotator inline-grid grid-cols-1 grid-rows-1 justify-center items-center whitespace-nowrap transition-[width] duration-200">
               <span class="lqd-text-rotator-item col-start-1 row-start-1 inline-flex translate-x-3 opacity-0 blur-sm transition-all duration-300 [&amp;.lqd-is-active]:translate-x-0 [&amp;.lqd-is-active]:opacity-100 [&amp;.lqd-is-active]:blur-0">
               <span>Digital Future</span>
               </span>
               <span class="lqd-text-rotator-item col-start-1 row-start-1 inline-flex translate-x-3 opacity-0 blur-sm transition-all duration-300 [&amp;.lqd-is-active]:translate-x-0 [&amp;.lqd-is-active]:opacity-100 [&amp;.lqd-is-active]:blur-0 lqd-is-active">
               <span>Path to Success</span>
               </span>
               <span class="lqd-text-rotator-item col-start-1 row-start-1 inline-flex translate-x-3 opacity-0 blur-sm transition-all duration-300 [&amp;.lqd-is-active]:translate-x-0 [&amp;.lqd-is-active]:opacity-100 [&amp;.lqd-is-active]:blur-0">
               <span>Strategic Advantage</span>
               </span>
               </span>
            </h1>
         </div>
         <p class="mb-7 w-3/4 text-[20px] leading-[1.25em] text-fuchsia-700 opacity-75 max-sm:w-full [&amp;_.lqd-split-text-words]:translate-y-3 [&amp;_.lqd-split-text-words]:opacity-0 [&amp;_.lqd-split-text-words]:transition-all [&amp;_.lqd-split-text-words]:ease-out group-[.page-loaded]/body:[&amp;_.lqd-split-text-words]:translate-y-0 group-[.page-loaded]/body:[&amp;_.lqd-split-text-words]:text-white group-[.page-loaded]/body:[&amp;_.lqd-split-text-words]:opacity-100">
            <span class="inline-flex lqd-split-text-words [background:inherit]" style="transition-delay:0.15s">
            Partner with us to create a tailored approach to meet your unique business goals and scale your digital presence.
            </span>
         </p>
         <div class="translate-y-3 opacity-0 transition-all delay-[450ms] group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
            <a class="inline-flex w-full items-center justify-center bg-black bg-opacity-10 px-4 py-3 text-lg font-semibold text-white transition-all duration-300 hover:bg-opacity-20" data-fslightbox="video-gallery" style="border-radius: 3rem;" href="https://youtu.be/galNNnEcK7I">
               <svg class="icon icon-tabler icon-tabler-player-play-filled me-4 bg-white" style="padding: 13px; border-radius: 2rem;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="#37393d"></path>
               </svg>
               Explore Our Work&nbsp;
            </a>
         </div>
         <br>
         <div class="translate-y-3 opacity-0 transition-all delay-[500ms] group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
            <a class="opacity-50 transition-opacity hover:opacity-100" href="#features">Learn More About Our Services</a>
         </div>
      </div>
   </div>
   <div class="banner-divider absolute inset-x-0 -bottom-[2px]">
      <svg class="h-auto w-full fill-background" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
         <path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"></path>
      </svg>
   </div>
</section> --}}
<section class="site-section relative flex min-h-screen items-center justify-center overflow-hidden py-52 text-center text-white max-md:pb-16 max-md:pt-48 lqd-is-in-view" id="banner">
    <div class="absolute start-0 top-0 h-full w-full transform-gpu overflow-hidden [backface-visibility:hidden]">
       <div class="banner-bg absolute left-0 top-0 h-full w-full"></div>
    </div>
    <div class="container relative">
       <div class="mx-auto flex w-2/3 flex-col items-center max-lg:w-2/4 max-md:w-full">
          <h6 class="relative mb-8 translate-y-6 overflow-hidden rounded-2xl bg-white bg-opacity-15 px-3 py-1 text-white opacity-0 blur-lg transition-all ease-out group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100 group-[.page-loaded]/body:blur-0">
             <div class="banner-subtitle-gradient absolute -inset-3 blur-3xl transition-all duration-500 group-[.page-loaded]/body:opacity-0">
                <div class="animate-hue-rotate absolute inset-0 bg-gradient-to-br from-violet-600 to-red-500"></div>
             </div>
             <span class="relative">{{ $bannerSection->tag_title }} <!--here should be Empower Your --></span>
             <span class="dot relative"></span>
             <span class="relative opacity-60">{{ $bannerSection->tag_subtitle }}</span>
          </h6>
          <div class="text-container">
             <h1 class="banner-title mb-7 translate-y-7 font-body leading-tight font-bold -tracking-wide text-white opacity-0 transition-all ease-out group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
                {{ $bannerSection->main_title }}
                <svg class="lqd-split-text-words inline transition-all duration-[2850ms] lightning-svg" width="47" height="62" viewBox="0 0 47 62" xmlns="http://www.w3.org/2000/svg">
                   <defs>
                      <linearGradient id="border-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                         <stop offset="0%" style="stop-color:#8a85ff; stop-opacity:1" />
                         <!-- Soft lavender -->
                         <stop offset="100%" style="stop-color:#d4c7ff; stop-opacity:1" />
                         <!-- Pale violet -->
                      </linearGradient>
                   </defs>
                   <path d="M27.95 0L0 38.213H18.633V61.141L46.583 22.928H27.95V0Z" fill="none" stroke="url(#border-gradient)" />
                </svg>
                <span class="lqd-text-rotator inline-grid grid-cols-1 grid-rows-1 justify-center items-center whitespace-nowrap transition-[width] duration-200">
                @foreach ($bannerSection->rotating_titles as $title)
                <span class="lqd-text-rotator-item col-start-1 row-start-1 inline-flex translate-x-3 opacity-0 blur-sm transition-all duration-300 [&amp;.lqd-is-active]:translate-x-0 [&amp;.lqd-is-active]:opacity-100 [&amp;.lqd-is-active]:blur-0">
                   <span>{{ $title }}</span>
                </span>
                @endforeach
             </h1>
          </div>
          <p class="mb-7 w-3/4 text-[20px] leading-[1.25em] text-fuchsia-700 opacity-75 max-sm:w-full [&amp;_.lqd-split-text-words]:translate-y-3 [&amp;_.lqd-split-text-words]:opacity-0 [&amp;_.lqd-split-text-words]:transition-all [&amp;_.lqd-split-text-words]:ease-out group-[.page-loaded]/body:[&amp;_.lqd-split-text-words]:translate-y-0 group-[.page-loaded]/body:[&amp;_.lqd-split-text-words]:text-white group-[.page-loaded]/body:[&amp;_.lqd-split-text-words]:opacity-100">
             <span class="inline-flex lqd-split-text-words [background:inherit]" style="transition-delay:0.15s">
                {{ $bannerSection->description }}
             </span>
          </p>
          <div class="translate-y-3 opacity-0 transition-all delay-[450ms] group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
             <a class="inline-flex w-full items-center justify-center bg-black bg-opacity-10 px-4 py-3 text-lg font-semibold text-white transition-all duration-300 hover:bg-opacity-20" data-fslightbox="video-gallery" style="border-radius: 3rem;" href="{{ $bannerSection->video_url }}">
                <svg class="icon icon-tabler icon-tabler-player-play-filled me-4 bg-white" style="padding: 13px; border-radius: 2rem;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="#37393d"></path>
                </svg>
                {{ $bannerSection->tag_1 }}
             </a>
          </div>
          <br>
          <div class="translate-y-3 opacity-0 transition-all delay-[500ms] group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
             <a class="opacity-50 transition-opacity hover:opacity-100" href="#features">Learn More About Our Services</a>
          </div>
       </div>
    </div>
    <div class="banner-divider absolute inset-x-0 -bottom-[2px]">
       <svg class="h-auto w-full fill-background" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
          <path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"></path>
       </svg>
    </div>
 </section>
<section class="site-section pb-20 pt-32 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="features">
    <div class="container">
       <header class="lqd-section-header mx-auto text-center w-3/5 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
          <h2 class="lqd-section-header-title mb-[0.45em]">{{ $hubHeader->header_title }}</h2>
          <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">{{ $hubHeader->header_subtitle }}</p>
       </header>
       <div class="grid grid-cols-3 justify-between gap-x-20 gap-y-9 max-lg:grid-cols-2 max-lg:gap-x-10 max-md:grid-cols-1">
          @foreach ($hubFeatures as $feature)
             <div class="group flex gap-5">
                <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
                   <i class="{{ $feature->icon }}"></i>
                </div>
                <div class="relative shrink">
                   <h4 class="mb-3 ">{{ $feature->title }}</h4>
                   <p class="text-[14px]">{{ $feature->description }}</p>
                </div>
             </div>
          @endforeach
       </div>
    </div>
 </section>
{{-- <section class="site-section transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
   <div class="container">
      <div class="rounded-[50px] border p-20 max-xl:px-10 max-lg:py-12 max-sm:px-5">
         <div class="lqd-tabs" data-lqd-tabs-style="1">
            <div class="lqd-tabs-triggers mb-9 grid grid-cols-5 justify-between gap-8 max-lg:grid-cols-3 max-lg:gap-4 max-md:grid-cols-2 max-sm:grid-cols-1"> <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg lqd-is-active" data-target="#custom-strategies"> Tailored Strategies </button> <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg" data-target="#data-driven-insights"> Data Insights </button> <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg" data-target="#innovative-designs"> Creative Design </button> <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg" data-target="#seo-optimization"> SEO & Optimization </button> <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg" data-target="#customer-engagement"> Audience Engagement </button> </div>
            <div class="lqd-tabs-content-wrap">
               <div class="lqd-tabs-content" id="custom-strategies">
                  <div class="flex flex-wrap justify-between max-md:gap-4">
                     <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                        <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1"> Strategic Solutions <span class="dot"></span> <span class="opacity-50">Tailored to Your Needs</span> </h6>
                        <h3 class="mb-7 mt-auto">Personalized Digital Strategies</h3>
                        <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black"> We develop strategies that are customized to meet your specific business objectives, ensuring growth and success. </p>
                     </div>
                     <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: #EADDF9;">
                        <div class="text-center">
                           <figure class="mb-6 w-full"> <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="http://127.0.0.1:8000/images/upload/images/frontent/services/phil-desforges-D5t1Ns-vhmk-unsplash.jpg" alt="Strategy Planning"> </figure>
                           <p class="text-lg font-semibold text-heading-foreground">Plan, Execute, Succeed.</p>
                           <p class="text-[12px] text-heading-foreground">Strategically Aligned for Success.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="lqd-tabs-content hidden" id="data-driven-insights">
                  <div class="flex flex-wrap justify-between max-md:gap-4">
                     <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                        <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1"> Empower Your Decisions <span class="dot"></span> <span class="opacity-50">Data-Driven</span> </h6>
                        <h3 class="mb-7 mt-auto">Unlock Valuable Insights</h3>
                        <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black"> Use data-driven insights to guide your decisions and drive your business towards greater success. </p>
                     </div>
                     <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: #DFE5EB;">
                        <div class="text-center">
                           <figure class="mb-6 w-full"> <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="http://127.0.0.1:8000/images/upload/images/frontent/services/assaas.jpg" alt="Data-Driven Insights"> </figure>
                           <p class="text-lg font-semibold text-heading-foreground">Analyze, Optimize, Succeed.</p>
                           <p class="text-[12px] text-heading-foreground">Empowered by Data.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="lqd-tabs-content hidden" id="innovative-designs">
                  <div class="flex flex-wrap justify-between max-md:gap-4">
                     <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                        <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1"> Design for Impact <span class="dot"></span> <span class="opacity-50">Innovative Design</span> </h6>
                        <h3 class="mb-7 mt-auto">Craft Exceptional Designs</h3>
                        <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black"> Stand out with designs that not only look stunning but also convert effectively. </p>
                     </div>
                     <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: #DDE6FF;">
                        <div class="text-center">
                           <figure class="mb-6 w-full"> <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="http://127.0.0.1:8000/images/upload/images/frontent/services/ssssssss.webp" alt="Innovative Designs"> </figure>
                           <p class="text-lg font-semibold text-heading-foreground">Design, Innovate, Thrive.</p>
                           <p class="text-[12px] text-heading-foreground">Creativity at Its Best.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="lqd-tabs-content hidden" id="seo-optimization">
                  <div class="flex flex-wrap justify-between max-md:gap-4">
                     <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                        <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1"> Enhance Online Visibility <span class="dot"></span> <span class="opacity-50">SEO Mastery</span> </h6>
                        <h3 class="mb-7 mt-auto">Boost Your Search Engine Rankings</h3>
                        <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black">
                           Our advanced SEO techniques are designed to enhance your online visibility, driving more traffic and conversions.
                        </p>
                     </div>
                     <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: #F9DDDF;">
                        <div class="text-center">
                           <figure class="mb-6 w-full">
                              <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="http://127.0.0.1:8000/images/upload/images/frontent/services/ongoing-seo.jpg" alt="SEO Optimization">
                           </figure>
                           <p class="text-lg font-semibold text-heading-foreground">Rank, Reach, Convert.</p>
                           <p class="text-[12px] text-heading-foreground">Visibility that Works.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="lqd-tabs-content hidden" id="customer-engagement">
                  <div class="flex flex-wrap justify-between max-md:gap-4">
                     <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                        <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1">
                           Engage and Retain Customers
                           <span class="dot"></span>
                           <span class="opacity-50">Customer Focus</span>
                        </h6>
                        <h3 class="mb-7 mt-auto">Elevate Customer Engagement</h3>
                        <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black">
                           Build lasting relationships with your audience through targeted engagement strategies that foster loyalty and satisfaction.
                        </p>
                     </div>
                     <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: #FFF8EB;">
                        <div class="text-center">
                           <figure class="mb-6 w-full">
                              <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="http://127.0.0.1:8000/images/upload/images/frontent/services/6106306.jpg" alt="Customer Engagement">
                           </figure>
                           <p class="text-lg font-semibold text-heading-foreground">Engage, Convert, Retain.</p>
                           <p class="text-[12px] text-heading-foreground">Connection that Matters.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> --}}
<section class="site-section transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
   <div class="container">
      <div class="rounded-[50px] border p-20 max-xl:px-10 max-lg:py-12 max-sm:px-5">
         <div class="lqd-tabs" data-lqd-tabs-style="1">
            <div class="lqd-tabs-triggers mb-9 grid grid-cols-4 justify-between gap-8 max-lg:grid-cols-3 max-lg:gap-4 max-md:grid-cols-2 max-sm:grid-cols-1">
                @foreach ($services as $service)
                <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg {{ $loop->first ? 'lqd-is-active' : '' }}" data-target="#{{ Str::slug($service->name, '-') }}">
                    {{ $service->name }}
                </button>
            @endforeach
            </div>
            <div class="lqd-tabs-content-wrap">
                @foreach ($services as $service)
                <div class="lqd-tabs-content {{ !$loop->first ? 'hidden' : '' }}" id="{{ Str::slug($service->name, '-') }}">
                    <div class="flex flex-wrap justify-between max-md:gap-4">
                       <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                          @if($service->details->isNotEmpty())
                          <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1">
                              {{ $service->details->first()->header }}
                              <span class="dot"></span>
                              <span class="opacity-50">{{ $service->details->first()->subheader }}</span>
                          </h6>
                          @endif
                          <h3 class="mb-7 mt-auto">{{ $service->description }}</h3>
                          <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black">{{ $service->description }}</p>
                       </div>
                       <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: {{ $service->images->first()->background_color ?? '#ffffff' }};">
                          <div class="text-center">
                             <figure class="mb-6 w-full">
                                <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]"                                       width="878" height="748"
                                      src="{{ $service->images->first()->image_url ?? 'http://127.0.0.1:8000/images/upload/images/frontent/services/default.jpg' }}"
                                      alt="{{ $service->images->first()->alt_text ?? 'Default Image' }}">
                             </figure>
                             @if($service->ctas->isNotEmpty())
                             <p class="text-lg font-semibold text-heading-foreground"> {{ $service->ctas->first()->cta_title }} </p>
                             <p class="text-[12px] text-heading-foreground"> {{ $service->ctas->first()->cta_subtitle }} </p>
                             @endif
                          </div>
                       </div>
                    </div>
                  </div>

               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
{{-- <section class="site-section transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
    <div class="container">
       <div class="rounded-[50px] border p-20 max-xl:px-10 max-lg:py-12 max-sm:px-5">
          <div class="lqd-tabs" data-lqd-tabs-style="1">
             <!-- Tabs Triggers -->
             <div class="lqd-tabs-triggers mb-9 grid grid-cols-5 justify-between gap-8 max-lg:grid-cols-3 max-lg:gap-4 max-md:grid-cols-2 max-sm:grid-cols-1">
                @foreach ($services as $service)
                    <button class="transition-all p-7 text-[1.25rem] text-center border rounded-xl font-heading font-medium hover:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:border-white [&.lqd-is-active]:shadow-lg {{ $loop->first ? 'lqd-is-active' : '' }}" data-target="#{{ Str::slug($service->name, '-') }}">
                        {{ $service->name }}
                    </button>
                @endforeach
             </div>

             <!-- Tabs Content -->
             <div class="lqd-tabs-content-wrap">
                @foreach ($services as $service)
                <div class="lqd-tabs-content {{ !$loop->first ? 'hidden' : '' }}" id="{{ Str::slug($service->name, '-') }}">
                   <div class="flex flex-wrap justify-between max-md:gap-4">
                      <!-- First Column -->
                      <div class="flex w-[47%] flex-col items-start rounded-xl p-8 shadow-lg max-md:w-full">
                         <h6 class="mb-10 rounded-xl bg-[#F3E5F5] px-3 py-1"> {{ $service->header }} <span class="dot"></span> <span class="opacity-50">{{ $service->subheader }}</span> </h6>
                         <h3 class="mb-7 mt-auto">{{ $service->title }}</h3>
                         <p class="text-lg leading-[25px] [&_strong]:font-semibold [&_strong]:text-black"> {{ $service->description }}</p>
                      </div>

                      <!-- Second Column -->
                      <div class="group w-[47%] rounded-xl p-8 max-md:w-full" style="background-color: {{ $service->background_color }};">
                         <div class="text-center">
                            <figure class="mb-6 w-full">
                                <img class="w-full rounded-2xl shadow-[0px_3px_45px_rgba(0,0,0,0.07)] transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-[1.025] group-hover:shadow-[0px_20px_65px_rgba(0,0,0,0.05)]" width="878" height="748" src="{{ asset('images/upload/images/frontent/services/' . $service->image) }}" alt="{{ $service->name }}">
                            </figure>
                            <p class="text-lg font-semibold text-heading-foreground">{{ $service->cta_title }}</p>
                            <p class="text-[12px] text-heading-foreground"> {{ $service->cta_subtitle }}</p>
                         </div>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
       </div>
    </div>
</section> --}}
 <section class="site-section py-20 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
    <div class="container">
       <header class="lqd-section-header mx-auto text-center w-3/5 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
          <h2 class="lqd-section-header-title mb-[0.45em]">{{ $sectionHeader->title }}</h2>
          <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">{{ $sectionHeader->description }}</p>
       </header>
       <div class="grid grid-cols-3 gap-4 max-lg:grid-cols-2 max-md:grid-cols-1">
        @foreach ($serviceSections as $section)
        @php
            $colors = json_decode($section->color);
        @endphp
        <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[{{ $colors->text }}] bg-[{{ $colors->bg }}] bg-opacity-[0.07] hover:shadow-[{{ $colors->shadow }}]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">{{ $section->title }}</h3>
        </div>
    @endforeach

       </div>
    </div>
 </section>
 <section class="site-section pb-9 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="templates">
    <div class="container">
        <div class="rounded-[50px] border p-10 max-sm:px-5">
            <header class="lqd-section-header mx-auto text-center w-3/4 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
                <h6 class="mb-6 inline-block rounded-md bg-[#083D91] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#083D91]">
                    {{ $templateSection->subtitle }}
                    <span class="dot"></span>
                    <span class="opacity-50">solutions</span>
                </h6>
                <h2 class="lqd-section-header-title mb-[0.45em]">{{ $templateSection->title }}</h2>
                <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">{{ $templateSection->description }}</p>
            </header>
            <div class="flex flex-col items-center">
                <div class="mx-auto mb-10 inline-flex flex-wrap items-center gap-2 rounded-lg border p-[0.35rem] text-[12px] font-semibold leading-none max-md:justify-center">
                    @foreach ($templateSection->buttons as $button)
                        <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl {{ $loop->first ? 'lqd-is-active' : '' }}"
                            data-target="{{ $button['target'] ?? '' }}">
                            {{ $button['label'] ?? 'Button' }}
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="relative">
                <div class="templates-cards grid max-h-[28rem] grid-cols-3 gap-4 overflow-hidden max-lg:grid-cols-2 max-md:grid-cols-1">
                    @foreach ($templates as $template)
                        <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all {{ $template->category }}">
                            <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                                <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9]">
                                    <i class="{{ $template->icon }}"></i>
                                </span>
                            </figure>
                            <div class="relative shrink">
                                <h4 class="mb-3 font-semibold font-body">{{ $template->title }}</h4>
                                <p class="text-[14px]">{{ $template->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="templates-cards-overlay absolute inset-x-0 bottom-0 z-10 h-[230px] bg-gradient-to-t from-background from-20% to-transparent"></div>
            </div>

            <div class="relative z-20 mt-2 text-center">
                <button class="templates-show-more text-[14px] font-semibold text-[#5A4791]">
                    <span class="size-7 mr-1 inline-grid place-content-center rounded-lg bg-[#885EFE] bg-opacity-10">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.671 11.796V0.996H7.125V11.796H5.671ZM0.998 7.125V5.671H11.798V7.125H0.998Z"></path>
                        </svg>
                    </span>
                    <span class="inline-grid h-7 place-content-center rounded-lg bg-[#885EFE] bg-opacity-10 px-2">Show more</span>
                </button>
            </div>
        </div>
    </div>
</section>
{{-- <section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
    <div class="container">
       <div class="rounded-[50px] border p-10 max-sm:px-6 max-sm:py-16">
         <header class="lqd-section-header mx-auto text-center w-3/4 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
             <h2 class="lqd-section-header-title mb-[0.45em]">Craft Unique Websites</h2>
             <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">Shape your digital presence with custom-built solutions using Laravel, WordPress, and PHP.</p>
         </header>

          <div class="grid grid-cols-3 gap-3 max-lg:grid-cols-2 max-md:grid-cols-1">
             @foreach ($digitalSolutions as $solution)
             <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
                <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300">
                    <img class="-mx-8 max-w-[calc(100%+4rem)]" src="{{ asset($solution->image_path) }}" alt="{{ $solution->title }}" width="696" height="426">
                </figure>
                <div class="relative shrink">
                   <h4 class="mb-3 font-bold">{{ $solution->title }}</h4>
                   <p class="text-[14px]">{{ $solution->description }}</p>
                   <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
                </div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </section> --}}
 <section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
    <div class="container">
        <div class="rounded-[50px] border p-10 max-sm:px-6 max-sm:py-16">
            <header class="lqd-section-header mx-auto text-center w-3/4 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
                <h2 class="lqd-section-header-title mb-[0.45em]">{{ $digitalSolutionsData['header']->header_title }}</h2>
                <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">{{ $digitalSolutionsData['header']->header_description }}</p>
            </header>

            <div class="grid grid-cols-3 gap-3 max-lg:grid-cols-2 max-md:grid-cols-1">
                @foreach ($digitalSolutionsData['solutions'] as $solution)
                <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
                    <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300">
                        <img class="-mx-8 max-w-[calc(100%+4rem)]" src="{{ asset($solution->image_path) }}" alt="{{ $solution->title }}" width="696" height="426">
                    </figure>
                    <div class="relative shrink">
                        <h4 class="mb-3 font-bold">{{ $solution->title }}</h4>
                        <p class="text-[14px]">{{ $solution->description }}</p>
                        <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- <section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="how-it-works">
   <div class="container">
      <div class="rounded-[50px] bg-[#010101] bg-cover p-10 py-24 text-white text-opacity-60 shadow-xl max-sm:bg-bottom max-sm:px-5" style="background-image: url(images/landing-page/steps-bg.jpg);">
         <div class="mx-auto mb-14 w-3/4 text-center max-xl:w-1/2 max-lg:w-8/12 max-md:w-full">
            <h2 class="text-[64px] leading-none text-[#E5E6E6] max-sm:text-[45px]">Our Approach to Elevating Your Business</h2>
         </div>
         <div class="grid-cols-3 mb-20 grid gap-7 max-md:grid-cols-1">
            <div class="group mx-auto flex max-w-[270px] flex-col items-center text-center text-[18px] font-medium">
               <span class="size-16 mb-10 grid place-content-center rounded-full border-[2px] border-[#A2B2C9] border-opacity-15 text-[26px] font-medium transition-all group-hover:-translate-y-2 group-hover:scale-110 group-hover:border-white group-hover:bg-white group-hover:text-black">1</span>
               <p>**Understanding Your Vision:** We start by thoroughly understanding your business goals and challenges to craft a customized strategy tailored to your needs.</p>
            </div>
            <div class="group mx-auto flex max-w-[270px] flex-col items-center text-center text-[18px] font-medium">
               <span class="size-16 mb-10 grid place-content-center rounded-full border-[2px] border-[#A2B2C9] border-opacity-15 text-[26px] font-medium transition-all group-hover:-translate-y-2 group-hover:scale-110 group-hover:border-white group-hover:bg-white group-hover:text-black">2</span>
               <p>**Execution with Precision:** Our expert team implements the strategy with a focus on driving growth through advanced SEO, targeted PPC campaigns, and impactful web design.</p>
            </div>
            <div class="group mx-auto flex max-w-[270px] flex-col items-center text-center text-[18px] font-medium">
               <span class="size-16 mb-10 grid place-content-center rounded-full border-[2px] border-[#A2B2C9] border-opacity-15 text-[26px] font-medium transition-all group-hover:-translate-y-2 group-hover:scale-110 group-hover:border-white group-hover:bg-white group-hover:text-black">3</span>
               <p>**Continuous Optimization:** We continuously monitor performance and refine our strategies to ensure sustained success and a strong return on investment.</p>
            </div>
         </div>
      </div>
   </div>
</section> --}}
<section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="how-it-works">
    <div class="container">
       <div class="rounded-[50px] bg-[#010101] bg-cover p-10 py-24 text-white text-opacity-60 shadow-xl max-sm:bg-bottom max-sm:px-5" style="background-image: url(images/landing-page/steps-bg.jpg);">
          <div class="mx-auto mb-14 w-3/4 text-center max-xl:w-1/2 max-lg:w-8/12 max-md:w-full">
            <h2 class="text-[64px] leading-none text-[#E5E6E6] max-sm:text-[45px]">{{ $approachHeader->header_text }}</h2>
          </div>
          <div class="grid-cols-3 mb-20 grid gap-7 max-md:grid-cols-1">
             @foreach ($approachSections as $index => $section)
                <div class="group mx-auto flex max-w-[270px] flex-col items-center text-center text-[18px] font-medium">
                   <span class="size-16 mb-10 grid place-content-center rounded-full border-[2px] border-[#A2B2C9] border-opacity-15 text-[26px] font-medium transition-all group-hover:-translate-y-2 group-hover:scale-110 group-hover:border-white group-hover:bg-white group-hover:text-black">{{ $index + 1 }}</span>
                   <strong>{{ $section->title }}</strong>
                   <p>
                       {{ $section->description }}
                    </p>
                </div>
             @endforeach
          </div>
       </div>
    </div>
 </section>

{{-- <section class="site-section relative py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="pricing">
    <div class="container relative">
        <div class="relative rounded-[50px] border p-11 max-lg:px-5">
            <header class="lqd-section-header mx-auto text-center w-2/5 mb-7 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
                <h2 class="lqd-section-header-title mb-[0.45em]">Flexible Pricing.</h2>
                <p class="lqd-section-header-desc text-[18px] leading-[1.444em]"></p>
            </header>
            <div class="lqd-tabs text-center">
                <div class="lqd-tabs-triggers mx-auto mb-9 inline-flex flex-wrap gap-2 rounded-md border text-[15px] font-medium leading-none">
                    @foreach ($services as $service)
                        @if ($service->status === 'active')
                            <button class="transition-all px-4 py-[0.35rem] min-w-[210px] rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10 {{ $loop->first ? 'lqd-is-active' : '' }}" data-target="#{{ $service->data_target }}">
                                {{ $service->name }}
                                @if ($service->discount)
                                    <span class="ml-2 text-sm text-purple-500">{{ $service->discount }}</span>
                                @endif
                            </button>
                        @endif
                    @endforeach
                </div>
                <div class="lqd-tabs-content-wrap px-10 max-xl:px-0">
                    <div class="lqd-tabs-content">
                        @foreach($services as $service)
                            @if ($service->status === 'active')
                                <div id="{{ $service->data_target }}" style="{{ $loop->first ? 'display: block;' : 'display: none;' }}">
                                    <div class="grid grid-cols-3 gap-2 max-md:grid-cols-1">
                                        @foreach($servicePlans->filter(function ($plan) use ($service) {
                                            return strpos($plan->name, $service->name) !== false;
                                        }) as $plan)
                                            <div class="px-7 pt-7 pb-11 rounded-3xl text-center {{ $plan->tier === 'standard' ? 'border' : '' }} max-xl:px-6 max-lg:px-4">
                                                <h6 class="mb-6 rounded-md border p-[0.35rem] text-[11px] text-opacity-80">{{ ucfirst($plan->tier) }}</h6>
                                                <p class="mb-1 text-[45px] font-medium leading-none -tracking-wide text-heading-foreground">
                                                    <sup class="text-[0.53em]">$</sup>{{ $plan->monthly_price == 0 ? '0' : number_format($plan->monthly_price, 2) }}
                                                </p>
                                                <p class="mb-4 text-sm opacity-60">{{ ucfirst($plan->tier) }}</p>
                                                <a class="mb-6 block w-full rounded-lg bg-black bg-opacity-[0.03] p-3 font-medium text-heading-foreground transition-colors hover:bg-black hover:text-white" href="#">
                                                    Select {{ ucfirst($plan->tier) }}
                                                </a>
                                                <ul class="w-full px-1 text-left max-lg:p-0">
                                                    @foreach($plan->categories as $category)
                                                        <li class="relative mb-3">
                                                            <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                                                <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                                                </svg>
                                                            </span>
                                                            <strong>{{ $category->name }}</strong>
                                                            <div class="group inline-block sm:relative sm:before:absolute sm:before:-inset-2.5">
                                                                <span class="peer relative -mt-6 inline-flex !h-6 !w-6 cursor-pointer items-center justify-center">
                                                                    <svg class="size-4 opacity-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" stroke-width="0" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <div class="min-w-60 pointer-events-none invisible absolute start-full top-1/2 z-10 ms-2 max-h-96 -translate-y-1/2 translate-x-2 scale-105 overflow-y-auto rounded-lg border bg-background p-5 opacity-0 shadow-xl transition-all before:absolute before:-start-2 before:top-0 before:h-full before:w-2 group-hover:pointer-events-auto group-hover:visible group-hover:translate-x-0 group-hover:opacity-100 max-sm:!end-0 max-sm:!start-0 max-sm:!top-full max-sm:!me-0 max-sm:!ms-0 max-sm:mt-4 max-sm:!translate-x-0 max-sm:!translate-y-0 [&.anchor-end]:end-2 [&.anchor-end]:start-auto [&.anchor-end]:me-2 [&.anchor-end]:ms-0" data-set-anchor="true">
                                                                    <ul>
                                                                        @if(is_array($category['services']))
                                                                            @foreach($category['services'] as $service)
                                                                                <li class="mb-1.5 flex items-center gap-1.5 text-heading-foreground">
                                                                                    <span class="bg-[#684AE2] bg-opacity-10 text-[#684AE2] size-4 inline-flex items-center justify-center rounded-xl align-middle">
                                                                                        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                                            <path d="M5 12l5 5l10 -10"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <small class="">{{ $service }}</small>
                                                                                </li>
                                                                            @endforeach
                                                                        @endif
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                    @foreach($plan->features as $feature)
                                                        <li class="mb-4 flex items-center">
                                                            <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                                                <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                                                </svg>
                                                            </span>
                                                            {{ $feature }}
                                                        </li>
                                                    @endforeach
                                                    <li class="mb-4 flex items-center">
                                                        <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                                            <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                                            </svg>
                                                        </span>
                                                        {{ $plan->support_level }}
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-9 flex justify-center">
                <div class="flex w-[305px] items-center gap-5 text-[12px] text-[#002A40] text-opacity-60">
                    <span class="size-10 inline-flex shrink-0 items-center justify-center rounded-xl bg-[#6C727B] bg-opacity-10">
                        <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.346 6.323H4.024V3.449C4.024 2.839 4.26632 2.25399 4.69765 1.82266C5.12899 1.39132 5.714 1.149 6.324 1.149C6.934 1.149 7.51901 1.39132 7.95035 1.82266C8.38168 2.25399 8.624 2.839 8.624 3.449C8.624 3.6015 8.68458 3.74775 8.79241 3.85559C8.90025 3.96342 9.0465 4.024 9.199 4.024C9.3515 4.024 9.49775 3.96342 9.60558 3.85559C9.71342 3.74775 9.774 3.6015 9.774 3.449C9.774 2.534 9.41052 1.65648 8.76352 1.00948C8.11652 0.362482 7.23899 -0.000999451 6.324 -0.000999451C5.409 -0.000999451 4.53148 0.362482 3.88448 1.00948C3.23748 1.65648 2.874 2.534 2.874 3.449V6.323H2.3C1.69001 6.323 1.10499 6.56532 0.673653 6.99666C0.242319 7.42799 0 8.013 0 8.623V14.946C0 15.248 0.0594935 15.5471 0.175079 15.8262C0.290665 16.1052 0.460078 16.3588 0.673653 16.5723C0.887227 16.7859 1.14078 16.9553 1.41983 17.0709C1.69888 17.1865 1.99796 17.246 2.3 17.246H10.347C10.649 17.246 10.9481 17.1865 11.2272 17.0709C11.5062 16.9553 11.7598 16.7859 11.9733 16.5723C12.1869 16.3588 12.3563 16.1052 12.4719 15.8262C12.5875 15.5471 12.647 15.248 12.647 14.946V8.622C12.6469 8.31996 12.5872 8.0209 12.4715 7.7419C12.3558 7.46291 12.1863 7.20943 11.9726 6.99595C11.759 6.78247 11.5053 6.61316 11.2262 6.49769C10.9472 6.38223 10.648 6.32287 10.346 6.323Z" fill="#6C727B"></path>
                        </svg>
                    </span>
                    <p class="[&_strong]:block"><strong>Safe Payment:</strong> Use Stripe or Credit Card.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="site-section relative py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="pricing">
    <div class="container relative">
        {{-- templates-cards grid max-h-[28rem] grid-cols-3 gap-4 overflow-hidden max-lg:grid-cols-2 max-md:grid-cols-1 --}}
       <div class="relative rounded-[50px] border p-11 max-lg:px-5">
          <header class="lqd-section-header mx-auto text-center w-2/5 mb-7 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
             <h2 class="lqd-section-header-title mb-[0.45em]">Flexible Pricing.</h2>
             <p class="lqd-section-header-desc text-[18px] leading-[1.444em]"></p>
          </header>
          <div class="lqd-tabs text-center relative overflow-hidden max-h-[34rem]">
             <div class="lqd-tabs-triggers mx-auto mb-9 inline-flex flex-wrap gap-2 rounded-md border text-[15px] font-medium leading-none">
                @foreach ($services as $service)
                    @if ($service->status === 'active')
                    <button class="transition-all px-4 py-[0.35rem] min-w-[210px] rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10 {{ $loop->first ? 'lqd-is-active' : '' }}" data-target="#{{ $service->data_target }}" aria-controls="{{ $service->data_target }}">
                        {{ $service->name }}
                        @if ($service->discount)
                            <span class="ml-1 inline-block rounded-md bg-[#684AE2] bg-opacity-10 p-[0.375rem] px-2 text-[#684AE2]">{{ $service->discount }}</span>
                        @endif
                    </button>
                    @endif
                @endforeach
             </div>
             <div class="lqd-tabs-content-wrap px-10 max-xl:px-0">
                <div class="lqd-tabs-content">
                   @foreach ($services as $service)
                   @if ($service->status === 'active')
                   <div id="{{ $service->data_target }}" style="{{ $loop->first ? 'display: block;' : 'display: none;' }}">
                      <div class="grid grid-cols-3 gap-2 max-md:grid-cols-1">
                         @foreach($servicePlans->filter(function ($plan) use ($service) {
                         return strpos($plan->name, $service->name) !== false; // Filter plans related to the current service
                         }) as $plan)
                         <div class="px-7 pt-7 pb-11 rounded-3xl text-center {{ $plan->tier === 'standard' ? 'border' : '' }} max-xl:px-6 max-lg:px-4">
                            <h6 class="mb-6 rounded-md border p-[0.35rem] text-[11px] text-opacity-80">{{ ucfirst($plan->tier) }}</h6>
                            <p class="mb-1 text-[45px] font-medium leading-none -tracking-wide text-heading-foreground">
                               <sup class="text-[0.53em]">$</sup>{{ $plan->monthly_price == 0 ? '0' : number_format($plan->monthly_price, 2) }}
                            </p>
                            <p class="mb-4 text-sm opacity-60">{{ ucfirst($plan->tier) }}</p>
                            <a class="mb-6 block w-full rounded-lg bg-black bg-opacity-[0.03] p-3 font-medium text-heading-foreground transition-colors hover:bg-black hover:text-white" href="#">
                            Select {{ ucfirst($plan->tier) }}
                            </a>
                            <ul class="w-full px-1 text-left max-lg:p-0">
                               <!-- Full Packages Group -->
                               <li class="relative mb-3">
                                  <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                     <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                     </svg>
                                  </span>
                                  Full
                                  <strong>Packages</strong>
                                  <div class="group inline-block sm:relative sm:before:absolute sm:before:-inset-2.5">
                                     <span class="peer relative -mt-6 inline-flex !h-6 !w-6 cursor-pointer items-center justify-center">
                                        <svg class="size-4 opacity-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                     </span>
                                     <div class="min-w-60 pointer-events-none invisible absolute start-full top-1/2 z-10 ms-2 max-h-96 -translate-y-1/2 translate-x-2 scale-105 overflow-y-auto rounded-lg border bg-background p-5 opacity-0 shadow-xl transition-all group-hover:pointer-events-auto group-hover:visible group-hover:translate-x-0 group-hover:opacity-100 max-sm:!end-0 max-sm:!start-0 max-sm:!top-full max-sm:mt-4">
                                        <ul>
                                           @foreach($plan->categories as $category)
                                           <li class="mb-3 mt-5 first:mt-0">
                                              <h5 class="text-base">{{ $category->name }}</h5>
                                           </li>
                                           @if(is_array($category['services']))
                                           @foreach($category['services'] as $service)
                                           <li class="mb-1.5 flex items-center gap-1.5 text-heading-foreground">
                                              <span class="bg-[#684AE2] bg-opacity-10 text-[#684AE2] size-4 inline-flex items-center justify-center rounded-xl align-middle">
                                                 <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                 </svg>
                                              </span>
                                              <small class="">{{ $service }}</small>
                                           </li>
                                           @endforeach
                                           @endif
                                           @endforeach
                                        </ul>
                                     </div>
                                  </div>
                               </li>
                               <!-- Additional Services Group -->
                               @foreach($plan->additional_services as $index => $additionalService)
                               @if($index < 7) <!-- Limit the number of visible additional services -->
                               <li class="mb-4 flex items-center">
                                  <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                     <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                     </svg>
                                  </span>
                                  {{ $additionalService }}
                               </li>
                               @endif
                               @endforeach
                            </ul>
                         </div>
                         @endforeach <!-- End of the $servicePlans loop -->
                      </div>
                   </div>
                   @endif
                   @endforeach
                </div>
             </div>
             {{-- <div class="pricing-cards-overlay absolute inset-x-0 bottom-0 z-10 h-[230px] bg-gradient-to-t from-background from-20% to-transparent rounded-[50px]"></div> --}}
          </div>
          <div class="flex justify-center mt-4">
            <button class="pricing-show-more text-[14px] font-semibold text-[#5A4791]">
                <span class="size-7 mr-1 inline-grid place-content-center rounded-lg bg-[#885EFE] bg-opacity-10 z-[100] relative">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.671 11.796V0.996H7.125V11.796H5.671ZM0.998 7.125V5.671H11.798V7.125H0.998Z"></path>
                    </svg>
                </span>
                Show More
            </button>
        </div>
          <div class="mt-9 flex justify-center">
            <div class="flex w-[305px] items-center gap-5 text-[12px] text-[#002A40] text-opacity-60 z-[100]">
               <span class="size-10 inline-flex shrink-0 items-center justify-center rounded-xl bg-[#6C727B] bg-opacity-10">
                  <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M10.346 6.323H4.024V3.449C4.024 2.839 4.26632 2.25399 4.69765 1.82266C5.12899 1.39132 5.714 1.149 6.324 1.149C6.934 1.149 7.51901 1.39132 7.95035 1.82266C8.38168 2.25399 8.624 2.839 8.624 3.449C8.624 3.6015 8.68458 3.74775 8.79241 3.85559C8.90025 3.96342 9.0465 4.024 9.199 4.024C9.3515 4.024 9.49775 3.96342 9.60558 3.85559C9.71342 3.74775 9.774 3.6015 9.774 3.449C9.774 2.534 9.41052 1.65648 8.76352 1.00948C8.11652 0.362482 7.23899 -0.000999451 6.324 -0.000999451C5.409 -0.000999451 4.53148 0.362482 3.88448 1.00948C3.23748 1.65648 2.874 2.534 2.874 3.449V6.323H2.3C1.69001 6.323 1.10499 6.56532 0.673653 6.99666C0.242319 7.42799 0 8.013 0 8.623V14.946C0 15.248 0.0594935 15.5471 0.175079 15.8262C0.290665 16.1052 0.460078 16.3588 0.673653 16.5723C0.887227 16.7859 1.14078 16.9553 1.41983 17.0709C1.69888 17.1865 1.99796 17.246 2.3 17.246H10.347C10.649 17.246 10.9481 17.1865 11.2272 17.0709C11.5062 16.9553 11.7598 16.7859 11.9733 16.5723C12.1869 16.3588 12.3563 16.1052 12.4719 15.8262C12.5875 15.5471 12.647 15.248 12.647 14.946V8.622C12.6469 8.31996 12.5872 8.0209 12.4715 7.7419C12.3558 7.46291 12.1863 7.20943 11.9726 6.99595C11.759 6.78247 11.5053 6.61316 11.2262 6.49769C10.9472 6.38223 10.648 6.32287 10.346 6.323Z" fill="#6C727B"></path>
                  </svg>
               </span>
               <p class="[&amp;_strong]:block"><strong>Safe Payment:</strong> Use Stripe or Credit Card.</p>
            </div>
         </div>
         <div class="pricing-cards-overlay absolute inset-x-0 bottom-0 z-10 h-[230px] bg-gradient-to-t from-background from-20% to-transparent rounded-[50px]"></div>
       </div>
    </div>
 </section>
{{-- <section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="faq">
   <div class="container">
      <div class="relative rounded-[50px] border p-11 pb-16 max-sm:px-5">
         <header class="lqd-section-header mx-auto text-center w-2/4 mb-9 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
            <h6 class="mb-6 inline-block rounded-md bg-[#60027C] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#60027C]">
               FAQ
               <span class="dot"></span>
               <span class="opacity-50">Help Center</span>
            </h6>
            <h2 class="lqd-section-header-title mb-[0.45em]">Questions You Might Have</h2>
            <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">We provide clarity on how our marketing services can propel your business forward.</p>
         </header>
         <div class="lqd-accordion mx-auto w-5/6 max-lg:w-full">
            <div class="lqd-accordion-item group">
               <button data-target="#faq-1" data-trigger-type="accordion" class="flex items-center justify-between w-full py-5 pl-4 text-heading-foreground text-left text-[20px] font-normal tracking-wide border-b group/btn group-last:border-b-0">
                  <span>
                  How do you tailor marketing strategies to specific industries?
                  </span>
                  <div class="inline-flex items-center justify-center ml-3 border w-7 h-7 rounded-3xl shrink-0">
                     <span class="group-[&.lqd-is-active]/btn:hidden">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M6.552 6.489H11.617V5.061H6.552V0H5.082V5.061H5.96046e-08V6.489H5.082V11.571H6.552V6.489Z"></path>
                        </svg>
                     </span>
                     <span class="hidden group-[&.lqd-is-active]/btn:block">
                        <svg width="7" height="2" viewBox="0 0 7 2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0 1.764C0.633344 1.67982 1.27225 1.64472 1.911 1.659H4.411C5.05675 1.64347 5.70273 1.67858 6.343 1.764V0C5.70266 0.0844217 5.05663 0.11786 4.411 0.0999999H1.911C1.27236 0.117286 0.63335 0.083848 0 0V1.764Z"></path>
                        </svg>
                     </span>
                  </div>
               </button>
               <div id="faq-1" class="hidden">
                  <div class="py-4 pl-3 lqd-accordion-content">
                     <p class="text-lg max-sm:text-[17px]">We analyze industry trends and audience behavior to craft bespoke marketing strategies that resonate with your target market, ensuring maximum impact and ROI.</p>
                  </div>
               </div>
            </div>
            <div class="lqd-accordion-item group">
               <button data-target="#faq-2" data-trigger-type="accordion" class="flex items-center justify-between w-full py-5 pl-4 text-heading-foreground text-left text-[20px] font-normal tracking-wide border-b group/btn group-last:border-b-0">
                  <span>
                  What makes your SEO approach different?
                  </span>
                  <div class="inline-flex items-center justify-center ml-3 border w-7 h-7 rounded-3xl shrink-0">
                     <span class="group-[&.lqd-is-active]/btn:hidden">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M6.552 6.489H11.617V5.061H6.552V0H5.082V5.061H5.96046e-08V6.489H5.082V11.571H6.552V6.489Z"></path>
                        </svg>
                     </span>
                     <span class="hidden group-[&.lqd-is-active]/btn:block">
                        <svg width="7" height="2" viewBox="0 0 7 2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0 1.764C0.633344 1.67982 1.27225 1.64472 1.911 1.659H4.411C5.05675 1.64347 5.70273 1.67858 6.343 1.764V0C5.70266 0.0844217 5.05663 0.11786 4.411 0.0999999H1.911C1.27236 0.117286 0.63335 0.083848 0 0V1.764Z"></path>
                        </svg>
                     </span>
                  </div>
               </button>
               <div id="faq-2" class="hidden">
                  <div class="py-4 pl-3 lqd-accordion-content">
                     <p class="text-lg max-sm:text-[17px]">Our SEO strategy focuses on both technical optimization and content relevance, ensuring your site ranks higher and reaches the right audience organically.</p>
                  </div>
               </div>
            </div>
            <div class="lqd-accordion-item group">
               <button data-target="#faq-3" data-trigger-type="accordion" class="flex items-center justify-between w-full py-5 pl-4 text-heading-foreground text-left text-[20px] font-normal tracking-wide border-b group/btn group-last:border-b-0">
                  <span>
                  How do you ensure that our brand voice is maintained across platforms?
                  </span>
                  <div class="inline-flex items-center justify-center ml-3 border w-7 h-7 rounded-3xl shrink-0">
                     <span class="group-[&.lqd-is-active]/btn:hidden">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M6.552 6.489H11.617V5.061H6.552V0H5.082V5.061H5.96046e-08V6.489H5.082V11.571H6.552V6.489Z"></path>
                        </svg>
                     </span>
                     <span class="hidden group-[&.lqd-is-active]/btn:block">
                        <svg width="7" height="2" viewBox="0 0 7 2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0 1.764C0.633344 1.67982 1.27225 1.64472 1.911 1.659H4.411C5.05675 1.64347 5.70273 1.67858 6.343 1.764V0C5.70266 0.0844217 5.05663 0.11786 4.411 0.0999999H1.911C1.27236 0.117286 0.63335 0.083848 0 0V1.764Z"></path>
                        </svg>
                     </span>
                  </div>
               </button>
               <div id="faq-3" class="hidden">
                  <div class="py-4 pl-3 lqd-accordion-content">
                     <p class="text-lg max-sm:text-[17px]">We collaborate closely with your team to understand your brand voice and ensure it's consistently reflected in all content, from social media to blogs and beyond.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> --}}
<section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="faq">
    <div class="container">
       <div class="relative rounded-[50px] border p-11 pb-16 max-sm:px-5">
          <header class="lqd-section-header mx-auto text-center w-2/4 mb-9 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
             <h6 class="mb-6 inline-block rounded-md bg-[#60027C] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#60027C]">
                {{ $faqSection->header }}
                <span class="dot"></span>
                <span class="opacity-50">{{ $faqSection->sub_header }}</span>
             </h6>
             <h2 class="lqd-section-header-title mb-[0.45em]">{{ $faqSection->title }}</h2>
             <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">{{ $faqSection->description }}</p>
          </header>
          <div class="lqd-accordion mx-auto w-5/6 max-lg:w-full">
             @foreach ($faqItems as $item)
             <div class="lqd-accordion-item group">
                <button data-target="#faq-{{ $item->id }}" data-trigger-type="accordion" class="flex items-center justify-between w-full py-5 pl-4 text-heading-foreground text-left text-[20px] font-normal tracking-wide border-b group/btn group-last:border-b-0">
                   <span>{{ $item->question }}</span>
                   <div class="inline-flex items-center justify-center ml-3 border w-7 h-7 rounded-3xl shrink-0">
                      <span class="group-[&.lqd-is-active]/btn:hidden">
                         <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.552 6.489H11.617V5.061H6.552V0H5.082V5.061H5.96046e-08V6.489H5.082V11.571H6.552V6.489Z"></path>
                         </svg>
                      </span>
                      <span class="hidden group-[&.lqd-is-active]/btn:block">
                         <svg width="7" height="2" viewBox="0 0 7 2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1.764C0.633344 1.67982 1.27225 1.64472 1.911 1.659H4.411C5.05675 1.64347 5.70273 1.67858 6.343 1.764V0C5.70266 0.0844217 5.05663 0.11786 4.411 0.0999999H1.911C1.27236 0.117286 0.63335 0.083848 0 0V1.764Z"></path>
                         </svg>
                      </span>
                   </div>
                </button>
                <div id="faq-{{ $item->id }}" class="hidden">
                   <div class="py-4 pl-3 lqd-accordion-content">
                      <p class="text-lg max-sm:text-[17px]">{{ $item->answer }}</p>
                   </div>
                </div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </section>

{{-- <section class="site-section mb-14 py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="blog">
   <div class="container">
      <header class="lqd-section-header mx-auto text-center w-1/2 mb-9 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
         <h6 class="mb-6 inline-block rounded-md bg-[#60027C] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#60027C]">
            Stay up-to-date
         </h6>
         <h2 class="lqd-section-header-title mb-[0.45em]">Latest News</h2>
         <p class="lqd-section-header-desc text-[18px] leading-[1.444em]"></p>
      </header>
      <div class="lg:grid-cols-3 mb-10 grid grid-cols-1 gap-14 md:grid-cols-2">
         <article class="shadow-[0_2px_4px_rgba(149,146,157,0.15)] rounded-2xl w-full flex flex-col">
            <figure>
               <a href="/blog/blog-3">
               <img class="w-full h-40 object-cover rounded-t-2xl" src="{{ asset('upload/images/blog/2.png') }}" alt="The Benefits of ChatGPT">
               </a>
            </figure>
            <div class="p-5 min-h-[180px] flex flex-col font-medium">
               <div class="flex justify-between space-x-6 mb-3 text-black">
                  <time datetime="2023-07-17 18:59:49" class="text-sm">17 Jul</time>
                  <div class="border-b grow relative -top-2"></div>
                  <a class="text-sm" href="/blog/author/1">Admin</a>
               </div>
               <h2 class="!text-[21px] mb-4 tracking-tight leading-[26px]"><a href="/blog/blog-3">The Benefits of ChatGPT</a></h2>
               <a class="flex items-center mt-auto text-[13px] text-black" href="/blog/blog-3">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                     <path d="M9 6l6 6l-6 6"></path>
                  </svg>
               </a>
            </div>
         </article>
         <article class="shadow-[0_2px_4px_rgba(149,146,157,0.15)] rounded-2xl w-full flex flex-col">
            <figure>
               <a href="/blog/blog-2">
               <img class="w-full h-40 object-cover rounded-t-2xl" src="{{ asset('upload/images/blog/3.png') }}" alt="Creating Articles with ChatGPT">
               </a>
            </figure>
            <div class="p-5 min-h-[180px] flex flex-col font-medium">
               <div class="flex justify-between space-x-6 mb-3 text-black">
                  <time datetime="2023-12-09 21:28:29" class="text-sm">09 Dec</time>
                  <div class="border-b grow relative -top-2"></div>
                  <a class="text-sm" href="/blog/author/1">Admin</a>
               </div>
               <h2 class="!text-[21px] mb-4 tracking-tight leading-[26px]"><a href="/blog/blog-2">Creating Articles with ChatGPT</a></h2>
               <a class="flex items-center mt-auto text-[13px] text-black" href="/blog/blog-2">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                     <path d="M9 6l6 6l-6 6"></path>
                  </svg>
               </a>
            </div>
         </article>
         <article class="shadow-[0_2px_4px_rgba(149,146,157,0.15)] rounded-2xl w-full flex flex-col">
            <figure>
               <a href="/blog/blog-1">
               <img class="w-full h-40 object-cover rounded-t-2xl" src="{{ asset('upload/images/blog/1.png') }}" alt="ChatGPT: Revolutionizing Conversational AI">
               </a>
            </figure>
            <div class="p-5 min-h-[180px] flex flex-col font-medium">
               <div class="flex justify-between space-x-6 mb-3 text-black">
                  <time datetime="2023-07-17 18:32:20" class="text-sm">17 Jul</time>
                  <div class="border-b grow relative -top-2"></div>
                  <a class="text-sm" href="/blog/author/1">Admin</a>
               </div>
               <h2 class="!text-[21px] mb-4 tracking-tight leading-[26px]"><a href="/blog/blog-1">ChatGPT: Revolutionizing Conversational AI</a></h2>
               <a class="flex items-center mt-auto text-[13px] text-black" href="/blog/blog-1">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                     <path d="M9 6l6 6l-6 6"></path>
                  </svg>
               </a>
            </div>
         </article>
      </div>
      <div class="flex justify-center">
         <a class="group flex space-x-2" href="/blog">
            <div class="rounded-md bg-green-100 px-2 py-1 text-[12px] font-semibold text-green-500 transition-colors group-hover:bg-green-200">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 5l0 14"></path>
                  <path d="M5 12l14 0"></path>
               </svg>
            </div>
            <div class="rounded-md bg-green-100 px-2 py-1 text-[12px] font-semibold text-green-500 transition-colors group-hover:bg-green-200">
               Show more
            </div>
         </a>
      </div>
   </div>
</section> --}}
<section class="site-section mb-14 py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="blog">
    <div class="container">
       <header class="lqd-section-header mx-auto text-center w-1/2 mb-9 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
          <h6 class="mb-6 inline-block rounded-md bg-[#60027C] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#60027C]">
             {{ $blogSection->header }}
          </h6>
          <h2 class="lqd-section-header-title mb-[0.45em]">{{ $blogSection->title }}</h2>
          <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">{{ $blogSection->description }}</p>
       </header>
       <div class="lg:grid-cols-3 mb-10 grid grid-cols-1 gap-14 md:grid-cols-2">
          @foreach ($blogPosts as $post)
          <article class="shadow-[0_2px_4px_rgba(149,146,157,0.15)] rounded-2xl w-full flex flex-col">
             <figure>
                <a href="/blog/{{ $post->slug }}">
                <img class="w-full h-40 object-cover rounded-t-2xl" src="{{ asset($post->image_path) }}" alt="{{ $post->title }}">
                </a>
             </figure>
             <div class="p-5 min-h-[180px] flex flex-col font-medium">
                <div class="flex justify-between space-x-6 mb-3 text-black">
                   {{-- <time datetime="{{ $post->published_at }}" class="text-sm">{{ $post->published_at->format('d M') }}</time> --}}
                   <time datetime="{{ $post->published_at }}" class="text-sm">{{ $post->formatted_date }}</time>
                   <div class="border-b grow relative -top-2"></div>
                   <a class="text-sm" href="/blog/author/1">{{ $post->author }}</a>
                </div>
                <h2 class="!text-[21px] mb-4 tracking-tight leading-[26px]"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <a class="flex items-center mt-auto text-[13px] text-black" href="/blog/{{ $post->slug }}">
                   Read More
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M9 6l6 6l-6 6"></path>
                   </svg>
                </a>
             </div>
          </article>
          @endforeach
       </div>
       <div class="flex justify-center">
          <a class="group flex space-x-2" href="/blog">
             <div class="rounded-md bg-green-100 px-2 py-1 text-[12px] font-semibold text-green-500 transition-colors group-hover:bg-green-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M12 5l0 14"></path>
                   <path d="M5 12l14 0"></path>
                </svg>
             </div>
             <div class="rounded-md bg-green-100 px-2 py-1 text-[12px] font-semibold text-green-500 transition-colors group-hover:bg-green-200">
                Show more
             </div>
          </a>
       </div>
    </div>
 </section>

@include('partials.hero')
@include('partials.features')
@include('partials.testimonials')
@include('partials.contact')
@endsection
