@if (session()->has('success'))
    <div id="alert"  class='alert alert-success w-50 m-auto text-center mt-2'>
        {{ session('success') }}
    </div>
@endif




@if (session()->has('error'))
    <div   id="alert" class='alert alert-error  w-50 m-auto text-center mt-2'>
        {{ session('error') }}
    </div>
@endif
