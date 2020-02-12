@extends('layout.admin')

@section('content')

<!-- PAGE CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="padding: 10px;margin-top: 45px;">
                        <div class="card-header">
                            <h2><small>Assign Teacher</small></h2>
                        </div>
                        <form action="{{route('admin.store_assign',$id)}}" method="POST" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><small>Assign Teacher</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="profession"
                                                class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject1"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('department') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="lrn" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher1" class="teacher form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('cell_no') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="datetoday"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule1" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('register_date') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="lastname" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject2"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group has-success">
                                            <label for="sfname" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher2" class=" teacher form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="smname" class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule2" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('middlename') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject3"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher3" id="gender" class="form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule3" id="gender" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject4"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher4" id="gender" class="form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule4" id="schedule4" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject5"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher5" id="gender" class="form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule5" id="gender" class="form-control">
                                                    @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject6"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher6" id="gender" class="form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule6" id="gender" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject7"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher7" id="gender" class="form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule7" id="gender" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Subject</small></label>
                                            <select name="subject8"  class=" subject form-control">
                                                @foreach($subject as $subjects)
                                                    <option value="{{$subjects->department_id}}">{{$subjects->subject_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Teacher</small></label>
                                            <select name="teacher8" id="gender" class="form-control">
                                            </select>
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Schedule</small></label>
                                            <select name="schedule8" id="gender" class="form-control">
                                                @foreach(config('const.schedule_time') as $id => $schedule_time)
                                                    <option value="{{$schedule_time}}" {{old('schedule_time') == $schedule_time ? 'selected' : '' }}>{{$schedule_time}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-info mb-1" value="Assign"/>
                                </div>
                                @if (Session::has('success'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                                 @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE CONTENT-->
</div>

@endsection
