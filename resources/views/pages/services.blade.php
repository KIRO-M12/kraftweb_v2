@extends('layouts.master')
@section('title', 'Services')

@section('content')
<section class="site-section relative py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&amp;.lqd-is-in-view]:translate-y-0 [&amp;.lqd-is-in-view]:opacity-100 lqd-is-in-view" id="pricing">
    <div class="container relative">
       <div class="relative rounded-[50px] border p-11 max-lg:px-5">
          <header class="lqd-section-header mx-auto text-center w-2/5 mb-7 max-xl:w-8/12 max-lg:w-10/12 max-md:w-full">
             <h2 class="lqd-section-header-title mb-[0.45em]">Flexible Pricing.</h2>
             <p class="lqd-section-header-desc text-[18px] leading-[1.444em]"></p>
          </header>
          <div class="lqd-tabs text-center">
             <div class="lqd-tabs-triggers mx-auto mb-9 inline-flex flex-wrap gap-2 rounded-md border text-[15px] font-medium leading-none">
                <button class="transition-all px-4 py-[0.35rem] min-w-[210px] rounded-lg hover:text-heading-foreground [&amp;.lqd-is-active]:text-heading-foreground [&amp;.lqd-is-active]:bg-white [&amp;.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10 lqd-is-active" data-target="#pricing-monthly">
                Monthly
                </button>
                <button class="transition-all px-4 py-[0.35rem] min-w-[210px] rounded-lg hover:text-heading-foreground [&amp;.lqd-is-active]:text-heading-foreground [&amp;.lqd-is-active]:bg-white [&amp;.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10" data-target="#pricing-annual">
                Annual
                <span class="ml-1 inline-block rounded-md bg-[#684AE2] bg-opacity-10 p-[0.375rem] px-2 text-[#684AE2]">Save 30%</span>
                </button>
                <button class="transition-all px-4 py-[0.35rem] min-w-[210px] rounded-lg hover:text-heading-foreground [&amp;.lqd-is-active]:text-heading-foreground [&amp;.lqd-is-active]:bg-white [&amp;.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10" data-target="#pricing-lifetime">
                Lifetime
                </button>
                <button class="transition-all px-4 py-[0.35rem] min-w-[210px] rounded-lg hover:text-heading-foreground [&amp;.lqd-is-active]:text-heading-foreground [&amp;.lqd-is-active]:bg-white [&amp;.lqd-is-active]:shadow-xs max-sm:w-full max-sm:h-10" data-target="#pricing-prepaid">
                Pre-Paid
                </button>
             </div>
             <div class="lqd-tabs-content-wrap px-10 max-xl:px-0">
                <div class="lqd-tabs-content">
                   <div id="pricing-monthly">
                      <div class="grid grid-cols-3 gap-2 max-md:grid-cols-1">
                         <div class="px-7 pt-7 pb-11 rounded-3xl text-center max-xl:px-6 max-lg:px-4">
                            <h6 class="mb-6 rounded-md border p-[0.35rem] text-[11px] text-opacity-80">Free</h6>
                            <p class="mb-1 text-[45px] font-medium leading-none -tracking-wide text-heading-foreground">
                               <sup class="text-[0.53em]">$</sup>0
                            </p>
                            <p class="mb-4 text-sm opacity-60">Per Month</p>
                            <a class="mb-6 block w-full rounded-lg bg-black bg-opacity-[0.03] p-3 font-medium text-heading-foreground transition-colors hover:bg-black hover:text-white" href="https://magicai.liquid-themes.com/register?plan=3">Select Free</a>
                            <ul class="w-full px-1 text-left max-lg:p-0">
                               <li class="relative mb-3">
                                  <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                     <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                     </svg>
                                  </span>

                                  Full
                                  <strong>
                                  Packeges
                                  </strong>

                                  <div class="group inline-block sm:relative sm:before:absolute sm:before:-inset-2.5">
                                    {{-- btn displaying the below grup --}}
                                     <span class="peer relative -mt-6 inline-flex !h-6 !w-6 cursor-pointer items-center justify-center">
                                        <svg class="size-4 opacity-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                           <path d="M12 2c5.523 0 10 4.477 10 10a10 10 0 0 1 -19.995 .324l-.005 -.324l.004 -.28c.148 -5.393 4.566 -9.72 9.996 -9.72zm0 9h-1l-.117 .007a1 1 0 0 0 0 1.986l.117 .007v3l.007 .117a1 1 0 0 0 .876 .876l.117 .007h1l.117 -.007a1 1 0 0 0 .876 -.876l.007 -.117l-.007 -.117a1 1 0 0 0 -.764 -.857l-.112 -.02l-.117 -.006v-3l-.007 -.117a1 1 0 0 0 -.876 -.876l-.117 -.007zm.01 -3l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                     </span>
                                     {{-- this is where the group that contains the categories and services related to the category begins - start --}}
                                     <div class="min-w-60 pointer-events-none invisible absolute start-full top-1/2 z-10 ms-2 max-h-96 -translate-y-1/2 translate-x-2 scale-105 overflow-y-auto rounded-lg border bg-background p-5 opacity-0 shadow-xl transition-all before:absolute before:-start-2 before:top-0 before:h-full before:w-2 group-hover:pointer-events-auto group-hover:visible group-hover:translate-x-0 group-hover:opacity-100 max-sm:!end-0 max-sm:!start-0 max-sm:!top-full max-sm:!me-0 max-sm:!ms-0 max-sm:mt-4 max-sm:!translate-x-0 max-sm:!translate-y-0 [&amp;.anchor-end]:end-2 [&amp;.anchor-end]:start-auto [&amp;.anchor-end]:me-2 [&amp;.anchor-end]:ms-0" data-set-anchor="true">
                                        <ul>
                                           <li class="mb-3 mt-5 first:mt-0">
                                              <h5 class="text-base">Category name</h5>
                                           </li>
                                           <li class="mb-1.5 flex items-center gap-1.5 text-heading-foreground">
                                              <span class="bg-[#684AE2] bg-opacity-10 text-[#684AE2] size-4 inline-flex items-center justify-center rounded-xl align-middle">
                                                 <svg class="size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                 </svg>
                                              </span>
                                              <small class="">
                                                all services which is related to category
                                              </small>
                                           </li>
                                        </ul>
                                     </div>
                                      {{-- end the  group --}}
                                  </div>
                               </li>
                                    {{-- this is where the group that contains the additional_services at least shoulld be displayeed 5 and no more than 7 becousee in category_servicees should be plaest entire packeges lest say aditional information is allways displayed - start --}}
                               <li class="mb-4 flex items-center">
                                  <span class="mr-3 inline-grid h-[22px] w-[22px] shrink-0 place-content-center rounded-xl bg-[#684AE2] bg-opacity-10 text-[#684AE2]">
                                     <svg width="13" height="10" viewBox="0 0 13 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.952 7.537L11.489 0L12.452 1L3.952 9.5L1.78814e-07 5.545L1 4.545L3.952 7.537Z"></path>
                                     </svg>
                                  </span>
                                  Basic Support
                               </li>
                                {{-- end the group --}}
                            </ul>
                         </div>
                      </div>
                   </div>
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

@endsection
