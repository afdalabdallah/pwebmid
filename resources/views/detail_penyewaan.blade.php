@extends('layouts.app')
@section('title', 'Detail Rent | Rent.me')
@section('stylesheet')
    <link rel="stylesheet" href={{ asset('css/detail_penyewaan.css') }}>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="detailGedung">
            <h1>Rent Detail</h1>
            <div class="detailGedungDesc">
                <table>
                    <tbody>
                        <tr>
                            <td>Renter</td>
                            <td>:</td>
                            <td>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td>
                        </tr>
                        <tr>
                            <td>Building Name</td>
                            <td>:</td>
                            <td>{{ $rentDetail->name }}</td>
                        </tr>
                        <tr>
                            <td>
                                Address
                            </td>
                            <td>:</td>
                            <td>{{ $rentDetail->address }}</td>
                        </tr>
                        <tr>
                            <td>Area</td>
                            <td>:</td>
                            <td>{{ $rentDetail->area }} m2</td>
                        </tr>
                        <tr>
                            <td>Capacity</td>
                            <td>:</td>
                            <td>2000 Orang</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>:</td>
                            <td>{{ $rentDetail->start_time }}</td>
                        </tr>
                        <tr>
                            <td>Total Price</td>
                            <td>:</td>
                            <td>Rp {{ $rentDetail->price }}</td>
                        </tr>
                        <tr class="bookRow">
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <a href="/keranjang" style="width:20%;margin-top:20px;color:white" type="button"
                        class="btn btn-info">Back</a>
                </div>

            </div>
        </div>
    @endsection
