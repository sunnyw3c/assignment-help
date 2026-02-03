<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100 min-h-screen">
    <div class="container mx-auto px-4 py-8 sm:py-12">
        <div class="max-w-4xl mx-auto">
            {{-- Header --}}
            <div class="text-center mb-8">
                <h1 class="text-4xl sm:text-5xl font-bold gradient-text mb-4">
                    📦 Polymorphic File Upload Test
                </h1>
                <p class="text-lg text-gray-600">
                    Test the universal file upload system that works with ANY model
                </p>
            </div>

            {{-- Test Form --}}
            @livewire('file-upload-test-component')
        </div>
    </div>

    @livewireScripts
</body>
</html>
