@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div>
                      <a href="{{ route('person.index') }}" class="btn btn-success btn-xs"></i> ADD</a> 
                    </div>
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Firstname</th>
                          <th scope="col">Lastname</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($persons as $key => $element)
                            <tr>
                                <td scope="row">{{ $key + 1 }}</td>
                                <td>{{ $element['firstname'] }}</td>
                                <td>{{ $element['lastname'] }}</td>
                                <td><a href="{{ route('person.edit',['person' => $element['id']]) }}" class="btn btn-primary btn-xs"></i> Edit</a</td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
