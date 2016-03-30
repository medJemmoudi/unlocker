<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="@lang('contents.langue')" dir="@lang('contents.dir')" xmlns="http://www.w3.org/1999/xhtml">
	
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iPhone Unlocker</title>

    <!-- Bootstrap Core CSS -->
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
    <!-- MetisMenu CSS -->
	{!! Html::style('bower_components/metisMenu/dist/metisMenu.min.css') !!}
    <!-- Timeline CSS -->
	{!! Html::style('dist/css/timeline.css') !!}
    <!-- Custom CSS -->
	{!! Html::style('dist/css/sb-admin-2.css') !!}
    <!-- Morris Charts CSS -->
	{!! Html::style('bower_components/morrisjs/morris.css') !!}

    <!-- Custom Fonts -->
	{!! Html::style('bower_components/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<body data-spy="scroll" data-target=".navbar-fixed-top">

    <div id="wrapper">

		<!-- HEADER -->
		@include('layouts.header')

		<!-- CONTENTS -->
		@yield('contents')
    </div>
    <!-- /#wrapper -->	
		<!-- FOOTER -->
		@include('layouts.footer')
		
	</body>
</html>