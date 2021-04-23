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
            url: "/following/posts", 
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
@endsection