@extends('layout')
@section('content')



<div class="content-wrapper">
        <h1 class="page-title">Group by Address</h1>
        <div class="row">
            <div class="col-18 col-lg-10 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">

                                    <form action="{{ URL:: to('/search') }}" method="POST" role="search">
                                        {{ csrf_field() }}
                                              <div class="form-row">
                                              <div class="form-group col-md-4">
                                                        <label for="exampleInputEmail1">Barangay</label>
                                                        <input list="barangay" class="form-control p-input" name="barangay" placeholder="Enter Barangay">
                                                            <datalist id="barangay">
                                                            @foreach ($addressb as $addb)
                                                                <option value="{{ $addb }}">{{ $addb }}</option>
                                                            @endforeach
                                                            </datalist>
                                                        </input>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="exampleInputEmail1">Municipality/City</label>
                                                        <input list="municipality" class="form-control" name="municipality" placeholder="Enter Municipality">
                                                            <datalist id="municipality">
                                                        @foreach ($address as $add)
                                                                <option value="{{ $add }}">{{ $add }}</option>
                                                        @endforeach
                                                            </datalist>
                                                        </input>  
                                                    </div>
                                                   
                                                    <div class="form-group col-md-4">
                                                         <button type="submit" class="btn btn-warning">Search</button>
                                                    </div>
                                    </form>
                                                        @if(isset($details))
                                                        <br></br>
                                                        <br></br>
                                                        <br></br>
                                                        <div class="form-group col-md-12" >
                                                                <table class="table table-bordered" style="width:100%;">
                                                                    <thead class="bg-success">
                                                                        <tr>
                                                                    
                                                                            <th style="width:25%;">First Name</th>
                                                                            <th style="width:25%;">Middle Name</th>
                                                                            <th style="width:25%;">Last Name</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach( $details as $report)
                                                                        <tr>

                                                                            <td>{{ $report->student_fname }} </td>
                                                                            <td>{{ $report->student_midname }}</td>  
                                                                            <td>{{ $report->student_surname }}</td>   
                                                                        
                                                                        </tr>
                                                                        
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                        </div>
                                                        @elseif(isset($message))
                                                        <p> {{ $message }} </p>
                                                        @endif
                                                </div>
                        </div>                 
        
                    </div>                         
                </div>
            </div>
        </div>
</div>

























@endsection