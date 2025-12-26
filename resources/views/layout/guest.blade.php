<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Image Compressor is a free online tool that allows you to compress and optimize images in various formats including PNG, JPEG, JPG and WEBP without losing quality. Reduce file size for faster loading times and improved website performance.">
    <meta name="keywords" content="compressor, image, png, jpeg. jpg, webp, avif, tiff, gif">

    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='100%25' height='100%25' fill='%234B5563'/%3E%3Ctext x='50%25' y='50%25' fill='white' font-size='14' font-family='Arial' text-anchor='middle' alignment-baseline='central'%3EIC%3C/text%3E%3C/svg%3E">

    <title>Image Compressor</title>

    @vite(['resources/css/app.css', 'resources/js/standalone.ts'])
</head>

<body class="flex flex-col min-h-screen">
    <div class="flex-grow">
        <main>
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>

</html>
