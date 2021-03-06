@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="20%">{{__('Nama')}}</th>
                                {{--<th>{{__('Product Owner')}}</th>--}}
                                <th>{{__('Terjual')}}</th>
                                <th>{{__('Harga')}}</th>
                                <th>{{__('Rating')}}</th>
                                <th>{{__('Poin')}}</th>
                                <th>{{__('Opsi')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ ($key+1) + ($products->currentPage() - 1)*$products->perPage() }}</td>
                                    <td>
                                        <a href="{{ route('product', $product->slug) }}" target="_blank" class="media-block">
                                            <div class="media-left">
                                                <img loading="lazy"  class="img-md" src="{{ asset($product->thumbnail_img)}}" alt="Image">
                                            </div>
                                            <div class="media-body">{{ __($product->name) }}</div>
                                        </a>
                                    </td>
                                    {{--<td>
                                    @if ($product->user != null)
                                        {{ $product->user->name }}
                                    @endif
                                    </td>--}}
                                    <td>
                                        @php
                                            $qty = 0;
                                            if($product->variant_product){
                                                foreach ($product->stocks as $key => $stock) {
                                                    $qty += $stock->qty;
                                                }
                                            }
                                            else{
                                                $qty = $product->current_stock;
                                            }
                                            echo $qty;
                                        @endphp
                                    </td>
                                    <td>{{ number_format($product->unit_price,0,0,".") }}</td>
                                    <td>{{ $product->rating }}</td>
                                    <td>{{ $product->earn_point }}</td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                {{__('Aksi')}} <i class="dropdown-caret"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{route('product_club_point.edit', encrypt($product->id))}}">{{__('Ubah')}}</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="pull-right">
                            {{ $products->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">{{__('Tetapkan Poin untuk Produk')}}</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <small>Tetapkan poin spesifik untuk produk tersebut di antara 'Harga Minimal' dan 'Harga Maksimal'. Harga Minimal harus kurang dari Harga Maksimal</small>
                    </div>
                    <form class="form-horizontal" action="{{ route('set_products_point.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="col-lg-6">
                                <label>{{__('Tetapkan Poin untuk Beberapa Produk')}}</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="number" min="0" step="0.01" class="form-control" name="point" placeholder="100" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6">
                                <label>{{__('Harga Minimal')}}</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="number" min="0" step="0.01" class="form-control" name="min_price" value="{{ \App\Product::min('unit_price') }}" placeholder="50" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6">
                                <label>{{__('Harga Maksimal')}}</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="number" min="0" step="0.01" class="form-control" name="max_price" value="{{ \App\Product::max('unit_price') }}" placeholder="110" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 text-right">
                                <button class="btn btn-purple" type="submit">{{__('Simpan')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
