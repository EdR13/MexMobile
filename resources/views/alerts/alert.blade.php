@if (session('success'))
<div class="alert alert-dismissible alert-success">
    <button type="button" class="btn-close" data-bs-dismiss="alert">
        <h4 class="alert-heading">
            <strong>Success!</strong>
        </h4> 
        <p class="mb-0">
            {{ session('success') }}
        </p>
        <i class="fa fa-times"></i>
    </button>
</div>

@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif
