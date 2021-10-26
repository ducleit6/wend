$(document).ready(function(){
    $('#login').validate({
        
        rules: {
            _uname:{
                required: true,
                minlength:6,
            },
            _pass:{
                required: true,
                minlength:8
            },
        },
        messages: {
            _uname:{
                required: 'Please Enter Your Username',
                minlength:'Username be than more 6 character '
            },
            _pass:{
                required: 'Please Enter Last Name',
                minlength: 'Password be than more 6 character'
            },
        }
    });

})
$(document).ready(function(){
    $('#regis').validate({
        rules: {
            _rfname: {
                required:true,
                maxlength: 10,
                minlength:3,
            },
            _rlname: {
                required:true,
                maxlength: 10,
                minlength:3,
            },
            _runame: {
                required:true,
                minlength: 6,
            },
            _remail: {
                required:true,
                email:true,
            },
            _rpass: {
                required:true,
                minlength: 8,
            },
            _repass: {
                required:true,
                equalTo: '#rpass',
            },
        },
        messages:{
            _rfname: {
                required:'Please Enter your First Name',
                maxlength:'First Name be less than 10 character',
                minlength:'First Name be more than 3 character'
            },
            _rlname: {
                required:'Please Enter your Last Name',
                maxlength:'Last Name be less than 10 character',
                minlength:'First Name be more than 3 character'
            },
            _runame: {
                required:'Please Enter your UserName',
                minlength:'Last Name be more than 6 character'
            },
            _remail: {
                required:'Please Enter your email',
                email:'This is not an email',
            },
            _rpass: {
                required:'Please Enter your Password',
                minlength:'Password be more than 8 character'
            },
            _repass: {
                required:'Please Re-enter your password',
                equalTo: 'This is not same the password',
            },
        }
    })
})