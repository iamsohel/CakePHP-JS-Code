var Volcano = {};
jQuery(document).ready(function () {
    var id = jQuery(".main_page_content").attr("id");
    //alert(id);
    if (id && id.length > 0)
        Volcano[id]();
});
Volcano.user_login = function () {

    $('#login-form').validate({
        onkeyup: false,
        onfocusout: false,
        errorElement: 'p',
        rules:
                {
                    email: {required: true, email: true},
                    password: {required: true},
                    //rpassword: {required: true, equalTo: "#password"},
                },
        messages:
                {
                    email: {required: 'Please enter your email address', email: 'Please enter a VALID email address'},
                    password: {required: 'Please enter password'},
                    //rpassword: {required: 'Please enter confirm password'},
                }

    });
}
