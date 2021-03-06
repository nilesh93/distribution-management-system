@extends('master')





@section('heading')

Daily Sales Log


@endsection
@section('breadcrumb')


<li>
    <a href="#">Sales</a>
</li>
<li class="active">
    <strong>Daily Sales Log</strong>
</li>


@endsection


@section('headerbuttons')
<form class="form-horizontal"  id="f1" onsubmit="return dataLoad()">
    <div class="form-group">
        <label class="control-label col-md-2"> Date</label>
        <div class="col-md-6">
            <input type="text" class="form-control" id="ldate" name="ldate" value="{{date('Y-m-d')}}" required>
        </div>
        <div class="col-md-4"><button type="submit" class="btn btn-primary btn-block">Search</button> </div>
    </div>
</form>
@endsection






@section('content')

<br>



<div class="row" style="padding:0cm">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">

            <div class="ibox-content">

                <div class="panel blank-panel">

                    <div class="panel-heading">

                        <div class="panel-options">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">Product Sales</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"> Customer Sales</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">

                                <table class="table table-striped table-bordered table-hover dataTables-example" id="dd" plugin="datatable" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Vehicle Number</th>


                                            <th> Total</th>
                                            <th> Discount</th>
                                            <th> Sale Date</th>
                                            <th>Remarks</th>
                                            <th class="col-md-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>

                            <div id="tab-2" class="tab-pane">



                                <table class="table table-striped table-bordered table-hover dataTables-example" id="dd1" plugin="datatable" >
                                    <thead>
                                        <tr>
                                            <th>Bill Number</th>


                                            <th>Customer </th>
                                            <th> Date </th>
                                            <th> Total </th>
                                            <th>Paid </th>
                                            <th>Due </th>
                                            <th class="col-md-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>


</div>

@endsection



@section('js')


<script>


    $('document').ready(function(){

        $('#sal').click();
        document.getElementById("daily").setAttribute('class','active');
        dataLoad();




        $('#ldate').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,
            format:'yyyy-mm-dd'
        });

    });


    function edit(id){

        document.getElementById("route_id").innerHTML = id;
        $.ajax({
            type: "get",
            url: 'get_rep_info',
            data: {id : id},

            success : function(data){

                console.log(data);
                document.getElementById("nameE").value =  data.rep_name;
                document.getElementById("nicE").value =  data.nic;
                document.getElementById("phoneE").value =  data.phone;
                document.getElementById("remarksE").value =  data.remarks;
                document.getElementById("idE").value =  id;

                document.getElementById("button_edit").setAttribute('onClick','edit_final('+id+')');

                $('#edit-routes').modal('show');

            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }	 
        });





    }

    function edit_final(id){

        $.ajax({
            type: "get",
            url: 'edit_reps',
            data: $('#addRE').serialize(),

            success : function(data){

                $('#edit-routes').modal('hide');
                dataLoad();

            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }	 
        });





    }

    function dataLoad(){

        var oTable = $('#dd').DataTable();
        oTable.destroy();

        var f = $('#f1').serialize();
        $('#dd').DataTable( {
            "ajax": "getdailysales?"+f,
            "columns": [

                { "data": "id" },
                { "data": "vehicle" },

                { "data": "total" },
                { "data": "discount" },
                { "data": "sale_date" },
                { "data": "remarks" },

                {"data" : null,
                 "mRender": function(data, type, full) {


                     return '<a class="btn btn-primary  btn-animate btn-animate-side btn-block btn-sm" href="sales_view?id='+data.id+'"> View Details</a>' ;
                 }
                }
            ]
        } );



        var oTable1 = $('#dd1').DataTable();
        oTable1.destroy();


        $('#dd1').DataTable( {
            "ajax": "getdailysalesCus?"+f,
            "columns": [

                { "data": "bill_num" },

                { "data": "customer" },
                { "data": "date" },
                { "data": "total" },
                { "data": "paid" },
                { "data": "due" },

                {"data" : null,
                 "mRender": function(data, type, full) {


                     return '<a class="btn btn-primary  btn-animate btn-animate-side btn-block btn-sm" href="customersales_view?id='+data.id+'"> View Details</a>' ;
                 }
                }
            ]
        } );

        return false;
    }

    function insert(){


        $.ajax({
            type: "get",
            url: 'insert-stock',
            data: $('#addR').serialize(),

            success : function(data){
                $('#add-routes').modal('hide');
                dataLoad();

            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }	 
        });



        return false; 


    }

    function del(id){

        $.ajax({
            type: "get",
            url: 'del_reps',
            data: {id : id},

            success : function(data){

                console.log(data);
                dataLoad();


            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }	 
        }); 
    }

</script>
@endsection