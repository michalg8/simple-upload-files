@extends('panel.layout')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ url('/') }}"> Powrot</a><br><br>
        <form action="{{url('/create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="file" name="image"><br><br>
            <input type="submit" class="btn btn-primary" value="Dodaj "/>
        </form>
    </div>
@endsection
