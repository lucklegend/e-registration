<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>E-Register</title>
    <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablesorter/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/roboto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
</head>
<body>
    <div class="header">
        <div class="container">
            <img src="{{ asset('images/ereg_logo.png') }}" class="img-responsive" alt="e-valuate">
        </div>
    </div>
    
	<div id="page-wrapper">
		<div id="page-middle">
			<div class="container text-center">
		    	@yield('content')
			</div>
		</div>
	    <div id="push"></div>
	</div>
	
    <div id="footer">
        <div class="container clearfix">
            <img src="{{ asset('images/dost_footer.png') }}" class="img-responsive pull-right" alt="DOST4A">            
        </div>
    </div>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
    <script src="{{ asset('js/jquery.tablesorter.pager.js') }}"></script>
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>