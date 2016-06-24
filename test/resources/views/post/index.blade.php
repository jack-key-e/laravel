@include('layout.partials.header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('img/post-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                    @foreach($Alltitle as $data)
                        <h1>{{$data -> PostTitle}}</h1>
                        <h2 class="subheading">{{$data -> PostSubTitle}}</h2>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h2>{{ $posts -> title }}</h2>
        <h3>{{ $posts -> sub_title }}</h3>
        <p>{!! $posts -> content !!}</p>
    </div>
    <!-- Footer -->
    @include('layout.partials.footer')

</html>