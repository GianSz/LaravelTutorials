@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <p class="lead text-center">{{ $email }}</p>
        </div>
        <div class="col-lg-4 mx-auto">
            <p class="lead text-center">{{ $address }}</p>
        </div>
    </div>
    <div>
        <div class="col-lg-12">
            <p class="lead text-center">{{ $phone_number }}</p>
        </div>
    </div>
</div>
@endsection
