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
                    <h3 class="font-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                </div>
            </div>
            <div class="empty-space--xxxs"></div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card card-custom card-stretch overflow-hidden">
                        <div class="card-body p-0 d-flex rounded">
                            <div class="py-18 px-12">
                                <h3 class="font-size-h1">
                                    <a href="#" class="text-dark font-weight-bolder">{{ $page["title"] }}</br>Special</a>
                                </h3>
                                <div class="font-size-h4 text-success">Lorem ipsum dolor sit amet</div>
                            </div>
                            <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover" style="transform: scale(1.5) rotate(-26deg); background-image: url(<?=asset("media/products/22.png")?>)"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-body d-flex p-0">
                            <div class="flex-grow-1 p-12 card-rounded bgi-no-repeat d-flex flex-column justify-content-center align-items-start" style="background-position: right bottom; background-size: auto 100%; background-image: url(<?=asset("media/svg/humans/custom-8.svg")?>)">
                                <h4 class="text-danger font-weight-bolder m-0">Lorem ipsum dolor sit amet</h4>
                                <p class="text-dark-50 my-5 font-size-xl font-weight-bold">Lorem ipsum dolor sit amet, <br/>consectetur adipiscing elit, sed do <br/>eiusmod temporincididunt ut labore.</p>
                                <a href="#" class="btn btn-danger font-weight-bold py-2 px-6">Schedule Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-space--xxxs"></div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                            <div class="empty-space--xxxs"></div>
                            <ul class="ul-arrows">
                                <li>
                                    Ut enim ad minima veniam sed do eiusmod tempor incididunt ut
                                </li>
                                <li>
                                    Veniam sed do eiusmod tempor incididunt ut
                                </li>
                                <li>
                                    Ut enim ad minima veniam sed do eiusmod tempor incididunt ut
                                </li>
                                <li>
                                    Ad minima veniam sed do eiusmod tempor incididunt ut sed do eiusmod tempor incididunt ut
                                </li>
                                <li>
                                    Ut enim ad minima veniam
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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