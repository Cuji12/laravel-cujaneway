@extends('layouts.app')

@section('title', 'CV')
@section('meta_description', 'Web Developer with 6+ years of experience in PHP seeking full-time & part-time PHP / Yii2 / Laravel contracts.')
@section('meta_author', 'Cu Janeway')

@section('header')
    <x-header headerBgColor="bg-pink"/>
@endsection()

@section('content')
    <main>
        <div class="max-w-screen-md mx-auto text-center sm:w-11/12">
            <a href="{{ route('site.downloadCvPDF') }}" class="inline-block px-5 py-2 mt-4 font-medium text-white rounded-sm cursor-pointer bg-green w-44 hover:bg-darker-green">Download PDF</a>
        </div>
        <div class="flex flex-col max-w-screen-md p-8 mx-auto mt-4 bg-pink gap-y-4 sm:w-11/12 sm:rounded-md">
            <div>
                <h1 class="text-4xl font-bold text-green md:text-5xl">Cu Janeway</h1>
                <p class="flex flex-col sm:flex-row sm:items-center">
                    <a class="font-medium text-green hover:text-darker-green md:text-lg" href="mailto:hello@cujaneway.co.uk">hello@cujaneway.co.uk</a>
                    <span class="hidden mx-3 text-xs leading-normal text-green sm:block">&#11044;</span>
                    <a class="font-medium text-green hover:text-darker-green md:text-lg" href="www.github.com/Cuji12">www.github.com/Cuji12</a>
                </p>
            </div>

            <div>
                <h2 class="text-xl font-medium text-green md:text-2xl">Objective</h2>
                <div class="w-full mx-auto mb-2 opacity-50 bg-green group-last:hidden" style="height: 2px;"></div>
                <p class="md:text-lg">Web Developer with 6+ years of experience in PHP seeking full-time & part-time PHP / Yii2 / Laravel contracts.</p>
            </div>

            <div>
                <h2 class="text-xl font-medium text-green md:text-2xl">Experience</h2>
                <div class="w-full mx-auto mb-2 opacity-50 bg-green group-last:hidden" style="height: 2px;"></div>

                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <h3 class="text-lg font-medium md:text-xl">Web Developer (contract)</h3>
                    <p class="md:text-lg">Oct 2021 - Nov 2022</p>
                </div>
                <h4 class="md:text-lg">Latus Health</h4>
                <ul class="list-disc list-inside">
                    <li class="md:text-lg">Developed an API to service a mobile and web-app called YODHA.</li>
                    <li class="md:text-lg">Maintained an API for an existing app called Reward Me Now.</li>
                    <li class="md:text-lg">Created a web portal for YODHA and Reward Me Now.</li>
                    <li class="md:text-lg">Trained new hires of the development team & existing account managers on how to use the new software / APIs</li>
                    <li class="md:text-lg">Setup deployment processes and created documentation for our APIs and codebase.</li>
                </ul>
            </div>

            <div>
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <h3 class="text-lg font-medium md:text-xl">Web Developer (freelance)</h3>
                    <p class="md:text-lg">Jan 2021 - Current</p>
                </div>
                <h4 class="md:text-lg">Various</h4>
                <ul class="list-disc list-inside">
                    <li class="md:text-lg">Contract with various companies and individuals developing / fixing projects built in Laravel, Yii2, Symfony and Vue.</li>
                    <li class="md:text-lg">Helped to refactor large PHP codebases, document processes and setup CI / CD with Envoyer.</li>
                    <li class="md:text-lg">Worked on legacy codebases, primarily upgrading from PHP 5.x to PHP 7.x.</li>
                </ul>
            </div>

            <div>
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <h3 class="text-lg font-medium md:text-xl">Web Developer</h3>
                    <p class="md:text-lg">Dec 2019 - Apr 2020</p>
                </div>
                <h4 class="md:text-lg">Access</h4>
                <ul class="list-disc list-inside">
                    <li class="md:text-lg">Working in a team developing software with Drupal for WaterAid and Edrington.</li>
                    <li class="md:text-lg">Train apprentices in PHP, JavaScript and software fundamentals.</li>
                    <li class="md:text-lg">Write documentation for the maintenance and support team on the WaterAid website and Edrington's brand sites.</li>
                </ul>
            </div>

            <div>
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <h3 class="text-lg font-medium md:text-xl">Junior Developer / Apprentice</h3>
                    <p class="md:text-lg">Mar 2017 - Nov 2018</p>
                </div>
                <h4 class="md:text-lg">Pecometer Software</h4>
                <ul class="list-disc list-inside">
                    <li class="md:text-lg">Built a food delivery website with an accompanying admin panel in Yii2 called LionsPrep.</li>
                    <li class="md:text-lg">Maintained a portal for generating / working with legal documentation for an insurance company.</li>
                    <li class="md:text-lg">Worked on various small projects built in Yii2, Symfony and AngularJS / Angular 2.0.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-xl font-medium text-green md:text-2xl">Education</h2>
                <div class="w-full mx-auto mb-2 opacity-50 bg-green group-last:hidden" style="height: 2px;"></div>
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <h3 class="text-lg font-medium md:text-xl">3aaa Apprenticeships</h3>
                    <p class="md:text-lg">2017 - 2018</p>
                </div>
                <p class="md:text-lg">Level 3 Extended Diploma in IT</p>
            </div>

            <div>
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <h3 class="text-lg font-medium md:text-xl">Loreto College</h3>
                    <p class="md:text-lg">2014 - 2015</p>
                </div>
                <p class="md:text-lg">AS level in Economics, Psychology, Theology and Biology</p>
            </div>
        </div>
    </main>
@endsection()
