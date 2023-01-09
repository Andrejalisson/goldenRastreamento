@extends('admin.templates.adm')

@section('css')

@endsection

@section('corpo')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card mb-5 mb-xxl-10">
            <div class="card-header">
                <div class="card-title">
                    <h3>Banners</h3>
                </div>
            </div>
            <div class="card-body py-10">
                <div class="row mb-10">
                    <div class="col-md-12">
                        <div id="kt_carousel_1_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <span class="fs-4 fw-bold pe-2">Title</span>
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                                    <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                                    <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="1" class="ms-1"></li>
                                    <li data-bs-target="#kt_carousel_1_carousel" data-bs-slide-to="2" class="ms-1"></li>
                                </ol>
                            </div>
                            <div class="carousel-inner pt-8">
                                <div class="carousel-item active">
                                    1
                                </div>

                                <div class="carousel-item">
                                    2
                                </div>

                                <div class="carousel-item">
                                    3
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection

@section('script')

@endsection




