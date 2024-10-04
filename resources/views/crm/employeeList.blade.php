@extends('crm.include')
@section('adminTitle')
  Pirjatrapur Union Porishod
@endsection
@section('adminContent')              
                <div class="col-10 grid-margin stretch-card mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Employee List</h4>
                            <p class="card-description"> All the employee listed here </p>
                            @if(session()->has('success'))
                                <div class="alert alert-success w-100">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('error'))
                                <div class="alert alert-danger w-100">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="mx-auto">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Position</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </thead>
                                    <thead>
                                        @if(!empty($employee) && count($employee)>0)
                                        @php
                                            $x =1;
                                        @endphp
                                        @foreach($employee as $emp)
                                        <tr>
                                            <td>{{ $x }}</td>
                                            <td>{{ $emp->fullName }}</td>
                                            <td>{{ $emp->emailAddress }}</td>
                                            <td>{{ $emp->mobileNumber }}</td>
                                            <td>{{ $emp->position }}</td>
                                            <td>{{ $emp->joiningDate }}</td>
                                            <td>
                                                <a class="nav-link" href="{{ route('editEmployee',['id'=>$emp->id]) }}"><i class="fa-solid fa-square-pen"></i></a>
                                                <a class="nav-link" href="{{ route('delEmployee',['id'=>$emp->id]) }}"><i class="fa-solid fa-square-pen"></i></a>
                                            </td>
                                        </tr>
                                        @php 
                                            $x++;
                                        @endphp
                                        @endforeach
                                        @else
                                        <tr class="text-center">
                                            <td colspan="7">Sorry! No data found</td>
                                        </tr>
                                        @endif
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection