@php
    $blade_url = '';
    if (view()->exists('vendor.school_website')) {
    $blade_url = 'vendor.school_website';
    } else {
    $blade_url = 'school_website::';
    }
@endphp
@extends($blade_url.'website.layouts.master')
@section('style')
    <style>
        .img.align-self-stretch {
            background-image: url(http://localhost/edudesk_package/public/img/blankavatar.png);
        }
    </style>
@stop
@section('content')
    <section class="hero-wrap hero-wrap-2" style="">
        @php
            if(File::exists(public_path('/img/backend/page/'.$page->id.'.jpg'))){
                $image = env('PUBLIC_PATH').'/img/backend/page/'.$page->id.'.jpg';
            }else{
                $image = env('PUBLIC_PATH').'/img/backend/config/'.$config['tisibanner'];
            }
        @endphp
        <div class="overlay" style="background: url('{{$image}}');"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{$page->title}}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$page->title}}</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Basic</h3>
                            <p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/bg_1.jpg);"></div>
                        <div class="px-4">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Standard</h3>
                            <p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/bg_2.jpg);"></div>
                        <div class="px-4">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light active pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Premium</h3>
                            <p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/bg_3.jpg);"></div>
                        <div class="px-4">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Platinum</h3>
                            <p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/bg_5.jpg);"></div>
                        <div class="px-4">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
