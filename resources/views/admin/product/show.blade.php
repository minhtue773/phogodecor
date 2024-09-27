@extends('admin.layout.app')
@section('title')
    {{ $product->name }}
@endsection
@section('content')
    <div class="container px-5">
        <section class="py-5">
            <div class="container">
                <a href="{{ route('product.index') }}" class="btn btn-warning mb-3"><i class="fa-solid fa-rotate-left me-2"></i>Quay lại</a>
                <div class="row gx-5">
                    <aside class="col-lg-6">
                        <div class="border rounded-4 mb-3 d-flex justify-content-center">
                            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{ asset('uploads') }}/{{ $product->image }}">
                                <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                    src="{{ asset('uploads') }}/{{ $product->image }}" />
                            </a>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            @if ($images_product->isNotEmpty())
                                @foreach ($images_product as $row)
                                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" class="item-thumb" href="{{ asset('uploads') }}/{{ $row->image }}">
                                        <img width="60" height="60" class="rounded-2"
                                            src="{{ asset('uploads') }}/{{ $row->image }}"/>
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </aside>
                    <div class="col-lg-6">
                        <div class="ps-lg-3">
                            <h4 class="title text-dark">
                                {{ $product->name }}
                            </h4>
                            <div class="d-flex flex-row my-3">
                                <div class="text-warning mb-1 me-2">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-1">
                                        4.5
                                    </span>
                                </div>
                                <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{ $product->stock }} orders</span>
                                <span class="text-success ms-2">In stock</span>
                            </div>
                            <div class="mb-3">
                                <span class="h5">{{ number_format($product->price,0,'.','.') }} VNĐ</span>
                            </div>
                            <div class="row">
                                <dt class="col-3">Type:</dt>
                                <dd class="col-9">Regular</dd>

                                <dt class="col-3">Color</dt>
                                <dd class="col-9">Brown</dd>

                                <dt class="col-3">Material</dt>
                                <dd class="col-9">Cotton, Jeans</dd>

                                <dt class="col-3">Brand</dt>
                                <dd class="col-9">Reebook</dd>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p style="text-align:justify;">{!! $product->description !!}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
