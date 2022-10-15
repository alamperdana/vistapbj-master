@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                 <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                 </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <table class ="table">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Status</td>
                            <td>Aksi</td>
                            <!--<td>role</td>-->
                        </tr>

                        <tbody>
                            @foreach($users as $user)
                            <tr> 
                            <th>{{ $user->name }} </th>
                                <th>{{ $user->email }} </th>
                                <th>@if($user->status == 0 ) Inactive @else Active
                                    @endif </th>
                                <th><a href="{{ route('status', ['id'=>$user->id])}}"> 
                                @if ($user->status == 1) Inactive
                                @else Active                                    
                                @endif</a></th>
                                <!--<th>{{ $user->role }} </th>-->
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>

                   </table>
                </div>
                <div class="card-body">
                    <div class="panel-body">
                        @if(auth()->user()->role == 1)
                        Check admin view: <a href="{{route('admin')}}">Admin View</a>
                        @else
                        Check user view:
                        <a href="{{route('user')}}">User View</a>
                        @endif
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
