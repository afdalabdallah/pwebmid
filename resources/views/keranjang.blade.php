@extends('layouts.app')

@section('title', 'Cart | Rent.me')

@section('stylesheet')
    <link rel="stylesheet" href={{ asset('css/keranjang.css') }}>
@endsection
@section('content')
    <div class="container-fluid">
        {{-- Modal --}}
        @foreach ($rentData as $data)
            <div class="modal fade" id={{ $data->id }} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $data->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Would you like to delete</p>
                            <p>Rent {{ $data->name }}</p>
                            <p>At {{ $data->start_time }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"
                                onclick="event.preventDefault();
                            document.getElementById('delete-button').submit();">Yes</button>
                            <form id="delete-button" action="/keranjang/delete/{{ $data->id }}" method="POST">
                                @csrf

                            </form>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="keranjangBelanja">
            <h1>Your Cart</h1>
            <table>
                <thead>
                    <tr>
                        <td class="namaItem">Building Name</td>
                        <td class="hargaItem">Price</td>
                        <td class="aksiItem">Action</td>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($rentData as $data)
                        <tr>
                            <td class="namaItem">{{ $data->name }}</td>
                            <td class="hargaItem">Rp {{ $data->total_price }}</td>
                            <td class="aksiItem">
                                <a href="/keranjang/detail/{{ $data->id }}" class="action-button">
                                    <img width="45px" src="/img/detail.png" alt="">
                                </a>
                                <a href="/keranjang/update/{{ $data->building_id }}" class="action-button">
                                    <img width="45px" src="/img/edit.png" alt="">
                                </a>
                                <a class="action-button">
                                    <img data-toggle="modal" data-target="#{{ $data->id }}" data src="/img/Delete.svg"
                                        alt="">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tr id="totalPrice">
                        <td colspan="2" id="totalText">Total</td>
                        <td id="totalNumber" colspan="1">Rp {{ $totalPrice }}</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
@endsection
