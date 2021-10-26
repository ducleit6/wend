$.validator.addMethod("valueNotEquals", function(value, element, arg) {
    return arg !== value;
}, "Value must not equal arg.");
$(document).ready(function() {
    $('#form-booking').validate({

        rules: {
            _fname: {
                required: true,
                maxlenght: 10,
            },
            _lname: {
                required: true,
                maxlength: 10,
            },
            _email: {
                required: true,
                email: true,
            },
            _phone: {
                required: true,
                number: true,
                maxlength: 10,
                minlength: 10,
            },
            _guest: {
                valueNotEquals: '0',

            },
        },
        messages: {
            _fname: {
                required: 'Please Enter Fisrst Name',
            },
            _lname: {
                required: 'Please Enter Last Name',
            },
            _email: {
                required: 'Please Enter An Email',
                email: 'This Is Not An Email',

            },
            _phone: {
                required: 'Please Enter The Phone',
                number: 'This Is Not A number',
                maxlength: 'The Phone Number Must Be 10 Number',
                minlength: 'The Phone Number Must Be 10 Number',
            },
            _guest: {
                valueNotEquals: 'Please Choose An Option'
            },
        }
    });

})
$(document).ready(function() {
    $('#reviws-form').validate({
        rules: {
            _name: {
                required: true,
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
$(document).ready(function() {
    $('.demo1').jsRapStar({
        colorFront: '#fff',
        colorBack: '#013864'
    });
    $('#demo2').jsRapStar({
        enabled: false
    });
    $('#demo3').jsRapStar({
        colorFront: '#0ff',
        colorBack: '#ff9d34'
    });
    $('#demo4').jsRapStar({
        star: '&#x2665',
        colorFront: 'red',
        starHeight: 64
    });
    $('#demo5').jsRapStar({
        step: false,
        value: 5,
        length: 10,
        starHeight: 64,
        colorFront: '#0f0',
        onClick: function(score) {
            this.StarF.css({
                color: 'red'
            });
            $('#label5').text(score);
        },
        onMousemove: function(score) {
            $(this).attr('title', 'Rate ' + score);
        }
    });
});