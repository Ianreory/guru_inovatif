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
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <a href="#" class="flex items-center">
                                Account
                            </a>
                        </li>
                        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                            </svg>

                            <a href="#" class="flex items-center">
                                Blocks
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
    <main class="w-full max-w-screen-lg px-4 py-2 mx-auto flex items-center justify-center min-h-screen">
        <div class="relative flex w-full max-w-[24rem] flex-col rounded-lg bg-white border border-slate-200 shadow-sm">
            <div
                class="relative m-2.5 items-center flex flex-col justify-center text-white h-32 rounded-md bg-slate-800">
                <div class="mb-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="h-10 w-10 text-white">
                        <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z"></path>
                        <path fill-rule="evenodd"
                            d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h5 class="text-white text-xl">
                    Sistem Monitoring
                </h5>
            </div>
            <div class="p-6">
                <div class="block overflow-visible">
                    <div
                        class="relative block w-full overflow-hidden !overflow-x-hidden !overflow-y-visible bg-transparent">
                        <div role="tabpanel" data-value="card">
                            <form class="mt-8 flex flex-col">
                                <label class="mt-4 block mb-1 text-sm text-slate-600">
                                    Holder Name
                                </label>
                                <input type="text"
                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-20 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                    placeholder="e.g John Doe" />
                                <button
                                    class="w-full mt-6 rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    onclick="send()">Send</button>
                                <p
                                    class="mt-4 flex items-center justify-center gap-2 text-sm text-slate-500 font-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="-mt-0.5 h-4 w-4">
                                        <path fill-rule="evenodd"
                                            d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Masukan angka yang sudah diberikan admin
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="send()" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
            Show Alert
        </button>
        <div id="alert"
            class="fixed bottom-0  w-full right-4 max-w-xs p-3 text-sm text-white bg-slate-800 rounded-md opacity-0 translate-y-full transform transition-all duration-500 ease-in-out hidden mb-4">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                </svg>
                Sorry, something went wrong
            </div>
            <button onclick="closeAlert()"
                class="absolute top-1.5 right-1.5 flex items-center justify-center px-2 h-8 text-white rounded-md hover:bg-white/10 active:bg-white/10">
                Close
            </button>
        </div>

    </main>
    <!-- from node_modules -->
    <script async src="node_modules/@material-tailwind/html/scripts/ripple.js"></script>

    <!-- from cdn -->
    <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script>
        function send() {
            const alertElement = document.getElementById('alert');
            alertElement.classList.remove('hidden', 'opacity-0', 'translate-y-full');
            alertElement.classList.add('opacity-100', 'translate-y-0');
        }

        function closeAlert() {
            const alertElement = document.getElementById('alert');
            alertElement.classList.remove('opacity-100', 'translate-y-0');
            alertElement.classList.add('opacity-0', 'translate-y-full');
            setTimeout(() => {
                alertElement.classList.add('hidden'); // Hide after animation
            }, 500); // Match transition duration
        }
    </script>
</body>

</html>
