

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
                                                                                                
                                <form action="/newedit/{{$new->id}}" method="post">
                                    @method('PUT')
                                    @csrf
                                <label for="">Call for Proposal</label>
                                <select name="callforproposals"  class="form-control" id="callforproposals" value={{$new->callforproposals}}>
                                <option value="JRP">2023 JRP</option>
                                <option value="YIP">Young Innovators Program (YIP)</option>
                                <option value="PCHRD">PCHRD</option>
                                </select>
                                <br>
                                <label for="">Type of Proposal</label>
                                <select name="typeofproposal"  class="form-control" id="typeofproposal" value={{$new->typeofproposal}}>
                                <option value="R&D Project">R&D Project</option>
                                <option value="TECHNICOM R&D Project">TECHNICOM R&D Project</option>
                                <option value="NON R&D Project">NON R&D Project</option>
                                </select>
                                <br>
                                <label for="">Proposal Classification</label>
                                <select name="proposalclassification" class="form-control" id="proposalclassification" value={{$new->proposalclassification}}>
                                <option value="New Proposal">New Proposal</option>
                                <option value="Resubmitted Proposal">Resubmitted Proposal</option>
                                <option value="Directed Proposal">Directed Proposal</option>
                                </select>
                                <br>
                                <label for="">Project Title</label>
                                <input type="text"  class="form-control" name="projecttitle" value={{$new->projecttitle}}>
                                <br>
                                <label for="">Start Date</label>
                                <input type="date"  class="form-control" name="startdate" value={{$new->startdate}}>
                                <br>
                                <label for="">End Date</label>
                                <input type="date"  class="form-control" name="enddate" value={{$new->enddae}}>
                                <br>
                                <input type="submit" name="submit"/>
                                </form>


                                </div>
                            </div>
                        </div>

                 