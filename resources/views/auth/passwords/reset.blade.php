@extends('layouts.master')
@section('title', 'reset')
@section('content')
{{-- <div class="lqd-page relative flex min-h-full flex-col">
    <div class="lqd-page-wrapper flex grow-1">
       <div class="lqd-page-content-wrap flex grow flex-col overflow-hidden">
          <div class="lqd-page-content-container h-full px-0">
             <div class="absolute left-0 right-0 top-0 flex items-center px-8 pt-8 max-lg:px-1">
                <div class="flex-grow">
                   <a class="navbar-brand" href="https://magicai.liquid-themes.com">
                   <img class="group-[.navbar-shrinked]/body:hidden dark:hidden" src="/themes/default/assets/img/logo/magicAI-logo.svg" alt="MagicAI">
                   <img class="hidden group-[.navbar-shrinked]/body:hidden dark:block" src="/themes/default/assets/img/logo/magicAI-logo-dark.svg" alt="MagicAI">
                   </a>
                </div>
                <div class="flex-grow text-end">
                   <a class="inline-flex items-center gap-1 text-heading-foreground no-underline hover:underline lg:text-white" href="https://magicai.liquid-themes.com">
                      <svg class="w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path d="M15 6l-6 6l6 6"></path>
                      </svg>
                      Back to Home
                   </a>
                </div>
             </div>
             <div class="flex min-h-[100vh] w-full flex-wrap items-stretch max-md:pb-20 max-md:pt-32">
                <div class="grow md:flex md:w-1/2 md:flex-col md:items-center md:justify-center md:py-20">
                   <div class="w-full px-4 text-center text-2xs lg:w-1/2">
                      <h1 class="mb-[25px]">Forgot Password</h1>
                      <form class="flex flex-col gap-6" id="password_reset_form" novalidate="novalidate" onsubmit="return PasswordResetMailForm();">
                         <div class="lqd-input-container relative">
                            <label class="lqd-input-label flex cursor-pointer items-center gap-2 text-2xs font-medium leading-none text-label mb-3" for="password_reset_email">
                            <span class="lqd-input-label-txt">
                            Email Address
                            </span>
                            </label>
                            <input id="password_reset_email" class="lqd-input block peer w-full px-4 py-2 border border-input-border bg-input-background text-input-foreground text-base ring-offset-0 transition-colors focus:border-secondary focus:outline-0 focus:ring focus:ring-secondary dark:focus:ring-foreground/10 sm:text-2xs lqd-input-lg h-11 rounded-xl" name="" value="" type="email" placeholder="your@email.com">
                         </div>
                         <button class="lqd-btn group inline-flex items-center justify-center gap-1.5 font-medium rounded-full transition-all hover:-translate-y-0.5 hover:shadow-xl [&amp;[disabled]]:bg-foreground [&amp;[disabled]]:opacity-30 [&amp;[disabled]]:pointer-events-none lqd-btn-primary bg-primary text-primary-foreground hover:bg-primary/90 hover:shadow-primary/10 focus-visible:bg-primary/90 focus-visible:shadow-primary/10 lqd-btn-md py-2 px-4 lqd-btn-hover-none text-sm" id="PasswordResetFormButton" form="password_reset_form" type="submit">
                         Send Instructions
                         </button>
                      </form>
                   </div>
                </div>
                <div class="hidden flex-col justify-center overflow-hidden bg-cover bg-center md:flex md:w-1/2" style="background-image: url(/images/bg/bg-auth.jpg)">
                   <img class="translate-x-[27%] rounded-[36px] shadow-[0_24px_88px_rgba(0,0,0,0.55)]" src="/images/bg/dash-mockup.jpg" alt="MagicAI Dashboard Mockup">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div> --}}

@endsection
