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
            <!--begin::Row-->
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <!--begin::Stats Widget 1-->
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(<?=asset("media/svg/shapes/abstract-4.svg")?>)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <a href="#" class="card-title font-weight-bold text-dark text-hover-primary font-size-h2">Cup & Green</a>
                            <div class="font-weight-bold text-success mt-9 mb-5">3:30PM - 4:20PM</div>
                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">Craft a headline that is informative
                            <br>and will capture readers</p>
                            <div class="empty-space--xxxs"></div>
                            <button class="btn btn-primary" onclick="window.location='/services/example1';" >READ MORE</button>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 1-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 2-->
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(<?=asset("media/svg/shapes/abstract-2.svg")?>)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <a href="#" class="card-title font-weight-bold text-dark text-hover-primary font-size-h2">Yellow Background</a>
                            <div class="font-weight-bold text-success mt-9 mb-5">03 May 2020</div>
                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">Great blog posts don’t just happen
                            <br>Even the best bloggers need it</p>
                            <div class="empty-space--xxxs"></div>
                            <button class="btn btn-primary" onclick="window.location='/services/example2';" >READ MORE</button>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 2-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 3-->
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(<?=asset("media/svg/shapes/abstract-1.svg")?>)">
                        <!--begin::body-->
                        <div class="card-body">
                            <a href="#" class="card-title font-weight-bold text-dark text-hover-primary font-size-h2">Shoes & Blue</a>
                            <div class="font-weight-bold text-success mt-9 mb-5">ReactJS</div>
                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">AirWays - A Front-end solution for
                            <br>airlines build with ReactJS</p>
                            <div class="empty-space--xxxs"></div>
                            <button class="btn btn-primary" onclick="window.location='/services/example3';" >READ MORE</button>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 3-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Stats Widget 3-->
                    <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(<?=asset("media/svg/shapes/abstract-3.svg")?>)">
                        <!--begin::body-->
                        <div class="card-body">
                            <a href="#" class="card-title font-weight-bold text-dark text-hover-primary font-size-h2">Red Boots</a>
                            <div class="font-weight-bold text-success mt-9 mb-5">ReactJS</div>
                            <p class="text-dark-75 font-weight-bolder font-size-h5 m-0">AirWays - A Front-end solution for
                            <br>airlines build with ReactJS</p>
                            <div class="empty-space--xxxs"></div>
                            <button class="btn btn-primary" onclick="window.location='/services/example4';" >READ MORE</button>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 3-->
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
                            <a href='/blogs' class="btn btn-link btn-link-warning font-weight-bold">View Blogs
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