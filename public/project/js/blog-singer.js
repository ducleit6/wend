$(document).ready(function() {
    $('#leva-form').validate({
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
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})