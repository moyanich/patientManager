here

{{--  

<div class="card mb-7 p-5">
    <div class="card-body">
        {!! Form::open(['action' => ['App\Http\Controllers\PatientsController@update', $patient->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{Form::label('firstname', 'First Name', ['class' => 'form-label mb-2'])}}

                    {{Form::text('firstname', $patient->first_name, ['class' => 'form-control', 'placeholder' => ''])}}

                    @error('firstname')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{Form::label('middlename', 'Middle Name', ['class' => 'form-label mb-2'])}}

                    {{Form::text('middlename', $patient->middle_name, ['class' => 'form-control', 'placeholder' => ''])}}

                    @error('middlename')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div><!--end col-->
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{Form::label('lastname', 'Last Name', ['class' => 'form-label mb-2'])}}

                    {{Form::text('lastname', $patient->last_name, ['class' => 'form-control', 'placeholder' => ''])}}

                    @error('lastname')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>                    
        </div>
        <div class="row"><!--end col-->
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('patient_no', 'Patient No.', ['class' => 'form-label mb-2']) }}

                    {{ Form::text('patient_no', $patient->patient_no, ['class' => 'form-control', 'placeholder' => '', 'disabled']) }}

                    @error('patient_no')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('dob', 'Date of Birth', ['class' => 'form-label mb-2']) }}

                    {{ Form::date('dob', $patient->dob, ['class' => 'form-control', 'placeholder' => '']) }}

                    @error('dob')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('gender', 'Gender', ['class' => 'form-label mb-2']) }}

                    {{--  {!! Form::select('gender', $genders, $patient->gender_id, '', ['class' => 'form-select']) !!}--}}

                    {{--

                    @error('gender')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('home_phone', 'Phone Number (Home)', ['class' => 'form-label mb-2']) }}

                    {{ Form::tel('home_phone', $patient->home_phone, ['class' => 'form-control', 'placeholder' => '']) }}

                    @error('home_phone')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('cell_number', 'Phone Number (Mobile)', ['class' => 'form-label mb-2']) }}

                    {{ Form::text('cell_number', $patient->cell_phone, ['class' => 'form-control', 'placeholder' => '']) }}

                    @error('cell_number')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="mb-3">
                    {{ Form::label('registration_date', 'Registration Date', ['class' => 'form-label mb-2']) }}

                    {{ Form::date('registration_date', $patient->registration_date, ['class' => 'form-control', 'placeholder' => '', 'disabled']) }}

                    @error('registration_date')
                        <p class="text-xs text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-12 col-md-4">
                <div class="mb-3">
                   
                </div>
            </div>
        </div>


        {{-- 
            
            
    $table->string('emergency_number')->nullable();
    $table->string('email', 50)->nullable();
    $table->char('nis', 9)->nullable()->unique();
    $table->char('trn', 9)->nullable()->unique();
    $table->mediumText('city')->nullable();
    $table->integer('parish_id')->unsigned()->nullable();



        <div class="row">
            <div class="text-end mt-4">
                <a href="{{ route('patients.index') }}" class="btn btn-sm bg-gray-100 me-2">
                    {{ __('Cancel') }}
                </a>
                {{ Form::submit('Update', ['class' => 'btn btn-sm btn-primary']) }}
            </div>
        </div><!--end row-->
    

        {{Form::hidden('_method', 'PUT') }}
        {!! Form::close() !!}


    </div>
</div>

--}}