<x-app-layout>

    <div class="flex items-center justify-center">

        <!-- Form Container -->
        <div class="bg-white p-8 rounded-md shadow-md w-full md:w-2/3 lg:w-3/4 xl:w-1/2">

            <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="title" name="title"
                        class="w-full border-2 rounded-md px-4 py-2 leading-5 transition duration-150 ease-in-out sm:text-sm
                        focus:outline-none focus:border-blue-500" placeholder="Enter the title">
                </div>

                <!-- File Attachment Section -->
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                    <!-- File input field -->
                    <div
                        class="relative border-2 rounded-md px-4 py-3 bg-white flex items-center justify-between hover:border-blue-500 transition duration-150 ease-in-out">
                        <input type="file" id="image" name="image"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span class="ml-2 text-sm text-gray-600">Choose an image</span>
                        </div>
                        <span class="text-sm text-gray-500">Max file size: 5MB</span>
                    </div>
                </div>

                <!-- Caption Section -->
                <div class="mb-6">
                    <label for="caption" class="block text-gray-700 text-sm font-bold mb-2">Caption:</label>
                    <textarea id="caption" name="caption" rows="4"
                        class="w-full border-2 rounded-md px-4 py-2 leading-5 transition duration-150 ease-in-out sm:text-sm
                        sm:leading-5 resize-none focus:outline-none focus:border-blue-500"
                        placeholder="Enter the caption"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="flex justify-center items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue text-white py-2 px-4 rounded-md transition duration-300 gap-2"
                        style="background-color:blueviolet;">
                        Submit Post
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                            id="send" fill="#fff">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path
                                d="M3.4 20.4l17.45-7.48c.81-.35.81-1.49 0-1.84L3.4 3.6c-.66-.29-1.39.20-1.39.91L2 9.12c0 .5.37.93.87.99L17 12 2.87 13.88c-.5.07-.87.5-.87 1l.01 4.61c0 .71.73 1.2 1.39.91z">
                            </path>
                        </svg>
                    </button>
                </div>

            </form>

        </div>

    </div>

</x-app-layout>
