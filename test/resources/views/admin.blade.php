@include('layout.partials.header')
	<hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>後台登入</h1>
                        <hr class="small">
                       
                    </div>
                </div>
            </div>
        </div>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <form name="sentMessage" id="sentMessage" method="POST" action="{{route('home.admin')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>帳號</label>
                            <input type="text" name="acount" class="form-control" placeholder="帳號" required data-validation-required-message="請輸入帳號">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>密碼</label>
                            <input type="password" name="password" class="form-control" placeholder="密碼" required data-validation-required-message="請輸入密碼">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </form>
                    <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" class="btn btn-default" value="登入" form="sentMessage">
                            <button id="back" class="btn btn-default">回首頁</button>
                        </div>
                    </div>
                @if(isset($condition))
                <div class="alert bg-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>帳號或密碼錯誤</strong>
                </div>
                @endif
            </div>
        </div>

    </div>

    <hr>
<!-- Footer -->
@include('layout.partials.footer')
<script type="text/javascript">
    $( "#back" ).click(function() {
        window.location.href='../';
    });
</script>
