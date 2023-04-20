<script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- <script src="{{ asset('assets/vendors/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script> -->
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/toastr.js') }}" type="text/javascript"></script>

<script>
    @php
        $success = '';
        if(\Session::has('success'))
            $success = \Session::get('success');

        $error = '';
        if(\Session::has('error'))
            $error = \Session::get('error');
    @endphp

    var success = "{{ $success }}";
    var error = "{{ $error }}";

    if(success != ''){
        toastr.success(success, 'Success');
    }

    if(error != ''){
        toastr.error(error, 'error');
    }
</script>

@yield('scripts')