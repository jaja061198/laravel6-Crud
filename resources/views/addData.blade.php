@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Insert data</div>

                <div class="col-lg-12">
                  <form  action="{{ route('person.store') }}" method="post">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                      </div>

                      <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                      </div>
                      <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
