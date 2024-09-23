@extends('layouts.master') @section('title', 'Portfolio')
@section('content') <!-- Portfolio content goes here -->
{{-- <section class="site-section relative flex min-h-[200px] items-center justify-center overflow-hidden bg-[#4384ea] pb-52 pt-64 text-center text-white max-md:pb-16 max-md:pt-48 lqd-is-in-view" id="banner">
    <div class="absolute start-0 top-0 h-full w-full overflow-hidden">
       <div class="banner-bg absolute left-0 top-0 h-full w-full"></div>
    </div>
    <div class="container relative">
       <div class="mx-auto flex w-1/2 flex-col items-center max-lg:w-2/3 max-md:w-full">
          <div class="banner-title-wrap relative">
             <h1 class="banner-title translate-y-7 font-body font-bold -tracking-wide text-white opacity-0 transition-all ease-out group-[.page-loaded]/body:translate-y-0 group-[.page-loaded]/body:opacity-100">
                How It Works
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
             <p style="text-align: center;">Trusted by these amazing companies</p>
             <table style="border-collapse: collapse; width: 100.068%; border-width: 0px;" border="1">
                <colgroup>
                   <col style="width: 25.0342%;">
                   <col style="width: 25.0342%;">
                   <col style="width: 25.0342%;">
                   <col style="width: 25.0342%;">
                </colgroup>
                <tbody>
                   <tr>
                      <td style="border-width: 0px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://aidefault.liquid-themes.com/wp-content/uploads/2023/08/nike.svg" alt="" width="88" height="32"></td>
                      <td style="border-width: 0px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://aidefault.liquid-themes.com/wp-content/uploads/2023/08/Path-133531.svg" alt="" width="86" height="37"></td>
                      <td style="border-width: 0px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://aidefault.liquid-themes.com/wp-content/uploads/2023/08/Path-46878.svg" alt="" width="49" height="35"></td>
                      <td style="border-width: 0px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://aidefault.liquid-themes.com/wp-content/uploads/2023/08/volkswagen-1.svg" alt="" width="53" height="53"></td>
                   </tr>
                </tbody>
             </table>
             <p class="leading" style="text-align: center;">&nbsp;</p>
             <p class="leading" style="text-align: center;">At MagicAI, we are passionate about harnessing the power of artificial intelligence to unlock limitless creativity and efficiency.&nbsp;<span style="color: rgb(89, 89, 89);">Our cutting-edge AI Generators are designed to revolutionize the way you create, streamline your workflows, and supercharge your productivity.</span></p>
             <p class="leading" style="text-align: center;">&nbsp;</p>
             <p><span class="num-block">1</span></p>
             <h4>Select a Template</h4>
             <p>Our mission is to empower individuals and businesses to unleash their creative potential and achieve extraordinary results. We believe that AI has the ability to augment human capabilities, enhance decision-making processes, and accelerate innovation.</p>
             <p>&nbsp;</p>
             <p><span class="num-block">2</span></p>
             <h4>Explain your idea</h4>
             <p>AI generators are sophisticated systems trained on vast amounts of data to learn patterns, understand context, and generate original content. They are designed to mimic human creativity by analyzing existing examples.</p>
             <p>&nbsp;</p>
             <p><span class="num-block">3</span></p>
             <h4>Done!</h4>
             <p>By developing state-of-the-art AI Generators, we aim to democratize access to advanced AI technologies, enabling users from all backgrounds to excel in their creative endeavors.</p>
             <p>&nbsp;</p>
             <p style="text-align: center;"><span class="info-box">Still have a question? <span style="color: rgb(8, 53, 248);"><a style="color: rgb(8, 53, 248);" href="#">Browse documentation</a></span> or <span style="color: rgb(8, 53, 248);"><a style="color: rgb(8, 53, 248);" href="#">submit a ticket</a>.</span></span></p>
             <p>&nbsp;</p>
             <p><img style="border-radius: 25px;" src="https://magicai.liquid-themes.com/upload/images/pag2.png" alt="How it works" width="1620" height="870"></p>
             <p>&nbsp;</p>
             <p><span class="highlight">Invite a Friend</span></p>
             <h4>Affiliate System.</h4>
             <p class="leading">We pride ourselves on offering AI Generators that are unmatched in their quality, <span style="color: rgb(89, 89, 89);">versatility, and ease of use. Here’s what sets us apart from the competition:</span></p>
             <h5>Done!</h5>
             <p>Join our community of innovators, creators, and forward-thinkers who are leveraging the power of AI to revolutionize their industries. Start your journey with MagicAI today and unlock the full potential of AI Generators.</p>
             <p>&nbsp;</p>
             <p><img src="https://aidefault.liquid-themes.com/wp-content/uploads/2023/08/icon-2.jpg" alt="" width="48" height="48"></p>
             <h5>Invite your Friend</h5>
             <p>With our AI Generators, the possibilities are endless. From generating compelling marketing copy and designing stunning visuals to automating data analysis and creating personalized user experiences.</p>
             <p>&nbsp;</p>
             <p><img src="https://aidefault.liquid-themes.com/wp-content/uploads/2023/08/icon-3.jpg" alt="" width="48" height="48"></p>
             <h5>Make Money</h5>
             <p>Ready to experience the future of creativity? Sign up now and embark on an exciting adventure of limitless possibilities.</p>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
             <p style="text-align: center;"><span class="info-box">Still have a question? <span style="color: rgb(8, 53, 248);"><a style="color: rgb(8, 53, 248);" href="#">Browse documentation</a></span> or <span style="color: rgb(8, 53, 248);"><a style="color: rgb(8, 53, 248);" href="#">submit a ticket</a>.</span></span></p>
          </div>
       </div>
    </div>
 </section> --}}
 <section class="site-section" id="banner">
    <div class="container relative">
        <h1 class="banner-title">{{ $howItWorksSection->banner_title }}</h1>
    </div>
</section>

<section class="page-content page-single-content">
    <div class="container py-36">
        <p style="text-align: center;">{{ $howItWorksSection->trusted_companies_text }}</p>
        <table>
            <tr>
                @foreach($howItWorksSection->trusted_companies_logos as $logo)
                <td><img src="{{ asset($logo) }}" alt=""></td>
                @endforeach
            </tr>
        </table>
        <p>{{ $howItWorksSection->intro_text }}</p>
        @foreach($howItWorksSection->steps as $step)
        <p><span>{{ $step['step_number'] }}</span></p>
        <h4>{{ $step['title'] }}</h4>
        <p>{{ $step['description'] }}</p>
        @endforeach
        <p><img src="{{ asset($howItWorksSection->image_path) }}" alt=""></p>
        <p>{{ $howItWorksSection->additional_sections['invite_text'] }}</p>
        <h4>{{ $howItWorksSection->additional_sections['affiliate_system'] }}</h4>
        <p>{{ $howItWorksSection->additional_sections['affiliate_details'] }}</p>
    </div>
</section>

@endsection
