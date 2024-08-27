@extends('layouts.master') @section('title', 'Features')
@section('content') <!-- Portfolio content goes here -->
<section class="site-section relative flex min-h-[200px] items-center justify-center overflow-hidden bg-[#4384ea] pb-52 pt-64 text-center text-white max-md:pb-16 max-md:pt-48 lqd-is-in-view" id="banner">
    <div class="absolute start-0 top-0 h-full w-full overflow-hidden">
       <div class="banner-bg absolute left-0 top-0 h-full w-full"></div>
    </div>
    <div class="container relative">
       <div class="mx-auto flex w-1/2 flex-col items-center max-lg:w-2/3 max-md:w-full">
          <div class="banner-title-wrap relative">
             <h1 class="banner-title translate-y-7 font-body font-bold -tracking-wide text-white opacity-0 transition-all ease-out group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
                Features
             </h1>
          </div>
       </div>
    </div>
    <div class="banner-divider absolute inset-x-0 -bottom-[2px]">
       <svg class="h-auto w-full fill-background" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
          <path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"></path>
       </svg>
    </div>
 </section>
 <section class="page-content page-single-content">
    <div class="container py-36">
       <div class="row">
          <div class="mx-auto w-full lg:w-10/12 xl:w-8/12">
             <p><img style="border-radius: 25px;" src="https://magicai.liquid-themes.com/upload/images/pag1.png" alt="About us" width="1526 ×" height="866"></p>
             <p>&nbsp;</p>
             <p><span class="highlight">Introducing</span></p>
             <h3 class="lqd-text-el m-0 p-0"><span class="lqd-text-item relative elementor-repeater-item-eaff06a">Custom Chatbots.</span></h3>
             <p class="leading">We pride ourselves on offering AI Generators that are unmatched in their quality, <span style="color: rgb(89, 89, 89);">versatility, and ease of use. Here’s what sets us apart from the competition:</span></p>
             <p>With our AI Generators, the possibilities are endless. From generating compelling marketing copy and designing stunning visuals to automating data analysis and creating personalized user experiences, our tools will transform the way you work and help you achieve remarkable outcomes.</p>
             <p>Join our community of innovators, creators, and forward-thinkers who are leveraging the power of AI to revolutionize their industries. Start your journey with MagicAI today and unlock the full potential of AI Generators.</p>
             <p>Ready to experience the future of creativity? Sign up now and embark on an exciting adventure of limitless possibilities.</p>
             <ul style="list-style: disc; list-style-position: inside;">
                <li><strong>New —</strong>&nbsp;AI Voiceover in 30 Languages</li>
                <li><strong>New —</strong>&nbsp;Custom Avatar for Chatbot</li>
                <li><strong>Improved —</strong>&nbsp;Auto Translate</li>
             </ul>
          </div>
       </div>
    </div>
 </section>

@endsection
