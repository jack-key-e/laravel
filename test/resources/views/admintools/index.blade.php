@include('layout.partials.adminheader')
 <header class="intro-header" style="background-image: url({{asset('img/home-bg.jpg')}})">
 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>後台頁面</h1>
                        <hr class="small">
                        <span class="subheading">網站設定</span>
                    </div>
                </div>
            </div>
        </div>
 </header>
 <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>臉書,推特,github設定頁面</h2>
                @foreach ($Webname as $data)
                <form name="sentMessage" action="{{route('admintools.update')}}" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>網站名稱</label>
                            <input type="text" name="WebName" class="form-control" placeholder="網站名稱:{{$data->WebOwnName}}">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>facebook網址</label>
                            <input type="text" name="FacebookId" class="form-control" placeholder="facebook網址:{{$data->FooterFacebook}}" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>twitter網址</label>
                            <input type="text" name="TwitterId" class="form-control" placeholder="Twitter網址:{{$data->FooterTwitter}}" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>github網址</label>
                            <input type="text" name="GithubId" class="form-control" placeholder="Github網址:{{$data->FooterGithub}}" >
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
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/clean-blog.min.js')}}"></script>