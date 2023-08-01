@if (session('success'))
    <div id="alert"  class='alert alert-success w-75 m-auto text-center mb-2'>
        {{ session('success') }}
    </div>
@endif




@if (session('error'))
    <div   id="alert" class='alert alert-error  w-50 m-auto text-center mb-2'>
        {{ session('error') }}
    </div>
@endif
