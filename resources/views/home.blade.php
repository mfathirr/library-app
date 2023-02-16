@extends('layouts.app')
@section('main')
<div class="rounded mt-5 mx-auto bg-gradient-to-r from-slate-500 to-slate-400 w-fit outline-0 shadow-lg">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        @if (Auth::user())
        <span class="fs-5 fw-semibold"><a href="{{url("/book")}}">Welcome To Library, {{Auth::user()->name}}!</a></span>
        @else
        <span class="fs-5 fw-semibold"><a href="{{url("/book")}}">Welcome To Library!</a></span>
        @endif
    </div>
</div>
@endsection