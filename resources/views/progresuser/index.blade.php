<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
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
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>

                            <a href="/data" class="flex items-center">
                                Data
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
    <div class="container mx-auto px-4 mt-10">
        <div
            class="relative min-h-60 w-full flex flex-col justify-center items-center my-6 bg-white shadow-sm border border-slate-200 rounded-lg p-2">
            <div class="p-3 text-center">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="text-slate-400 w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                </div>
                <div class="flex justify-center mb-2">
                    <h5 class="text-slate-800 text-2xl font-semibold">
                        Manajement Project {{ $progres->first()->projek_name }}
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto px-10 grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 justify-center">
        @foreach ($progresdata as $index => $task)
            <div class="cursor-pointer group relative flex flex-col my-4 bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-lg transition-shadow duration-300"
                id="task-{{ $task['id'] }}">
                <div class="relative w-full aspect-[4/3] overflow-hidden text-white rounded-t-md">
                    <img class="w-full h-full object-cover transition-transform duration-500 ease-[cubic-bezier(0.25, 1, 0.5, 1)] transform group-hover:scale-110"
                        src="{{ asset('image/progres.png') }}" alt="investment-seed-round" />
                </div>
                <div class="p-3">
                    <h6 class="mb-2 text-lg font-semibold {{ $task['status'] === true ? 'text-green-800' : 'text-red-600' }}"
                        id="status-{{ $task['id'] }}">
                        {{ $task['status'] === true ? 'Done' : 'On Progress' }}
                    </h6>
                    <p class="text-slate-600 leading-normal font-light text-sm">
                        Tugas Progres Membuat {{ $task['name'] }}
                    </p>
                </div>
                <div class="px-3 pb-3 pt-0 mt-2">
                    <!-- Form untuk mengirimkan status ke server -->
                    <form action="{{ route('progresuser.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $task['id'] }}">
                        <input type="hidden" name="progres_id" value="{{ $progres->id }}">
                        <input type="hidden" name="status" value="{{ $task['status'] === true ? 'false' : 'true' }}">

                        <button
                            class="rounded-md w-full py-2 px-4 border border-transparent text-white text-center text-sm {{ $task['status'] === true ? 'bg-gray-700' : 'bg-gray-700' }}"
                            type="submit">
                            {{ $task['status'] === true ? 'Cancel' : 'Action' }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach


    </div>


    <!-- from cdn -->
    <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script></script>

</body>

</html>
