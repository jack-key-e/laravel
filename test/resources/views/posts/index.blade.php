@include('layout.partials.header')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @foreach($posts as $postlist)
        <div class="post-preview">
                    <a href="/posts/{{$postlist -> id}}">
                        <h2 class="post-title">
                            {{ $postlist -> title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $postlist -> sub_title }}
                        </h3>
                    </a>
                    <p>{{$postlist -> content}}</p>
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
                <a href="{{route('posts.index')}}?p={{$i}}"> {{$i}}</a>
                </li>
                @endfor
            @else
                @for($i=1;$i<=$Postcounter/5;$i++)
                @if($page == $i)
                    <li class="before" id="pageOn" >
                @else
                    <li class="before" >                
                @endif
                <a href="{{route('posts.index')}}?p={{$i}}"> {{$i}}</a>
                </li>
                @endfor
            @endif
            </ul>
            <hr>
        </div>
    <!-- pager -->
    <!-- Footer -->
    @include('layout.partials.footer')

<style type="text/css">
    #pageOn  a{
        background-color: rgba(36, 142, 232, 0.82);
    }
</style>
</html>
