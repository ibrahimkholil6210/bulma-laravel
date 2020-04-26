@extends('master')
@section('title',$user->name.' | Zoom Job Portal')
@section('content')
    <div class="section">
        <div class="container">
            <div class="columns is-multiline is-centered">
                <div class="column is-full">
                    <h1 class="title">Edit Information</h1>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sit, totam, aut nemo ad aliquid amet nisi incidunt distinctio aspernatur enim quam fugit labore omnis? Mollitia perspiciatis nesciunt sapiente velit.</p>
                    @include('message')
                </div>
                <div class="column is-half">
                    <form action="/register/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                              <div class="columns">
                                  @php
                                      $fullName = explode(' ',$user->name);
                                  @endphp
                                <div class="column">
                                    <input class="input" type="text" value="{{ $fullName[0] }}" name="firstname" required>
                                  </div>
                                  <div class="column">
                                    <input class="input" type="text" value="{{ count($fullName) > 1 ? $fullName[1] : '' }}" name="lastname" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="email" value="{{ $user->email }}" name="email" required>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Phone</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="text" name="phone" value="{{ $user->phone }}" id="phone" required autocomplete="off">
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Web Site</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="text" name="website" value="{{ $user->website }}" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Date of Birth</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="date" name="dob" value="{{ $user->dob }}" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Address</label>
                            <div class="control">
                              <div class="columns is-multiline">
                                <div class="column is-full">
                                    <input class="input" type="text" value="{{ $user->streetAddress }}" name="streetAddress" required>
                                </div>
                                <div class="column is-full">
                                    <input class="input" type="text" value="{{ $user->streetAddressSecond }}" name="streetAddressSecond">
                                </div>
                                <div class="column">
                                    <input class="input" type="text" value="{{ $user->city }}" name="city" required>
                                </div>
                                <div class="column">
                                    <input class="input" type="text" value="{{ $user->state }}" name="state" required>
                                </div>
                                <div class="column">
                                    <div class="select">
                                        <select name="country" required value={{ $user->country }}>
                                            <option value="">Country</option>
                                            <option value="Bangladesh" {{ $user->country == 'Bangladesh' ? 'selected="selected"' : '' }}>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Sex</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <label class="radio">
                                        <input type="radio" value="Male" name="gender" {{ $user->sex == 'Male' ? "checked" : '' }}>
                                        Male
                                      </label>
                                      <br>
                                      <label class="radio">
                                        <input type="radio" value="Female" name="gender" {{ $user->sex == 'Female' ? "checked" : '' }}>
                                        Female
                                      </label>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Bio</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <textarea class="textarea" name="bio" rows="10" required>{{ $user->bio }}</textarea>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Division of Interest</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <label class="checkbox"> 
                                        @php
                                            $interest = json_decode($user->interestedDivision);
                                        @endphp
                                        <input type="checkbox" name="interest[]" value="HR Division" {{ in_array('HR Division',$interest)  ? "checked" : '' }}>
                                        HR Division
                                        <input type="checkbox" name="interest[]" value="IT Division" {{ in_array('IT Division',$interest)  ? "checked" : '' }}>
                                        IT Division
                                        <input type="checkbox" name="interest[]" value="Marketing Division" {{ in_array('Marketing Division',$interest)  ? "checked" : '' }}>
                                        Marketing Division
                                    </label>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Expected Salary</label>
                            <div class="control">
                              <div class="columns">
                                @php
                                    $expected_salary = explode('.',$user->salaryAmount);
                                @endphp
                                <div class="column">
                                    <input class="input" type="text" value="{{ $expected_salary[0] }}" name="dollar" required>
                                </div>
                                <div class="column">
                                    <input class="input" type="text" value="{{ count($expected_salary) > 1 ? $expected_salary[1] : '' }}" name="cent">
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Latest Degree</label>
                            <div class="control">
                                <div class="columns">
                                    <div class="column">
                                        <div class="select">
                                            <select class="degree" name="degree" required>
                                                <option value="">Select</option>
                                                <option value="MSc" {{ $user->degree == 'MSc' ? "selected" : '' }}>MSc</option>
                                                <option value="BSc" {{ $user->degree == 'BSc' ? "selected" : '' }}>Bsc</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Years of experience</label>
                            <div class="control">
                                <div class="columns">
                                    <div class="column">
                                        <input type="text" class="input" name="experience" value="{{ $user->experience }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Name of Current Designation</label>
                            <div class="control">
                                <div class="columns">
                                    <div class="column">
                                        <input type="text" class="input" name="designation" value="{{ $user->designation }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Upload CV</label>
                            <div class="control">
                                <div class="columns">
                                    <div class="column">
                                        <div class="file is-boxed is-primary is-centered has-name is-fullwidth">
                                            <label class="file-label">
                                              <input class="file-input" type="file" name="resume" id="resume">
                                              <span class="file-cta">
                                                <span class="file-icon">
                                                  <i class="fas fa-upload"></i>
                                                </span>
                                                <span class="file--name">
                                                  Choose file…
                                                  <a href="{{ asset('storage/'.$user->cvFileName) }}">Click to Download CV</a>
                                                </span>
                                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button class="button is-large is-primary is-fullwidth">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection