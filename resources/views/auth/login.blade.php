@extends('auth.layout.app')

@section('title')
Login
@endsection

@section('styles')
@endsection

@section('content')
<div class="brand">
    <a class="link" href="{{ route('dashboard') }}">AdminCAST</a>
</div>
<form id="form" action="{{ route('signin') }}" method="post" >
    @csrf
    @method('post')
    <h2 class="login-title">Log in</h2>
    <div class="form-group">
        <div class="input-group-icon right">
            <div class="input-icon"><i class="fa fa-envelope"></i></div>
            <input class="form-control" type="text" name="email" placeholder="Email" autocomplete="off" value="{{ old('email' ?? '') }}" />
            <span class="kt-form__help text-danger font-weight-bold error email"></span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group-icon right">
            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
            <input class="form-control" type="password" name="password" placeholder="Password" />
            <span class="kt-form__help text-danger font-weight-bold error password"></span>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-info btn-block" type="submit">Login</button>
    </div>
</form>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        var form = $('#form');
        $('.kt-form__help').html('');
        form.submit(function(e) {
            $('.help-block').html('');
            $('.m-form__help').html('');
            $.ajax({
                url : form.attr('action'),
                type : form.attr('method'),
                data : form.serialize(),
                dataType: 'json',
                async:false,
                success : function(json){
                    return true;
                },
                error: function(json){
                    if(json.status === 422) {
                        e.preventDefault();
                        var errors_ = json.responseJSON;
                        $('.kt-form__help').html('');
                        $.each(errors_.errors, function (key, value) {
                            $('.'+key).html(value);
                        });
                    }
                }
            });
        });
    });
</script>
@endsection