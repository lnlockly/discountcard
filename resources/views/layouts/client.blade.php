<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="b0321a5a-3fb1-47b7-b434-11c09f921978" data-blockingmode="auto" type="text/javascript"></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/card.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/client/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/client/card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/client/admin.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    @if (Request::path() == 'client/card/edit')
    <div class="sb-nav-fixed">
        <div class="bg-gray-100">
            @include('client.layouts.navigation')
            @translations
            @routes
            @inertia
        </div>
    </div>
    @else
        @translations
        @routes
        @inertia
    @endif
</body>

</html>