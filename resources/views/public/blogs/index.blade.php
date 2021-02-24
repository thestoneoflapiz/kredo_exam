@extends("template.master.public")

@section("styles")
<style>
</style>
@endsection

@section("content")
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    @include("template.header.public.sub-header")
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                </div>
            </div>
            <div class="empty-space--xxxs"></div>
            <div class="row">
                <div class="col-xl-5 col-sm-12">
                    <!--begin::List Widget 18-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bold font-size-h4 text-dark-75">Latest Blogs</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Last week
                                <span class="text-primary font-weight-bolder">9 Blogs</span></span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark">
                                    <li class="nav-item ml-0">
                                        <a class="nav-link py-2 px-4 font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_pane_1_1">Year</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_pane_2_2">Month</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-1">
                            <div class="tab-content mt-5" id="myTabLIist18">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_1_1" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
                                    <!--begin::Form-->
                                    <div class="form">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-25.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Nike &amp; Blue</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Your website will have long term business should think about those term business</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-24.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Red Boots</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Have long term business objectives. You should think about those long term business</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-20.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder font-size-lg text-hover-primary mb-1">Cup &amp; Green</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Your company your website have long term business objectives. You should think about</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-19.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Yellow Background</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Your company will have long term business objectives You should think about those long</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
                                    <!--begin::Form-->
                                    <div class="form">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-20.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder font-size-lg text-hover-primary mb-1">Cup &amp; Green</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Your company your website have long term business objectives. You should think about</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url('<?=asset("media/stock-600x400/img-19.jpg")?>')"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Yellow Background</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Your company will have long term business objectives You should think about those long</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-9">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-25.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Nike &amp; Blue</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Your website will have long term business should think about those term business</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center pb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                                                <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-24.jpg")?>)"></div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Red Boots</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-dark-50 font-weight-normal font-size-sm">Have long term business objectives. You should think about those long term business</span>
                                                <!--begin::Desc-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 18-->
                </div>
                <div class="col-xl-7 col-sm-12">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="font-weight-bolder text-dark">Recent Blogs</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 visitors</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-6 mt-3">
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Content-->
                                    <div class="timeline-content d-flex">
                                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Lorem Ipsum Dolore</div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New article placed
                                    <a href="#" class="text-primary">#XF-2356</a>.</div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-info icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item align-items-start">
                                    <!--begin::Label-->
                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New article placed
                                    <a href="#" class="text-primary">#XF-2356</a>.</div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 9-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@section("scripts")
<script>
</script>
@endsection