@extends("template.master.public")

@section("styles")
<style>
    .kt-hidden{
        display: none;
    }
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
            <!--begin::Profile 2-->
            <div class="d-flex flex-row">
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Row-->
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-sm-4 col-6">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <div class="dropdown dropdown-inline">
                                            <a href="javascript:;" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                            <div class="symbol-label" style="background-image:url(<?=$user->avatar ? "/upload/{$user->avatar}" : "/media/users/default.jpg"?>)"></div>
                                        </div>
                                        <div>
                                            <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ $user->name }}</a>
                                            <div class="text-muted">{{ $user->email }}</div>
                                            <div class="mt-2">
                                                <a href="/profile/{{ $user->id }}" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Contact-->
                                    <div class="pt-8 pb-6">
                                        @if($user->birthday)
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Birthday:</span>
                                            <a href="#" class="text-muted text-hover-primary">{{ date("F d, Y", strtotime($user->birthday)) }}</a>
                                        </div>
                                        @endif

                                        @if($user->gender)
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Gender:</span>
                                            <a href="#" class="text-muted text-hover-primary">{{ $user->gender }}</a>
                                        </div>
                                        @endif

                                        @if($user->location)
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Location:</span>
                                            <a href="#" class="text-muted text-hover-primary">{{ $user->location }}</a>
                                        </div>
                                        @endif
                                    </div>
                                    <!--end::Contact-->
                                    <!--begin::Contact-->
                                    <div class="pb-6">{{ $user->description }}</div>
                                    <!--end::Contact-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        @endforeach
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile 2-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@section("scripts")
@endsection