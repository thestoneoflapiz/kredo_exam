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
                                                    <div class="image-input-wrapper" style="background-image: url(<?=$user->avatar ? asset("/upload/$user->avatar") : asset("media/users/default.jpg")?>)"></div>
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
                                                    <div class="image-input-wrapper" style="background-image: url(<?=$user->avatar ? asset("/upload/$user->avatar"): asset("media/users/default.jpg")?>)"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <h4 class="font-weight-bold my-2">{{ $user->name }}</h4>
                                        <div class="text-muted mb-2">{{ $user->email }}</div>

                                        <div class="text-muted mb-2">Followers: {{ $followers ?? 0 }} | Following: {{ $following ?? 0 }}</div>

                                        @if($user->birthday)
                                        <div class="text-muted mb-2">{{ date("F d, Y", strtotime($user->birthday)) }}</div>
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
                                        @if($is_a_follower)
                                        <a href="/unfollow/<?=$user->id?>" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Following</a>
                                        @else
                                        <a href="/follow/<?=$user->id?>" class="btn btn-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Follow</a>
                                        @endif
                                    @endif
                                    <!--end::Nav-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-lg-8 col-sm-8 col-12">
                            @if(Auth::id()==$user->id)
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
                            @endif
                            <!--begin::List Widget 10-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header">
                                    <h3 class="card-title font-weight-bolder text-dark">Posts</h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body" id="post_bodies">
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
<!-- Modal-->
<div class="modal fade" id="modal_edit_post" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <form class="form" id="form_post_edit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="form-group col">
                                <textarea class="form-control" name="post_edit_description" placeholder="What's in your mind?"></textarea>
                                <input type="hidden" name="post_edit_id" />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold"  id="form_post_edit_submit_button">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section("scripts")

@if(Auth::id()==$user->id)
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
                    location.reload();
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

    FormValidation.formValidation(
        document.getElementById('form_post_edit'),
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
        var $submit_btn = $("form_post_edit_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/post/edit",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                post_description: $("[name='post_edit_description']").val(),
                post_id: $("[name='post_edit_id']").val()
            },
            success: function(){
                toastr.success("Posted update!");
                setTimeout(() => {
                    location.reload();
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

    var KTImageInputDemo = function () {
        // Private functions
        var initDemos = function () {
            // Example 1
            var avatar1 = new KTImageInput('kt_image_1');
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

        fetch_posts();

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
                location.reload();
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

    function fetch_posts(){
        $.ajax({
            url: "/posts/<?=Auth::id()?>", 
            success: function(response){

                post_body = $("#post_bodies");
                var append_posts = "";
                response.data.forEach((data, i) => {
                    append_posts += `
                        <div class="mb-6">
                            <div class="d-flex align-items-center flex-grow-1">
                                <div style="background-image: url(${data.avatar ? "/upload/"+data.avatar : "/media/users/default.jpg"}); background-position:center;background-size:cover;" class="img_for_posts" ></div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                    <div class="d-flex flex-column align-items-cente py-2 w-75">
                                        <a href="/profile/${data.user_id}" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">${data.name}</a>
                                        <span class="text-muted font-weight-bold">${data.created_at_string}</span>
                                        <span class="text-muted">${data.description}</span>
                                        <span class="text-muted"><a href="/post/view/${data.id}">View Thread</a></span>
                                    </div>
                                    `+(
                                        response.can_edit ? (
                                        `
                                            <button class="btn btn-outline-primary btn-sm" onclick="editPost(${data.id}, '${data.description}')">Edit</button>
                                            <button class="btn btn-outline-danger btn-sm" onclick="deletePost(${data.id})">Delete</button>
                                        `
                                        ) : ""
                                    )+`
                                    
                                </div>
                            </div>
                        </div>
                    `;
                });

                post_body.append(append_posts);
            }
        });
    }

    function editPost(id, description){
        var modal = $("#modal_edit_post");
        modal.find("[name=post_edit_description]").val(description);
        modal.find("[name=post_edit_id]").val(id);

        setTimeout(() => {
            modal.modal("show");
        }, 500);
    }

    function deletePost(id){
        swal.fire({
            title: "You're deleting your post...",
            text: "Are you sure to delete your post? You can't undo this action...",
            type: "danger"
        }).then(()=>{
            $.ajax({
                url: '/post/delete', 
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    post_id: id,
                },
                success: function(html){
                    swal.fire({
                        title: 'Post successfully removed !',
                        type: 'success',
                        buttonsStyling: false,
                        confirmButtonText: 'Got it!',
                        confirmButtonClass: 'btn btn-primary font-weight-bold'
                    }).then(()=>{
                        location.reload();
                    });
                }
            });
        });
    }

</script>
@else
<script>
    jQuery(document).ready(function(){
        fetch_posts();
    });

    function fetch_posts(){
        $.ajax({
            url: "/posts/<?=$user->id?>", 
            success: function(response){

                post_body = $("#post_bodies");
                var append_posts = "";
                response.data.forEach((data, i) => {
                    append_posts += `
                        <div class="mb-6">
                            <div class="d-flex align-items-center flex-grow-1">
                                <div style="background-image: url(${data.avatar ? "/upload/"+data.avatar : "/media/users/default.jpg"}); background-position:center;background-size:cover;" class="img_for_posts" ></div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                    <div class="d-flex flex-column align-items-cente py-2 w-75">
                                        <a href="/profile/${data.user_id}" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">${data.name}</a>
                                        <span class="text-muted font-weight-bold">${data.created_at_string}</span>
                                        <span class="text-muted">${data.description}</span>
                                        <span class="text-muted"><a href="/post/view/${data.id}">View Thread</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

                post_body.append(append_posts);
            }
        });
    }
</script>
@endif



@endsection