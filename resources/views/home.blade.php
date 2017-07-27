@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    ddCMS
                </div>
                
                
                <h1>You have the following textareas</h1>
                
                
                
                @foreach(App\Textarea::all() as $textarea)
                
                    {{ $textarea->name }}
                
                @endforeach
                
                
            </div>
        </div>
    </div>
</div>
@endsection
