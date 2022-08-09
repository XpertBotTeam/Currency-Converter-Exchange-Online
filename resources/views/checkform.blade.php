@extends('layouts.master')
@section('title','Follow Us')
@section('content')


<form role="form" method="post">
    <div class="box box-primary">
        <div class="box-header">
            <h2 class="page-header"><i class="fa fa-lock"></i> <u><em>Change Password</em></u></h2>
           
        </div>
        <!-- /.box-header -->
<center>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <label>Old Password</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input class="form-control" id="oldPassword" name="oldPassword" value="" placeholder="Old Password require" type="password">
                    </div>
                </div>
                <!-- /.input group -->
            </div>
        </center>
            <br/>
            <center>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <label>New Password</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input class="form-control" id="newPassword" name="newPassword" value="" placeholder="Enter New Password" type="password">
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            </center>
            <br/>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <label>Confirm Password</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input class="form-control" id="confirmPassword" name="confirmPassword" value="" placeholder="Re-enter the New Password" type="password">
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <center>
            <div class="pull-center"style="padding-left: 10px;padding-top: 30px;margin-left:350px;margin-right:700px">
                <button   type="button" name="Submit" value="Save" class="btn btn-danger"><i class="livicon" data-n="pen" data-s="16" data-c="#fff" data-hc="0" ></i> Save</button>
                <button style="padding-top: 2px" type="reset" name="Reset" value="Clear" class="btn btn-primary"><i class="livicon" data-n="trash" data-s="16" data-c="#fff" data-hc="0"></i> Clear</button>
            </div>
            </center>   

</form>
<script src="/js/checkform.js"></script>

@endsection