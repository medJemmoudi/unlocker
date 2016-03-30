@extends('layouts.master')
	
	@section('contents')
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> <span class="fa fa-cog"></span> Settings</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-md-6">

                    <table class="table table-striped table-bordered table-hover" id="tableDevices">
                       
                        <tbody>
                            <tr class="odd gradeX">
                                <td style="vertical-align:middle;">
                                    <strong>Price</strong></td>
                                <td>   
                                    <input type="text" name="device" placeholder="Price" class="form-control" />
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td style="vertical-align:middle;">
                                    <strong>Other setting</strong></td>
                                <td>

                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
        <!-- /#page-wrapper -->

         @section('otherJS')

        @stop

@endsection
