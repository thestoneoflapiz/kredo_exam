@extends("template.master.public")

@section("styles")
<style>
</style>
@endsection

@section("content")
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="sub-header-empty-space--xs"></div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b" style="background-image: url({{ asset('media/stock-600x600/img-16.jpg') }});background-position:right;">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="p-1 flex-grow-1">
                                <h3 class="text-white font-weight-bolder line-height-lg mb-5">Contact Us & Subscribe <br/><small>to latest news and update</small></h3>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body justify-content-start">
                            <form class="form" id="form_contact">
                                <div class="form-group row">
                                    <label class="col-form-label col">Name *</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" name="name" placeholder="Enter your full name"/>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col">Email *</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" name="email" placeholder="Ex: your-address@email.com"/>
                                        <span class="form-text text-muted">We will never share your email with anyone else.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col">Contact</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" name="contact" placeholder="Ex: +(63) 999-999-9999 | (044) 888-8888"/>
                                        <span class="form-text text-muted">Please enter your phone or mobile number</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col">Message</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <textarea class="form-control" name="message" placeholder="Please make your message straigth forward" rows="3"></textarea>
                                        <span class="form-text text-muted">Please enter a message within text length range 50 and 500.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col"></label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" name="subscribe" checked/>
                                            <span></span>
                                            &nbsp; I want to receive all news and updates from {{ config("app.name") }}
                                        </label>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <button type="submit" id="form_submit_button" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!--end::Body-->
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

FormValidation.formValidation(
    document.getElementById('form_contact'),
    {
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Your full name is required'
                    },
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: 'Your email is required'
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
            // Submit the form when all fields are valid
        }
    }
)
.on("core.form.invalid", function(){
    toastr.error("Please complete all required fields!");
    KTUtil.scrollTop();
})
.on("core.form.valid", function(){
    var $submit_btn = $("#form_submit_button");
    $submit_btn.addClass("spinner spinner-white spinner-right").prop("disabled", true);

    $.ajax({
        url: "/contact-us/form",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            name: $("[name='name']").val(),
            email: $("[name='email']").val(),
            contact: $("[name='contact']").val(),
            message: $("[name='message']").val(),
            subscribe: $("[name='subscribe']").is(":checked") ? 1 : 0,
        },
        success: function(){
            toastr.success("Thank you for subscribing! Please check your email for verification.");
            $submit_btn.removeClass("spinner spinner-white spinner-right");
        },
        error: function(err){
            $submit_btn.removeClass("spinner spinner-white spinner-right").prop("disabled", false);
            
            var body = err.responseJSON;
            if(body.hasOwnProperty("errors")){
                toastr.error(body.errors.email[0]);
                return;
            }

            toastr.error("Something went wrong! Please refresh your browser and try again...");
        },
    });
});

</script>
@endsection