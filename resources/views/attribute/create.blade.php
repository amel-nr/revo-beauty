@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-lg-offset-3">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Informasi Atribut Produk')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('attributes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Nama')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Simpan')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
