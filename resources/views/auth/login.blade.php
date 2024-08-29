@extends('layouts.master')
@section('title', 'login')
@section('content')
<div class="lqd-page relative flex min-h-full flex-col">
    <div class="lqd-page-wrapper flex grow-1">
       <div class="lqd-page-content-wrap flex grow flex-col overflow-hidden">
          <div class="lqd-page-content-container h-full px-0">
             <div class="absolute left-0 right-0 top-0 flex items-center px-8 pt-8 max-lg:px-1">
                <div class="flex-grow">
                   <a class="navbar-brand" href="index.html">
                   <img class="group-[.navbar-shrinked]/body:hidden dark:hidden" src="themes/default/assets/img/logo/magicAI-logo.svg" alt="MagicAI">
                   <img class="hidden group-[.navbar-shrinked]/body:hidden dark:block" src="themes/default/assets/img/logo/magicAI-logo-dark.svg" alt="MagicAI">
                   </a>
                </div>
                <div class="flex-grow text-end">
                   <a class="inline-flex items-center gap-1 text-heading-foreground no-underline hover:underline lg:text-white" href="index.html">
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
                      <h1 class="mb-11">Sign in</h1>
                      <div class="flex flex-wrap justify-between gap-4">
                         <a class="lqd-btn group inline-flex items-center gap-1.5 text-xs font-medium transition-all hover:-translate-y-0.5 hover:shadow-xl hover:shadow-black/5 [&amp;[disabled]]:bg-foreground [&amp;[disabled]]:opacity-30 [&amp;[disabled]]:pointer-events-none lqd-btn-outline outline outline-input-border -outline-offset-1 focus-visible:outline-2 focus-visible:outline-offset-0 focus-visible:outline-secondary lqd-btn-lg px-5 py-3 lqd-btn-hover-none grow basis-full justify-start rounded-xl sm:basis-[45%]" href="https://accounts.google.com/o/oauth2/auth?client_id=1063062229427-l09km7brm83dog5ksgj7em979ok7a40a.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fmagicai.liquid-themes.com%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=v4R7kA5dNnwhCSPsWVKIWO9na3o45yIkwn9dDv5u">
                            <svg class="shrink-0" width="22" height="22" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M23.001 12.2332C23.001 11.3699 22.9296 10.7399 22.7748 10.0865H12.7153V13.9832H18.62C18.501 14.9515 17.8582 16.4099 16.4296 17.3898L16.4096 17.5203L19.5902 19.935L19.8106 19.9565C21.8343 18.1249 23.001 15.4298 23.001 12.2332Z" fill="#4285F4"></path>
                               <path d="M12.714 22.5C15.6068 22.5 18.0353 21.5666 19.8092 19.9567L16.4282 17.3899C15.5235 18.0083 14.3092 18.4399 12.714 18.4399C9.88069 18.4399 7.47596 16.6083 6.61874 14.0766L6.49309 14.0871L3.18583 16.5954L3.14258 16.7132C4.90446 20.1433 8.5235 22.5 12.714 22.5Z" fill="#34A853"></path>
                               <path d="M6.62046 14.0767C6.39428 13.4234 6.26337 12.7233 6.26337 12C6.26337 11.2767 6.39428 10.5767 6.60856 9.92337L6.60257 9.78423L3.25386 7.2356L3.14429 7.28667C2.41814 8.71002 2.00146 10.3084 2.00146 12C2.00146 13.6917 2.41814 15.29 3.14429 16.7133L6.62046 14.0767Z" fill="#FBBC05"></path>
                               <path d="M12.7141 5.55997C14.7259 5.55997 16.083 6.41163 16.8569 7.12335L19.8807 4.23C18.0236 2.53834 15.6069 1.5 12.7141 1.5C8.52353 1.5 4.90447 3.85665 3.14258 7.28662L6.60686 9.92332C7.47598 7.39166 9.88073 5.55997 12.7141 5.55997Z" fill="#EB4335"></path>
                            </svg>
                            Login with Google
                         </a>
                         <a class="lqd-btn group inline-flex items-center gap-1.5 text-xs font-medium transition-all hover:-translate-y-0.5 hover:shadow-xl hover:shadow-black/5 [&amp;[disabled]]:bg-foreground [&amp;[disabled]]:opacity-30 [&amp;[disabled]]:pointer-events-none lqd-btn-outline outline outline-input-border -outline-offset-1 focus-visible:outline-2 focus-visible:outline-offset-0 focus-visible:outline-secondary lqd-btn-lg px-5 py-3 lqd-btn-hover-none grow basis-full justify-start rounded-xl sm:basis-[45%]" href="https://www.facebook.com/v3.3/dialog/oauth?redirect_uri=https%3A%2F%2Fmagicai.liquid-themes.com%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=TMYelWeg4ncmuIhL9CmAKPOBPaaAXMrieAyBU9wq">
                            <svg class="shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M24 12C24 5.3726 18.6274 2.65179e-05 12 2.65179e-05C5.37258 2.65179e-05 0 5.3726 0 12C0 17.9896 4.38823 22.954 10.125 23.8542V15.4688H7.07813V12H10.125V9.35628C10.125 6.34878 11.9165 4.68753 14.6576 4.68753C15.9705 4.68753 17.3438 4.9219 17.3438 4.9219V7.87503H15.8306C14.3399 7.87503 13.875 8.80003 13.875 9.74902V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9896 24 12Z" fill="#1877F2"></path>
                               <path d="M16.6711 15.4687L17.2031 12H13.875V9.74899C13.875 8.80001 14.3399 7.875 15.8306 7.875H17.3438V4.92187C17.3438 4.92187 15.9705 4.6875 14.6576 4.6875C11.9165 4.6875 10.125 6.34875 10.125 9.35625V12H7.07812V15.4687H10.125V23.8542C10.7359 23.9501 11.3621 24 12 24C12.6379 24 13.2641 23.9501 13.875 23.8542V15.4687H16.6711Z" fill="white"></path>
                            </svg>
                            Login with Facebook
                         </a>
                      </div>
                      <div class="my-6 flex items-center gap-8 text-black text-opacity-60 dark:text-white dark:text-opacity-60">
                         <span class="inline-block h-px grow bg-foreground/10"></span>
                         or
                         <span class="inline-block h-px grow bg-foreground/10"></span>
                      </div>
                      <form class="flex flex-col gap-6" novalidate="novalidate" onsubmit="return LoginForm();">
                         <input id="plan" type="hidden" value="" name="plan">
                         <div class="lqd-input-container relative">
                            <label class="lqd-input-label flex cursor-pointer items-center gap-2 text-2xs font-medium leading-none text-label mb-3" for="email">
                            <span class="lqd-input-label-txt">
                            Email Address
                            </span>
                            </label>
                            <input id="email" class="lqd-input block peer w-full px-4 py-2 border border-input-border bg-input-background text-input-foreground text-base ring-offset-0 transition-colors focus:border-secondary focus:outline-0 focus:ring focus:ring-secondary dark:focus:ring-foreground/10 sm:text-2xs lqd-input-lg h-11 rounded-xl" name="" value="admin@admin.com" type="email" placeholder="your@email.com">
                         </div>
                         <div class="lqd-input-container relative" x-data="{
                            type: &quot;password&quot;,
                            get inputValueVisible() { return this.type !== &quot;password&quot; },
                            toggleType() {
                            this.type = this.type === &quot;text&quot; ? &quot;password&quot; : &quot;text&quot;;
                            }
                            }">
                            <label class="lqd-input-label flex cursor-pointer items-center gap-2 text-2xs font-medium leading-none text-label mb-3" for="password">
                            <span class="lqd-input-label-txt">
                            Password
                            </span>
                            </label>
                            <div class="relative">
                               <input id="password" class="lqd-input block peer w-full px-4 py-2 border border-input-border bg-input-background text-input-foreground text-base ring-offset-0 transition-colors focus:border-secondary focus:outline-0 focus:ring focus:ring-secondary dark:focus:ring-foreground/10 sm:text-2xs lqd-input-lg h-11 rounded-xl" name="" value="12345678" :type="type" type="password" placeholder="Your password">
                               <button class="lqd-show-password size-7 absolute end-3 top-1/2 z-10 inline-flex -translate-y-1/2 cursor-pointer items-center justify-center rounded bg-none transition-colors hover:bg-foreground/10" type="button" @click="toggleType()">
                                  <svg stroke-width="1.5" :class="inputValueVisible ? 'hidden' : ''" class="w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                     <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                     <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                  </svg>
                                  <svg stroke-width="1.5" :class="inputValueVisible ? '!block' : 'hidden'" class="hidden w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                     <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828"></path>
                                     <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87"></path>
                                     <path d="M3 3l18 18"></path>
                                  </svg>
                               </button>
                            </div>
                         </div>
                         <div class="my-2 flex justify-between gap-2">
                            <div class="grow">
                               <div class="lqd-input-container relative">
                                  <label class="lqd-input-label flex cursor-pointer items-center gap-2 text-2xs font-medium leading-none text-label" for="remember">
                                  <input id="remember" class="lqd-input peer rounded border-input-border focus:ring focus:ring-secondary dark:focus:ring-foreground/10" name="remember" type="checkbox">
                                  <span class="lqd-input-label-txt">
                                  Remember me
                                  </span>
                                  </label>
                               </div>
                            </div>
                            <div class="ms-auto text-end">
                               <a class="text-indigo-600" href="ar/forgot-password.html">Forgot Password?</a>
                            </div>
                         </div>
                         <input class="hidden" id="recaptcha" value="0">
                         <button class="lqd-btn group inline-flex items-center justify-center gap-1.5 font-medium rounded-full transition-all hover:-translate-y-0.5 hover:shadow-xl [&amp;[disabled]]:bg-foreground [&amp;[disabled]]:opacity-30 [&amp;[disabled]]:pointer-events-none lqd-btn-primary bg-primary text-primary-foreground hover:bg-primary/90 hover:shadow-primary/10 focus-visible:bg-primary/90 focus-visible:shadow-primary/10 lqd-btn-lg px-5 py-3 lqd-btn-hover-none text-sm" id="LoginFormButton" type="submit">
                         Sign in
                         </button>
                         <hr class="my-7">
                         <div class="lqd-card text-card-foreground w-full transition-all group/card lqd-card-outline border border-card-border lqd-card-roundness-default rounded-xl text-start">
                            <div class="lqd-card-body relative only:grow lqd-card-size-none">
                               <div class="lqd-table-outline rounded-xl border border-table-border pt-1 lqd-table-wrap w-full max-w-full overflow-x-auto">
                                  <table class="lqd-table w-full text-start overflow-x-auto [-webkit-overflow-scrolling:touch] max-w-full">
                                     <thead class="lqd-table-head border-b text-start text-4xs leading-tight uppercase tracking-wider font-medium text-label transition-border">
                                        <tr>
                                           <th>Role</th>
                                           <th>Email</th>
                                           <th>Password</th>
                                        </tr>
                                     </thead>
                                     <tbody class="[&amp;_tr:not(:last-child)]:border-b font-medium">
                                        <tr>
                                           <td>User</td>
                                           <td>user@user.com</td>
                                           <td>12345678</td>
                                        </tr>
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                         </div>
                      </form>
                      <div class="mt-20">
                         Don't have account yet?
                         <a class="font-medium text-indigo-600 underline" href="register.html">
                         Sign up
                         </a>
                      </div>
                   </div>
                </div>
                <div class="hidden flex-col justify-center overflow-hidden bg-cover bg-center md:flex md:w-1/2" style="background-image: url(images/bg/bg-auth.jpg)">
                   <img class="translate-x-[27%] rounded-[36px] shadow-[0_24px_88px_rgba(0,0,0,0.55)]" src="images/bg/dash-mockup.jpg" alt="MagicAI Dashboard Mockup">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
