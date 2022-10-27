@extends('layouts.app')

@section('title', 'Detail | Rent.me')
@section('stylesheet')
    <link rel="stylesheet" href={{ asset('css/detail.css') }}>
@endsection

<div class="container-fluid">
    <div class="picRow">
        <div>
            <img src="/img/seminarRoom1.png" alt="">
        </div>

        <div class="tanggal">
            <img src="/img/Calendar.png" alt="">
            <div class="availableDataIndicator">
                <img src="/img/availableDataIndicator.svg" alt="">
                <p>Occupied Building</p>
            </div>
        </div>
    </div>
    <div class="detailGedung">
        <h1>Building Details</h1>
        <div class="detailGedungDesc">
            <form action="/keranjang/update/{{ $buildingData[0]->id }}" method="post">
                @csrf
                <table style="width:100%;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{ $buildingData[0]->name }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>{{ $buildingData[0]->address }}</td>
                        </tr>
                        <tr>
                            <td>Area</td>
                            <td>:</td>
                            <td>{{ $buildingData[0]->area }} m2</td>
                        </tr>
                        <tr>
                            <td>Capacity</td>
                            <td>:</td>
                            <td>2000 people</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>:</td>
                            <td><input type="date" name="start_time" required></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td>Rp {{ $buildingData[0]->price }}/day</td>
                        </tr>
                        <tr class="bookRow">
                            <td></td>
                            <td></td>
                            <td colspan="3">
                                <div class="bookButton">
                                    {{-- <button type="submit" id="backButton">Back</button> --}}
                                    <button type="submit" id="bookingButton">Update</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>


        </div>
    </div>

</div>
