@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur assumenda cumque error, esse excepturi
        magni nam obcaecati, officia rerum sapiente velit. Aliquam amet autem beatae consectetur, harum officia
        quae?</p>
@endsection

@section('sidebar')
    @parent
    <p>This appended to the sidebar</p>
@endsection
