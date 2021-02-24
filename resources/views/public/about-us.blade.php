@extends("template.master.public")

@section("styles")
<style>
    .background-image--full{
        background-color: #fff;
        background-image: url("{{ asset('media/stock-900x600/34.jpg') }}");
        background-size: cover;
        background-position: center;
        height: 350px;
    }
</style>
@endsection

@section("content")
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    {{-- @include("template.header.public.sub-header") --}}
    <div class="empty-space--xxs"></div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom background-image--full"></div>
                </div>
            </div>
            <!--end::Row-->
            <div class="empty-space--xxxs"></div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-7 col-md-7 col-sm-12">
                    <div class="card card-custom card-fit card-border">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Our Story <br/>
                                    <small>Lorem Ipsum is simply dummy text</small>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                            The standard Lorem Ipsum passage, used since the 1500s
                            <br/>
                            </br>
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 col-sm-12">
                    <div class="card card-custom card-fit card-border">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Services <br/>
                                    <small>Lorem Ipsum is simply dummy text</small>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
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
                                    <a href="/services/example5" class="text-dark-75 font-weight-bolder font-size-lg text-hover-primary mb-1">Cup &amp; Green</a>
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
                                    <div class="symbol-label" style="background-image: url(<?=asset("media/stock-600x400/img-19.jpg")?>)"></div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <!--begin::Title-->
                                    <a href="/services/example6" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Yellow Background</a>
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
                                    <a href="/services/example7" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Nike &amp; Blue</a>
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
                                    <a href="/services/example8" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Red Boots</a>
                                    <!--end::Title-->
                                    <!--begin::Desc-->
                                    <span class="text-dark-50 font-weight-normal font-size-sm">Have long term business objectives. You should think about those long term business</span>
                                    <!--begin::Desc-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <div class="empty-space--xxxs"></div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom card-fit card-border">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Management Team
                                </h3>
                            </div>
                        </div>
                        <div class="card-body pt-1">
                            <div class="user-div">
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Pic-->
                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                        <div class="symbol symbol-lg-75">
                                            <img alt="Pic" src="{{ asset('media/users/300_1.jpg') }}">
                                        </div>
                                        <div class="symbol symbol-lg-75 symbol-primary d-none">
                                            <span class="font-size-h3 font-weight-boldest">JM</span>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Luca Doncic</a>
                                        <span class="text-muted font-weight-bold">Head of Development</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </p>
                            </div>
                            <div class="user-div">
                                <div class="d-flex align-items-center mb-7">
                                    <!--begin::Pic-->
                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                        <div class="symbol symbol-lg-75">
                                            <img alt="Pic" src="{{ asset('media/users/300_2.jpg') }}">
                                        </div>
                                        <div class="symbol symbol-lg-75 symbol-primary d-none">
                                            <span class="font-size-h3 font-weight-boldest">CM</span>
                                        </div>
                                    </div>
                                    <!--end::Pic-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
                                        <span class="text-muted font-weight-bold">CEO</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <div class="empty-space--xxxs"></div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch" style="background-image: url({{ asset('media/stock-600x600/img-16.jpg') }})">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column align-items-start justify-content-start">
                            <div class="p-1 flex-grow-1">
                                <h3 class="text-white font-weight-bolder line-height-lg mb-5">
                                    Lorem ipsum dolor<br/>
                                    <small>Lorem ipsum dolor sit amet</small>
                                </h3>
                            </div>
                            <a href='/contact-us' class="btn btn-link btn-link-warning font-weight-bold">Contact Us
                            <span class="svg-icon svg-icon-lg svg-icon-warning">
                                <!--begin::Svg Icon |  media/svg/icons/Navigation/Arrow-right.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span></a>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
            </div>
            <!--end::Row-->
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