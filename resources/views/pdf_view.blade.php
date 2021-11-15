<!DOCTYPE html>
<html lang="en">

<head>
    <!--<script src="{{-- asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') --}}" rel="stylesheet">-->
</head>

<body>
    <h1>Daan</h1>
    @foreach ($employee as $test)
        {{ $test->name }}
    @endforeach
    <button class="bttn bttn-info"></button>
</body>

</html>