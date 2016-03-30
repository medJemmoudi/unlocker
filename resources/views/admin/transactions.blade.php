@extends('layouts.master')
	
	@section('contents')
    
    <!-- DataTables Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/dataTables.bootstrap.css">

    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> <span class="fa fa-dashboard"></span> Requests</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-md-12">

                    <table class="table table-striped table-bordered table-hover" id="tableTransact">
                        <thead>
                            <tr>
                                <th>IMEI</th>
                                <th>Email</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Lang</th>
                                <th>Created at</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr class="odd gradeX">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
        <!-- /#page-wrapper -->


    @section('otherJS')
     
     <script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>       
     <script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/dataTables.bootstrap.js"></script>       
    <!-- DataTables JavaScript -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#tableTransact').DataTable({
                responsive: true,
                "aoColumnDefs": [
                { 'bSortable': false, 'aTargets': [ 6] }
       ]
        });
    });
    </script>
    @stop

@endsection
