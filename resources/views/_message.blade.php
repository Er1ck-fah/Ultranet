@if (!empty(session('error')))
    <div class="alert alert-danger text-white mb-0 border-0">
        <strong>Oups!</strong> {{session('error')}}
    </div>
@endif

@if (!empty(session('success')))
<div class="alert alert-success text-white mb-0 border-0">
    <strong>Super!</strong> {{session('success')}}
</div>
@endif

@if (!empty(session('warning')))
<div class="alert alert-warning text-white mb-0 border-0">
    <strong>Attention!!</strong> {{session('warning')}}
</div>
@endif

@if (!empty(session('primary')))
<div class="alert alert-primary text-white mb-0 border-0">
    <strong>Attention!!</strong> {{session('primary')}}
</div>
@endif

