@extends('layout')
@section('content')

    <div class="content-wrapper">
        <h1 class="page-title">ALL CLIENT</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Data table</h2>
                <p class="alert-success">
                    <?php
                    $exception=Session::get('exception');
                    if($exception){
                        echo $exception;
                        Session :: put('exception',null);
                    }


                    ?>

                </p>
                <div class="row">
                    <div class="col-12">
                        <table id="order-listing" class="table table-striped" style="width:100%;" >
                            <thead style="width:100%; Background: #D4F7AE;">
                            <tr>
                                <th>Control/Reference No.</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Municipality</th>
                                <th>Image</th>
                                
                               
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_student_info as $v_student)
                            <tr>
                                <td>{{$v_student->student_controlnum}}</td>
                                <td>{{$v_student->student_surname}}</td>
                                <td>{{$v_student->student_fname}}</td>
                                <td>{{$v_student->student_addressmun}}</td>
                                <td><img src="{{URL :: to($v_student->student_image)}}" height="40" width="50" style="border-radius: 50%"></td>
                                
                                



                                <td>
                                    <a href="{{URL :: to('/student_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                                    <a href="{{URL :: to('/student_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                                    <a href="{{URL :: to('/student_delete/'.$v_student->student_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection