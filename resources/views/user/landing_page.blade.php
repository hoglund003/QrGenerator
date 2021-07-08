@extends('layouts.app')

@section('content')
    <form action="/qrcode" method="POST">
    @csrf
        <input type="text" name="text" class="form-control">
        <button type="submit" class="btn btn-secondary">Make QR-code</button>
    </form>

@endsection