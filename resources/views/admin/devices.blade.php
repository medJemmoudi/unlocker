@extends('layouts.master')
	
	@section('contents')
    
    <!-- DataTables Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/dataTables.bootstrap.css">


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> <span class="fa fa-mobile"></span> Devices</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-md-6">
                    @if(Session::has('done'))
                    <div class="alert alert-info">New device has been added.</div>
                    @endif
                    @if(Session::has('delete'))
                    <div class="alert alert-warning">A device has been removed.</div>
                    @endif
                    

                    <table class="table table-striped table-bordered table-hover" id="tableDevices">
                        <thead>
                            <tr>
                                <th>Devices</th>
                                <th></th>
                            </tr>
                            <tr class="odd gradeX">
                                <td colspan="2">
                                    {!! Form::open(array('url' => 'admin/new_device', 'method' => 'post')) !!}
                                    <input type="text" name="device" placeholder="New device" class="form-control" />
                                    <button type="submit" class="btn btn-success btn-sm"><span class="fa fa-plus"></span></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            
                        </thead>
                        <tbody>
                            
                            @foreach($devices as $device)
                            <tr class="odd gradeX">
                                <td><strong>{{$device->device}}</strong></td>
                                <td class="text-center">
                                    <a href="{{URL::to('admin/update_device')}}/{{$device->id}}"><button class="btn btn-primary btn-sm"><span class="fa fa-cog"></span></button></a>
                                    <a href="{{URL::to('admin/delete_device')}}/{{$device->id}}"><button class="btn btn-danger btn-sm"><span class="fa fa-remove"></span></button></a>
                                </td>
                            </tr>
                            @endforeach

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
        $('#tableDevices').DataTable({
                "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 1] }
       ]
        });
    });
    </script>
    @stop

@endsection
