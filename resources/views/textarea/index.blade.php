@extends('layouts.app')

@section('content')


    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Textareas</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('textarea.create') }}"> Create New Textarea</a>

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>ID</th>
            <th>Name</th>

        </tr>

    @foreach ($textareas as $textarea)

        <tr>
    
            <td>{{ $textarea->id }}</td>
    
            <td>{{ $textarea->name }}</td>
    
            <td>
    
                <a class="btn btn-info" href="{{ route('textarea.show',$textarea->id) }}">Show</a>
    
                <a class="btn btn-primary" href="{{ route('textarea.edit',$textarea->id) }}">Edit</a>
    
                {!! Form::open(['method' => 'DELETE','route' => ['textarea.destroy', $textarea->id],'style'=>'display:inline']) !!}
    
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    
                {!! Form::close() !!}
    
            </td>
    
        </tr>

    @endforeach

    </table>


    {!! $textareas->render() !!}


@endsection