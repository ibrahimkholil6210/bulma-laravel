@extends('master')
@section('title','Getting started with Zoom | Zoom Job Portal')
@section('content')
    <div class="section">
        <div class="container">
            <div class="columns is-multiline is-centered">
                <div class="column is-full">
                    <h1 class="title">Sign up! and get started</h1>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sit, totam, aut nemo ad aliquid amet nisi incidunt distinctio aspernatur enim quam fugit labore omnis? Mollitia perspiciatis nesciunt sapiente velit.</p>
                    @include('message')
                </div>
                <div class="column is-half">
                    <form action="/register" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="text" placeholder="First Name" name="firstname" required>
                                  </div>
                                  <div class="column">
                                    <input class="input" type="text" placeholder="Last Name" name="lastname" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="email" placeholder="Email" name="email" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Phone</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="text" name="phone" value="+880" id="phone" required autocomplete="off">
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Web Site</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="text" name="website" value="http://" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Date of Birth</label>
                            <div class="control">
                              <div class="columns">
                                <div class="column">
                                    <input class="input" type="date" name="dob" required>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Address</label>
                            <div class="control">
                              <div class="columns is-multiline">
                                <div class="column is-full">
                                    <input class="input" type="text" placeholder="Street Address" name="streetAddress" required>
                                </div>
                                <div class="column is-full">
                                    <input class="input" type="text" placeholder="Address Line 2" name="streetAddressSecond">
                                </div>
                                <div class="column">
                                    <input class="input" type="text" placeholder="City" name="city" required>
                                </div>
                                <div class="column">
                                    <input class="input" type="text" placeholder="State / Province / Region" name="state" required>
                                </div>
                                <div class="column">
                                    <div class="select">
                                        <select name="country" required>
                                            <option value="">Country</option>
                                            <option value="Bangladesh">Bangladesh</option>
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
                                        <input type="radio" value="Male" name="gender" checked>
                                        Male
                                      </label>
                                      <br>
                                      <label class="radio">
                                        <input type="radio" value="Female" name="gender">
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
                                    <textarea class="textarea" placeholder="Bio!" name="bio" rows="10" required></textarea>
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
                                        <input type="checkbox" name="interest[]" value="HR Division" checked>
                                        HR Division
                                        <input type="checkbox" name="interest[]" value="IT Division">
                                        IT Division
                                        <input type="checkbox" name="interest[]" value="Marketing Division">
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
                                <div class="column">
                                    <input class="input" type="text" placeholder="Dollar" name="dollar" required>
                                </div>
                                <div class="column">
                                    <input class="input" type="text" placeholder="Cent" name="cent">
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
                                                <option value="MSc">MSc</option>
                                                <option value="BSc">Bsc</option>
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
                                        <input type="text" class="input" name="experience" placeholder="Years of experience">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Name of Current Designation</label>
                            <div class="control">
                                <div class="columns">
                                    <div class="column">
                                        <input type="text" class="input" name="designation" placeholder="Name of Current Designation">
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
                                              <input class="file-input" type="file" name="resume" id="resume" required>
                                              <span class="file-cta">
                                                <span class="file-icon">
                                                  <i class="fas fa-upload"></i>
                                                </span>
                                                <span class="file--name">
                                                  Choose file…
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