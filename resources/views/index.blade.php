@extends('layouts.app')

<style type="text/css">

.background-image
{
    background-image: url('https://pixabay.com/get/gcd0b6f4d33730860045e3d30786922901f42fcad2264ff2b933cd139313c5d6c3ffc66f2e7f53693a51ee4a38dbf4a384ad8e62452e4efe330c1a1058c6b39b0_1920.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;
}
</style>  

@section('content')   
<div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                   Do you want to communicate ?
                </h1>
                <a 
                    href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    MAKE A POST!!
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-16 ">
        <div>
            <!-- <img src='app_path()."../resources/views/photos/phone.jpg"' alt="">       -->
            <img src="https://pixabay.com/get/g612570169c9640163bedd51be8a5892c11a80c906bee81aa65297624d3637b09f3672adcf5af0ebe7ba989b49751b7f9_1280.jpg" width="500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Why to communicate with people around the world?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Communication is giving, receiving or exchanging ideas, information, signals or messages through appropriate media, enabling individuals or groups to persuade, to seek information, to give information or to express emotions. 
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
             The most important thing in communication is to hear what isn't being said.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-green-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div class="text-center py-15 ">

        <h2 class="text-4xl font-bold">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500 py-10">
        A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries. Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page.
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-green-700 text-gray-100 pt-5">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    BLOG
                </span>

                <h3 class="text-xl font-bold py-10">
                Blog posts help you boost brand awareness, credibility, conversions, and revenue. Today, people and organizations of all walks of life manage blogs to share analyses, instruction, criticisms, product information, industry findings, and more. 
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://pixabay.com/get/g90896064b12f78873950361d2934d845eb8312237b229353c5e18f0700362f3d84bcec24810391846f6bb816733f8d388c97efb4f27dc740a39beaa89c5ae05e_1920.jpg" alt="">
        </div>
    </div>
@endsection