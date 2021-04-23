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
                            <!--begin::List Widget 10-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <div style="background-image: url(<?=$post->avatar ? "/upload/".$post->avatar : "/media/users/default.jpg"?>); background-position:center;background-size:cover;" class="img_for_posts" ></div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <a href="/profile/<?=$post->user_id?>" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{ $post->name }}</a>
                                                <span class="text-muted font-weight-bold">{{ $post->created_at_string }}</span>
                                                <span class="text-muted">{{ $post->description }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Card Body-->
                            </div>

                             <div class="card card-custom gutter-b">
                                <div class="card-body" id="post_bodies">
                                </div>
                            </div>

                            <!--end: Card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <form class="form" id="form_post_thread">
                                        <div class="row">
                                            <div class="form-group col">
                                                <textarea class="form-control" name="comment" placeholder="What's in your mind?"></textarea>
                                                <span class="form-text text-muted"></span>
                                                <button class="btn btn-primary" style="margin-top:4px;float:right;" type="submit" id="form_post_thread_submit_button">Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

<div class="modal fade" id="model_edit_comment" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <form class="form" id="form_comment_edit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="form-group col">
                                <textarea class="form-control" name="comment_edit" placeholder="What's in your mind?"></textarea>
                                <input type="hidden" name="comment_id" />
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold"  id="form_comment_edit_submit_button">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section("scripts")
<script>
    FormValidation.formValidation(
        document.getElementById('form_post_thread'),
        {
            fields: {
                comment: {
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
        var $submit_btn = $("#form_post_thread_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/post/thread/create/<?=$post->id?>",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                comment: $("[name='comment']").val(),
            },
            success: function(){
                toastr.success("Commented!");
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
        document.getElementById('form_comment_edit'),
        {
            fields: {
                comment_edit: {
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
        var $submit_btn = $("form_comment_edit_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/comment/edit",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                comment_edit: $("[name='comment_edit']").val(),
                comment_id: $("[name='comment_id']").val()
            },
            success: function(){
                toastr.success("Comment update!");
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

    jQuery(document).ready(function(){
        fetch_posts();
    });

    function fetch_posts(){
        $.ajax({
            url: "/post/threads/<?=$post->id?>", 
            success: function(response){
                post_body = $("#post_bodies");
                var append_posts = "";
                response.data.forEach((data, i) => {
                    append_posts += `
                        <div class="mb-6">
                            <div class="d-flex align-items-center flex-grow-1">
                                <div style="background-image: url('${data.avatar ? "/upload/"+data.avatar : "/media/users/default.jpg"}'); background-position:center;background-size:cover;" class="img_for_posts" ></div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                    <div class="d-flex flex-column align-items-cente py-2 w-75">
                                        <a href="/profile/${data.user_id}" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">${data.name}</a>
                                        <span class="text-muted font-weight-bold">${data.created_at_string}</span>
                                        <span class="text-muted">${data.description}</span>
                                    </div>
                                    `+(
                                        data.can_edit ? (
                                        `
                                            <button class="btn btn-outline-primary btn-sm" onclick="editComment(${data.id}, '${data.description}')">Edit</button>
                                            <button class="btn btn-outline-danger btn-sm" onclick="deleteComment(${data.id})">Delete</button>
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

    function editComment(id, description){
        var modal = $("#model_edit_comment");
        modal.find("[name=comment_edit]").val(description);
        modal.find("[name=comment_id]").val(id);

        setTimeout(() => {
            modal.modal("show");
        }, 500);
    }

    function deleteComment(id){
        swal.fire({
            title: "You're deleting your comment...",
            text: "Are you sure to delete your comment? You can't undo this action...",
            type: "danger"
        }).then(()=>{
            $.ajax({
                url: '/comment/delete', 
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    comment_id: id,
                },
                success: function(html){
                    swal.fire({
                        title: 'Comment successfully removed !',
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
@endsection