@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-16 border-b border-gray-500 font-bold">
        <h1 class="text-4xl">
            Blog Posts
        </h1>
    </div>
</div>


<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-500">
        <div>
        <img src=" https://pixabay.com/get/g452285e85bf3f4dd3719d2b12a699ff5e578cf29faec3d004213ab7e10301cda0c8a2f420ed626db6fe7338a8006909915fa05d016b8f4cb8069e0729f5c44b0_1920.jpg " alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-3xl pb-4">
            Learn how to make a Post!!
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">Sarah Alhouli</span>, 1 day ago
            </span>
            <p class="text-md text-gray-700 pt-8 pb-5 leading-8 font-light">
            Blog posts help you boost brand awareness, credibility, conversions, and revenue. Today, people and organizations of all walks of life manage blogs to share analyses, instruction, criticisms, product information, industry findings, and more.
            </p>

            <a href="" class="uppercase bg-green-500 text-gray-100 text-md font-extrabold py-2 px-8 rounded-2xl">
                Keep Reading
            </a>
    </div>
</div>
@endsection