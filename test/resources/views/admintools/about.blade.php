@include('layout.partials.adminheader')
 <header class="intro-header" style="background-image: url({{asset('img/home-bg.jpg')}})">
 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>後台頁面</h1>
                        <hr class="small">
                        <span class="subheading">About設定</span>
                    </div>
                </div>
            </div>
        </div>
 </header>
 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>about設定頁面</h2>
                @foreach($about as $data)
                <form name="sentMessage" action="{{route('admintools.about')}}" method="POST" novalidate>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>about標題</label>
                            <input type="text" name="AboutTitle" class="form-control" placeholder="about標題:{{$data->AboutTitle}}">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>about副標題</label>
                            <input type="text" name="AboutSubTitle" class="form-control" placeholder="about副標題:{{$data->AboutSubTitle}}" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="text" class="form-control" placeholder="about內文:" readonly>
                            <textarea class="form-control" rows="8" name="AboutContent" >
                            {{$data->AboutContent}}
                            </textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" class="btn btn-default" value="更改">
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>

    <hr>
<!-- Footer -->
<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/clean-blog.min.js')}}"></script>