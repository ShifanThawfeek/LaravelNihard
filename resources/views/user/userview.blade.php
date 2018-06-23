@extends('layouts.app')
@section('content')
<div class="col-md-12 col-lg-12">

    <div class="card">
        <div class="card-header">
            User Form
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="col-md-4 col-lg-4"><label>First Name :</label></div>
                        <div class="col-md-8 col-lg-8"><input type="text" class="form-control" id="txtFName"></div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="col-md-4 col-lg-4"><label>Last Name :</label></div>
                        <div class="col-md-8 col-lg-8"><input type="text" class="form-control" id="txtLName"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="col-md-4 col-lg-4"><label>Mobile :</label></div>
                        <div class="col-md-8 col-lg-8"><input type="text" class="form-control" id="txtMobile"></div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <button class="btn btn-success pull-right" id="btnSave">Save</button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{ URL::asset('js/pages/user/userview.js') }}"></script>

@endsection