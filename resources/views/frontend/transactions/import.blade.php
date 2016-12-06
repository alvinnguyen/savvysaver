@extends('layout.master')

@section('content')
    <form class="form-horizontal" method="post" action="/transactions" enctype="multipart/form-data">
        <fieldset>
            {{ csrf_field() }}

            <!-- Form Name -->
            <legend>Import Transactions</legend>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="transactions">Upload File</label>
                <div class="col-md-4">
                    <input id="transactions" name="transactions" class="input-file" type="file">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection