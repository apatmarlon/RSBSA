@extends('layout')
@section('content')

            <!-- partial -->
            <div class="content-wrapper">
                <h1 class="page-title">RSBSA ENROLLMENT FORM</h1>
                <div class="row">
                    <div class="col-18 col-lg-10 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <p class="alert-success">
                                <?php
                                $exception=Session::get('exception');
                                if($exception){
                                echo $exception;
                                Session :: put('exception',null);
                                }
                                
                                
                                ?>
                                </p>





                            <form class="forms-sample" method="post" action="{{ URL:: to('/save_farmland') }}" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    
                                <div class="form-row">

                                    <div class="form-group col-md-12" style="Background: #5F8094;">
                                     <font color="white"> FARM LAND DESCRIPTION </font>
                                    </div>
                                    
                                        <div class="form-group col-md-12" >
                                                <label for="student_id"></label>
                                                
                                                @foreach ($latestStudents as $student)
                                                   
                                                    <input type="hidden" name="student_id" value="{{ $student }}">
                                                    
                                                @endforeach
                                               
                                        </div>
                                        <br></br>
                                        <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Barangay</label>
                                                <input list="barangay" class="form-control p-input" name="brgy" placeholder="Enter Barangay">
                                                    <datalist id="barangay">
                                                    @foreach ($addressb as $addb)
                                                        <option value="{{ $addb }}">{{ $addb }}</option>
                                                    @endforeach
                                                    </datalist>
                                                </input>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Municipality/City</label>
                                                <input list="municipality" class="form-control" name="mun" placeholder="Enter Municipality">
                                                    <datalist id="municipality">
                                                   @foreach ($address as $add)
                                                        <option value="{{ $add }}">{{ $add }}</option>
                                                   @endforeach
                                                   </datalist>
                                                 </input>  
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Total Farm Area</label>
                                                <input type="text" class="form-control" name="total_area" placeholder="Enter Total Farm Area">
                                            </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Registered Owner?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="regisowner" value="Yes" checked>
                                                <label class="form-label">
                                                    Yes
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="regisowner" value="No">
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Ownership Document no:</label>
                                            <input type="text" class="form-control p-input" name="ownerdocno" aria-describedby="emailHelp" placeholder="Enter Document No.">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Tenant?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="tenant">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="tenant" aria-describedby="emailHelp" placeholder="Enter name of Land owner">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="tenant" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Lessee?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="lessee">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="lessee" aria-describedby="emailHelp" placeholder="Enter name of Land owner">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="lessee" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <fieldset>
                                        
                                            <label for="exampleInputEmail1">Other?</label>
                                            <div class="">
                                            <div>
                                                <input class="form-input" type="radio" name="other">
                                                <label class="form-label">
                                                Name of Land owner:<input type="text" class="form-control p-input" name="other" aria-describedby="emailHelp" placeholder="Enter name of Land owner">
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-input" type="radio" name="other" value="No"checked>
                                                <label class="form-label">
                                                    No
                                                </label>
                                            </div>
                                        
                                            </div>
                                            </fieldset>
                                        </div>

                                       


                                     
                                       
                                        
                                </div>
                                <a href="{{URL :: to('/addfarmparcel')}}"> <button type="submit" class="btn btn-success">Submit</button> </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>










@endsection