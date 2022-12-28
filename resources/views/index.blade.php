@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <h4>Search</h4>
        <form>
            <div class="input-group input-group-lg mb-3">
                <input type="text" class="form-control" id="searchInput" placeholder="Search name/designation/department">
            </div>
        </form>
        <div class="row">
            @foreach ($users as $user)
                <div class="col">
                    <div class="card mt-2" style="width: 33rem;">
                        <div class="card-body" id="Searchcard">
                            <h5 class="card-title">{{ $user->Name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $user->designation_name }}</h6>
                            <p class="card-text">{{ $user->department_name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
          $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#Searchcard *").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
@endsection
