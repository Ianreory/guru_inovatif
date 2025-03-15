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
    @include('sweetalert::alert')
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

                            <a href="/" class="flex items-center">
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
    <div class="flex justify-center">
        <h1
            class="font-bold leading-snug tracking-tight bg-gradient-to-tr from-slate-800 to-slate-500 bg-clip-text text-transparent text-center mx-auto w-full text-2xl lg:max-w-3xl lg:text-5xl mt-8">
            Manage Your Project
        </h1>
    </div>
    <div class="px-9 pt-8">
        <a href="{{ route('data.create') }}">
            <button
                class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                type="button">
                Create Project
            </button>
        </a>
    </div>
    <div class="mx-auto w-full px-9 ">
        <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
            <div>
                <h3 class="text-lg font-bold text-slate-800">Manage your project</h3>
                <p class="text-slate-500">Overview of the projects.</p>
            </div>
        </div>

        <div
            class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
            <div class="w-full overflow-x-auto">
                <table class="w-full text-left table-auto min-w-max overflow-x-auto">

                    <thead class="border-b border-slate-300 bg-slate-600">
                        <tr>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500 ">
                                    PROJECT NAME
                                </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500">
                                    CLIENT
                                </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500">
                                    PROJECT LEADER
                                </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500">
                                    START DATE
                                </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500">
                                    ENT DATE
                                </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500">
                                    PROGRES
                                </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                                <p class="block text-sm font-bold leading-none text-slate-500">
                                    AKSI
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($monitorings as $item)
                            <tr class="hover:bg-slate-50 odd:bg-slate-100 border-b border-slate-200">
                                <td class="p-4 py-1">
                                    <p class="block font-semibold text-sm text-slate-800">{{ $item->projek_name }}</p>
                                </td>
                                <td class="p-4 py-1">
                                    <p class="block text-sm text-slate-800">{{ $item->client }}</p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ file_exists(public_path('storage/' . $item->photo_leader))
                                            ? asset('storage/' . $item->photo_leader)
                                            : asset('image/photo.jpg') }}"
                                            alt="photo"
                                            class="relative inline-block h-9 w-9 !rounded-full object-cover object-center" />
                                        <div class="flex flex-col">
                                            <p
                                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                                {{ $item->name_leader }}
                                            </p>
                                            <p
                                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                                {{ $item->email }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 py-1">
                                    <p class="block text-sm text-slate-800">{{ $item->start_date }}</p>
                                </td>
                                <td class="p-4 py-1">
                                    <p class="block text-sm text-slate-800">{{ $item->ent_date }}</p>
                                </td>
                                <td class="p-4 py-1">
                                    <p class="block text-sm text-slate-800">
                                    <div class="relative pt-1">
                                        <div class="flex mb-2 items-center justify-between">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                                                    Task in progress
                                                </span>
                                            </div>
                                            <div class="text-right">
                                                <span id="progress-percentage-{{ $item->id }}"
                                                    class="text-xs font-semibold inline-block text-blue-600">
                                                    0%
                                                </span>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                                            <div id="progress-bar-{{ $item->id }}" style="width: 0%"
                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </td>

                                <td class="p-4 py-1">
                                    <div class="block text-center">
                                        <a href="{{ route('progres.index', $item->id) }}">
                                            <button class="text-slate-600 hover:text-slate-800 mr-2" title="Detail">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                                                    <path fill-rule="evenodd"
                                                        d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087ZM12 10.5a.75.75 0 0 1 .75.75v4.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 1 1 1.06-1.06l1.72 1.72v-4.94a.75.75 0 0 1 .75-.75Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </a>
                                        <a href="{{ route('data.edit', $item->id) }}">
                                            <button class="text-slate-600 hover:text-slate-800"
                                                data-dialog-target="sign-in-modal" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-6 h-6">
                                                    <path
                                                        d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z" />
                                                    <path
                                                        d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z" />
                                                </svg>
                                            </button>
                                        </a>
                                        <a href="{{ route('data.destroy', $item->id) }}">
                                            <button class="text-slate-600 hover:text-slate-800">
                                                <img src="{{ asset('image/delete.png') }}" class="w-6 h-6 ml-1"
                                                    alt="Gambar" title="Delete"
                                                    style="filter: grayscale(10%) invert(30%);">
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- modal Cretae Project
    <div data-dialog-backdrop="create-modal" data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="create-modal"
            class="relative mx-auto w-full max-w-[30rem] rounded-lg overflow-hidden shadow-sm">
            <div class="relative flex flex-col bg-white">
                <form action="{{ route('data.store') }}" method="post" id="projectForm">
                    @csrf
                    <div
                        class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                        <h3 class="text-2xl">Mulai Project</h3>
                    </div>
                    <div class="flex flex-col gap-4 p-6">
                        <div class="w-full ">
                            <label class="block mb-2 text-sm text-slate-600">Project Name</label>
                            <input type="text" name="projek_name"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Input Project" />
                        </div>

                        <div class="w-full ">
                            <label class="block mb-2 text-sm text-slate-600">Client</label>
                            <input type="text" name="client"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Input Client" />
                        </div>

                        <div class="flex justify-center">
                            <h1 class="text-lg font-semibold text-black">Project Leader</h1>
                        </div>

                        <div class="w-full ">
                            <label class="block mb-2 text-sm text-slate-600">Name of Leader</label>
                            <input type="text" name="name_leader"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Input Name of Leader" />
                        </div>

                        <div class="w-full ">
                            <label class="block mb-2 text-sm text-slate-600">Email</label>
                            <input type="email" name="email"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Input Email" />
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
                                placeholder="Input Start Date" />
                        </div>

                        <div class="w-full ">
                            <label class="block mb-2 text-sm text-slate-600">End Date</label>
                            <input type="date" name="ent_date"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Input End Date" />
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
    </div> --}}

    {{-- alert berhasil --}}
    <div id="alert"
        class="fixed bottom-0  w-full right-4 max-w-xs p-3 text-sm text-white bg-slate-800 rounded-md opacity-0 translate-y-full transform transition-all duration-500 ease-in-out hidden mb-4">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
            </svg>
            Data Berhasil Di buat
        </div>
        <button onclick="closeAlert()"
            class="absolute top-1.5 right-1.5 flex items-center justify-center px-2 h-8 text-white rounded-md hover:bg-white/10 active:bg-white/10">
            Close
        </button>
    </div>


    <!-- from cdn -->
    <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <!-- from node_modules -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
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
                alertElement.classList.add('hidden');
            }, 500);
        }

        $(document).ready(function() {
            @foreach ($monitorings as $monitoring)
                var progressData = @json(json_decode($monitoring->progres));

                var completedTasks = progressData.data.filter(task => task.status === true).length;
                var totalTasks = progressData.data.length;
                var progressPercentage = totalTasks > 0 ? (completedTasks / totalTasks) * 100 : 0;

                console.log(
                    `ID {{ $monitoring->id }} - Completed Tasks: ${completedTasks}, Total Tasks: ${totalTasks}, Percentage: ${progressPercentage}%`
                );

                $(`#progress-bar-{{ $monitoring->id }}`).css('width', progressPercentage + '%');
                $(`#progress-percentage-{{ $monitoring->id }}`).text(Math.round(progressPercentage) + '%');


                if (progressPercentage === 100) {
                    $(`#progress-bar-{{ $monitoring->id }}`).removeClass('bg-blue-500').addClass('bg-green-500');
                }
            @endforeach
        });




        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                }
            });

            $('form').on('submit', function(e) {
                e.preventDefault();


                $('.error-message').remove();


                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('data.store') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('form')[0].reset();

                            $('[data-dialog-backdrop="create-modal"]')
                                .fadeOut();
                            $('[data-dialog="create-modal"]')
                                .fadeOut();
                            window.location.reload();
                            send();
                        }
                    },
                    error: function(xhr) {

                        var errors = xhr.responseJSON.errors;


                        $.each(errors, function(field, messages) {
                            var inputField = $('[name="' + field + '"]');
                            inputField.after(
                                '<div class="error-message text-red-500 text-sm">' +
                                messages[0] + '</div>');
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
