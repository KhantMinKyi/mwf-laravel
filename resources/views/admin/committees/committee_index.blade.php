@extends('layouts.admin_layout')

@section('content')
    @if (Session::has('error'))
        <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 " role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ Session::get('error') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 "
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    @if (Session::has('success'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
            <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ Session::get('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 "
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header font-weight-bold h5">Committees</div>
        <div class="text-right m-4 ">
            <span
                class="  px-3 py-3 bg-gray-950 text-white font-bold rounded-xl cursor-pointer"data-modal-target="authentication-modal"
                data-modal-toggle="authentication-modal" type="button">
                Add New Committee
            </span>

        </div>
        <div class="card-body">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-900 uppercase bg-gray-200 ">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Job Title
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Created User
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Updated User
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Is Shown at Home Page?
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($committees as $committee)
                            <tr class="bg-white border-b text-gray-900 border-gray-200 hover:bg-gray-50  ">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    <img src="{{ asset($committee->committee_image) }}" alt="" class=" w-52">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $committee->committee_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ ucfirst($committee->committee_job_title) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $committee->created_user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $committee->updated_user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $committee->committee_is_show_front == 0 ? 'No' : 'Yes' }}
                                </td>
                                <td class="items px-6 py-4">
                                    <a href="{{ route('admin.committees.edit', $committee->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('admin.committees.destroy', $committee->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</button>
                                            </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="my-2 p-2">
                    {{ $committees->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add New Committee
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('admin.committees.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Banner</label>
                            <input type="file" name="committee_image" id="committee_image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                placeholder="Image" required />
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="committee_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                                <input type="text" name="committee_name" id="committee_name" placeholder="Enter Committee Name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="committee_name_mm"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">နာမည်</label>
                                <input type="text" name="committee_name_mm" id="committee_name_mm"
                                    placeholder="Enter Committee Name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="committee_job_title"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Job Title</label>
                                <input type="text" name="committee_job_title" id="committee_job_title" placeholder="Enter committee Job Title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="committee_job_title_mm"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">အလုပ်အကိုင်အမည်</label>
                                <input type="text" name="committee_job_title_mm" id="committee_job_title_mm"
                                    placeholder="Enter committee Job Title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>
                        <div class="flex items-center">
                            <input id="link-checkbox" type="checkbox" value="1" name="committee_is_show_front"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="link-checkbox"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">That Committee will <a
                                    href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Show at the
                                    Main Page</a>.</label>
                        </div>

                        <button type="submit"
                            class="w-full text-gray-950 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Create!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
