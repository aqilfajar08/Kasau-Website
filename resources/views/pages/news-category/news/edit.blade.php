<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit News</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Edit News</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Please update the news details below</p>
                        </div>
                    </div>

                    <form action="{{ route('new.update', [$category->id, $news->id]) }}" method="POST" enctype="multipart/form-data" class="divide-y divide-gray-200">
                        @csrf
                        @method('PUT')

                        <div class="py-8 text-base leading-6 space-y-6 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label for="title" class="leading-loose">Title</label>
                                <input type="text" name="title" id="title" value="{{ $news->title }}"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            </div>

                            <div class="flex flex-col">
                                <label for="image" class="leading-loose">Image</label>
                                <input type="file" name="image" id="image"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            </div>

                            <div class="flex flex-col">
                                <label for="description" class="leading-loose">Description</label>
                                <textarea name="description" id="description" rows="4"
                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">{{ $news->description }}</textarea>
                            </div>
                        </div>

                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{ url()->previous() }}"
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none hover:bg-gray-100 transition duration-150 ease-in-out">
                                Cancel
                            </a>
                            <button type="submit"
                                class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:bg-blue-600 transition duration-150 ease-in-out">
                                Update News
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
