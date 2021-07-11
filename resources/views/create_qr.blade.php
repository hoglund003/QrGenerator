@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="m-2">
                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" name="choise" id="btnradio1" onchange="checkRadioButtons()">
                    <label class="btn btn-outline-primary" for="btnradio1">Text</label>

                    <input type="radio" class="btn-check" name="choise" id="btnradio2" onchange="checkRadioButtons()">
                    <label class="btn btn-outline-primary" for="btnradio2">Phone number</label>

                    <!-- <input type="radio" class="btn-check" name="choise" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label> -->
                </div>
                <div id="workspace"></div>

                <div id="text-section" hidden>
                    <form action="/create-qr-text" method="POST">
                    @csrf
                        <h4>Text</h4>
                        <input type="text" name="input" class="form-control" placeholder="Your text here">
                        <input type="text" name="size" class="form-control" placeholder="Size of QR (px)">
                        <button type="submit" class="btn btn-primary my-1">Create</button>
                    </form>
                </div>

                <div id="phone-number-section" hidden>
                    <h4>Phone number</h4>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
@endsection