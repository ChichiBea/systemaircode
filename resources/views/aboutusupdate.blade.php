

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
                                                                                                
                                <form action="/aboutusedit/{{$about_us->id}}" method="post">
                                    @method('PUT')
                                    @csrf
                                <label for="">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value={{$about_us->title}}>
                                <br>
                                <label for="">Content</label>
                                <input type="text" id="content" name="content" class="form-control"  value={{$about_us->content}}>
                                <br>
                                <input type="submit" name="submit"/>
                                </form>


                                </div>
                            </div>
                        </div>

                 