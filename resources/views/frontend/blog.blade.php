@extends('frontend.layouts.app')

@section('content')

@include('frontend.inc.blog_header')
<div class="row">
    <div class="col-lg-8 col-12">
        <div class="content-blog">
            <div class="d-flex align-items-center">
                <div class="img-thumbnail mr-3">
                    <img src="{{ asset('frontend/images/placeholder.jpg') }}" alt="" style="height: 260px; width: 280px;">
                </div>
                <div class="deskripsi">
                    <p class="font-weight-bold">Kegunaan Retinol</p>
                    <span>Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since
                        the 1500s, when an unknown printer took a galley
                        of type and scrambled it to baca selengkapnya...</span>
                    <div class="date mt-2">
                        <table>
                            <tr>
                                <th class="w-100">Ofeelia Parveen in Basic Skincare</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Aug 28 <span>• 5 min read</span></td>
                                <td><a href=""><i class="fa fa-bookmark mr-3"></i></a></td>
                                <td><a href=""><i class="fa fa-ellipsis-h"></i></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 border-left">
        <h3>Popular di Revo Beauty</h3>
        <table>
            <tr>
                <td class="text-muted" style="font-size: 40px;">01</td>
                <td class="px-1 px-lg-3">Antioxidant</td>
            </tr>
            <tr>
                <td></td>
                <td class="px-1 px-lg-3">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since
                    the 1500s, when an unknown printer took a galley
                    of type and scrambled it to baca selengkapnya...</td>
            </tr>
        </table>
    </div>
</div>
@include('frontend.inc.blog_footer')
            
@endsection