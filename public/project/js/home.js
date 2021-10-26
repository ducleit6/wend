$(document).ready(function() {
    $('#ctc-form').validate({
        rules: {
            _name: {
                required: true,
                minlength: 3,
            },
            _email: {
                required: true,
                email: true,
            },
            _cont: {
                required: true,
                minlength: 20,
            }
        },
        messages: {
            _name: {
                required: 'Please Enter Your Name',
                minlength: 'Your Name must be than more 3 character'
            },
            _email: {
                required: 'Please Enter An Email',
                email: 'This Is Not An Email',

            },
            _cont: {
                required: 'Please Enter An Message',
                minlength: 'The Mesage Must Be Than More 20 Letter'
            }
        }
    })
})
$.validator.addMethod("valueNotEquals", function(value, element, arg) {

    return arg !== value;
}, "Value must not equal arg.");
$(document).ready(function() {
    $('#form-booking-home').validate({

        rules: {
            _fname: {
                required: true,
                maxlength: 10,
            },
            _lname: {
                required: true,
                maxlength: 10,
            },
            _dedate: {
                required: true,
                date: true,
            },
            _redate: {
                required: true,
                date: true,
            },
            _guest: {
                valueNotEquals: '0',

            },
            trave: {
                required: true,
                minlength: 1,
            }
        },
        messages: {
            _fname: {
                required: 'Please Enter Fisrst Name',
            },
            _lname: {
                required: 'Please Enter Last Name',
            },
            _dedate: {
                required: 'Please Enter A Date',
                date: 'This Is Not A Date',

            },
            _redate: {
                required: 'Please Enter A Date',
                date: 'This Is Not A Date',
            },
            _guest: {
                valueNotEquals: 'Please Choose An Option'
            },
            trave: {
                required: 'Please Choose An Option',
                minlength: 'Please Choose An Option'
            }
        }
    });

})