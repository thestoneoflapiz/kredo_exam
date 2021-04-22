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
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <form class="form" id="form_details">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Birthday</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="birthday" value="{{ $user->birthday }}"/>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Gender</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="gender" value="{{ $user->gender }}"/>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Location</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="location" value="{{ $user->location }}"/>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Description</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="description" value="{{ $user->description }}"/>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" id="form_details_submit_button" class="btn btn-primary font-weight-bold mr-2">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card card-custom gutter-b">
                        @if($user->email_verified_at==null)
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    <!-- Basic Card -->
                                    <small>Note: User email not verified! This account will not receive any email notification updates...</small>
                                </h3>
                            </div>
                        </div>
                        @endif
                        <div class="card-body">
                            <form class="form" id="form_email">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Email</label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly/>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" id="form_email_submit_button" class="btn btn-primary font-weight-bold mr-2">Change Email</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <form class="form" id="form_password">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Old Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" name="old_password" />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">New Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" name="new_password" />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-12">Confirm New Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" name="confirm_new_password" />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" id="form_password_submit_button" class="btn btn-primary font-weight-bold mr-2">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@section("scripts")
<script>

    jQuery(document).ready(function(){

        $("[name='birthday']").datepicker();
    });
    FormValidation.formValidation(
        document.getElementById('form_details'),
        {
            fields: {},
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
        var $submit_btn = $("#form_details_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/account/details",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                birthday: $("[name='birthday']").val(),
                gender: $("[name='gender']").val(),
                location: $("[name='location']").val(),
                description: $("[name='description']").val(),
            },
            success: function(){
                toastr.success("Details updated! Please check your inbox for verification.");
                setTimeout(() => {
                    location.reload();
                }, 1500);
            },
            error: function(err){
                $submit_btn.removeClass("spinner spinner-white spinner-right").prop("disabled", false);
                toastr.error("Something went wrong! Please refresh your browser and try again...");
            }
        });
    });

    FormValidation.formValidation(
        document.getElementById('form_email'),
        {
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        emailAddress: {
                            message: 'The value is not a valid email address'
                        }
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
        var $submit_btn = $("#form_email_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/account/email",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                email: $("[name='email']").val(),
            },
            success: function(){
                toastr.success("Email updated! Please check your inbox for verification.");
                setTimeout(() => {
                    location.reload();
                }, 1500);
            },
            error: function(err){
                $submit_btn.removeClass("spinner spinner-white spinner-right").prop("disabled", false);
                
                var body = err.responseJSON;
                if(body.hasOwnProperty("errors")){
                    toastr.error(body.errors.email[0]);
                    return;
                }

                toastr.error("Something went wrong! Please refresh your browser and try again...");
            }
        });
    });

    FormValidation.formValidation(
        document.getElementById('form_password'),
        {
            fields: {
                old_password: {
                    validators: {
                        notEmpty: {
                            message: 'Old password is required'
                        },
                    }
                },
                new_password: {
                    validators: {
                        notEmpty: {
                            message: 'New password is required'
                        },
                    }
                },
                confirm_new_password: {
                    validators: {
                        notEmpty: {
                            message: 'Confirm new password is required'
                        },
                        identical: {
                            compare: function() {
                                return $('[name="new_password"]').val();
                            },
                            message: 'The new password and its confirm are not the same'
                        }
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
        var $submit_btn = $("#form_password_submit_button");
        $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

        $.ajax({
            url: "/account/password",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                old_password: $("[name='old_password']").val(),
                new_password: $("[name='new_password']").val(),
            },
            success: function(){
                toastr.success("Password updated!");

                setTimeout(() => {
                    window.location="/";
                }, 1500);
            },
            error: function(err){
                $submit_btn.removeClass("spinner spinner-white spinner-right").prop("disabled", false);
                toastr.error("Password didn't match! Please try again...");
            }
        });
    });
</script>
@endsection