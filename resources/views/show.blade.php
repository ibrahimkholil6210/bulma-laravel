@extends('master')
@section('title','All Application on Zoom | Zoom Job Portal')
@section('content')
    <div class="section">
        <div class="container">
            <div class="columns is-multiline is-centered">
                <div class="column is-full">
                    <h1 class="title">All Application's!</h1>
                    @include('message')
                </div>
                <div class="column is-full overflow-x">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Sex</th>
                            <th>Intereste Division</th>
                            <th>Degree</th>
                            <th>Expected Salary</th>
                            <th>Experience</th>
                            <th>CV</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $i = 1
                          @endphp
                          @foreach ($users as $user)
                              <td>{{$i++}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->phone}}</td>
                              <td>{{$user->dob}}</td>
                              <td>{{$user->streetAddress.', '.$user->city.', '.$user->state.', '.$user->country}}</td>
                              <td>{{$user->sex}}</td>
                              <td>
                                @php
                                  $comma_separated = implode(", ", json_decode($user->interestedDivision));
                                  echo $comma_separated;
                                @endphp
                              </td>
                              <td>{{$user->degree}}</td>
                              <td>{{'$'.$user->salaryAmount}}</td>
                              <td>{{$user->experience}}</td>
                              <td>
                                <a href="{{ asset('storage/'.$user->cvFileName) }}">Click to view</a>
                              </td>
                              <td><a href="/register/{{ $user->id }}" class="button is-warning">Edit</a></td>
                              <td>
                                <form method="POST" action="/register/{{ $user->id }}" onsubmit="return confirm('Are you sure?')">
                                  @csrf
                                  @method('DELETE')
                                  <button class="button is-danger">Delete</button>
                                </form>
                              </td>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection