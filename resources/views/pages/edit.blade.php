@extends('master')

@section('content')
    <div class="row list-group-item">
        <span><p>Edit Title</p></span>
        <hr>
        <div class="error">
            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="post" action="update">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="title" id="note" value="{{ $page->title }}" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-danger" type="submit">Update</button>
                </span>
            </div>
        </form>
    </div>
@stop