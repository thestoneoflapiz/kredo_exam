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
                        <div class="col-lg-4 col-sm-4 col-12">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Body-->
                                <div class="card-body pt-15">
                                    <!--begin::User-->
                                    <div class="text-center mb-10">
                                        @if(Auth::id()==$user->id)
                                        <div class="form-group row">
                                            <div class="col">
                                                <div class="image-input image-input-outline" id="kt_image_1">
                                                    <div class="image-input-wrapper" style="background-image: url(<?=$user->avatar ? asset("media/users/300_21.jpg") : asset("media/users/default.jpg")?>)"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="form-group row">
                                            <div class="col">
                                                <div class="image-input image-input-outline">
                                                    <div class="image-input-wrapper" style="background-image: url(<?=$user->avatar ? asset("media/users/300_21.jpg") : asset("media/users/default.jpg")?>)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <h4 class="font-weight-bold my-2">{{ $user->name }}</h4>
                                        <div class="text-muted mb-2">{{ $user->email }}</div>

                                        <div class="text-muted mb-2">Followers: {{ $followers ?? 0 }} | Following: {{ $following ?? 0 }}</div>

                                        @if($user->birthday)
                                        <div class="text-muted mb-2">{{ $user->birthday }}</div>
                                        @endif

                                        @if($user->gender)
                                        <div class="text-muted mb-2">{{ $user->gender }}</div>
                                        @endif

                                        @if($user->location)
                                        <div class="text-muted mb-2">{{ $user->location }}</div>
                                        @endif

                                        @if($user->description)
                                        <div class="text-muted mb-2">{{ $user->description }}</div>
                                        @endif
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Nav-->
                                    @if(Auth::id()!=$user->id)
                                    <a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Follow / Followed</a>
                                    @endif
                                    <!--end::Nav-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-lg-8 col-sm-8 col-12">
                            <div class="card gutter-b">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <form class="form" id="form_post">
                                        <div class="row">
                                            <div class="form-group col">
                                                <textarea class="form-control" name="post_description" placeholder="What's in your mind?"></textarea>
                                                <span class="form-text text-muted"></span>
                                                <button class="btn btn-primary" style="margin-top:4px;float:right;" type="submit" id="form_post_submit_button">Post</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--begin::List Widget 10-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0">
                                    <h3 class="card-title font-weight-bolder text-dark">Posts</h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Daily Standup Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-primary label-inline font-weight-bold py-4">Approved</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Group Town Hall Meet-up with showcase</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Next sprint planning and estimations</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-success label-inline font-weight-bold py-4">Success</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-6">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sprint delivery and project deployment</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Rejected</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end: Item-->
                                    <!--begin: Item-->
                                    <div class="">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center flex-grow-1">
                                            <!--begin::Checkbox-->
                                            <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                                <input type="checkbox" value="1" />
                                                <span></span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Data analytics research showcase</a>
                                                    <!--end::Title-->
                                                    <!--begin::Data-->
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                    <!--end::Data-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Label-->
                                                <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end: Item-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end: Card-->
                            <!--end: List Widget 10-->
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
<script>
    FormValidation.formValidation(
        document.getElementById('form_post'),
        {
            fields: {
                post_description: {
                    validators: {
                        notEmpty: {
                            message: "Please tell us what's in your mind?"
                        },
                    }
                },
            },

            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                // Bootstrap Framework Integration
                bootstrap: new FormValidation.plugins.Bootstrap(),
                // Validate fields when clicking the Submit button
                submitButton: new FormValidation.plugins.SubmitButton(),
            }
        }
    ).on("core.form.invalid", function(){
        KTUtil.scrollTop();
    }).on("core.form.valid", function(){
        var $submit_btn = $("#form_post_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/post/create",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                post_description: $("[name='post_description']").val(),
            },
            success: function(){
                toastr.success("Posted update!");
                setTimeout(() => {
                    _refresh_posts_list();
                }, 1500);
            },
            error: function(err){
                toastr.error("Something went wrong! Please refresh your browser and try again...");
            },
            complete: function(){
                $submit_btn.removeClass("spinner spinner-white spinner-right").prop("disabled", false);
            }
        });
    });

    function _refresh_posts_list(){
        $.ajax({
            url: "/post/fetch_user_posts",
            data: { user_id: <?=$user->id ?? 0?> },
            success: function(){
                setTimeout(() => {
                    _refresh_posts_list();
                }, 1500);
            }
        });
    }

    var KTImageInputDemo = function () {
        // Private functions
        var initDemos = function () {
            // Example 1
            var avatar1 = new KTImageInput('kt_image_1');

            avatar1.on('remove', function(imageInput) {
                removeProfile();
                
            });
        }

        
        
        return {
            // public functions
            init: function() {
                initDemos();
            }
        };
    }();

    jQuery(document).ready(function(){
        KTImageInputDemo.init();

        $("[name='profile_avatar']").change(function(){
            var file = this.files[0];
            uploadProfile(file);
        });
    });

    function uploadProfile(file){
        var formData = new FormData();
        formData.append('file', file);
        formData.append('_token', "<?=csrf_token()?>");

        $.ajax({
            url: 'profile/upload', 
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(html){
                swal.fire({
                    title: 'Profile image successfully uploaded !',
                    type: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Got it!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            }
        });
    }

    function removeProfile(){
        $.ajax({
            url: 'profile/remove', 
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}"
            },
            contentType: false,
            processData: false,
            success: function(html){
                swal.fire({
                    title: 'Profile image successfully removed !',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: 'Got it!',
                    confirmButtonClass: 'btn btn-primary font-weight-bold'
                });
            }
        });
    }

</script>
@endsection