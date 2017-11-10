@extends('layouts.app')

@section('logout')
<a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	Logout
</a>
	<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>
				You're logged in as <Strong>ADMIN</Strong>
                
            </div>
        </div>
    </div>
</div>
@endsection
