@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                    <a href="/posts/create" class="btn btn-primary btn-lg">New News !</a>
                    <a href="/topics/create" class="btn btn-primary btn-lg">New Topic !</a>
                    <a href="/learn/create" class="btn btn-primary btn-lg">New Course !</a>


                    <a class="btn btn-primary btn-lg" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
