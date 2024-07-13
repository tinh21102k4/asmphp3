@extends('client.layout')
@section('content')
    <main>
        <div class="my_account">
            <div class="category_account">
                <ul class="li"><a href="{{ route('profiles', ['email' => Auth::user()->email]) }}">Thông tin tài khoản</a>
                </ul>
                <ul class="li"><a href="{{ route('pass.user') }}">Đổi Mật Khẩu</a></ul>
                <ul class="li"><a href="{{ route('user.order') }}">Đơn hàng</a></ul>
            </div>
            <div class="content_account">
                <h3>{{ $title }}</h3>
                <div>
                    <small>Người nhận: {{ $order->name }}</small> <br>
                    <small>Email: {{ $order->email }}</small><br>
                    <small>Só điện thoại: {{ $order->phone }}</small><br>
                    <small>Địa chỉ: {{ $order->address }}</small><br>
                    <small>Ngày đặt hàng: {{ $order->date_order }}</small>


                </div>
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Tổng</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $data)
                                <tr class="">
                                    <td scope="row">{{ $data->name_product }}</td>
                                    <td><img width="80" height="80" src="{{ asset('storage/img/' . $data->img) }}"
                                            alt=""></td>
                                    <td>{{ $data->name_cate }}</td>
                                    <td>
                                        {{ $data->quantity }}
                                    </td>
                                    <td>
                                        {{ number_format($data->price, '0', '.', '.') }} VNĐ
                                    </td>
                                    <td>
                                        {{ number_format($data->total, '0', '.', '.') }} VNĐ
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        </div>
    </main>
@endsection
