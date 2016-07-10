@include('layout.partials.adminheader')
<header class="intro-header" style="background-image: url({{asset('img/home-bg.jpg')}})">
 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>後台頁面</h1>
                        <hr class="small">
                        <span class="subheading">文章修改</span>
                    </div>
                </div>
            </div>
        </div>
</header>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                    	<h2>文章修改</h2>
                    </div>
                    <form name="sentMessage" method="POST" novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Post標題</label>
	                        <input type="text" name="PostTitle" class="form-control" placeholder="文章標題:{{ $posts -> title }}">
                        	<p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Post副標題</label>
	                        <input type="text" name="PostSubTitle" class="form-control" placeholder="文章副標題:{{ $posts -> sub_title }}">
                        	<p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="text"class="form-control" placeholder="文章內容:" readonly>
                            <textarea class="form-control" id="ckedit" rows="8" name="PostContent" >
                            {!! $posts -> content !!}
                            </textarea>
                            <p class="help-block text-danger"></p>
                        <hr>
                        </div>

                        <div class="form-group col-xs-6">
                            <input type="submit" class="btn btn-default" value="更改">
                            <a href="/admintools/postset/delete/{{$id}}"></a>
                            <buttom class="btn btn-default" Onclick="window.location.href='../'">返回</buttom>
                        </div>
                        <div class="form-group col-xs-6 text-right">
                            <buttom class="btn btn-danger">刪除文章</buttom>
                        </div>

                    </form>
                </div>
            </div>
    <article>
    </div>
    <!-- pager -->
<!-- Footer -->
<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/clean-blog.min.js')}}"></script>
<script>CKEDITOR.replace('ckedit');</script>