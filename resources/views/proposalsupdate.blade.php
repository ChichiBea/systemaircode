
@extends('template')

@section('title', 'Update prop')


<!-- ----------------------------------------------------- -->

                        <div class="col-lg-10 w-500 mx-auto">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 text-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Proposals</h6>
                                </div>
                                <div class="card-body"> 
                                <form action="/propedit/{{$proposals->id}}" method="POST">
                                     @method('PUT')
                                        @csrf 
                                    <label for="">Call for Proposals</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value={{$proposals->callforproposals}}>
                                    <br>
                                    <label for="">Start date</label>
                                    <input type="text" class="form-control" id="startdate" name="startdate" value={{$proposals->startdate}}>
                                    <br>
                                    <label for="">End date</label>
                                    <input type="text" class="form-control" id="enddate" name="enddate" value={{$proposals->enddate}}>
                                    <br>
                                    <br>
                                    <label for="">Year to be funded</label>
                                    <input type="text" class="form-control" id="yeartobefunded" name="yeartobefunded" value={{$proposals->yeartobefunded}}>
                                    <br>
                                    <label for="">Funding agency</label>
                                    <input type="text" class="form-control" id="fundingagency" name="fundingagency" value={{$proposals->fundingagency}}>
                                    <br>
                                    <label for="">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" value={{$proposals->status}}>
                                    <br>
                                    <label for="">Remarks</label>
                                    <input type="text" class="form-control" id="remarks" name="remarks" value={{$proposals->remarks}}>
                                    <br>
                                    <br>
                                    <button type="submit">Submit</button>
                                </form>
                                </div>
                            </div>
                        </div>

                 

 <!-- --------------------------------------------------------------------------  -->
 