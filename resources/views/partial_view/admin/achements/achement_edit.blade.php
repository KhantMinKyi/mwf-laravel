@extends('layouts.admin_layout')


@section('content')
    <div class="relative w-full max-w-4xl max-h-full mx-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                    Add New Achement
                </h3>
                <a a href="{{ route('admin.achements.index') }}"
                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </a>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="{{ route('admin.achements.update', $achement->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="achement_title"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                                <input type="text" name="achement_title" id="achement_title" placeholder="Enter achement Title" value="{{$achement->achement_title}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="achement_title_mm"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">ခေါင်းစဉ်</label>
                                <input type="text" name="achement_title_mm" id="achement_title_mm"
                                    placeholder="မြန်မာလိုရေးပါ။"  value="{{$achement->achement_title_mm}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="achement_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                <input type="text" name="achement_description" id="achement_description" placeholder="Enter achement Description" value="{{$achement->achement_description}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="achement_description_mm"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">ဖော်ပြချက်</label>
                                <input type="text" name="achement_description_mm" id="achement_description_mm"
                                    placeholder="မြန်မာလိုရေးပါ။" value="{{$achement->achement_description_mm}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="achement_location"
                                    class="block mb-2 text-sm font-medium text-gray-900 "> Location</label>
                                <input type="text" name="achement_location" id="achement_location" placeholder="Enter  Achement Location" value="{{$achement->achement_location}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="achement_location_mm"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">တည်နေရာ</label>
                                <input type="text" name="achement_location_mm" id="achement_location_mm"
                                    placeholder="မြန်မာလိုရေးပါ။" value="{{$achement->achement_location_mm}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="achement_year"
                                    class="block mb-2 text-sm font-medium text-gray-900 "> Year</label>
                                <input type="text" name="achement_year" id="achement_year" placeholder="Enter  Achement Year" value="{{$achement->achement_year}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="achement_year_mm"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">နှစ်</label>
                                <input type="text" name="achement_year_mm" id="achement_year_mm"
                                    placeholder="မြန်မာလိုရေးပါ။" value="{{$achement->achement_year_mm}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label for="achement_start_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 "> Start Date</label>
                                <input type="text" name="achement_start_date" id="achement_start_date" placeholder="Enter  Achement start date" value="{{$achement->achement_start_date}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                            <div>
                                <label for="achement_end_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">End Date</label>
                                <input type="text" name="achement_end_date" id="achement_end_date"
                                    placeholder="Enter  Achement end date" value="{{$achement->achement_end_date}}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                    required />
                            </div>
                        </div>

                    <button type="submit"
                        class="w-full text-gray-950 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Update!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
