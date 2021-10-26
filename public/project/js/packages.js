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