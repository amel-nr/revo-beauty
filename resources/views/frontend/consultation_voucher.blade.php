@extends('frontend.layouts.app')

@section('style')
<style>
    .accordion .card a[aria-expanded="false"] .card-header h7 span i:before {
        content: "\f067"
    }

    .accordion .card a[aria-expanded="true"] .card-header h7 span i:before {
        content: "\f068"
    }

    .accordion .card a[aria-expanded="false"] .card-header h7{
        color: black !important;
    }

    .accordion .card a[aria-expanded="true"] .card-header h7{
        color: #f3795c !important;
    }

    .card-body {
        padding-top: 0;
        padding-bottom: 0;
    }

    #svg-container{
        position: relative;
        margin: 0;
        padding: 0;
        background: url('{{ asset('frontend/images/konsultasi.jpg') }}');
        background-size: cover;
        width: 100%;
        height: 45%;
    }

    #svg-con{
        background-color: rgba(250, 202, 195, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #curve{
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    #curve path{
        fill: #fcf8f0;
    }

    .btn-konsultasi:hover{
        background-color: #f25735 !important;
    }
</style>
@endsection

@section('content')
<section style="background-color: #fcf8f0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 150vh; z-index: 0;">
        <div id="svg-container">
            <div id="svg-con">
                <svg
                    id="curve"
                    xmlns:svg="http://www.w3.org/2000/svg"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 297 30.43">
                    <g
                        transform="translate(0,-79.112)">
                        <path
                        d="M 98.738183,79.112317 C 85.904796,79.135124 41.069016,86.142311 2.6350033e-5,93.975492 V 109.54199 H 296.99997 V 83.611784 C 203.28059,113.423 165.34737,78.993943 98.738183,79.112317 Z"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="container" style="position: relative;">
        <h1 class="text-center pt-5">Hi Friends,</h1>
        <p class="text-center pt-3 pb-5" style="font-size: 36px; font-weight: 500; line-height: 2rem;">Yuk, konsultasi sekarang</p>
        @for($i=1; $i<=2; $i++)
        <div class="row pb-5">
            <div class="col-8 mx-auto">
                <div class="row p-4 rounded" style="background-color: white;">
                    <div class="col-md-9 col-12 text-md-left text-center">
                        <p class="heading-3 font-weight-bold" style="line-height: 2rem;"><img src="{{ asset('frontend/images/doctor.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" style="height: 50px;"> VOUCHER KONSULTASI</p>
                        <p class="mb-1" style="font-size: 16px; font-weight: 600;">90 menit</p>
                        <p class="mb-0" style="font-size: 18px;">exp. 22 Juni 2023</p>
                    </div>
                    <div class="col-md-3 col-12 my-auto text-md-right text-center py-3">
                        <a name="" id="" class="btn btn-danger btn-konsultasi px-5" href="#" role="button" style="background-color: #f3795c; border-color: #f3795c; color: white; font-size: 18px; font-weight: 500; border-radius: 5px;">PAKAI</a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
        <div class="row pb-5">
            <div class="col-8 mx-auto">
                <div class="row p-4 rounded" style="background-color: white;">
                    <div class="col-12 text-center py-5">
                        <p class="mb-0" style="font-size: 26px; line-height: 2rem;">Ups, kamu belum punya voucher konsultasi</p>
                        <a name="" id="" class="btn btn-danger btn-konsultasi px-5 mt-5" href="{{ route('consultation_buy') }}" role="button" style="background-color: #f3795c; border-color: #f3795c; color: white; font-size: 18px; font-weight: 500; border-radius: 5px;">BELI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection