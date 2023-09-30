@extends('layout.app')

@section('content')
    <div class="card col-8 justify-content ">
        <div class="card-header">
            <h3 class="card-title">Modifier mot de passe</h3>
        </div>

        <form class=" mt-4" action="{{url('password')}}" method="post">
            {{ csrf_field() }}
            <div class="card-body ">
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Enter new password" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword"
                    placeholder="Retype a new password" required>
            </div>
            </div>
            <div class="card-footer">
            <div class="row  mb-0">
                <div class="col-12 text-end">
                    <button class="btn btn-primary w-md waves-effect waves-light"
                        type="submit">Modifier</button>
                </div>
            </div>
            </div>

        </form>
    </div>
@endsection
