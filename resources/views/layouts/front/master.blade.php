<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.front.header')

</head>


<body>
    <!--================Header Menu Area =================-->
    @include('layouts.front.nav')
    <!--================Header Menu Area =================-->


        <!--================Hero Banner start =================-->
        @include('layouts.front.hero')
        <!--================Hero Banner end =================-->


    @yield('content')

    <!--================ Start Footer Area =================-->
    @include('layouts.front.footer')
    <!--================ End Footer Area =================-->

    @include('layouts.front.script')

</body>

</html>
