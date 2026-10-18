@extends('layouts.app')

@section('content')

<h1>Our Pixel Characters</h1>

<p>Explore our sample character collection.</p>

<div class="row g-3">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Nova</h5>
            <p>A curious cosmic explorer.</p>

            <button
                class="btn btn-primary"
                onclick="alert('Demo only. No data saved.')">
                Add to Collection
            </button>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Moss</h5>
            <p>A friendly forest guardian.</p>

            <button
                class="btn btn-primary"
                onclick="alert('Demo only. No data saved.')">
                Add to Collection
            </button>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Byte</h5>
            <p>A creative digital inventor.</p>

            <button
                class="btn btn-primary"
                onclick="alert('Demo only. No data saved.')">
                Add to Collection
            </button>
        </div>
    </div>

</div>

@endsection