
@extends('template')

@section('title', 'Update Profile')


<!-- ----------------------------------------------------- -->

                        <div class="col-lg-10 w-500 mx-auto">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 text-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Profile</h6>
                                </div>
                                <div class="card-body"> 
                                <form action="/profileedit/{{$profile->id}}" method="POST">
                                     @method('PUT')
                                        @csrf 
                                    <label for="">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value={{$profile->firstname}}>
                                    <br>
                                    <label for="">Middlename</label>
                                    <input type="text" class="form-control" id="middlename" name="middlename" value={{$profile->middlename}}>
                                    <br>
                                    <label for="">Lastname</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value={{$profile->lastname}}>
                                    <br>
                                    <label for="">Sex</label>
                                    <select name="sex" id="sex" value={{$profile->sex}}>
                                    <option value="">Select</option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    </select>
                                    <br>
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value={{$profile->email}}>
                                    <br>
                                    <label for="">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value={{$profile->mobilenumber}}>
                                    <br>
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value={{$profile->address}}>
                                    <br>
                                    <label for="">Primary Institution</label>
                                    <input type="text" class="form-control" id="primaryinstitution" name="primaryinstitution" value={{$profile->primaryinstitution}}>
                                    <br>
                                    <label for="">Position</label>
                                    <select name="position" id="position" value={{$profile->position}}>
                                    <option value="">Select</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                    </select>
                                    <br>
                                    <br>
                                    <button type="submit">Submit</button>
                                </form>


                                </div>
                            </div>
                        </div>

                 

 <!-- --------------------------------------------------------------------------  -->
 