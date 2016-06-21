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
                    <p class="post-meta">文章作者 <a href="#">Jack-key-e</a>&nbsp;{{$postlist -> created_at}}</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="{{route('posts.index')}}">全部文章 &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>