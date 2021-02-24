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
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-body d-flex p-0">
                            <div class="flex-grow-1 p-8 card-rounded bgi-no-repeat d-flex align-items-center" style="background-color: #FFF4DE; background-position: left bottom; background-size: auto 100%; background-image: url({{ asset('media/svg/humans/custom-2.svg') }})">
                                <div class="row">
                                    <div class="col-12 col-xl-5"></div>
                                    <div class="col-12 col-xl-7">
                                        <h4 class="text-danger font-weight-bolder">Inquire LOREM now to get 35% off</h4>
                                        <p class="text-dark-50 my-5 font-size-xl font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                        <a href="/services" class="btn btn-danger font-weight-bold py-2 px-6">See Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom card-border card-fit">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Philippines </h3>
                            </div>
                        </div>
                        <div class="card-body pt-1">
                            <div class="item-div">
                                <h1>Manila</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul class="ul-plain">
                                    <li>
                                        <i class="la la-map-marked upsize-icon font-dark"></i> &nbsp; 123 Blk, Lorem St. Amet Brgy, Manila, Metro Manila PH
                                    </li>
                                    <li>
                                        <i class="la la-mail-bulk upsize-icon font-dark"></i> &nbsp; loremipsum@email.com.ph
                                    </li>
                                    <li>
                                        <i class="la la-phone-alt upsize-icon font-dark"></i> &nbsp; +61 (2) 0000 000
                                    </li>
                                </ul>
                            </div>
                            <div class="empty-space--xxxs"></div>
                            <div class="item-div">
                                <h1>Makati</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul class="ul-plain">
                                    <li>
                                        <i class="la la-map-marked upsize-icon font-dark"></i> &nbsp; 123 Blk, Lorem St. Amet Brgy, Makati, Metro Manila PH
                                    </li>
                                    <li>
                                        <i class="la la-mail-bulk upsize-icon font-dark"></i> &nbsp; loremipsum@email.com.ph
                                    </li>
                                    <li>
                                        <i class="la la-phone-alt upsize-icon font-dark"></i> &nbsp; +61 (2) 0000 000
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <div class="empty-space--xxxs"></div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-custom card-border card-fit">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Australia </h3>
                            </div>
                        </div>
                        <div class="card-body pt-1">
                            <div class="item-div">
                                <h1>Sydney</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul class="ul-plain">
                                    <li>
                                        <i class="la la-map-marked upsize-icon font-dark"></i> &nbsp; 123 Blk, Lorem St. Amet Brgy, Manila, Metro Manila PH
                                    </li>
                                    <li>
                                        <i class="la la-mail-bulk upsize-icon font-dark"></i> &nbsp; loremipsum@email.com.ph
                                    </li>
                                    <li>
                                        <i class="la la-phone-alt upsize-icon font-dark"></i> &nbsp; +61 (2) 0000 000
                                    </li>
                                </ul>
                            </div>
                            <div class="empty-space--xxxs"></div>
                            <div class="item-div">
                                <h1>Melbourne</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul class="ul-plain">
                                    <li>
                                        <i class="la la-map-marked upsize-icon font-dark"></i> &nbsp; 123 Blk, Lorem St. Amet Brgy, Makati, Metro Manila PH
                                    </li>
                                    <li>
                                        <i class="la la-mail-bulk upsize-icon font-dark"></i> &nbsp; loremipsum@email.com.ph
                                    </li>
                                    <li>
                                        <i class="la la-phone-alt upsize-icon font-dark"></i> &nbsp; +61 (2) 0000 000
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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