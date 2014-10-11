@extends('layouts.main')

@section('content')

@if(Auth::check())

Hello , {{Auth::user()->username}}
@else
Please login
@endif

@stop