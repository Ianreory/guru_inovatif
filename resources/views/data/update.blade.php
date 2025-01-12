<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <header>
        <nav class="block w-full max-w-screen-lg px-4 py-2 mx-auto bg-white shadow-md rounded-md lg:px-8 lg:py-3 mt-10">
            <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
                <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
                    Monitoring
                </a>

                <div class="hidden lg:block">
                    <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <a href="/data" class="flex items-center">
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="items-center hidden gap-x-2 lg:flex">
                    <div class="w-full max-w-sm min-w-[200px]">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            <input type="text"
                                class="w-full pl-10 pr-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-600 text-sm border border-slate-200 rounded-md transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Type here..." />
                        </div>
                    </div>
                    <button
                        class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        Search
                    </button>
                </div>
                <button
                    class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </nav>
    </header>
    <div class="flex justify-center">
        <h1
            class="font-bold leading-snug tracking-tight bg-gradient-to-tr from-slate-800 to-slate-500 bg-clip-text text-transparent text-center mx-auto w-full text-2xl lg:max-w-3xl lg:text-5xl mt-8">
            Manage Your Project
        </h1>
    </div>

    <div class="flex justify-center mt-8">
        <div class="relative flex w-full max-w-[24rem] flex-col rounded-lg bg-white border border-slate-200 shadow-sm">
            <form action="{{ route('data.update', $progres->id) }}" method="post" id="projectForm">
                @csrf
                <div class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                    <h3 class="text-2xl">Edit Project</h3>
                </div>
                <div class="flex flex-col gap-4 p-6">
                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">Project Name</label>
                        <input type="text" name="projek_name"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input Project" value="{{ $progres->projek_name }}" />
                    </div>

                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">Client</label>
                        <input type="text" name="client"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input Client" value="{{ $progres->client }}" />
                    </div>

                    <div class="flex justify-center">
                        <h1 class="text-lg font-semibold text-black">Project Leader</h1>
                    </div>

                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">Name of Leader</label>
                        <input type="text" name="name_leader"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input Name of Leader" value="{{ $progres->name_leader }}" />
                    </div>

                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">Email</label>
                        <input type="email" name="email"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input Email" value="{{ $progres->email }}" />
                    </div>

                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">Photo of Leader</label>
                        <input type="file" name="photo_leader"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input Photo" />
                    </div>

                    <div class="flex justify-center">
                        <h1 class="text-lg font-semibold text-black">Date Project</h1>
                    </div>

                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">Start Date</label>
                        <input type="date" name="start_date"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input Start Date" value="{{ $progres->start_date }}" />
                    </div>

                    <div class="w-full ">
                        <label class="block mb-2 text-sm text-slate-600">End Date</label>
                        <input type="date" name="ent_date"
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Input End Date" value="{{ $progres->ent_date }}" />
                    </div>

                </div>

                <div class="p-6 pt-0">
                    <button
                        class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- from cdn -->
    <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <!-- from node_modules -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <script></script>
</body>

</html>
