@extends('panel.layout')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{url('/create')}}">Dodaj plik</a><br>
        <table class="table table-bordered">
            @foreach($images as $image)
                <tr>
                    <td><img src="{{asset('storage/'.$image->image_path)}}" width="100" height="100"></td>
                    <td>{{$image->image_path}}</td>
                </tr>
            @endforeach
        </table>
        {{$images->links()}}
    </div>
@endsection
