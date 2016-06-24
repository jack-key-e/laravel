@include('layout.partials.header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
@foreach($Alltitle as $data)
                        <h1>{{$data -> AboutTitle}}</h1>
                        <hr class="small">
                        <span class="subheading">{{$data->AboutSubTitle}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            {!! $data -> AboutContent !!}
            </div>
        </div>
    </div>
@endforeach
    <hr>

    <!-- Footer -->
@include('layout.partials.footer')

</html>
