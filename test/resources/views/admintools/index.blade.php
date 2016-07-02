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
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <h2>更換密碼</h2>
                <form name="sent" action="{{route('admintools.update')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>帳號</label>
                            <input type="text" name="Id" class="form-control" placeholder="帳號" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>舊密碼</label>
                            <input type="password" name="OldPw" class="form-control" placeholder="舊密碼" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>新密碼</label>
                            <input type="password" name="Pw" class="form-control" placeholder="新密碼" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>新密碼</label>
                            <input type="password" name="AgainPw" class="form-control" placeholder="新密碼" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" name="form2"class="btn btn-default" value="更改密碼">
                        </div>
                        @if(isset($condition))
                            <div class="form-group col-xs-12">
                                <div class="alert bg-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>{{$condition}}</strong>
                                </div>
                            </div>
                        @endif
                    </div>
                    </form>
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