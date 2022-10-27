@extends('layouts.app')

@section('title', 'Dashboard | Rent')

@section('stylesheet')
    <link rel="stylesheet" href={{ asset('css/dashboard.css') }}>
@endsection

@section('content')

    <body>
        <div class="container">
            <div class="searchRoom">
                <img src="/img/searchBuilding.png" id="searchImage" alt="">
                <div class="searchDesc">
                    <h1>LET'S FIND <span>THE BUILDING</span> YOU NEED.</h1>
                    <div class="searchForm">
                        <img src="img/search.svg" alt="">
                        <input type="text" placeholder="Mau gedung seperti apa?">
                        <button type="submit">search</button>
                    </div>
                </div>
            </div>
            <h2>Pilihan Gedung</h2>

            <div class="roomCol">
                <h3>Seminar Room</h3>
                <div class="roomRow">
                    @foreach ($seminarBuilding as $data)
                        <div class="room">
                            <img src="/img/{{ $data->image }}" alt="">
                            <div class="roomDesc">
                                <div>
                                    <h4>{{ $data->name }}</h4>
                                    <h5>See Details!</h5>
                                </div>
                                <img src="/img/Arrow.png" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="roomCol">
                <h3>Theater Room</h3>
                <div class="roomRow">
                    @foreach ($theaterBuilding as $data)
                        <div class="room">
                            <img src="/img/{{ $data->image }}" alt="">
                            <div class="roomDesc">
                                <div>
                                    <h4>{{ $data->name }}</h4>
                                    <h5>See Details!</h5>
                                </div>
                                <img src="/img/Arrow.png" alt="">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </body>
@endsection
