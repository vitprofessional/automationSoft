@extends('crm.include')
@section('adminTitle')
  Pirjatrapur Union Porishod
@endsection
@section('adminContent')              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body p-4">
                    <h4 class="card-title">Add Employee</h4>
                    <p class="card-description">Add New Employee</p>
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
                    <form class="forms-sample" action="{{ route('saveEmployee') }}" method="POST">
                      @csrf
                      <div class="row border mx-2 pb-4">
                        <h4 class="bg-primary p-3 text-white">Personal Information</h4>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="fullName" class="fw-bold">Employee Name</label>
                              <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter the full name of the employee">
                            </div>
                            <div class="form-group">
                              <label for="emailAddress" class="fw-bold">Email Address</label>
                              <input type="email" class="form-control" name="emailAddress" id="emailAddress" placeholder="Enter a valid email address">
                            </div>
                            <div class="form-group">
                              <label for="mobileNumber" class="fw-bold">Mobile Number</label>
                              <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" placeholder="Enter a valid mobile number of the employee">
                            </div>
                            <div class="form-group">
                              <label for="fName" class="fw-bold">Father's Name</label>
                              <input type="text" class="form-control" name="fName" id="fName" placeholder="Enter the father name of the employee">
                            </div>
                            <div class="form-group">
                              <label for="mName" class="fw-bold">Mother's Name</label>
                              <input type="text" class="form-control" name="mName" id="mName" placeholder="Enter the mother name of the employee">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="dob" class="fw-bold">Date of Birth</label>
                              <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter the date of birth of the employee">
                            </div>
                            <div class="form-group">
                              <label for="gender" class="fw-bold">Gender</label>
                              <select class="form-select" name="gender" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="religion" class="fw-bold">Religion</label>
                              <select class="form-select" name="religion" id="religion">
                                <option>Islam</option>
                                <option>Hinduism</option>
                                <option>Buddist</option>
                                <option>Christian</option>
                                <option>Others</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="blGroup" class="fw-bold">Blood Group</label>
                              <input type="text" class="form-control" name="blGroup" id="blGroup" placeholder="Enter the blood group of the employee">
                            </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-12">
                          <div class="row g-0">
                          <div class="col-12 col-md-12 border card rounded-0">
                              <h4 class="bg-primary text-white p-3">Address</h4>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="fullAddress" class="fw-bold">Full Address</label>
                                  <textarea rows="15" class="form-control" id="fullAddress" name="fullAddress" placeholder="Enter full address of the employee"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="district" class="fw-bold">District</label>
                                  <input type="text" class="form-control" id="district" name="district" placeholder="Enter the district name of the email">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row border mb-4 pb-4 mx-2">
                        <h4 class="bg-primary p-3 text-white">Office Information</h4>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="refereance" class="fw-bold">Referance</label>
                              <input type="text" class="form-control" id="refereance" name="refereance" placeholder="Enter the name of the refer(if any)">
                            </div>
                            <div class="form-group">
                              <label for="salary" class="fw-bold">Salary</label>
                              <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter the salary amount of the employee">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="position" class="fw-bold">Position</label>
                              <input type="text" class="form-control" id="position" name="position" placeholder="Enter the position/designation of the employee">
                            </div>
                            <div class="form-group">
                              <label for="joiningDate" class="fw-bold">Joining Date</label>
                              <input type="date" class="form-control" name="joiningDate" id="joiningDate" placeholder="Enter the joining date of the employee">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
@endsection