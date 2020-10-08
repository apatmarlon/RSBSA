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





                            <form class="forms-sample" method="post" action="{{ URL:: to('/save_farmparcel') }}" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    
                                <div class="form-row">
                                     <div class="form-group col-md-12" style="Background: #5F8094;">
                                     <font color="white"> FARM LAND DESCRIPTION </font>
                                    </div>
                                    
                                        <div class="form-group col-md-12" >
                                                <label for="farmland_id"></label>
                                                
                                                @foreach ($latestFarmland as $farmland)
                                                   
                                                    <input type="hidden" name="farmland_id" value="{{ $farmland }}">
                                                    
                                                @endforeach
                                               
                                        </div>
                                        <br></br>

                                        <div class="col-12">
                                            <table class="table table-striped" style="width:100%; Background: #D4F7AE;">
                                                <thead>
                                                <tr>
                                            
                                                    <th style="width: 20%">CROP/COMMODITY (Rice/Corn/HVC/Livestock/Poultry/Agri-fishery)</th>
                                                    <th style="width: 20%">SIZE(has.)</th>
                                                    <th style="width: 20%">NO. OF HEAD    (For Livestock and Poultry)</th>
                                                    <th style="width: 30%">FARM TYPE</th>
                                                    <th style="width: 30%">ORGANIC PRACTITIONER</th>
                                                   
                                                
                                                </tr>
                                                </thead>
                                                <tbody>
                                            
                                                <tr class="tr-light">
                                                    <td> <input type="text" class="form-control p-input" name="cropcommo" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="size" aria-describedby="emailHelp" ></td>
                                                    <td> <input type="text" class="form-control p-input" name="headno" aria-describedby="emailHelp" ></td>
                                                    <td>    <fieldset>
                                        
                                                            <label for="exampleInputEmail1"></label>
                                                            <div class="">
                                                            <div>
                                                                <input class="form-input" type="radio" name="farm_type" value="Irrigated" checked>
                                                                <label class="form-label">
                                                                    Irrigated
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <input class="form-input" type="radio" name="farm_type" value="Rainfed upland">
                                                                <label class="form-label">
                                                                    Rainfed upland
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <input class="form-input" type="radio" name="farm_type" value="Rainfed lowland">
                                                                <label class="form-label">
                                                                    Rainfed lowland
                                                                </label>
                                                            </div>
                                                        
                                                            </div>
                                                            </fieldset>
                                                    </td>
                                                    <td>    <fieldset>
                                        
                                                            <label for="exampleInputEmail1"></label>
                                                            <div class="">
                                                            <div>
                                                                <input class="form-input" type="radio" name="orgaprac" value="Yes" checked>
                                                                <label class="form-label">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <input class="form-input" type="radio" name="orgaprac" value="No">
                                                                <label class="form-label">
                                                                    No
                                                                </label>
                                                            </div>
                                                        
                                                            </div>
                                                            </fieldset>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>
                                                
                                                    </td>
                                                </tr>
                                                

                                                </tbody>
                                            </table>
                                        </div>
                


                                        </div>
                                    <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{URL :: to('/addfarmland')}}" type="button" class="btn btn-primary">Add Another Farm Parcel</a>
                                    <a href="{{URL :: to('/addstudent')}}" type="button" class="btn btn-danger">Add New Client</a>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>










@endsection