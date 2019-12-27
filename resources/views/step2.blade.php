@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Generate a Slip for Patient</div>
                <h4 class="pt-4 px-4 text-center"> Stage 2: </h4>
                <hr>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('printpdf') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Tooth Number
                                            </th>
                                            <th class="text-center">
                                                Treatement
                                            </th>
                                            <th class="text-center">
                                                Price
                                            </th>
                                            <th class="text-center">
                                                Quantity
                                            </th>
                                            <!-- <th class="text-center">
                                                Total
                                            </th> -->
                                            <th class="text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0' data-id="0" class="hidden">
                                            <td data-name="teeth_numbers" style="width: 30%;">
                                                <input type="text" name='teeth_numbers0'  placeholder='Teeth Numbers' class="form-control" minlength="1" maxlength="50" required/>
                                            </td>
                                            <td data-name="treatement" style="width: 40%;">
                                                <textarea name="treatement0" placeholder="Enter treatement" class="form-control" minlength="4" maxlength="180" required></textarea>
                                            </td>
                                            <td data-name="price" style="width: 15%;">
                                                <input type="number" name='price0' placeholder='Enter Price' class="form-control" minlength="1" maxlength="10" required/>
                                            </td>
                                            <td data-name="quantity" style="width: 10%;">
                                                <input type="number" name="quantity0" placeholder='Quantity' class="form-control" minlength="1" maxlength="10" required/>
                                            </td>
                                            <!-- <td data-name="total">
                                                <input type="text" name="total0" class="form-control" disabled>
                                            </td> -->
                                            <td data-name="del">
                                                <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a id="add_row" class="btn btn-primary float-right text-white">+ Add Row</a> 
                        <hr class="mt-5">
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-center text-md-right">{{ __('Enter discount for cash Payments in %') }}</label>
                            <div class="col-md-3">
                                <input id="discount" type="number" placeholder="Enter Discount" class="form-control mt-2" name="discount" value="{{ old('discount') }}" minlength="1" maxlength="10" required>
                            </div>
                        </div> 
                        <div class="col-md-12 text-center mt-5">  
                            <button class="btn btn-primary mx-3" type="submit">Generate Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $("#add_row").on("click", function() {
        // Dynamic Rows Code
        
        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });
        
        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var td;
            var cur_td = $(this);
            
            var children = cur_td.children();
            
            // add new td and element if it has a nane
            if ($(this).data("name") !== undefined) {
                td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });
                
                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });
        
        // add the new row
        $(tr).appendTo($('#tab_logic'));
        
        $(tr).find("td button.row-remove").on("click", function() {
             $(this).closest("tr").remove();
        });
});
    $("#add_row").trigger("click");
});
</script>
@endsection