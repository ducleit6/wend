@extends('layout/admin')

@section('title','Danh sách Danh mục')
@section('main')


@stop()
@section('js')
<script>
$('form#singleDelete').hide();
$('button.btn-delete-all').hide();

$('input#checkAll').click(function() {
    var isCheck = $(this).is(':checked');
    if (isCheck) {
        $('input.check_item').prop('checked', true);
        $('button.btn-delete-all').show();
    } else {
        $('input.check_item').prop('checked', false);
        $('button.btn-delete-all').hide();
    }
})
$('input.check_item').click(function() {
    var isCheckLength = $('input.check_item:checked').length;
    if (isCheckLength > 0) {
        $('button.btn-delete-all').show();

    } else {
        $('button.btn-delete-all').hide();

    }
})
$('a.btn-single-delete').click(function(ev) {
    ev.preventDefault();
    var href = $(this).attr('href');
    $('form#singleDelete').attr('action', href);
    if (confirm('Bạn chắc chắn muốn xóa?')) {
        $('form#singleDelete').submit();
    }
})
$('button.btn-delete-all').click(function() {
    $('form#form-delete-all').submit();
})
</script>
@stop()