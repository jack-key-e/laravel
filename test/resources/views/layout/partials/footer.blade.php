		    <footer>
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		                    <ul class="list-inline text-center">
		                    @foreach($Webname as $data)
		                        <li>
		                            <a href="http://{{$data -> FooterTwitter}}">
		                                <span class="fa-stack fa-lg">
		                                    <i class="fa fa-circle fa-stack-2x"></i>
		                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		                                </span>
		                            </a>
		                        </li>
		                        <li>
		                            <a href="https://{{$data -> FooterFacebook}}">
		                                <span class="fa-stack fa-lg">
		                                    <i class="fa fa-circle fa-stack-2x"></i>
		                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		                                </span>
		                            </a>
		                        </li>
		                        <li>
		                            <a href="https://{{$data -> FooterGithub}}">
		                                <span class="fa-stack fa-lg">
		                                    <i class="fa fa-circle fa-stack-2x"></i>
		                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
		                                </span>
		                            </a>
		                        </li>
		                    
		                    </ul>
		                    <p class="copyright text-muted">Copyright {{$data->WebOwnName}}&copy; Your Website 2016</p>
		                	@endforeach
		                </div>
		            </div>
		        </div>
		    </footer>
		    <!-- jQuery -->
		    <script src="js/jquery.js"></script>

		    <!-- Bootstrap Core JavaScript -->
		    <script src="{{asset('js/bootstrap.min.js')}}"></script>
		    <!-- Custom Theme JavaScript -->
		    <script src="{{asset('js/clean-blog.min.js')}}"></script>