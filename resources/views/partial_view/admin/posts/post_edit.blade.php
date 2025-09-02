@extends('layouts.admin_layout')


@section('content')
    <div class="relative w-full max-w-4xl max-h-full mx-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t  border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                    Add New Posts or Events
                </h3>
                <a a href="{{ route('admin.posts.index') }}"
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
                <form class="space-y-4" action="{{ route('admin.posts.update', $post->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Banner</label>
                        <input type="file" name="post_banner" id="post_banner"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                            placeholder="Post Banner" />
                    </div>
                    <div>
                        <img src="{{ asset($post->post_banner) }}" alt="" class="w-52 rounded-2xl">
                        <p class="mt-2">Old Photo</p>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label for="post_title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                            <input type="text" name="post_title" id="post_title" placeholder="Enter Post Title"
                                value="{{ $post->post_title }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                required />
                        </div>
                        <div>
                            <label for="post_title_mm"
                                class="block mb-2 text-sm font-medium text-gray-900 ">ခေါင်းစဉ်</label>
                            <input type="text" name="post_title_mm" id="post_title_mm" placeholder="Enter Post Title"
                                value="{{ $post->post_title_mm }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                required />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label for="post_body" class="block mb-2 text-sm font-medium text-gray-900 ">Body</label>
                            <textarea type="text" name="post_body" id="post_body" placeholder="Enter Post Body"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                required> {{ $post->post_body }} </textarea>
                        </div>
                        <div>
                            <label for="post_body_mm" class="block mb-2 text-sm font-medium text-gray-900 ">စာသား</label>
                            <textarea type="text" name="post_body_mm" id="post_body_mm" placeholder="Enter Post Body"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                                required> {{ $post->post_body_mm }}</textarea>
                        </div>
                    </div>
                    <div>
                        <label for="post_title" class="block mb-2 text-sm font-medium text-gray-900 ">Images</label>
                        <input type="file" name="post_image[]" id="post_image"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 "
                            placeholder="Post Banner" multiple />
                    </div>
                    @php
                        $photo_array = explode(',', $post->post_image);
                    @endphp
                    <p class="my-2">Old Photos</p>
                    <div class=" flex gap-6 flex-wrap">
                        @foreach ($photo_array as $photo)
                            <img src="{{ asset($photo) }}" alt="" class="w-64 rounded-2xl">
                        @endforeach
                    </div>

                    <div>
                        <label for="post_category" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>
                        <select name="post_category" id="post_category" required
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option value="" selected disabled>None</option>
                            <option value="event" @if ($post->post_category == 'event') selected @endif>Event</option>
                            <option value="news" @if ($post->post_category == 'news') selected @endif>News</option>
                        </select>
                    </div>

                    <div class="flex items-center">
                        <input id="link-checkbox" type="checkbox" value="1" name="post_is_show_front"
                            @if ($post->post_is_show_front == 1) checked @endif
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">That
                            Posts will <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Show at
                                the
                                Main Page</a>.</label>
                    </div>

                    <button type="submit"
                        class="w-full text-gray-950 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Update!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
