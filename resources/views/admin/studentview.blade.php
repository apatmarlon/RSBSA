@extends('layout')
@section('content')


    <!-- partial -->
    <div class="content-wrapper">
        <h1 class="page-title">Basic elements</h1>
        <div class="row">
            <div class="col-18 col-lg-10 grid-margin">
                <div class="card">
                    <div class="card-body">

                        
                       
                            <div class="form-row">

                                <div class="form-group col-md-12" style="Background: #575A55;">
                                <font color="white"> PART I: PERSONAL INFORMATION </font>
                                </div>
                                    <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Reference/Control Number</label>
                                            <div style="font-family:verdana; text-align: center; font-size:30px">{{($student_description_profile->student_controlnum)}}</div>

                                    </div>
                                    <div class="form-group col-md-3">
                                            <label></label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <td><img src="{{URL :: to($student_description_profile->student_image)}}" height="100" width="100"></td>
                                                    <small id="fileHelp" class="form-text text-muted">Photo taken within 6 months.</small>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_fname)}}</div></h3>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Surname</label>
                                        <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_surname)}}</div></h3>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Middle Name</label>
                                        <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_midname)}}</div></h3>

                                    </div>

                                    <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">Sex</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_sex)}}</div></h3>
                                               
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Civil Status</label>
                                        <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_civilstatus)}}</div></h3>
                              
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Name of Spouse</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_spouse)}}</div></h3>

                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Religion</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_religion)}}</div></h3>

                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Date of Birth</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_birthdate)}}</div></h3>

                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Place of Birth</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_birthplace)}}</div></h3>

                                    </div>

                                    <div class="form-group col-md-12"><h5> ADDRESS </h5></div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">House/Lot/BLDG. No.</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_addresshouse)}}</div></h3>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Street/Sitio/Purok/Subdv.</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_addressstreet)}}</div></h3>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Barangay</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_addressbrgy)}}</div></h3>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Municipality/City</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_addressmun)}}</div></h3>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Province</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_addressprov)}}</div></h3>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputEmail1">Region</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_addressreg)}}</div></h3>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Contact Number</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_phone)}}</div></h3>

                                        </div>

                                        <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">Highest Formal Education</label>
                                                <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_hifored)}}</div></h3>       
                                        </div>

                                    
                                        <div class="form-group col-md-2">
                                         
                                        
                                            <label for="exampleInputEmail1">Person with Disability (PWD)</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_pwd)}}</div></h3>

                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Mother's Maiden Name</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_mothersname)}}</div></h3>

                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Name of Household Head</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_household)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Relationship</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_houserela)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-2   ">
                                            <label for="exampleInputEmail1">No. of living household members</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_housememno)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">No. of male household members</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_housemaleno)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="exampleInputEmail1">No. of female household members</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_housefemaleno)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                
                                        
                                            <label for="exampleInputEmail1">4p's Beneficiary?</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_fourps)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                           
                                        
                                            <label for="exampleInputEmail1">Member of any Indigenous Group?</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_indige)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">With Government I.D.?</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_govid)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Member of any Farmers Association/Coopertive?</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_coopmem)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">PERSON TO NOTIFY IN CASE OF EMERGENCY</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_incaseofemer)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">CONTACT NUMBER</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_incaseno)}}</div></h3>
                                        </div>
                                    
                                    <div class="form-group col-md-12" style="Background: #575A55;">
                                     <font color="white"> PART II: FARM PROFILE </font>
                                    </div>

                                        <div class="form-group col-md-3">
                                          
                                            <label for="exampleInputEmail1">Main Livelihood</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_mainliveli)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Type of Farming Activity</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_farmerstype)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Kind of Work</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_farmworkerskind)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputEmail1">Type of Fishing Activity</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_fisherfolktype)}}</div></h3>
                                        </div>
                                    
                                        <br>Gross Annual Income Last Year</br>	
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Farming:</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_annualgrossfarm)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Non-Farming:</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_annualgrossnonfarm)}}</div></h3>
                                        </div>

                                        <div class="form-group col-md-4">
                                            
                                        
                                            <label for="exampleInputEmail1">Agrarian reform beneficiary?</label>
                                            <h3><div style="border: 1px solid gray; text-align: center;">{{($student_description_profile->student_agrarianbene)}}</div></h3>
                                       
                                        </div>

                                        
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



 @endsection