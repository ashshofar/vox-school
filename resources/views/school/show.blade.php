@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Detail School</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('school.create') }}" class="btn btn-primary">Add New School</a>
                    <a href="{{ route('school.edit', ['id' => $school->id]) }}" class="btn btn-success">Edit School</a>
                </div>

                <br>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="container">

                            <h3>School Information</h3>

                            <div class="form-group">
                                {!! Form::label('name', 'School Name', ['class'=>'control-label col-sm-2']) !!}
                                {!! Form::label('name', $school->name or '', ['class'=>'control-label col-sm-10']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'Address', ['class'=>'control-label col-sm-2']) !!}
                                {!! Form::label('name', $school->address or '', ['class'=>'control-label col-sm-10']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'Maximum Student', ['class'=>'control-label col-sm-2']) !!}
                                {!! Form::label('name', $school->max_student or '', ['class'=>'control-label col-sm-10']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('name', 'Course yearly fee', ['class'=>'control-label col-sm-2']) !!}
                                {!! Form::label('name', $school->annual_fee or '', ['class'=>'control-label col-sm-10']) !!}
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row container">
                    <div class="col-sm-12">
                        
                        <h3>Students</h3>

                        <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>

                        <br>
                        <br>
                        
                        @if(\Session::has('message'))
                            <div class="alert alert-danger">
                                {{ \Session::get('message') }}
                            </div>
                        @endif

                        <br>

                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th class="hidden">ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>BirthDate</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($school->students as $student)
                                    <tr>
                                        <td class="hidden">{{ $student->id }}</td>
                                        <td>{{ $student->first_name }}</td>
                                        <td>{{ $student->last_name }}</td>
                                        <td>{{ $student->birthdate }}</td>
                                        <td>{{ $student->picture }}</td>
                                        <td>
                                            
                                            <button class="btn btn-primary" id="detail">Detail</button>

                                            <a href={{ route("student.edit", ['id' => $student->id ]) }} class="btn btn-success">Edit</a>
    
                                            <a href={{ route("student.delete", ['id' => $student->id ]) }} class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        @include('school.modal')
    </div>

@endsection

@section('script')


<script type="text/javascript">
        
        var MyTable = $('#myTable').DataTable();

        $( "#myTable" ).on('click','#detail', function() {
            var tr    = $(this).closest('tr');
            var data  = MyTable.row(tr).data();
            console.log(data[0]);

            $('#studentModal').find('#modal-title').text('Detail Student');

            $.ajax({
	            url: "/api/student/"+data[0],
	            type: "GET",
	            timeout: 30000,
	            dataType: "json",
	            success: function(logs) {
	                console.log(logs);
                    $('#first_name').val(logs.first_name);
                    $('#last_name').val(logs.last_name);
                    $('#birthdate').val(logs.birthdate);
                    $('#school').val(logs.school.name);
                    $('#picture').val(logs.picture);
	            },
	            error: function(jqXHR, textStatus, ex) {
	                console.log('Get Data Gagal');
	            }
	        });

            $('#studentModal').modal();
        });
    </script>
@endsection