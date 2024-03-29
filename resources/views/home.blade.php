@extends('layouts.site')
@section('title', 'Trang chủ')
@section('main')
    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1" style="background-image: url({{ url('public/site') }}/images/slide-04.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    THỜI TRANG NỮ 2022
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    NEW SEASON
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="#"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Xem ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url({{ url('public/site') }}/images/slide-2.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="slideInRight" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    PHONG CÁCH THỜI TRANG NAM MỚI
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInLeft" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    Jackets & Coats
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="#"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Đặt ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url({{ url('public/site') }}/images/slide-01.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="zoomInRight" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Women Collection 2022
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInRight" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    New arrivals
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="#"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Đặt ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                @foreach ($category as $item)
                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                        <!-- Block1 -->
                        <div class="block1 wrap-pic-w">
                            <img src="{{ url('public/uploads') }}/category/{{ $item->image }}" alt="IMG-BANNER">

                            <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug]) }}"
                                class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        {{ $item->name }}
                                    </span>

                                    <span class="block1-info stext-102 trans-04">
                                        Thời trang 2022
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Xem ngay
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Sản phẩm nổi bật
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Tất cả
                    </button>
                    @foreach ($category as $item)
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ $item->slug }}">
                            {{ $item->name }}
                        </button>
                    @endforeach

                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Lọc
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Tìm kiếm
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <form action="{{ route('home.search') }}" method="GET">
                    <div class="bor8 dis-flex p-l-15">
                        <button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search"
                            placeholder="Search">
                    </div>
                    </form>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sắp xếp theo:
                            </div>
                            <form >
                                @csrf
                                <div class="form-group col-8">

                                    <select name="sort" id="select_price" class="form-control mtext-102" id="exampleFormControlSelect1">
                                      <option value="{{ Request::url() }}?sort_by=none" {{ Request::collect()->first() == 'none' ? 'selected' : ''}} >Giá mặc định</option>
                                      <option value="{{ Request::url() }}?sort_by=desc" {{ Request::collect()->first() == 'desc' ? 'selected' : ''}}>Cao tới thấp</option>
                                      <option value="{{ Request::url() }}?sort_by=asc" {{ Request::collect()->first() == 'asc' ? 'selected' : ''}}>Thấp tới cao</option>
                                    </select>
                                  </div>

                            </form>

                        </div>
                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Màu sắc
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Black
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Blue
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                        <i class="zmdi zmdi-circle"></i>
                                    </span>

                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Grey
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                @foreach ($product as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $item->cat->slug }}">
                        <!-- Block2 -->
                        <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug]) }}">
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{ url('public/uploads') }}/product/{{ $item->image }}" alt="IMG-PRODUCT">

                                    <a href="{{ route('home.view', ['id' => $item->id, 'slug' => $item->slug]) }}"
                                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                        THÔNG TIN
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{ $item->name }}
                                        </a>

                                        <span class="stext-105 cl3">
                                            {{ number_format($item->price, 0, '', '.') . ' VND' }}
                                        </span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04"
                                                src="{{ url('public/site') }}/images/icons/icon-heart-01.png" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                src="{{ url('public/site') }}/images/icons/icon-heart-02.png" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Xem thêm
                </a>
            </div>
        </div>
    </section>

@endsection

