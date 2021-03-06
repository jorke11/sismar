@extends('layouts.app')

@section('content')

{!!Html::script('/vendor/treeview/logger.min.js')!!}
{!!Html::script('/vendor/treeview/treeview.js')!!}

<div class="row">
    <div class="col-lg-5 col-lg-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-3">List Role</div>
                    <div class="col-lg-9 text-right">
                        <button class="btn btn-success btn-sm" type="button" id="btnNew">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-condensed" id="tbl">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('role.form')
{!!Html::script('js/role.js')!!}
@endsection