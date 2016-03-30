    <!-- jQuery -->
    {!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script('bower_components/metisMenu/dist/metisMenu.min.js') !!}


    @yield('otherJS')

    <!-- Morris Charts JavaScript -->
    {!! Html::script('bower_components/raphael/raphael-min.js') !!}
    {!! Html::script('bower_components/morrisjs/morris.min.js') !!}
    {!! Html::script('js/morris-data.js') !!}

    <!-- Custom Theme JavaScript -->
    {!! Html::script('dist/js/sb-admin-2.js') !!}