@extends('layouts.app')

@section('title', 'Dashboard | Rent.me')

@section('stylesheet')
    <link rel="stylesheet" href={{ asset('css/keranjang.css') }}>
@endsection
@section('content')
<div class="container">
    <div class="keranjangBelanja">
        <h1>Keranjang Belanja</h1>
        <table>
            <thead>
                <tr>
                    <td class="noItem">No</td>
                    <td class="namaItem">Nama</td>
                    <td class="hargaItem">Harga</td>
                    <td class="aksiItem">Aksi</td>
                </tr>

            </thead>

            <tbody>
                @foreach ($rentData as $data)
                    <tr>
                        <td class="noItem">1</td>
                        <td class="namaItem">{{$data->name}}</td>
                        <td class="hargaItem">Rp {{$data->total_price}}</td>
                        <td class="aksiItem">
                            <a><img src="/img/Edit.svg" alt=""></a>
                            <a href="/keranjang/delete/{{$data->id}}"><img src="/img/Delete.svg" alt=""></a>
                        </td>
                    </tr>
                @endforeach
                <tr id="totalPrice">
                    <td colspan="3" id="totalText">Total</td>
                    <td id="totalNumber" colspan="2">Rp. 690.000.000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        <div class="contact">
            <p>Rent<span>Me</span></p>
            <h5>Comfortable rooms, safe facilities, we are the solution
            </h5>
            <div class="socialMedia">
                <img src="./img/Facebook.png" alt="">
                <img src="./img/Instagram.png" alt="">
                <img src="./img/Twitter.png" alt="">
                <img src="./img/Linkedin.png" alt="">
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>
                        <h5>Company</h5>
                    </th>
                    <th>
                        <h5>Company Links</h5>
                    </th>
                    <th>
                        <h5>Legal</h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h5>About</h5>
                    </td>
                    <td>
                        <h5>Share Location</h5>
                    </td>
                    <td>
                        <h5>Terms & Condition</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Contact Us</h5>
                    </td>
                    <td>
                        <h5>FAQs</h5>
                    </td>
                    <td>
                        <h5>Privacy Policy</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Support</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Careers</h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </footer>

</div>
@endsection