<section style="background-color: #fcf8F0;">
    <div class="row" style="background-color: #FACAC3;">
        <div class="col-md-4 col-8 text-center py-5 mx-auto">
            <img src="{{ asset('frontend/images/blog/blog.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
    </div>
    <div style="background-color: #fcf8F0;">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="col-md-2 col-4 text-center pt-5" id="filter-all">
                        <a href="#">
                            <button class="btn  w-75 blog-filter" style="border-radius: 100px;">ALL</button>
                            
                        </a>
                    </div>
                    @php($categoryblog = App\categoryblog::all())

                    @foreach($categoryblog as $key => $value)
                    <div class="col-md-2 col-4 text-center pt-5 ">
                        <a href="#">
                            <button class="btn w-75 blog-filter" style="border-radius: 100px;"  id="title" data-id="{{$value->id}}" >{{strtoupper($value->title)}}</button>
                            
                        </a>
                    </div>
                    @endforeach
                    {{--<!-- <div class="col-2 text-center pt-5 blog-filter" style="cursor:pointer;">
                        <a href="#">
                            <img src="{{ asset('frontend/images/blog/skin-concern.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" style="height: 65px;">
                            <p class="pt-3 text-blog-filter" style="color: black; font-weight: bold; font-size: 17px;">SKIN CONCERN</p>
                        </a>
                    </div>
                    <div class="col-2 text-center pt-5 blog-filter" style="cursor:pointer;">
                        <a href="#">
                            <img src="{{ asset('frontend/images/blog/skincare-routine.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" style="height: 65px;">
                            <p class="pt-3 text-blog-filter" style="color: black; font-weight: bold; font-size: 17px;">SKINCARE ROUTINE</p>
                        </a>
                    </div>
                    <div class="col-2 text-center pt-5 blog-filter" style="cursor:pointer;">
                        <a href="#">
                            <img src="{{ asset('frontend/images/blog/mitos.png') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="" style="height: 65px;">
                            <p class="pt-3 text-blog-filter" style="color: black; font-weight: bold; font-size: 17px;">MITOS ATAU FAKTA</p>
                        </a>
                    </div> -->--}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center my-lg-5 my-3">
                <h1>Basic Skincare</h1>
                <h5>Karena semuanya berawal dari dasar</h5>
            </div>
