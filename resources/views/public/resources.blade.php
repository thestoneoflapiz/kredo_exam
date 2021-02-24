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
                    <p class="font-white">Below are a list of documents and useful web links for both clients and employees to utilise.</p>
                </div>
            </div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Documents <br/>
                                    <small>Lorem Ipsum is simply dummy text</small>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            <div class="empty-space--xxxs"></div>
                            <ul class="ul-arrows">
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ut enim ad minima veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ut enim ad minima veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ad minima veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ut enim ad minima veniam</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Links <br/>
                                    <small>Lorem Ipsum is simply dummy text</small>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
                            <div class="empty-space--xxxs"></div>
                            <ul class="ul-arrows">
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ut enim ad minima veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ut enim ad minima veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ad minima veniam</a>
                                </li>
                                <li>
                                    <a href="javascript:toastr.info('Link clicked!');">Ut enim ad minima veniam</a>
                                </li>
                            </ul>
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