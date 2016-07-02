@include('layout.partials.adminheader')
<header class="intro-header" style="background-image: url({{asset('img/home-bg.jpg')}})">
 <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>後台頁面</h1>
                        <hr class="small">
                        <span class="subheading">posts設定</span>
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
                    @foreach($contact as $data)
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                    	<h2>POST標題設定</h2>
                    </div>
                    <form name="sentMessage" action="{{route('admintools.postset')}}" novalidate>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
	                        <label>Post標題</label>
                            <input type="text" name="PostTitle" class="form-control" placeholder="Post標題:{{$data -> PostTitle}}">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
	                        <label>Post副標題</label>
                            <input type="text" name="PostSubTitle" class="form-control" placeholder="Post副標題:{{$data -> PostSubTitle}}">
                        	<p class="help-block text-danger"></p>
                        </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                        <hr>
                            <input type="submit" class="btn btn-default" value="更改">
                        </div>
                    </div>
                    </form>
                    @endforeach
                </div>
            </div>
    <article>
    <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    		<div class="form-group col-xs-12 floating-label-form-group controls">
                    <h2>新增/修改文章
                    	<a href="{{route('postset.create')}}">
                    	<buttom class="btn btn-success">新增文章</buttom></a>
                    </h2>
            </div>
    @foreach($posts as $postlist)
        <div class="post-preview">
                    <a href="/admintools/postset/{{$postlist -> id}}/update">
                        <h2 class="post-title">
                            {{ $postlist -> title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $postlist -> sub_title }}
                        </h3>
                    </a>
                    <p>{{$postlist -> content}}</p>
                    <a href="/admintools/postset/delete/{{$postlist -> id}}">
                    	<buttom class="btn btn-danger">刪除文章</buttom>
                    </a>
        </div>
                <hr>
    @endforeach
            <ul class="pager">
            @if ($Postcounter%5 !=0 )
                @for($i=1;$i<=$Postcounter/5+1;$i++)
                @if($page == $i)
                    <li class="before" id="pageOn" >
                @else
                    <li class="before" >                
                @endif
                <a href="{{route('admintools.postset')}}?p={{$i}}"> {{$i}}</a>
                </li>
                @endfor
            @else
                @for($i=1;$i<=$Postcounter/5;$i++)
                @if($page == $i)
                    <li class="before" id="pageOn" >
                @else
                    <li class="before" >                
                @endif
                <a href="{{route('admintools.postset')}}?p={{$i}}"> {{$i}}</a>
                </li>
                @endfor
            @endif
            </ul>
            <hr>
        	</div>
    	</div>
    </div>
    <!-- pager -->
<!-- Footer -->
<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/clean-blog.min.js')}}"></script>