@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="m-2">

                <div id="text-section">
                    <form action="/create-qr-text" method="POST">
                    @csrf
                        <h4>Text</h4>
                        <input type="text" name="content" class="form-control my-2" value="{{ old('content') }}" placeholder="Your text here">
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <input type="text" name="size" class="form-control my-2" value="{{ old('size') }}" placeholder="Size of QR (px)">
                            @error('size')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <button type="submit" class="btn btn-primary my-1">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
@endsection