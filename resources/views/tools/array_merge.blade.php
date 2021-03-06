@extends('tools._layout')

@section('title','array merge')

@section('content')
    <form action="" method="post">
        {{ csrf_field() }}
        <textarea name="left" id="" cols="30" rows="20">{{$left}}</textarea>
        <select name="type" id="type">
            <option value=""></option>
            @switch($type)
                @case('unique')
                <option value="unique" selected>deduplication</option>
                @break
                @default
                <option value="unique">deduplication</option>
            @endswitch
        </select>
        <textarea name="right" id="" cols="30" rows="20">{{$right}}</textarea>
        <textarea name="result" id="" cols="30" rows="20" disabled>{{$result}}</textarea>
        <input type="reset">
        <input type="submit">
    </form>
@endsection