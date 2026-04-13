@props([
    'title' => 'DevTracker',
    'moreCss' => ''
])

<!doctype html>
<html lang="en" data-theme="halloween">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ $title }}</title>
    <!-- daisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="h-screen">
<x-nav></x-nav>
<div class="mt-8 justify-center items-center flex {{ $moreCss }} ">
    {{ $slot }}
</div>
<x-footer></x-footer>
</body>
</html>
