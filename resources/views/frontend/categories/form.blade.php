@extends('layout.master')

@section('content')
    <form class="form-horizontal" method="post" action="{{ ($category ? '/categories/'.$category->id : '/categories' ) }}">
        <fieldset>
            {{ csrf_field() }}

            @if ($category)
                {{ method_field('PUT') }}
            @endif

            <!-- Form Name -->
            <legend>{{ ($category ? 'Update' : 'Create ') }} Category</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="" value="{{ $category->name or '' }}">
                </div>
            </div>

            <!-- Select Basic -->
            <!-- TODO: pre-populate this -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="type">Type</label>
                <div class="col-md-4">
                    <select id="type" name="type" class="form-control">
                        <option value="Default" selected>Private</option>
                    </select>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="description" name="description">{{ $category->description or 'Description' }}</textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" class="btn btn-primary">{{ ($category ? 'Update' : 'Create') }}</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection