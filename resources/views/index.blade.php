<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <!-- TW Elements styles-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="plugins/OwlCarousel/owl.carousel.css"> --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
    <style>
        @media screen and (min-width: 390px) {
        .iphone{
            margin-left: 96px; /* 112px */
            margin-right: 96px; /* 112px */
            }
        }

        @media screen and (min-width: 1024px) {
        .iphone{
            margin-left: 40px;
            margin-right: 40px;
            }
        }
        </style>
</head>

<body>
    @include('layout.navbar')

    <!-- test123 -->
    <div id="carouselExampleControls" class="relative" data-te-carousel-init data-te-ride="carousel">
        <!--Carousel items-->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                @foreach ($datacarousel as $e)
                    <!--First item-->
                    @if ($e->id == 1)
                        <div class="bg-carousel-hero" style="background-image: url('{{ $e->url_image }}')">
                            <div class="relative isolate px-6 pt-14 lg:px-8">
                                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                                    aria-hidden="true">
                                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                                    </div>
                                </div>
                                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                                    {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                                        <div
                                            class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                            Announcing our next round of funding. <a href="#"
                                                class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                                    aria-hidden="true"></span>Read more <span
                                                    aria-hidden="true">&rarr;</span></a>
                                        </div>
                                    </div> --}}
                                    <div class="text-center">
                                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                                            {{ $e->title }}</h1>
                                        <p class="mt-6 text-md leading-7 text-white">{{ $e->description }}</p>
                                        {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                                            <a href="#"
                                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                                started</a>
                                            <a href="#" class="text-sm font-semibold leading-6 text-white">Learn
                                                more
                                                <span aria-hidden="true">→</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                                    aria-hidden="true">
                                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            @endif
            @endforeach
            @foreach ($datacarousel as $e)
                <!--Second item-->
                @if ($e->id == 2)
                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item>
                        <div class="bg-carousel-hero" style="background-image: url('{{ $e->url_image }}')">

                            <div class="relative isolate px-6 pt-14 lg:px-8">
                                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                                    aria-hidden="true">
                                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                                    </div>
                                </div>
                                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                                    {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                                        <div
                                            class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                            Announcing our next round of funding. <a href="#"
                                                class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                                    aria-hidden="true"></span>Read more <span
                                                    aria-hidden="true">&rarr;</span></a>
                                        </div>
                                    </div> --}}
                                    <div class="text-center">
                                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                                            {{ $e->title }}</h1>
                                        <p class="mt-6 text-md leading-7 text-white">{{ $e->description }}</p>
                                        {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                                            <a href="#"
                                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                                started</a>
                                            <a href="#" class="text-sm font-semibold leading-6 text-white">Learn
                                                more
                                                <span aria-hidden="true">→</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                                    aria-hidden="true">
                                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            @foreach ($datacarousel as $e)
                <!--Third item-->
                @if ($e->id == 3)
                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                        data-te-carousel-item>
                        <div class="bg-carousel-hero" style="background-image: url('{{ $e->url_image }}')">

                            <div class="relative isolate px-6 pt-14 lg:px-8">
                                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                                    aria-hidden="true">
                                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                                    </div>
                                </div>
                                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                                    {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                                        <div
                                            class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                            Announcing our next round of funding. <a href="#"
                                                class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                                    aria-hidden="true"></span>Read more <span
                                                    aria-hidden="true">&rarr;</span></a>
                                        </div>
                                    </div> --}}
                                    <div class="text-center">
                                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                                            {{ $e->title }}</h1>
                                        <p class="mt-6 text-md leading-7 text-white">{{ $e->description }}</p>
                                        {{-- <div class="mt-10 flex items-center justify-center gap-x-6">
                                            <a href="#"
                                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                                started</a>
                                            <a href="#" class="text-sm font-semibold leading-6 text-white">Learn
                                                more
                                                <span aria-hidden="true">→</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                                    aria-hidden="true">
                                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!--Carousel controls - prev item-->
    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button" data-te-target="#carouselExampleControls" data-te-slide="prev">
        <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
    </button>
    <!--Carousel controls - next item-->
    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button" data-te-target="#carouselExampleControls" data-te-slide="next">
        <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
    </button>
    </div>

    <br>
    <br>
    <br>

    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @foreach ($dataaboutusjudul as $i)
            @foreach ($dataaboutus as $e)
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600 italic">{{ $i->title }}</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                {{ $e->title }}</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600">{{ $e->description1 }}</p>
                            <p class="mt-2 text-md leading-8 text-gray-500">{{ $e->description2 }}</p>
                            <dl class="mt-5 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $e->section1 }}
                                    </dt>
                                    <dd class="inline"></dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $e->section2 }}
                                    </dt>
                                    <dd class="inline"></dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                            <path fill-rule="evenodd"
                                                d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        {{ $e->section3 }}
                                    </dt>
                                    <dd class="inline"></dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img src="{{ $e->url_image }}" alt="Product screenshot"
                        class="w-full"
                        width="2432" height="1442">
                </div>
            @endforeach
            @endforeach
        </div>
    </div>
    <br>
    <div class="listkartu container mx-auto px-4 lg:px-20">
        <div class="mx-auto max-w-2xl sm:text-center">
            @foreach ($datacardjudul as $e)
            {{-- mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl --}}
            <h2 class="text-2xl lg:text-3xl font-bold tracking-tight text-gray-900 italic sm:text-4xl">{{ $e->title }}</h2>
            <p class="mt-4 lg:mt-6 text-lg lg:text-4xl font-semibold tracking-wide text-gray-900">{{ $e->description }}</p>
            @endforeach
        </div>
        <hr class="w-36 lg:w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <div class="mt-6 lg:mt-11 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($datacard as $e)
                <!-- Card 1 -->
                <div class="boxx bg-gray shadow-xl overflow-hidden">
                    <img src="{{ $e->url_image }}" alt="Featured insight" class="w-full h-96 object-cover" />
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2 text-gray-600">{{ $e->title }}</h3>
                        <p class="text-gray-600 text-base">
                            {{ $e->description }}
                        </p>
                        <div class="mt-4">
                            <a href="{{ url('/content') }}" class="text-indigo-600 hover:text-indigo-900">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>
        <!-- Container for demo purpose -->
    <div class="container my-24 mx-auto md:px-6 bg-white">
        <!-- Section: Design Block -->
        @foreach ($dataourservicesjudul as $i)
        @foreach ($dataourservices as $e)

        <section class="mb-32 pt-10">
        <img src="{{ $e->url_image }}"
            class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />

        {{-- <div class="mb-6 flex items-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-8 rounded-full" alt="avatar"
            loading="lazy" />
            <div>
            <span> Published <u>15.07.2020</u> by </span>
            <a href="#!" class="font-medium">Anna Maria Doe</a>
            </div>
        </div> --}}

        {{-- <h1 class="mb-6 text-3xl font-bold">
            {{ $e->title }}
        </h1> --}}

        <div class="mx-auto max-w-2xl lg:mx-0">

            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl italic">{{ $i->title }}</h2>

        </div>
        <p class="mt-6 text-lg leading-8 text-gray-600">
            {{ $e->title }}
        </p>
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            {{-- <div
            class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
            <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
            <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
            <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
            <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
        </div> --}}
            <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                <div class="relative pl-16">
                    {{-- <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Layanan IT berbasis cloud</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
                </div> --}}
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 fill-white">
                                <path fill-rule="evenodd"
                                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        {{ $e->section1title }}
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section1description }}</dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 fill-white">
                                <path
                                    d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                            </svg>
                        </div>
                        {{ $e->section2title }}
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section2description }}</dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </div>
                        {{ $e->section3title }}
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section3description }}</dd>
                </div>
                <div class="relative pl-16">
                    {{-- <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">Layanan IT berbasis cloud</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
                </div> --}}
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div
                            class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 fill-white">
                                <path fill-rule="evenodd"
                                    d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        {{ $e->section4title }}
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section4description }}</dd>
                </div>
            </dl>
        </div>
        </section>
        <!-- Section: Design Block -->
        @endforeach
        @endforeach
    </div>
    <br>
    <!-- Container for demo purpose -->
    <div class="bg-white sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @foreach ($dataourwork as $e)
                <div class="mx-auto max-w-2xl lg:text-center">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600 italic">Our Work</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $e->title }}
                    </p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">{{ $e->titledescription }}</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 fill-white">
                                        <path fill-rule="evenodd"
                                            d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                {{ $e->section1title }}
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section1description }}</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 fill-white">
                                        <path
                                            d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                                        <path fill-rule="evenodd"
                                            d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z"
                                            clip-rule="evenodd" />
                                        <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                                    </svg>
                                </div>
                                {{ $e->section2title }}
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section2description }}</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </div>
                                {{ $e->section3title }}
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section3description }}</dd>
                        </div>
                        <div class="relative pl-16">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 fill-white">
                                        <path fill-rule="evenodd"
                                            d="M15.22 6.268a.75.75 0 01.968-.432l5.942 2.28a.75.75 0 01.431.97l-2.28 5.941a.75.75 0 11-1.4-.537l1.63-4.251-1.086.483a11.2 11.2 0 00-5.45 5.174.75.75 0 01-1.199.19L9 12.31l-6.22 6.22a.75.75 0 11-1.06-1.06l6.75-6.75a.75.75 0 011.06 0l3.606 3.605a12.694 12.694 0 015.68-4.973l1.086-.484-4.251-1.631a.75.75 0 01-.432-.97z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                {{ $e->section4title }}
                            </dt>
                            <dd class="mt-2 text-base leading-7 text-gray-600">{{ $e->section4description }}</dd>
                        </div>
                    </dl>
                </div>
            @endforeach
        </div>
    </div>
    <section class="pembatas">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2
            {{-- mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl --}}
                class="mb-8 lg:mb-16 text-3xl font-bold tracking-tight leading-tight text-center text-gray-900 md:text-4xl">
                All License Software</h2>
            <div
                class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-5 dark:text-gray-400">
                @foreach ($dataals as $e)
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ $e->url_image }}" alt="" class="h-12">
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <div class="pembatas2 relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                @foreach ($datacontact as $e)
                    <div class="max-w-xl lg:max-w-lg">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Hubungi Kami
                        </h2>
                        <p class="mt-4 text-lg leading-8 text-gray-300">{{ $e->email }}</p>
                        <div class="mt-6 flex max-w-md gap-x-4">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required
                                class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                placeholder="Enter your email">
                            <button type="submit"
                                class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Feedback</button>
                        </div>
                    </div>
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                        <div class="flex flex-col items-start">
                            <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 fill-white">
                                    <path fill-rule="evenodd"
                                        d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <dt class="mt-4 font-semibold text-white">Alamat</dt>
                            <dd class="mt-2 leading-7 text-gray-400">{{ $e->address }}</dd>
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 fill-white">
                                    <path fill-rule="evenodd"
                                        d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <dt class="mt-4 font-semibold text-white">Nomor Handphone</dt>
                            <dd class="mt-2 leading-7 text-gray-400">{{ $e->phone }}</dd>
                        </div>
                    </dl>
                @endforeach
            </div>
        </div>
        <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    {{-- <div class="blogs bg-white">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <p class="text-4xl font-medium text-gray-900 dark:text-black-400">Testimonials</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <section class="testim" id="testim" style="margin-top: 220px;">
                    <div class="wrap">
                        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                        <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
                        <ul class="dots" id="testim-dots">
                            <li class="dot active"></li>
                            <li class="dot"></li>
                            <li class="dot"></li>
                            <li class="dot"></li>
                            <li class="dot"></li>
                        </ul>
                        <div class="cont" id="testim-content">
                            <div class="active">
                                <div class="img"><img src="{{ asset('img/testimonial/cewe2.jpg') }}"></div>
                                <h2>IU - 이지은</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel
                                    voluptatum
                                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae
                                    maiores.</p>
                            </div>
                            <div>
                                <div class="img"><img src="{{ asset('img/testimonial/cewe4.jpg') }}"></div>
                                <h2>Kim Jennie</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel
                                    voluptatum
                                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae
                                    maiores.</p>
                            </div>
                            <div>
                                <div class="img"><img src="{{ asset('img/testimonial/cewe3.jpg') }}"></div>
                                <h2>BTR Anggie</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel
                                    voluptatum
                                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae
                                    maiores.</p>
                            </div>
                            <div>
                                <div class="img"><img src="{{ asset('img/testimonial/cewe1.jpg') }}"></div>
                                <h2>BTR Alice</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel
                                    voluptatum
                                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae
                                    maiores.</p>
                            </div>
                            <div>
                                <div class="img"><img src="{{ asset('img/testimonial/cewe6.jpg') }}"></div>
                                <h2>Kim Min Jeong</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel
                                    voluptatum
                                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae
                                    maiores.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> --}}

    <div class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600 italic">Our Collaboration</h2>
                @foreach ($datacollaboration as $e)
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4x">
                    {{ $e->title }}
                </p>
                @endforeach
            </div>
            <div class="mt-10">

                <ul class="md:grid md:grid-cols-3 md:gap-8">
                    @foreach ($datacollaboration as $e)
                    <li>
                        <div class="space-y-4">
                            <img class="w-auto h-48 md:w-64 md:h-auto md:rounded-lg rounded-md mx-auto" src="{{ $e->url_image }}" alt="Woman's Face">
                            <div class="iphone space-y-2">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>{{ $e->name }}</h3>
                                    <p class="text-indigo-600">{{ $e->description }}</p>
                                </div>
                                <ul class="flex justify-center space-x-5">
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-gray-700">
                                            <span class="sr-only">Twitter</span>
                                            <!-- Insert Twitter SVG icon -->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 hover:text-gray-700">
                                            <span class="sr-only">LinkedIn</span>
                                            <!-- Insert LinkedIn SVG icon -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>


    <footer class="mt-36 p-4 sm:p-6">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" class="mr-3 h-8" alt="FlowBite Logo" />
                        <span class="self-center text-base font-bold whitespace-nowrap dark:text-black pr-1">LUMINA
                            EKA</span>
                        <span class="self-center text-base font-normal whitespace-nowrap dark:text-black">Optima</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-gray-600">Resources
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-500">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">HomePage</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-gray-600">Follow us
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-500">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite"
                                    class="hover:underline ">Instagram</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-gray-600">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-500">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-900">© 2023 <a
                        href="https://flowbite.com" class="hover:underline">Lumina Eka Optima</a>. All Rights
                    Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-black-900 dark:hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-black-900 dark:hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-black-900 dark:hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-black-900 dark:hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-black-900 dark:hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
