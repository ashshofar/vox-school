@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">School</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('school.create') }}" class="btn btn-primary">Add School</a>
                </div>
            </div>
            
            <br>

            <div class="row">
                <div class="col-sm-12">

                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>School Name</th>
                                <th>Address</th>
                                <th>Max Students Allowed</th>
                                <th>Total Student</th>
                                <th>Course yearly fee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schools as $school)
                                <tr>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->address }}</td>
                                    <td>{{ $school->max_student }}</td>
                                    <td>{{ $school->students_count  }}</td>
                                    <td>{{ $school->annual_fee }}</td>
                                    <td>
                                        <a href="{{ route("school.show", ['id' => $school->id ]) }}" class="btn btn-primary">Detail</a>
                                        
                                        <a href={{ route("school.edit", ['id' => $school->id ]) }} class="btn btn-success">Edit</a>

                                        <a href={{ route("school.delete", ['id' => $school->id ]) }} class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
            $('#myTable').DataTable();
        });
    </script>
@endsection