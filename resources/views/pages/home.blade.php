@extends('layouts.master')
@section('title', 'Home')
@section('content')
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
</section>
<section class="site-section pb-20 pt-32 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="features">
   <div class="container">
      <header class="lqd-section-header mx-auto text-center w-3/5 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
         <h2 class="lqd-section-header-title mb-[0.45em]">Empower Your Business with Cutting-Edge Tools.</h2>
         <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">Discover the powerful tools designed to enhance productivity, streamline operations, and drive business growth.</p>
      </header>
      <div class="grid grid-cols-3 justify-between gap-x-20 gap-y-9 max-lg:grid-cols-2 max-lg:gap-x-10 max-md:grid-cols-1">
         <div class="group flex gap-5">
            <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
               <svg width="20" height="21" viewBox="0 0 20 21" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.333 14.204L14.571 1.966C15.0509 1.48609 15.7018 1.21648 16.3805 1.21648C16.7166 1.21648 17.0493 1.28267 17.3598 1.41127C17.6703 1.53988 17.9524 1.72837 18.19 1.966C18.4276 2.20363 18.6161 2.48573 18.7447 2.79621C18.8733 3.10668 18.9395 3.43944 18.9395 3.7755C18.9395 4.11156 18.8733 4.44432 18.7447 4.75479C18.6161 5.06527 18.4276 5.34737 18.19 5.585L5.952 17.823C5.6728 18.1022 5.31719 18.2926 4.93 18.37L1 19.156L1.786 15.226C1.86345 14.8388 2.05378 14.4832 2.333 14.204Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M12.5 4.656L15.5 7.656" stroke-width="2"></path>
               </svg>
            </div>
            <div class="relative shrink">
               <h4 class="mb-3 ">
                  AI-Powered Generation Suite
               </h4>
               <p class="text-[14px]">Generate high-quality text, images, code, and more with our advanced AI tools.</p>
            </div>
         </div>
         <div class="group flex gap-5">
            <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
               <svg width="16" height="18" viewBox="0 0 16 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.46 13.838H5.19V3.46H3.46V13.838ZM6.92 17.298H8.65V0H6.92V17.298ZM0 10.379H1.73V6.919H0V10.379ZM10.379 13.839H12.109V3.46H10.379V13.839ZM13.839 6.92V10.38H15.569V6.92H13.839Z"></path>
               </svg>
            </div>
            <div class="relative shrink">
               <h4 class="mb-3 ">
                  Comprehensive Dashboard
               </h4>
               <p class="text-[14px]">Access valuable insights, analytics, and user activities all in one place..</p>
            </div>
         </div>
         <div class="group flex gap-5">
            <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
               <svg width="19" height="19" viewBox="0 0 19 19" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.421 -6.80448e-08L3.267 0.643L0.231 14.636L0 15.636H4.013L3.524 17.925L3.293 18.925H9.029L9.158 18.256L10.007 14.295H12.219C13.7458 14.318 15.2324 13.8059 16.4212 12.8475C17.6099 11.8891 18.4257 10.5449 18.727 9.048C18.9117 8.34466 18.9335 7.60848 18.7909 6.89542C18.6483 6.18237 18.345 5.51122 17.904 4.933C17.2726 4.18389 16.4149 3.66026 15.46 3.441C15.303 2.67914 14.9378 1.97574 14.405 1.409C13.9537 0.955562 13.416 0.597241 12.8237 0.355227C12.2315 0.113213 11.5967 -0.00757721 10.957 -6.80448e-08H3.421ZM4.758 1.646H10.958C11.8009 1.63923 12.613 1.96222 13.221 2.546C13.563 2.92723 13.7979 3.39222 13.9019 3.89369C14.0059 4.39516 13.9752 4.91523 13.813 5.401C13.6186 6.54221 13.0154 7.57362 12.116 8.30255C11.2167 9.03148 10.0827 9.40808 8.926 9.362H5.376L5.25 10.006L4.401 13.993H2.058L4.758 1.646ZM6.841 2.855L6.687 3.498L5.839 7.3L5.608 8.3H8.515C9.23308 8.28426 9.92567 8.0308 10.4843 7.57932C11.0429 7.12783 11.436 6.50381 11.602 5.805H11.628C11.628 5.789 11.628 5.77 11.628 5.754C11.7218 5.41549 11.7405 5.06056 11.6828 4.71406C11.6252 4.36756 11.4924 4.03785 11.294 3.748C11.0809 3.46596 10.8048 3.23768 10.4878 3.0814C10.1707 2.92513 9.82147 2.8452 9.468 2.848L6.841 2.855ZM8.15 4.5H9.462C9.55438 4.48894 9.64804 4.50213 9.73378 4.53824C9.81952 4.57436 9.89438 4.63218 9.951 4.706C10.0148 4.80392 10.055 4.91532 10.0683 5.03143C10.0817 5.14753 10.0679 5.26515 10.028 5.375V5.4C9.92453 5.73467 9.72591 6.032 9.45637 6.25573C9.18682 6.47947 8.858 6.61993 8.51 6.66H7.661L8.15 4.5ZM15.506 5.22C15.9416 5.37924 16.3307 5.64457 16.638 5.992C16.9265 6.37171 17.1192 6.81536 17.1998 7.28537C17.2804 7.75537 17.2465 8.23787 17.101 8.692C16.9066 9.83321 16.3034 10.8646 15.404 11.5935C14.5047 12.3225 13.3707 12.6991 12.214 12.653H8.664L8.535 13.296L7.686 17.283H5.35L5.71 15.637H5.736L5.865 14.968L6.714 11.007H8.926C10.4528 11.03 11.9394 10.5179 13.1282 9.55954C14.3169 8.60115 15.1327 7.25692 15.434 5.76C15.472 5.575 15.488 5.4 15.51 5.221L15.506 5.22Z"></path>
               </svg>
            </div>
            <div class="relative shrink">
               <h4 class="mb-3 ">
                  Secure Payment Solutions
               </h4>
               <p class="text-[14px]">Seamlessly process payments with robust security for credit cards, debit cards, and more.</p>
            </div>
         </div>
         <div class="group flex gap-5">
            <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
               <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.85 20.85C16.3728 20.85 20.85 16.3728 20.85 10.85C20.85 5.32715 16.3728 0.85 10.85 0.85C5.32715 0.85 0.85 5.32715 0.85 10.85C0.85 16.3728 5.32715 20.85 10.85 20.85Z" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M6.85 10.85C6.85 16.3728 8.64086 20.85 10.85 20.85C13.0591 20.85 14.85 16.3728 14.85 10.85C14.85 5.32715 13.0591 0.85 10.85 0.85C8.64086 0.85 6.85 5.32715 6.85 10.85Z" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M0.85 10.85H20.85" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
               </svg>
            </div>
            <div class="relative shrink">
               <h4 class="mb-3 ">
                  Multi-Language Support
               </h4>
               <p class="text-[14px]">Communicate and operate efficiently in multiple languages.</p>
            </div>
         </div>
         <div class="group flex gap-5">
            <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
               <svg width="19" height="16" viewBox="0 0 19 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.84 6.509H7.29C6.571 6.509 6.509 7.091 6.509 7.809C6.509 8.527 6.571 9.109 7.29 9.109H14.84C15.559 9.109 15.621 8.527 15.621 7.809C15.621 7.091 15.558 6.509 14.84 6.509ZM17.44 13.018H7.29C6.571 13.018 6.509 13.6 6.509 14.318C6.509 15.036 6.571 15.618 7.29 15.618H17.443C18.162 15.618 18.224 15.036 18.224 14.318C18.224 13.6 18.162 13.018 17.443 13.018H17.44ZM7.29 2.6H17.443C18.162 2.6 18.224 2.018 18.224 1.3C18.224 0.582 18.162 0 17.443 0H7.29C6.571 0 6.509 0.582 6.509 1.3C6.509 2.018 6.571 2.6 7.29 2.6ZM3.124 6.509H0.781C0.0619999 6.509 0 7.091 0 7.809C0 8.527 0.0619999 9.109 0.781 9.109H3.124C3.843 9.109 3.905 8.527 3.905 7.809C3.905 7.091 3.843 6.509 3.124 6.509ZM3.124 13.018H0.781C0.0619999 13.018 0 13.6 0 14.318C0 15.036 0.0619999 15.618 0.781 15.618H3.124C3.843 15.618 3.905 15.036 3.905 14.318C3.905 13.6 3.843 13.018 3.124 13.018ZM3.124 0H0.781C0.0619999 0 0 0.582 0 1.3C0 2.018 0.0619999 2.6 0.781 2.6H3.124C3.843 2.6 3.905 2.018 3.905 1.3C3.905 0.582 3.843 0 3.124 0Z"></path>
               </svg>
            </div>
            <div class="relative shrink">
               <h4 class="mb-3 ">
                  Flexible Customization
               </h4>
               <p class="text-[14px]">Create and manage custom templates tailored to your business needs.</p>
            </div>
         </div>
         <div class="group flex gap-5">
            <div class="grid place-items-center shrink-0 w-11 h-11 rounded-lg bg-[#F2F2F2] text-heading-foreground transition-all group-hover:scale-125 group-hover:shadow-xl group-hover:bg-black group-hover:text-white">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.217 1.068L9.635 7.968M13.818 7.968L14.236 1.068M9.217 22.191L9.635 15.291M13.818 15.291L14.236 22.191M22.287 9.121L15.387 9.539M15.387 13.722L22.287 14.14M1.164 9.121L8.064 9.539M8.064 13.722L1.164 14.14M22.85 11.85C22.85 17.9251 17.9251 22.85 11.85 22.85C5.77487 22.85 0.849998 17.9251 0.849998 11.85C0.849998 5.77487 5.77487 0.849998 11.85 0.849998C17.9251 0.849998 22.85 5.77487 22.85 11.85ZM15.85 11.85C15.85 14.0591 14.0591 15.85 11.85 15.85C9.64086 15.85 7.85 14.0591 7.85 11.85C7.85 9.64086 9.64086 7.85 11.85 7.85C14.0591 7.85 15.85 9.64086 15.85 11.85Z" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
               </svg>
            </div>
            <div class="relative shrink">
               <h4 class="mb-3 ">
                  Integrated Support System
               </h4>
               <p class="text-[14px]">Manage support tickets directly from your dashboard for seamless customer service.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="site-section transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
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
</section>


<section class="site-section py-20 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
   <div class="container">
      <header class="lqd-section-header mx-auto text-center w-3/5 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
         <h2 class="lqd-section-header-title mb-[0.45em]">Tailored Solutions for Every Professional</h2>
         <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">Our platform empowers professionals with tools and resources customized to their specific roles and needs, helping them excel in their fields.</p>
      </header>
      <div class="grid grid-cols-3 gap-4 max-lg:grid-cols-2 max-md:grid-cols-1">
         <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[#CBA153] bg-[#CBA153] bg-opacity-[0.07] hover:shadow-[#cba15326]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">For Digital Agencies</h3>
         </div>
         <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[#AB7FE6] bg-[#AB7FE6] bg-opacity-[0.07] hover:shadow-[#ab7fe621]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">For Product Designers</h3>
         </div>
         <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[#57CBC6] bg-[#57CBC6] bg-opacity-[0.07] hover:shadow-[#57cbc624]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">For Entrepreneurs</h3>
         </div>
         <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[#7F8FE6] bg-[#7F8FE6] bg-opacity-[0.07] hover:shadow-[#7f8fe624]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">For Copywriters</h3>
         </div>
         <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[#6BAC65] bg-[#6BAC65] bg-opacity-[0.07] hover:shadow-[#6bac6524]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">For Digital Marketers</h3>
         </div>
         <div class="lqd-color-box flex items-center py-5 px-9 gap-4 rounded-[15px] transition-all hover:shadow-lg hover:-translate-y-2 text-[#EF793A] bg-[#EF793A] bg-opacity-[0.07] hover:shadow-[#ef793a1f]">
            <span class="lqd-box-dot w-6 h-6 border border-[8px] border-white rounded-full shadow-lg !bg-current"></span>
            <h3 class="text-xl text-inherit -tracking-tight">For Developers</h3>
         </div>
      </div>
   </div>
</section>

<section class="site-section pb-9 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="templates">
   <div class="container">
      <div class="rounded-[50px] border p-10 max-sm:px-5">
         <header class="lqd-section-header mx-auto text-center w-3/5 mb-7 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
            <h6 class="mb-6 inline-block rounded-md bg-[#083D91] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#083D91]">
               Custom
               <span class="dot"></span>
               <span class="opacity-50">Prompts</span>
            </h6>
            <h2 class="lqd-section-header-title mb-[0.45em]">Custom Templates for Every Need.</h2>
            <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">Harness the power of AI to generate tailored content for any project.</p>
         </header>
         <div class="flex flex-col items-center">
            <div class="mx-auto mb-10 inline-flex flex-wrap items-center gap-2 rounded-lg border p-[0.35rem] text-[12px] font-semibold leading-none max-md:justify-center">
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl lqd-is-active" data-target=".templates-all">
               All
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-blog">
               Blog
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-ecommerce">
               🎯 Ecommerce
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-development">
               Development
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-advertisement">
               Advertisement
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-social-media">
               Social Media
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-email">
               Email
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-marketing" disabled>
               🔥 Marketing
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-voiceover">
               Voiceover
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-youtube">
               Youtube
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-rss">
               RSS
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-academic">
               Academic
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-business">
               Business
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-customer-service">
               Customer Service
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-entertainment">
               Entertainment
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-website">
               Website
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-advertising">
               Advertising
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-languages">
               Languages
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-fitness-health">
               Fitness & Health
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-writer">
               Writer
               </button>
               <button class="transition-all px-4 py-2 rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xl" data-target=".templates-misc">
               Misc
               </button>
            </div>
         </div>
         <div class="relative">
            <div class="templates-cards grid max-h-[28rem] grid-cols-3 gap-4 overflow-hidden max-lg:grid-cols-2 max-md:grid-cols-1">
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M319 806h322v-60H319v60Zm0-170h322v-60H319v60Zm-99 340q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554h189L551 236v186Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Product Description
                     </h4>
                     <p class="text-[14px]">Craft persuasive product descriptions that boost sales.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M140 936q-24.75 0-42.375-17.625T80 876V216l67 67 66-67 67 67 67-67 66 67 67-67 67 67 66-67 67 67 67-67v660q0 24.75-17.625 42.375T820 936H140Zm0-60h310V596H140v280Zm370 0h310V766H510v110Zm0-170h310V596H510v110ZM140 536h680V416H140v120Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Article Generator
                     </h4>
                     <p class="text-[14px]">Instantly create unique articles on any topic. Boost engagement, improve SEO, and save time.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 96 960 960" width="40">
                           <path d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Testimonial Review
                     </h4>
                     <p class="text-[14px]">Instantly generate authentic testimonials. Build trust and credibility with genuine reviews.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M80 236v-60h800v60H80Zm210 250V386h380v100H290Zm0 240V626h380v100H290Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Blog Conclusion
                     </h4>
                     <p class="text-[14px]">End your blog posts on a high note. Craft memorable conclusions that leave a lasting impact.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M15.8301 2.76172C15.9473 3.58203 16.0059 4.39062 16.0059 5.1875V6.3125L15.8301 8.73828C15.7363 9.41797 15.5371 9.91016 15.2324 10.2148C14.9043 10.543 14.4121 10.7539 13.7559 10.8477C13.123 10.8945 12.3613 10.9297 11.4707 10.9531C10.6035 10.9766 9.88867 10.9883 9.32617 10.9883H8.48242C5.88086 10.9648 4.18164 10.918 3.38477 10.8477C3.38477 10.8477 3.29102 10.8359 3.10352 10.8125C2.91602 10.7891 2.76367 10.7656 2.64648 10.7422C2.5293 10.7188 2.37695 10.6602 2.18945 10.5664C2.02539 10.4727 1.87305 10.3555 1.73242 10.2148C1.61523 10.0742 1.49805 9.88672 1.38086 9.65234C1.28711 9.39453 1.22852 9.17188 1.20508 8.98438L1.13477 8.73828C1.04102 7.91797 0.994141 7.10938 0.994141 6.3125V5.1875L1.13477 2.76172C1.22852 2.08203 1.42773 1.58984 1.73242 1.28516C2.06055 0.933594 2.56445 0.722656 3.24414 0.652344C3.87695 0.605469 4.62695 0.570313 5.49414 0.546875C6.36133 0.523437 7.07617 0.511719 7.63867 0.511719H8.48242C10.5918 0.511719 12.3496 0.558594 13.7559 0.652344C14.4121 0.722656 14.9043 0.933594 15.2324 1.28516C15.3262 1.37891 15.4082 1.49609 15.4785 1.63672C15.5488 1.75391 15.6074 1.88281 15.6543 2.02344C15.7012 2.14062 15.7363 2.25781 15.7598 2.375C15.7832 2.49219 15.8066 2.58594 15.8301 2.65625V2.76172ZM10.5215 5.85547L11.0137 5.60938L6.9707 3.5V7.71875L10.5215 5.85547Z" fill="#23344D"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Youtube Video Description
                     </h4>
                     <p class="text-[14px]">Elevate your YouTube content with compelling video descriptions. Generate engaging descriptions effortlessly and increase views.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="instagram">
                           <path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Instagram Captions
                     </h4>
                     <p class="text-[14px]">Elevate your Instagram game with captivating captions. Generate unique captions that engage followers and increase your reach.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="instagram">
                           <path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Instagram Hashtags
                     </h4>
                     <p class="text-[14px]">Boost your Instagram reach with relevant hashtags. Generate optimal, trending hashtags and increase your visibility.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="twitter">
                           <path d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Social Media Post Tweet
                     </h4>
                     <p class="text-[14px]">Make an impact with every tweet. Generate attention-grabbing social media posts and increase engagement.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm100-160h200v-80H280v80Zm40-171 160-80 160 80V276H320v329Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Social Media Post Business
                     </h4>
                     <p class="text-[14px]">Generate a text for your business social media networks. Maximize your social media presence with impactful business posts.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M5.66016 15.2383H2.88281V8.41797H0.5625V5.74609H2.88281V3.77734C2.88281 2.65234 3.19922 1.78516 3.83203 1.17578C4.46484 0.566406 5.30859 0.261719 6.36328 0.261719C7.20703 0.261719 7.89844 0.296875 8.4375 0.367188V2.72266L6.99609 2.75781C6.48047 2.75781 6.12891 2.86328 5.94141 3.07422C5.75391 3.28516 5.66016 3.60156 5.66016 4.02344V5.74609H8.33203L7.98047 8.41797H5.66016V15.2383Z" fill="#23344D"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Facebook Headlines
                     </h4>
                     <p class="text-[14px]">Get noticed with attention-grabbing Facebook headlines. Generate unique, clickable headlines that increase engagement and drive traffic.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-advertisement">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="adwords">
                           <path fill="#263238" d="M2.066 23.314c-.082 0-.166-.021-.242-.063-.242-.135-.329-.438-.194-.681L9.278 8.803c.134-.24.439-.326.68-.194.242.135.329.438.194.681L2.503 23.058C2.412 23.222 2.242 23.314 2.066 23.314zM9.933 27.686c-.082 0-.166-.021-.242-.063-.242-.135-.329-.438-.194-.681l4.796-8.634c.133-.24.438-.326.68-.194.242.135.329.438.194.681l-4.796 8.634C10.279 27.593 10.109 27.686 9.933 27.686z"></path>
                           <path fill="#263238" d="M15.709,15.761L9.497,26.942c-0.705,1.27-2.046,2.059-3.5,2.059c-0.674,0-1.345-0.175-1.939-0.505 c-1.928-1.07-2.625-3.511-1.554-5.438l7.578-13.639c0.134-0.241,0.047-0.546-0.194-0.681c-0.24-0.133-0.545-0.046-0.68,0.194 L1.629,22.571c-1.339,2.41-0.468,5.46,1.942,6.8c0.742,0.412,1.58,0.63,2.424,0.63c1.817,0,3.493-0.985,4.375-2.572 l5.921-10.658L15.709,15.761z"></path>
                           <path fill="#263238" d="M6 30c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5S8.757 30 6 30zM6 21c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4S8.206 21 6 21zM26.004 30.001c-1.817 0-3.493-.985-4.375-2.572l-10-18c-1.339-2.41-.468-5.46 1.942-6.8.742-.412 1.581-.631 2.425-.631 1.816 0 3.492.986 4.374 2.573l10 18c1.339 2.41.468 5.46-1.942 6.8C27.687 29.783 26.848 30.001 26.004 30.001zM15.997 2.998c-.675 0-1.345.175-1.94.506-1.928 1.07-2.625 3.511-1.554 5.438l10 18c.705 1.27 2.046 2.059 3.5 2.059.674 0 1.345-.175 1.939-.505 1.928-1.07 2.625-3.511 1.554-5.438l-10-18C18.792 3.787 17.451 2.998 15.997 2.998z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Google Ads Headlines
                     </h4>
                     <p class="text-[14px]">Create high-converting Google ads with captivating headlines. Generate unique, clickable ads that drive traffic and boost sales.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-advertisement">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" enable-background="new 0 0 32 32" viewBox="0 0 32 32" id="adwords">
                           <path fill="#263238" d="M2.066 23.314c-.082 0-.166-.021-.242-.063-.242-.135-.329-.438-.194-.681L9.278 8.803c.134-.24.439-.326.68-.194.242.135.329.438.194.681L2.503 23.058C2.412 23.222 2.242 23.314 2.066 23.314zM9.933 27.686c-.082 0-.166-.021-.242-.063-.242-.135-.329-.438-.194-.681l4.796-8.634c.133-.24.438-.326.68-.194.242.135.329.438.194.681l-4.796 8.634C10.279 27.593 10.109 27.686 9.933 27.686z"></path>
                           <path fill="#263238" d="M15.709,15.761L9.497,26.942c-0.705,1.27-2.046,2.059-3.5,2.059c-0.674,0-1.345-0.175-1.939-0.505 c-1.928-1.07-2.625-3.511-1.554-5.438l7.578-13.639c0.134-0.241,0.047-0.546-0.194-0.681c-0.24-0.133-0.545-0.046-0.68,0.194 L1.629,22.571c-1.339,2.41-0.468,5.46,1.942,6.8c0.742,0.412,1.58,0.63,2.424,0.63c1.817,0,3.493-0.985,4.375-2.572 l5.921-10.658L15.709,15.761z"></path>
                           <path fill="#263238" d="M6 30c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5S8.757 30 6 30zM6 21c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4S8.206 21 6 21zM26.004 30.001c-1.817 0-3.493-.985-4.375-2.572l-10-18c-1.339-2.41-.468-5.46 1.942-6.8.742-.412 1.581-.631 2.425-.631 1.816 0 3.492.986 4.374 2.573l10 18c1.339 2.41.468 5.46-1.942 6.8C27.687 29.783 26.848 30.001 26.004 30.001zM15.997 2.998c-.675 0-1.345.175-1.94.506-1.928 1.07-2.625 3.511-1.554 5.438l10 18c.705 1.27 2.046 2.059 3.5 2.059.674 0 1.345-.175 1.939-.505 1.928-1.07 2.625-3.511 1.554-5.438l-10-18C18.792 3.787 17.451 2.998 15.997 2.998z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Google Ads Description
                     </h4>
                     <p class="text-[14px]">Step up your Google ad game, Craft high-converting ad copy that grabs attention and drives sales.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M160 684v-60h640v60H160Zm0 160v-60h640v60H160Zm0-316v-60h640v60H160Zm0-160v-60h640v60H160Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Paragraph Generator
                     </h4>
                     <p class="text-[14px]">Generate a paragraph with keywords and description. Never struggle with writer's block again. Generate flawless paragraphs that captivate readers.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M443 936q-17 0-32-6.5T385 912L203 719l32-33q11-11 25-13.5t29 .5l114 25V276q0-26 17-43t43-17q26 0 43 17t17 43v240h36q11 0 19 1.5t17 6.5l163 82q24 12 36 35t8 49l-26 180q-5 29-28 47.5T696 936H443Zm-26-60h281l43-249-183-91h-55V316q0-18-11-29t-29-11q-18 0-29 11t-11 29v399l-154-33-23 23 171 171Zm0 0L246 705l23-23 154 33V316q0-18 11-29t29-11q18 0 29 11t11 29v220h55l183 91-43 249H417Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Pros &amp; Cons
                     </h4>
                     <p class="text-[14px]">Make informed decisions with ease. Generate unbiased pros and cons lists that help you weigh options and make better choices.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M319 806h322v-60H319v60Zm0-170h322v-60H319v60Zm-99 340q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554V236H220v680h520V422H551ZM220 236v186-186 680-680Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Meta Description
                     </h4>
                     <p class="text-[14px]">Get more clicks with compelling meta descriptions. Generate unique, SEO-friendly meta descriptions that attract customers and boost traffic.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.62695 5.87109C8.04102 6.45703 7.32617 6.75 6.48242 6.75C5.66211 6.75 4.95898 6.45703 4.37305 5.87109C3.78711 5.28516 3.49414 4.58203 3.49414 3.76172C3.49414 2.91797 3.78711 2.20313 4.37305 1.61719C4.95898 1.03125 5.66211 0.738281 6.48242 0.738281C7.32617 0.738281 8.04102 1.03125 8.62695 1.61719C9.21289 2.20313 9.50586 2.91797 9.50586 3.76172C9.50586 4.58203 9.21289 5.28516 8.62695 5.87109ZM4.05664 8.57812C4.94727 8.36719 5.75586 8.26172 6.48242 8.26172C7.23242 8.26172 8.05273 8.36719 8.94336 8.57812C9.83398 8.78906 10.6426 9.14062 11.3691 9.63281C12.1191 10.1016 12.4941 10.6406 12.4941 11.25V12.7617H0.505859V11.25C0.505859 10.6406 0.869141 10.1016 1.5957 9.63281C2.3457 9.14062 3.16602 8.78906 4.05664 8.57812Z" fill="#23344D"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        FAQ Generator (All Datas)
                     </h4>
                     <p class="text-[14px]">Quickly create helpful FAQs. Our AI-powered generator provides custom responses to common questions in seconds.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M140 896q-24 0-42-18t-18-42V316q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302 340-223v-55L480 534 140 316v55l340 223Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Email Generator
                     </h4>
                     <p class="text-[14px]">Generate an email with your subject and description. Streamline your inbox and save time.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M140 896q-24 0-42-18t-18-42V316q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302 340-223v-55L480 534 140 316v55l340 223Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Email Answer Generator
                     </h4>
                     <p class="text-[14px]">Effortlessly tackle your overflowing inbox with custom, accurate responses to common queries, freeing you up to focus on what matters most.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0.625 13.5V8.26172L11.875 6.75L0.625 5.23828V0L16.375 6.75L0.625 13.5Z" fill="#23344D"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Newsletter Generator
                     </h4>
                     <p class="text-[14px]">Generate engaging newsletters easily with personalized content that resonates with your audience, driving growth and engagement.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4.75586 8.01172V9.48828H0.255859V8.01172H4.75586ZM6.37305 5.58594L5.31836 6.64062L3.73633 5.02344L4.79102 3.96875L6.37305 5.58594ZM9.25586 0.488281V4.98828H7.74414V0.488281H9.25586ZM13.2637 5.02344L11.6816 6.64062L10.627 5.58594L12.209 3.96875L13.2637 5.02344ZM12.2441 8.01172H16.7441V9.48828H12.2441V8.01172ZM6.90039 7.16797C7.3457 6.72266 7.87305 6.5 8.48242 6.5C9.11523 6.5 9.6543 6.72266 10.0996 7.16797C10.5449 7.58984 10.7676 8.11719 10.7676 8.75C10.7676 9.38281 10.5449 9.92188 10.0996 10.3672C9.6543 10.7891 9.11523 11 8.48242 11C7.87305 11 7.3457 10.7891 6.90039 10.3672C6.47852 9.92188 6.26758 9.38281 6.26758 8.75C6.26758 8.11719 6.47852 7.58984 6.90039 7.16797ZM10.627 11.9141L11.6816 10.8594L13.2637 12.4766L12.209 13.5312L10.627 11.9141ZM3.73633 12.4766L5.31836 10.8594L6.37305 11.9141L4.79102 13.5312L3.73633 12.4766ZM7.74414 17.0117V12.5117H9.25586V17.0117H7.74414Z" fill="#23344D"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Grammar Correction
                     </h4>
                     <p class="text-[14px]">Eliminate grammar errors and enhance your writing with ease. Our tool offers seamless grammar correction for flawless content.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M160 666v-60h389v60H160Zm0-120v-60h640v60H160Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        TL;DR Summarization
                     </h4>
                     <p class="text-[14px]">Automatically summarize long texts into bite-sized summaries with this TL;DR generator.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm56-157h489L578 583 446 754l-93-127-117 152Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Image Generator
                     </h4>
                     <p class="text-[14px]">Unleash your creativity with our AI image generator that produces stunning visuals in seconds.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M140 976q-24.75 0-42.375-17.625T80 916V236q0-24.75 17.625-42.375T140 176h380l-60 60H140v680h480V776h60v140q0 24.75-17.625 42.375T620 976H140Zm100-170v-60h280v60H240Zm0-120v-60h200v60H240Zm380 10L460 536H320V336h140l160-160v520Zm60-92V258q56 21 88 74t32 104q0 51-35 101t-85 67Zm0 142v-62q70-25 125-90t55-158q0-93-55-158t-125-90v-62q102 27 171 112.5T920 436q0 112-69 197.5T680 746Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Speech to Text
                     </h4>
                     <p class="text-[14px]">The AI app that turns audio speech into text with ease. Get ready to generate custom texts from audio files quickly and accurately.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 96 960 960" width="40">
                           <path d="M196.666 965.333q-43.824 0-74.912-31.087-31.087-31.088-31.087-74.912V701.667h105.999v157.667h157.667v105.999H196.666Zm409.001 0V859.334h157.667V701.667H870v157.667q0 43.824-31.284 74.912-31.283 31.087-75.382 31.087H605.667ZM344 739.333 180.667 576 344 412.667 418.333 489l-86 87 86 87L344 739.333Zm272 0L541.667 663l86-87-86-87L616 412.667 779.333 576 616 739.333Zm-525.333-289V292.666q0-44.099 31.087-75.382Q152.842 186 196.666 186h157.667v106.666H196.666v157.667H90.667Zm672.667 0V292.666H605.667V186h157.667q44.099 0 75.382 31.284Q870 248.567 870 292.666v157.667H763.334Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Code Generator
                     </h4>
                     <p class="text-[14px]">Create custom code in seconds! Leverage our state-of-the-art AI technology to quickly and easily generate code in any language.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-voiceover">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M140 976q-24.75 0-42.375-17.625T80 916V236q0-24.75 17.625-42.375T140 176h380l-60 60H140v680h480V776h60v140q0 24.75-17.625 42.375T620 976H140Zm100-170v-60h280v60H240Zm0-120v-60h200v60H240Zm380 10L460 536H320V336h140l160-160v520Zm60-92V258q56 21 88 74t32 104q0 51-35 101t-85 67Zm0 142v-62q70-25 125-90t55-158q0-93-55-158t-125-90v-62q102 27 171 112.5T920 436q0 112-69 197.5T680 746Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Voiceover
                     </h4>
                     <p class="text-[14px]">The AI app that turns audio speech into text with ease. Get ready to generate custom texts from audio files quickly and accurately.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M430 896V356H200V256h560v100H530v540H430Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Article Wizard Generator
                     </h4>
                     <p class="text-[14px]">Create custom article instantly with our article wizard generator. Boost engagement and save time.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" stroke-width="2" stroke="black" fill="none" viewBox="0 0 24 24">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M6 4l6 16l6 -16"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Vision
                     </h4>
                     <p class="text-[14px]">Elevate your visual analytics with our AI Vision platform. Harness the power of machine learning for real-time image recognition and data insights. Enhance efficiency and decision-making.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" stroke-width="2" stroke="black" fill="none" viewBox="0 0 24 24">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M6 4l6 16l6 -16"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        File Analyzer
                     </h4>
                     <p class="text-[14px]">Simply upload a file (PDF, CSV, .doc or .docx) and extract key insights or summarize the entire document.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" stroke-width="2" stroke="black" fill="none" viewBox="0 0 24 24">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M6 4l6 16l6 -16"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Chat Image
                     </h4>
                     <p class="text-[14px]">Generate Image by user input</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-youtube">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z"></path>
                           <path d="M10 9l5 3l-5 3z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI YouTube
                     </h4>
                     <p class="text-[14px]">Simply turn your Youtube videos into Blog post.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M430 896V356H200V256h560v100H530v540H430Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI ReWriter
                     </h4>
                     <p class="text-[14px]">Rewrite more professional and detailed content instantly with our ai rewriter. Boost engagement and save time.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-rss">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                           <path d="M4 4a16 16 0 0 1 16 16"></path>
                           <path d="M4 11a9 9 0 0 1 9 9"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI RSS
                     </h4>
                     <p class="text-[14px]">Generate unique content with RSS Feed.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M430 896V356H200V256h560v100H530v540H430Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Plagiarism Checker
                     </h4>
                     <p class="text-[14px]">Analylze text, comparing it against a vast database online content to identify potential plagiarism.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M430 896V356H200V256h560v100H530v540H430Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Content Detector
                     </h4>
                     <p class="text-[14px]">Analylze text, comparing it against a vast database online content to AI writing content</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-video">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" stroke-width="2" stroke="black" fill="none" viewBox="0 0 24 24">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M6 4l6 16l6 -16"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Video
                     </h4>
                     <p class="text-[14px]">Bring your static images to life and create visually compelling videos effortlessly.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" stroke-width="2" stroke="black" fill="none" viewBox="0 0 24 24">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M6 4l6 16l6 -16"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Web Chat
                     </h4>
                     <p class="text-[14px]">Analyze web page content with url</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" stroke-width="2" stroke="black" fill="none" viewBox="0 0 24 24">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M6 4l6 16l6 -16"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Web Chat
                     </h4>
                     <p class="text-[14px]">Analyze web page content with url</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M430 896V356H200V256h560v100H530v540H430Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Plagiarism Checker
                     </h4>
                     <p class="text-[14px]">Analylze text, comparing it against a vast database online content to identify potential plagiarism.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M430 896V356H200V256h560v100H530v540H430Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Content Detector
                     </h4>
                     <p class="text-[14px]">Analylze text, comparing it against a vast database online content to AI writing content</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M220 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h520q24 0 42 18t18 42v600q0 24-18 42t-42 18H220Zm0-60h520V276H220v600Zm70-120h160v-60H290v60Zm0-160h380v-60H290v60Zm0-160h380v-60H290v60ZM180 876V276v600Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Cover Letter
                     </h4>
                     <p class="text-[14px]">Generate professional cover letters that highlight your strengths and stand out to employers.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M180 836v-60h600v60H180Zm130-150-43-43 112-112-112-112 43-43 112 112 112-112 43 43-112 112 112 112-43 43-112-112-112 112Zm-130-270v-60h600v60H180Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Math Question
                     </h4>
                     <p class="text-[14px]">Solve complex math questions with ease. Get step-by-step solutions and understand the process.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M120 796v-60h480v60H120Zm0-170v-60h720v60H120Zm0-170v-60h720v60H120Zm0-170v-60h480v60H120Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Bullet Point Answer
                     </h4>
                     <p class="text-[14px]">Generate concise bullet point answers for any question. Save time and get straight to the point.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M120 936V216h720v720H120Zm60-60h600V276H180v600ZM180 276v600-600Zm280 390h120v-60H460v60Zm0-120h120v-60H460v60Zm-60-120h240V306H400v120Zm-120 300h480v-60H280v60Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Thesis Statement
                     </h4>
                     <p class="text-[14px]">Generate a thesis statement for the given topic.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M480 936q-65 0-122-25t-100-67.5T196.5 743 172 621V396q0-91 60-155.5T396 180v60q-65 0-111.5 46.5T238 396v225q0 74 37 138t100 102q60 24 133 24 70 0 130-27.5t101.5-75.5q40-47 62.5-107T840 396h60q0 80-24 153.5T837 660q-38 60-92 103.5T629 843t-149 93Zm-46-197 310-310-42-42-268 268-113-113-42 42 155 155ZM396 460Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Proofreading
                     </h4>
                     <p class="text-[14px]">Proofread the given text and provide suggestions for improvement.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M460 936q-62 0-120-18t-106-52q-48-34-86-84.5T78 662q-12-39-16-80.5T60 502q0-43 4-84.5T82 341q12-34 29-62.5T132 233q-17 39-29.5 82T90 418q-1 16-1 34t1 34q2 30 10.5 60.5T128 579q30 49 73 83t92 55.5T460 726q38 0 74.5-9t68.5-25v70q-33 14-69.5 21T460 792q-53 0-103-14.5t-95.5-40q-46-25-82.5-62t-62-82.5T92 502q-3-13-3-27.5t3-27.5q2-12 6-23.5t9-23.5q12-28 30-53t40-44q27-26 57.5-46.5T366 221q37-18 75-25t78-7v58q-40 2-80 10t-75 24q-30 12-57.5 29.5T250 335q-20 19-36.5 41.5T194 423q-11 23-17 47.5T170 517q-1 16-1 34t1 34q2 30 10.5 60.5T238 699q29 49 72 82.5t92 54T460 848q38 0 75.5-10t68.5-26v56q-31 12-64 17.5T460 936ZM704 348q-53 0-103-14.5t-95.5-40q-46-25-82.5-62T348 149.5 286 103q-3-13-3-27.5T286 48q12-47 37-87.5T408 0h132q22 0 43 3.5t41 9.5q49 12 91 33t73 53q23 20 43 44.5t33 53.5q12 28 20 57.5T980 316q0 33-3.5 66t-11.5 64q-12 45-31 86.5t-48 77.5q-31 34-68 59.5t-83 42q-41 14-82 17.5t-84 3.5q-34 0-67-3t-66-12V746q31 10 63 15.5t64 7.5q31 0 60.5-3t59.5-12q39-14 72-34t58-48q26-22 46.5-47t35.5-51q12-25 21.5-51.5T832 496q-2-17-2-34t2-34q2-30 11-60.5T896 272q29-49 72-83t92-54.5T1116 96q53 0 103 14.5t95.5 40q46 25 82.5 62t62 82.5T1580 478q12 39 16 80.5t4 80.5q0 43-4 84.5t-12 80.5q-12 34-29 62.5T1498 695q17-39 29.5-82T1540 548q1-16 1-34t-1-34q-2-30-10.5-60.5T1442 367q-30-49-73-83t-92-55.5T704 258Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Rephrase
                     </h4>
                     <p class="text-[14px]">Rephrase the given text to improve clarity and readability.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-academic">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M480 936q-57 0-108-21.5t-88.5-58q-39-37.5-62-89t-23-107.5V378q0-91 60-155.5T396 180v60q-65 0-111.5 46.5T238 396v225q0 74 37 138t100 102q60 24 133 24 70 0 130-27.5t101.5-75.5q40-47 62.5-107T840 396h60q0 80-24 153.5T837 660q-38 60-92 103.5T629 843t-149 93ZM228 514q-4-4-6-10t-2-11q0-6 2-11t6-10l292-293q4-4 10-6t11-2q6 0 11 2t10 6l293 293q4 4 6 10t2 11q0 6-2 11t-6 10q-4 4-10 6t-11 2q-6 0-11-2t-10-6L480 306 238 514q-4 4-10 6t-11 2q-6 0-11-2t-10-6Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Improve
                     </h4>
                     <p class="text-[14px]">Improve the given text by enhancing its quality and clarity.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M15 8V4H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2h-4z"></path>
                           <path d="M17 8h-4V4h4v4zm-2-2v-1H9v1h6zM19 18H5V9h14v9zm0-10H5V6h14v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Job Description
                     </h4>
                     <p class="text-[14px]">Generate comprehensive job descriptions tailored to your company needs.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M19 5v14H5V5h14m0-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
                           <path d="M7 10h10v2H7zM7 14h10v2H7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Resume Builder
                     </h4>
                     <p class="text-[14px]">Create professional resumes tailored to your skills and experience.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M3 4v16h18V4H3zm16 14H5V6h14v12zm-6-3v-1h3v1h-3zM7 11h10v1H7v-1z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Linkedin
                     </h4>
                     <p class="text-[14px]">Generate engaging LinkedIn profile descriptions that attract attention from employers and connections.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M5 2v2H3v2h2v2h2V6h2V4H5zm12 0v2h4v4h2V6h2V4h-2V2h-2zm-4 4h2v4h-2zm4 4h2v4h-2zm-4 0h2v4h-2zm-6 6h2v2H7v-2zm4 0h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-12 2h2v2H3v-2zm8 0h2v2h-2zm4 0h2v2h-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Startup Ideas (w/ quantities)
                     </h4>
                     <p class="text-[14px]">Generate innovative startup ideas along with estimated quantities and market analysis.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M5 2v2H3v2h2v2h2V6h2V4H5zm12 0v2h4v4h2V6h2V4h-2V2h-2zm-4 4h2v4h-2zm4 4h2v4h-2zm-4 0h2v4h-2zm-6 6h2v2H7v-2zm4 0h2v2h-2zm4 0h2v2h-2zm4 0h2v2h-2zm-12 2h2v2H3v-2zm8 0h2v2h-2zm4 0h2v2h-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        PAS
                     </h4>
                     <p class="text-[14px]">Generate Persuasion-Awareness-Solution (PAS) frameworks for persuasive communication strategies.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M3 4v16h18V4H3zm16 14H5V6h14v12zm-6-3v-1h3v1h-3zM7 11h10v1H7v-1z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Strategy
                     </h4>
                     <p class="text-[14px]">Generate strategic plans and frameworks for business development and growth.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M3 4v16h18V4H3zm16 14H5V6h14v12zm-6-3v-1h3v1h-3zM7 11h10v1H7v-1z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Personal Bio
                     </h4>
                     <p class="text-[14px]">Generate compelling personal biographies for professional profiles and portfolios.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M19 5v14H5V5h14m0-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
                           <path d="M7 10h10v2H7zM7 14h10v2H7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Cost Benefit Analysis
                     </h4>
                     <p class="text-[14px]">Conduct cost-benefit analyses to evaluate potential business decisions and investments.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M19 5v14H5V5h14m0-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
                           <path d="M7 10h10v2H7zM7 14h10v2H7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Brainstorming
                     </h4>
                     <p class="text-[14px]">Generate creative ideas and solutions through structured brainstorming sessions.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M19 5v14H5V5h14m0-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
                           <path d="M7 10h10v2H7zM7 14h10v2H7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Linkedin Post
                     </h4>
                     <p class="text-[14px]">Craft engaging and professional posts for sharing on LinkedIn.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-business">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48">
                           <path d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M19 5v14H5V5h14m0-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
                           <path d="M7 10h10v2H7zM7 14h10v2H7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Sales Pitch
                     </h4>
                     <p class="text-[14px]">Craft persuasive sales pitches to attract potential clients and investors.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-customer-service">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 00-10 10c0 5.523 4.477 10 10 10s10-4.477 10-10A10 10 0 0012 2zm-.25 15h-1.5V12h1.5v5zm0-6h-1.5V8h1.5v3z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Social Media Reply
                     </h4>
                     <p class="text-[14px]">Craft effective and professional replies to social media comments and messages.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-customer-service">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 2h16v20H4V2zm2 2v16h12V4H6zm2 2h8v2H8V6zm0 4h8v2H8v-2zm0 4h8v2H8v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Ticket Reply
                     </h4>
                     <p class="text-[14px]">Generate professional replies for customer support tickets.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-entertainment">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM6 10h12v2H6v-2zm1 4h10v2H7v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Song Lyrics
                     </h4>
                     <p class="text-[14px]">Generate creative and original song lyrics for any genre.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-entertainment">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM6 10h12v2H6v-2zm1 4h10v2H7v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Jokes
                     </h4>
                     <p class="text-[14px]">Create funny and entertaining jokes.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-entertainment">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM6 10h12v2H6v-2zm1 4h10v2H7v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Event Planner
                     </h4>
                     <p class="text-[14px]">Plan a detailed event itinerary.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-entertainment">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM6 10h12v2H6v-2zm1 4h10v2H7v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Travel Planner
                     </h4>
                     <p class="text-[14px]">Create a detailed travel itinerary for any destination.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-entertainment">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM6 10h12v2H6v-2zm1 4h10v2H7v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Gift Ideas
                     </h4>
                     <p class="text-[14px]">Generate creative and personalized gift ideas.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M3 3h18v18H3V3zm16 2H5v14h14V5zM7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h6v2H7v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Product Description
                     </h4>
                     <p class="text-[14px]">Create detailed and appealing product descriptions.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v16H4V4zm8 2v2H8V6h4zm0 4v2H8v-2h4zm0 4v2H8v-2h4z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Product Features
                     </h4>
                     <p class="text-[14px]">Highlight the key features of a product.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Product Name Ideas
                     </h4>
                     <p class="text-[14px]">Generate creative and catchy product name ideas.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M2 2v20l20-10L2 2zm2.5 5L17 12 4.5 17V7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Why Choose This Product
                     </h4>
                     <p class="text-[14px]">Explain why a customer should choose a specific product.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 2a8 8 0 110 16 8 8 0 010-16zm-1 4h2v5h-2V8zm0 7h2v2h-2v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Reviews
                     </h4>
                     <p class="text-[14px]">Generate detailed reviews for a product.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-ecommerce">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M21 3H3v14h6v4l4-4h8V3zM5 5h14v10h-7.172L11 17.828V15H5V5z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Review Responder
                     </h4>
                     <p class="text-[14px]">Craft professional responses to customer reviews.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Sitemap
                     </h4>
                     <p class="text-[14px]">Generate a comprehensive sitemap for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm-2 14h4v-2h-4v2zm-2-4h8v-2H8v2zm0-4h8V6H8v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Tagline
                     </h4>
                     <p class="text-[14px]">Create a catchy and memorable tagline for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        UX Ideas
                     </h4>
                     <p class="text-[14px]">Generate innovative UX ideas to improve user experience.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Design Ideas
                     </h4>
                     <p class="text-[14px]">Get creative design ideas for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Services Page
                     </h4>
                     <p class="text-[14px]">Create detailed content for your services page.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Features Page
                     </h4>
                     <p class="text-[14px]">Create detailed content for your features page.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Keyword Generator
                     </h4>
                     <p class="text-[14px]">Generate relevant keywords for your website content.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Keyword Extractor
                     </h4>
                     <p class="text-[14px]">Extract important keywords from your website content.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        SEO
                     </h4>
                     <p class="text-[14px]">Optimize your website content for search engines.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Testimonials
                     </h4>
                     <p class="text-[14px]">Generate authentic testimonials for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Landing Page Content - Copywriting
                     </h4>
                     <p class="text-[14px]">Create compelling copy for your landing page.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Website - Copywriting
                     </h4>
                     <p class="text-[14px]">Create engaging copy for your website pages.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        FAQ
                     </h4>
                     <p class="text-[14px]">Generate frequently asked questions for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Call to Action
                     </h4>
                     <p class="text-[14px]">Create compelling calls to action for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Meta Description
                     </h4>
                     <p class="text-[14px]">Generate meta descriptions for your website pages.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Rewrite with Keywords
                     </h4>
                     <p class="text-[14px]">Rewrite website content with targeted keywords.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Privacy Policy
                     </h4>
                     <p class="text-[14px]">Generate a privacy policy for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-website">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Terms and Conditions
                     </h4>
                     <p class="text-[14px]">Generate terms and conditions for your website.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Blog Ideas
                     </h4>
                     <p class="text-[14px]">Generate creative ideas for your next blog post.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Blog Intro
                     </h4>
                     <p class="text-[14px]">Generate an engaging introduction for your blog post.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Blog Section
                     </h4>
                     <p class="text-[14px]">Generate a section for your blog post.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Blog Outline
                     </h4>
                     <p class="text-[14px]">Generate an outline for your blog post.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-blog">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Blog Article
                     </h4>
                     <p class="text-[14px]">Generate a full article for your blog post.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        IG Reel Script
                     </h4>
                     <p class="text-[14px]">Generate a script for an Instagram Reel video.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        IG Captions
                     </h4>
                     <p class="text-[14px]">Generate captions for Instagram posts.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        TikTok Script
                     </h4>
                     <p class="text-[14px]">Generate a script for a TikTok video.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        TikTok Video Caption
                     </h4>
                     <p class="text-[14px]">Generate captions for TikTok videos.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        TikTok Video Script
                     </h4>
                     <p class="text-[14px]">Generate a script for a TikTok video.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Facebook Post
                     </h4>
                     <p class="text-[14px]">Generate engaging posts for Facebook.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Facebook Headlines
                     </h4>
                     <p class="text-[14px]">Generate attention-grabbing headlines for Facebook.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Facebook Video Script
                     </h4>
                     <p class="text-[14px]">Generate a script for a Facebook video.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        X Tweet
                     </h4>
                     <p class="text-[14px]">Generate a tweet for any purpose.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        X Thread
                     </h4>
                     <p class="text-[14px]">Generate a Twitter thread for any topic.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Youtube Video Title
                     </h4>
                     <p class="text-[14px]">Generate titles for YouTube videos.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Youtube Video Description
                     </h4>
                     <p class="text-[14px]">Generate descriptions for YouTube videos.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Youtube Video Tag
                     </h4>
                     <p class="text-[14px]">Generate tags for YouTube videos.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Youtube Video to Blog Post
                     </h4>
                     <p class="text-[14px]">Generate blog posts from YouTube videos.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Video Idea
                     </h4>
                     <p class="text-[14px]">Generate ideas for video content.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Video Description
                     </h4>
                     <p class="text-[14px]">Generate descriptions for videos.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Viral Tweet Idea
                     </h4>
                     <p class="text-[14px]">Generate ideas for tweets that could potentially go viral.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-social-media">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Clickbait Titles
                     </h4>
                     <p class="text-[14px]">Generate clickbait titles for social media posts.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-advertising">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        FB Ad
                     </h4>
                     <p class="text-[14px]">Generate content for Facebook advertisements.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-advertising">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Google Ad
                     </h4>
                     <p class="text-[14px]">Generate content for Google advertisements.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-advertising">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        TV Ads
                     </h4>
                     <p class="text-[14px]">Generate ideas and content for TV advertisements.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-advertising">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Youtube Ads
                     </h4>
                     <p class="text-[14px]">Generate ideas and content for YouTube advertisements.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-languages">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Translate
                     </h4>
                     <p class="text-[14px]">Translate text from one language to another.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-languages">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Grammar Check
                     </h4>
                     <p class="text-[14px]">Check grammar and provide suggestions for improvement.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-languages">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        List Synonyms
                     </h4>
                     <p class="text-[14px]">Generate a list of synonyms for a given word.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-languages">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M4 4h16v2H4V4zm0 6h16v2H4V10zm0 6h16v2H4v-2zm0 6h16v2H4v-2zm0 4h16v2H4v-2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Learn New Words
                     </h4>
                     <p class="text-[14px]">Discover and learn new words with their meanings and usage.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M19.707 4.293a1 1 0 00-1.414 0l-3.5 3.5A6.972 6.972 0 0012 4a7 7 0 00-7 7c0 3.128 2.053 5.862 5 6.75V18a1 1 0 002 0v-.25c2.947-.888 5-3.622 5-6.75a7 7 0 00-2.793-5.618l-3.5-3.5a1 1 0 00-1.414 1.414l3.5 3.5a4.976 4.976 0 011.914 3.328A5 5 0 0112 11a4.976 4.976 0 01-3.328-1.914A5 5 0 018 6a4.978 4.978 0 011.207-3.293A1 1 0 009.207.293 6.98 6.98 0 0112 0a7 7 0 017 7c0 2.562-1.373 4.832-3.414 6.064l-.5.436V14a1 1 0 00-2 0v1a1 1 0 001 1h4a1 1 0 000-2h-1V11h1a1 1 0 000-2h-1V8h1a1 1 0 000-2h-1V5a1 1 0 00.293-.707zM12 22a6.978 6.978 0 01-5.064-2.192l-2.686 2.686A1 1 0 004 23a1 1 0 00.707-1.707l2.636-2.636A7.015 7.015 0 014 17c0-3.86 3.14-7 7-7s7 3.14 7 7-3.14 7-7 7z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Bug Fix
                     </h4>
                     <p class="text-[14px]">Identify and fix bugs in code to improve functionality and performance.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M19 2H5c-1.104 0-2 .896-2 2v16c0 1.104.896 2 2 2h14c1.104 0 2-.896 2-2V4c0-1.104-.896-2-2-2zm0 18H5V4h14v16z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Explain Code
                     </h4>
                     <p class="text-[14px]">Provide explanations and clarifications on specific sections of code.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M12 2C6.488 2 2 6.488 2 12s4.488 10 10 10 10-4.488 10-10S17.512 2 12 2zm0 18.25c-4.525 0-8.25-3.725-8.25-8.25S7.475 3.75 12 3.75 20.25 7.475 20.25 12 16.525 20.25 12 20.25zm-.24-9.504l-4.536 4.537L6.88 13.68l4.397-4.395-1.01-1.01-4.88 4.88 4.88 4.88 1.01-1.01-4.395-4.397 1.057-1.057 4.537 4.537 1.414-1.414z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Teach Code
                     </h4>
                     <p class="text-[14px]">Create educational materials and tutorials to teach coding concepts and techniques.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-development">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V4a2 2 0 00-2-2zm0 18H4V4h14v16zm-4-5H9v-2h6v2zm0-4H9V9h6v2zm0-4H9V5h6v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Changelog Creator
                     </h4>
                     <p class="text-[14px]">Generate changelogs to document updates and modifications in software or projects.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M22 2H2C.894 2 0 2.894 0 4v16c0 1.106.894 2 2 2h20c1.106 0 2-.894 2-2V4c0-1.106-.894-2-2-2zm0 4L12 13 2 6v2l10 7 10-7V6z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Welcome Email
                     </h4>
                     <p class="text-[14px]">Craft a warm and engaging email to welcome new subscribers or users.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M19 4H5a2 2 0 00-2 2v12a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-7 5-7-5V6l7 5 7-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Invitation Mail
                     </h4>
                     <p class="text-[14px]">Create an inviting email to send out invitations for events, gatherings, or meetings.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M22 2H2C.894 2 0 2.894 0 4v16c0 1.106.894 2 2 2h20c1.106 0 2-.894 2-2V4c0-1.106-.894-2-2-2zm0 4L12 13 2 6v2l10 7 10-7V6z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Follow up Email
                     </h4>
                     <p class="text-[14px]">Craft a follow-up email to reconnect with clients, customers, or contacts.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M22 2H2C.894 2 0 2.894 0 4v16c0 1.106.894 2 2 2h20c1.106 0 2-.894 2-2V4c0-1.106-.894-2-2-2zm0 4L12 13 2 6v2l10 7 10-7V6z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Reply Email
                     </h4>
                     <p class="text-[14px]">Compose a professional email response to reply to inquiries, questions, or requests.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M15.414 3H2a1 1 0 00-1 1v16a1 1 0 001 1h18a1 1 0 001-1V7.586L15.414 3zM20 18H4V6h11.414L20 9.586V18zm-8-4h-4v2h4v-2zm0-4h-4v2h4v-2zm0-4h-4v2h4V6z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Newsletter
                     </h4>
                     <p class="text-[14px]">Design and create a newsletter to share updates, news, or promotions with subscribers.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M22 2H2C.894 2 0 2.894 0 4v16c0 1.106.894 2 2 2h20c1.106 0 2-.894 2-2V4c0-1.106-.894-2-2-2zm0 4L12 13 2 6v2l10 7 10-7V6z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Press Release
                     </h4>
                     <p class="text-[14px]">Write a press release to announce new products, events, or company updates.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-email">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M22 2H2C.894 2 0 2.894 0 4v16c0 1.106.894 2 2 2h20c1.106 0 2-.894 2-2V4c0-1.106-.894-2-2-2zm0 4L12 13 2 6v2l10 7 10-7V6z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Cold Email
                     </h4>
                     <p class="text-[14px]">Create an effective cold email to reach out to potential clients or partners.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-fitness-health">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v18c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Create a Workout Plan
                     </h4>
                     <p class="text-[14px]">Design a personalized workout plan tailored to individual needs and fitness goals.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-fitness-health">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v18c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Create a Meal Plan
                     </h4>
                     <p class="text-[14px]">Develop a customized meal plan based on dietary preferences, nutritional needs, and health goals.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-writer">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        eBook
                     </h4>
                     <p class="text-[14px]">Generate a complete eBook on any topic of your choice.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-writer">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Paragraph
                     </h4>
                     <p class="text-[14px]">Generate a well-written paragraph on any given topic.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-writer">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Story Generator
                     </h4>
                     <p class="text-[14px]">Generate creative story ideas or complete stories based on provided prompts.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-writer">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Book Ideas
                     </h4>
                     <p class="text-[14px]">Generate ideas for new books or novels based on specified themes or genres.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-writer">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Content Improver
                     </h4>
                     <p class="text-[14px]">Enhance the quality and readability of existing content by providing suggestions for improvement.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Explain to a Child
                     </h4>
                     <p class="text-[14px]">Simplify complex topics or concepts to make them understandable to children.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Write News From a Journalist Point of View
                     </h4>
                     <p class="text-[14px]">Craft news articles from the perspective of a journalist.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Generate From RSS Feed
                     </h4>
                     <p class="text-[14px]">Generate content based on the information extracted from a provided RSS feed.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Undetectable AI
                     </h4>
                     <p class="text-[14px]">Generate content or responses that are indistinguishable from human-generated content.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Pros and Cons
                     </h4>
                     <p class="text-[14px]">Generate a list of pros and cons for any given topic.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Real Estate Listing
                     </h4>
                     <p class="text-[14px]">Generate real estate listings for properties based on specified criteria.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-misc">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                           <path d="M20 2H4c-1.105 0-2 .895-2 2v16c0 1.105.895 2 2 2h16c1.105 0 2-.895 2-2V4c0-1.105-.895-2-2-2zm0 4l-8 5-8-5V4l8 5 8-5v2z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        Prompt Generator
                     </h4>
                     <p class="text-[14px]">Generate creative prompts to inspire writing, brainstorming, or idea generation.</p>
                  </div>
               </div>
               <div class="group p-7 bg-[#F5F5F7] rounded-2xl templates-all templates-voice">
                  <figure class="mix-blend-multiply group-hover:scale-125 relative z-0 inline-block transition-all duration-300">
                     <span class="size-11 mb-4 inline-flex items-center justify-center rounded-lg bg-gradient-to-bl from-[#f0f0f2] to-[#d7d7d9] [&amp;_path]:fill-inherit [&amp;_svg]:h-5 [&amp;_svg]:w-6 [&amp;_svg]:fill-[#7c7c7e]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                           <path d="M140 976q-24.75 0-42.375-17.625T80 916V236q0-24.75 17.625-42.375T140 176h380l-60 60H140v680h480V776h60v140q0 24.75-17.625 42.375T620 976H140Zm100-170v-60h280v60H240Zm0-120v-60h200v60H240Zm380 10L460 536H320V336h140l160-160v520Zm60-92V258q56 21 88 74t32 104q0 51-35 101t-85 67Zm0 142v-62q70-25 125-90t55-158q0-93-55-158t-125-90v-62q102 27 171 112.5T920 436q0 112-69 197.5T680 746Z"></path>
                        </svg>
                     </span>
                  </figure>
                  <div class="relative shrink">
                     <h4 class="mb-3 font-semibold font-body">
                        AI Voice Isolator
                     </h4>
                     <p class="text-[14px]">Separate voices from background noise in audio recordings.</p>
                  </div>
               </div>
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
               <span class="inline-grid h-7 place-content-center rounded-lg bg-[#885EFE] bg-opacity-10 px-2">
               Show more
               </span>
            </button>
         </div>
      </div>
   </div>
</section>
<section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view">
   <div class="container">
      <div class="rounded-[50px] border p-10 max-sm:px-6 max-sm:py-16">
         <header class="lqd-section-header mx-auto text-center w-3/4 mb-14 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
            <h2 class="lqd-section-header-title mb-[0.45em]">Custom Analytics and Business Tools.</h2>
            <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">Unlock the full potential of your business with advanced tools and tailored reports designed to meet your unique needs.</p>
         </header>
         <div class="grid grid-cols-3 gap-3 max-lg:grid-cols-2 max-md:grid-cols-1">
            <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
               <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300"> <img class="-mx-8 max-w-[calc(100%+4rem)]" src="http://127.0.0.1:8000/images/upload/images/frontent/tools/v6sP-test.png" alt="Automated Workflows" width="696" height="426"> </figure>
               <div class="relative shrink">
                  <h4 class="mb-3 font-bold">Automated Workflows</h4>
                  <p class="text-[14px]">Streamline your operations with automated processes that save time and increase efficiency.</p>
                  <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
               </div>
            </div>
            <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
               <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300"> <img class="-mx-8 max-w-[calc(100%+4rem)]" src="http://127.0.0.1:8000/images/upload/images/frontent/tools/Payments100.jpg" alt="API Integrations" width="696" height="426"> </figure>
               <div class="relative shrink">
                  <h4 class="mb-3 font-bold">Seamless API Integrations</h4>
                  <p class="text-[14px]">Integrate your business with leading platforms and services for a seamless experience.</p>
                  <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
               </div>
            </div>
            <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
               <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300"> <img class="-mx-8 max-w-[calc(100%+4rem)]" src="http://127.0.0.1:8000/images/upload/images/frontent/tools/NZBW-multilingual.png" alt="Real-Time Collaboration" width="696" height="426"> </figure>
               <div class="relative shrink">
                  <h4 class="mb-3 font-bold">Real-Time Collaboration</h4>
                  <p class="text-[14px]">Collaborate with your team seamlessly in real-time, enhancing productivity and creativity.</p>
                  <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
               </div>
            </div>
            <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
               <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300"> <img class="-mx-8 max-w-[calc(100%+4rem)]" src="http://127.0.0.1:8000/images/upload/images/frontent/tools/RAhq-affiliate-system.png" alt="Security Monitoring" width="696" height="426"> </figure>
               <div class="relative shrink">
                  <h4 class="mb-3 font-bold">Advanced Security Monitoring</h4>
                  <p class="text-[14px]">Protect your business with continuous security monitoring and threat detection.</p>
                  <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
               </div>
            </div>
            <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
               <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300"> <img class="-mx-8 max-w-[calc(100%+4rem)]" src="http://127.0.0.1:8000/images/upload/images/frontent/tools/mPWB-easy-export.png" alt="User Behavior Insights" width="696" height="426"> </figure>
               <div class="relative shrink">
                  <h4 class="mb-3 font-bold">User Behavior Insights</h4>
                  <p class="text-[14px]">Gain deep insights into user behavior to optimize customer experiences and improve satisfaction.</p>
                  <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
               </div>
            </div>
            <div class="group px-8 pb-12 bg-[#F5F5F7] rounded-[40px] text-center overflow-hidden transition-all hover:-translate-y-2 hover:shadow-lg">
               <figure class="group-hover:scale-105 relative z-0 inline-block transition-all duration-300"> <img class="-mx-8 max-w-[calc(100%+4rem)]" src="http://127.0.0.1:8000/images/upload/images/frontent/tools/rIwa-support-platform.png" alt="Cloud Backup and Recovery" width="696" height="426"> </figure>
               <div class="relative shrink">
                  <h4 class="mb-3 font-bold">Cloud Backup & Recovery</h4>
                  <p class="text-[14px]">Ensure your data is always safe with automated cloud backups and swift recovery options.</p>
                  <a href="#learn-more" class="text-blue-600 hover:underline text-[14px] font-semibold">Learn More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="how-it-works">
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
</section>

<section class="site-section relative py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="testimonials">
   <div class="absolute inset-x-0 top-0 -z-1 h-[150vh]" style="background: linear-gradient(to bottom, transparent, #F0EFFA, transparent)"></div>
   <div class="container relative">
      <div class="rounded-[50px] border bg-contain bg-center bg-no-repeat p-11 pb-24 max-sm:px-5" style="background-image: url('/themes/default/assets/img/landing-page/world-map.png')">
         <header class="lqd-section-header mx-auto text-center w-3/4 mb-10 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
            <h6 class="mb-6 inline-block rounded-md bg-[#28027C] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#28027C]">
               Testimonials
               <span class="dot"></span>
               <span class="opacity-50">Trustpilot</span>
            </h6>
            <h2 class="lqd-section-header-title mb-[0.45em]">Trusted by millions.</h2>
            <p class="lqd-section-header-desc text-[18px] leading-[1.444em]">Hear from some of our satisfied clients who trust us with their digital needs.</p>
         </header>
         <div class="max-lg:w-11/12 mx-auto w-8/12 max-md:w-full">
            <div class="mb-20">
               <div class="mx-auto mb-7 w-[235px] gap-5 flickity-enabled" data-flickity='{ "asNavFor": ".testimonials-main-carousel", "contain": false, "pageDots": false, "cellAlign": "center", "prevNextButtons": false, "wrapAround": true, "draggable": false }' style="mask-image: linear-gradient(to right, transparent 0%, #000 15%, #000 85%, transparent 100% ); -webkit-mask-image: linear-gradient(to right, transparent 0%, #000 15%, #000 85%, transparent 100% );" tabindex="0">
                  <div class="flickity-viewport" style="height: 157px; touch-action: pan-y;">
                     <div class="flickity-slider" style="left: 0px; transform: translateX(-43.94%);">
                        <div class="w1/3 group cursor-pointer pb-[16px] pt-9 text-center text-[15px] font-medium" style="position: absolute; left: 0px; transform: translateX(281.22%);" aria-hidden="true">
                           <figure class="size-11 mx-auto mb-4 overflow-hidden rounded-full transition-all group-[&amp;.is-nav-selected]:-translate-y-4 group-[&amp;.is-nav-selected]:scale-[1.75] group-[&amp;.is-nav-selected]:border-[5px] group-[&amp;.is-nav-selected]:border-white group-[&amp;.is-nav-selected]:shadow-sm max-sm:group-[&amp;.is-nav-selected]:scale-150">
                              <img class="h-full w-full object-cover object-center" src="/testimonialAvatar/202306020840avatar-1.jpg" alt="Peline Jan">
                           </figure>
                           <div class="whitespace-nowrap opacity-0 transition-all group-[&amp;.is-nav-selected]:opacity-100">
                              <p class="text-heading-foreground">Peline Jan</p>
                              <p class="text-heading-foreground opacity-15">Entrepreneur</p>
                           </div>
                        </div>
                        <div class="w1/3 group cursor-pointer pb-[16px] pt-9 text-center text-[15px] font-medium" style="position: absolute; left: 0px; transform: translateX(118.9%);" aria-hidden="true">
                           <figure class="size-11 mx-auto mb-4 overflow-hidden rounded-full transition-all group-[&amp;.is-nav-selected]:-translate-y-4 group-[&amp;.is-nav-selected]:scale-[1.75] group-[&amp;.is-nav-selected]:border-[5px] group-[&amp;.is-nav-selected]:border-white group-[&amp;.is-nav-selected]:shadow-sm max-sm:group-[&amp;.is-nav-selected]:scale-150">
                              <img class="h-full w-full object-cover object-center" src="/testimonialAvatar/202306020840avatar-3.jpg" alt="Tom Daniel">
                           </figure>
                           <div class="whitespace-nowrap opacity-0 transition-all group-[&amp;.is-nav-selected]:opacity-100">
                              <p class="text-heading-foreground">Tom Daniel</p>
                              <p class="text-heading-foreground opacity-15">Writer</p>
                           </div>
                        </div>
                        <div class="w1/3 group cursor-pointer pb-[16px] pt-9 text-center text-[15px] font-medium is-selected is-nav-selected" style="position: absolute; left: 0px; transform: translateX(189.56%);">
                           <figure class="size-11 mx-auto mb-4 overflow-hidden rounded-full transition-all group-[&amp;.is-nav-selected]:-translate-y-4 group-[&amp;.is-nav-selected]:scale-[1.75] group-[&amp;.is-nav-selected]:border-[5px] group-[&amp;.is-nav-selected]:border-white group-[&amp;.is-nav-selected]:shadow-sm max-sm:group-[&amp;.is-nav-selected]:scale-150">
                              <img class="h-full w-full object-cover object-center" src="/testimonialAvatar/202306020840avatar-2.jpg" alt="Eric Sanchez">
                           </figure>
                           <div class="whitespace-nowrap opacity-0 transition-all group-[&amp;.is-nav-selected]:opacity-100">
                              <p class="text-heading-foreground">Eric Sanchez</p>
                              <p class="text-heading-foreground opacity-15">UX Designer</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="testimonials-main-carousel text-center text-[26px] leading-[1.27em] text-heading-foreground max-sm:text-lg max-sm:[&amp;_.flickity-button-icon]:!left-1/4 max-sm:[&amp;_.flickity-button-icon]:!top-1/4 max-sm:[&amp;_.flickity-button-icon]:!h-1/2 max-sm:[&amp;_.flickity-button-icon]:!w-1/2 [&amp;_.flickity-button.next]:-right-16 max-md:[&amp;_.flickity-button.next]:-right-10 [&amp;_.flickity-button.previous]:-left-16 max-md:[&amp;_.flickity-button.previous]:-left-10 [&amp;_.flickity-button]:opacity-40 [&amp;_.flickity-button]:transition-all [&amp;_.flickity-button]:hover:bg-transparent [&amp;_.flickity-button]:hover:opacity-100 [&amp;_.flickity-button]:focus:shadow-none max-sm:[&amp;_.flickity-button]:relative max-sm:[&amp;_.flickity-button]:!left-auto max-sm:[&amp;_.flickity-button]:!right-auto max-sm:[&amp;_.flickity-button]:top-auto max-sm:[&amp;_.flickity-button]:!mx-4 max-sm:[&amp;_.flickity-button]:translate-y-0 flickity-enabled is-draggable" data-flickity='{ "contain": true, "wrapAround": true, "pageDots": false, "adaptiveHeight": true }' tabindex="0">
                  <div class="flickity-viewport" style="height: 132.067px; touch-action: pan-y;">
                     <div class="flickity-slider" style="left: 0px; transform: translateX(-200%);">
                        <div class="w-full shrink-0 grow-0 basis-full" style="position: absolute; left: 0px; transform: translateX(0%);" aria-hidden="true">
                           <blockquote class="max-sm:mb-7">
                              <p>“Not only did it save me time, but it also helped me produce content that was more engaging and effective than what I had been creating on my own.”</p>
                           </blockquote>
                        </div>
                        <div class="w-full shrink-0 grow-0 basis-full" style="position: absolute; left: 0px; transform: translateX(100%);" aria-hidden="true">
                           <blockquote class="max-sm:mb-7">
                              <p>“As a freelance writer, I was looking for a tool that could help me generate ideas and write faster. This AI Text website has done that and more.”</p>
                           </blockquote>
                        </div>
                        <div class="w-full shrink-0 grow-0 basis-full is-selected" style="position: absolute; left: 0px; transform: translateX(200%);">
                           <blockquote class="max-sm:mb-7">
                              <p>“The customer support team has been incredibly helpful whenever I’ve had any questions. I can’t imagine going back to my old content-creation methods!”</p>
                           </blockquote>
                        </div>
                     </div>
                  </div>
                  <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous">
                     <svg class="flickity-button-icon" viewBox="0 0 100 100">
                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                     </svg>
                  </button>
                  <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
                     <svg class="flickity-button-icon" viewBox="0 0 100 100">
                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                     </svg>
                  </button>
               </div>
            </div>
            <div class="flex justify-center gap-20 opacity-80 max-lg:gap-12 max-sm:gap-4">
               <img class="h-full w-full object-cover object-center" style="max-width: 48px; max-height: 48px;" src="/clientAvatar/2024071605362024070619452024070222382024062116121c.svg" alt="Client Logo 1" title="Client 1">
               <img class="h-full w-full object-cover object-center" style="max-width: 48px; max-height: 48px;" src="/clientAvatar/2c.svg" alt="Client Logo 2" title="Client 2">
               <img class="h-full w-full object-cover object-center" style="max-width: 48px; max-height: 48px;" src="/clientAvatar/4c.svg" alt="Client Logo 3" title="Client 3">
               <img class="h-full w-full object-cover object-center" style="max-width: 48px; max-height: 48px;" src="/clientAvatar/5c.svg" alt="Client Logo 4" title="Client 4">
               <img class="h-full w-full object-cover object-center" style="max-width: 48px; max-height: 48px;" src="/clientAvatar/6c.svg" alt="Client Logo 5" title="Client 5">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="site-section relative py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="pricing">
    <div class="container relative">
       <div class="relative rounded-[50px] border p-11 max-lg:px-5">
          <header class="lqd-section-header mx-auto text-center w-2/5 mb-7 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
             <h2 class="lqd-section-header-title mb-[0.45em]">Flexible Pricing.</h2>
             <p class="lqd-section-header-desc text-[18px] leading-[1.444em]"></p>
          </header>
          @php
          $services = DB::table('services')->get();
          @endphp
          <div class="lqd-tabs text-center">
             <div class="lqd-tabs-triggers mx-auto mb-9 inline-flex flex-wrap gap-2 rounded-md border text-[15px] font-medium leading-none">
                @foreach($services as $service)
                <button class="transition-all px-4 py-[0.35rem] w-[220px] rounded-lg hover:text-heading-foreground [&.lqd-is-active]:text-heading-foreground [&.lqd-is-active]:bg-white [&.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10 {{ $loop->first ? 'lqd-is-active' : '' }}" data-target="#{{ $service->data_target }}">
                    {{ $service->name }}
                    @if($service->discount)
                        <span class="ml-1 inline-block rounded-md bg-[#684AE2] bg-opacity-10 p-[0.375rem] px-2 text-[#684AE2]">{{ $service->discount }}</span>
                    @endif
                </button>
                @endforeach
             </div>
             <div class="lqd-tabs-content-wrap px-10 max-xl:px-0">
                <div class="lqd-tabs-content">
                   @foreach($services as $service)
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
                                     <div class="min-w-60 pointer-events-none invisible absolute start-full top-1/2 z-10 ms-2 max-h-96 -translate-y-1/2 translate-x-2 scale-105 overflow-y-auto rounded-lg border bg-background p-5 opacity-0 shadow-xl transition-all before:absolute before:-start-2 before:top-0 before:h-full before:w-2 group-hover:pointer-events-auto group-hover:visible group-hover:translate-x-0 group-hover:opacity-100 max-sm:!end-0 max-sm:!start-0 max-sm:!top-full max-sm:!me-0 max-sm:!ms-0 max-sm:mt-4 max-sm:!translate-x-0 max-sm:!translate-y-0 [&amp;.anchor-end]:end-2 [&amp;.anchor-end]:start-auto [&amp;.anchor-end]:me-2 [&amp;.anchor-end]:ms-0" data-set-anchor="true">
                                        <ul>
                                            {{-- <li class="mb-3 mt-5 first:mt-0">
                                                 <h5 class="text-base">{{ $category->name }}</h5>
                                             </li> --}}
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
                                  {{ $plan->support_level }} Support
                               </li>
                            </ul>
                         </div>
                         @endforeach
                      </div>
                   </div>
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
                <p class="[&amp;_strong]:block"><strong>Safe Payment:</strong> Use Stripe or Credit Card.</p>
             </div>
          </div>
       </div>
    </div>
 </section>


<section class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="faq">
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
</section>


<section class="site-section mb-14 py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="blog">
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
</section>
@include('partials.hero')
@include('partials.features')
@include('partials.testimonials')
@include('partials.contact')
@endsection
