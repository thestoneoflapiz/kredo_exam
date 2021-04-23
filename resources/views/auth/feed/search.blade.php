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
                        <div class="col-12">
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <h3 class="card-title font-weight-bolder text-dark">Posts</h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body" id="post_bodies">
                                @foreach($posts as $post)
                                <div class="mb-6">
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <div style="background-image: url(<?=$post->avatar ? "/upload/".$post->avatar : "/media/users/default.jpg"?>); background-position:center;background-size:cover;" class="img_for_posts" ></div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <a href="/profile/${data.user_id}" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{ $post->name }}</a>
                                                <span class="text-muted font-weight-bold">{{ $post->created_at_string }}</span>
                                                <span class="text-muted">{{ $post->description }}</span>
                                                <span class="text-muted"><a href="/post/view/{{ $post->id }}">View Thread</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!--end: Card Body-->
                            </div>
                        </div>
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