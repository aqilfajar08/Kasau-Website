<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create News</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div class="block pl-2 font-semibold text-xl text-gray-700">
                            <h2 class="leading-relaxed">Create New Article</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Enter your article details below</p>
                        </div>
                    </div>

                    <form action="{{ route('admin.new.store', $category->id) }}" method="post" enctype="multipart/form-data" class="divide-y divide-gray-200">
                        @csrf
                        @method('POST')
                        
                        <div class="py-8 text-base leading-6 space-y-6 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label for="title" class="text-sm font-bold text-gray-600 mb-2">Title</label>
                                <input type="text" name="title" id="title" 
                                    class="px-3 py-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-blue-500"
                                    placeholder="Enter article title">
                            </div>

                            <div class="flex flex-col">
                                <label for="image" class="text-sm font-bold text-gray-600 mb-2">Image</label>
                                <input type="file" name="image" id="image" 
                                    class="px-3 py-2 text-sm text-gray-700 bg-white rounded-lg border-2 border-gray-200 focus:outline-none focus:border-blue-500">
                            </div>

                            <div class="flex flex-col">
                                <label for="description" class="text-sm font-bold text-gray-600 mb-2">Description</label>
                                <textarea name="description" id="description" rows="6" 
                                    class="px-3 py-2 rounded-lg border-2 border-gray-200 focus:outline-none focus:border-blue-500"
                                    placeholder="Enter article description"></textarea>
                            </div>
                        </div>

                        <div class="pt-4 flex items-center space-x-4">
                            <button type="submit" 
                                class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md 
                                focus:outline-none hover:bg-blue-600 transition duration-300 ease-in-out">
                                Create Article
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
