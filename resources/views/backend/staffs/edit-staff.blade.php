@extends('backend.layouts.master')

@section('title')
  {{$title}}
@endsection

@section('content')

<div class="card-body">
    {{-- Thông báo lỗi tổng quát--}}
    @if ($errors->any())
    <div class="alert alert-danger">Dữ liệu nhập không hợp lệ!</div>
    @endif

    <h4 class="card-title">Add Staff</h4>

    <form class="form-sample" action="{{route('staff.post-edit')}}" method="POST">
    @csrf
      <div class="row">

        {{-- Nhập id staff --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">ID Staff</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="id" value="{{old('id') ?? $staffDetail->id }}" />

              {{-- Thông báo lỗi --}}
              @error('id')
              <span style="color: red">{{$message}}</span>
              @enderror

            </div>
          </div>
        </div>

        {{-- Nhập tên --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="full_name" value="{{old('full_name')?? $staffDetail->full_name}}"/>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        {{-- Nhập giới tính --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label"  >
                  <input name="gender" type="radio" class="form-check-input"

                    @if($staffDetail->gender=='Nam')
                      checked
                    @endif

                  value="Nam">
                  Male
                </label>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-check">
                <label class="form-check-label">
                  <input name="gender" type="radio" class="form-check-input"

                    @if($staffDetail->gender=='Nữ')
                      checked
                    @endif
                  
                  value="Nữ">
                  Female
                </label>
              </div>
            </div>
          </div>
        </div>

        {{-- Nhập ngày sinh --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Date of Birth</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="birthday" value="{{old('birthday')?? $staffDetail->birthday}}"/>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        {{-- Nhập địa chỉ (quê quán) --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Address </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="address" value="{{old('address')?? $staffDetail->address}}"/>
            </div>
          </div>
        </div>

        {{-- Nhập email --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="email" value="{{old('email')?? $staffDetail->email}}"/>

              {{-- Thông báo lỗi --}}
              @error('email')
              <span style="color: red">{{$message}}</span>
              @enderror

            </div>
          </div>
        </div>
      </div>
      <div class="row">

        {{-- Nhập số điện thoại --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Phone Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')?? $staffDetail->phone_number}}" />
            </div>
          </div>
        </div>

        {{-- Nhập tax code --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tax Code</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tax_code" value="{{old('tax_code')?? $staffDetail->tax_code}}"/>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        {{-- Nhập email company --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email company</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="company@gmail.com" name="email_company" value="{{old('email_company')?? $staffDetail->email_company}}"/>
            </div>
          </div>
        </div>

        {{-- Nhập loại nhân viên --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Type</label>
            <div class="col-sm-9">
              <select class="form-control" name="type">
                <option

                  @if($staffDetail->type=='Part-Time')
                    selected
                  @endif
              
                 value="Part-Time">Part-Time</option>
                <option

                  @if($staffDetail->type=='Full-Time')
                    selected
                  @endif

                value="Full-Time">Full-Time</option>

              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        {{-- Nhập thời gian bắt đầu hợp đồng --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Begin Time</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="begin_time" value="{{old('begin_time')?? $staffDetail->begin_time}}" />
            </div>
          </div>
        </div>

        {{-- Nhập thời gian kết thúc hợp đồng --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">End Time</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="end_time" value="{{old('end_time')?? $staffDetail->end_time}}"/>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        {{-- Nhập thời gian chính thức làm --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Official Time</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="official_time" value="{{old('official_time')?? $staffDetail->official_time}}" />
            </div>
          </div>
        </div>

        {{-- Nhập phòng ban --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Department</label>
            <div class="col-sm-9">
              <select class="form-control" name="department_id">

                {{-- Hiển thị all chức vụ, vị trí trong table position --}}
                @foreach($departmentList as $item)
                <option value="{{$item->id}}"

                  @if($staffDetail->department_id==$item->id)
                    selected
                  @endif

                >{{$item->department_name}}</option>
                @endforeach

              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        {{-- Nhập chức vụ, vị trí --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Position</label>
            <div class="col-sm-9">
              <select class="form-control" name="position_id">

                {{-- Hiển thị all chức vụ, vị trí trong table position --}}
                @foreach($positionList as $item)
                <option value="{{$item->id}}"

                  @if($staffDetail->position_id==$item->id)
                    selected
                  @endif

                >{{$item->position_name}}</option>
                @endforeach

              </select>
            </div>
          </div>
        </div>

        {{-- Nhập trạng thái  --}}
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
              <select class="form-control" name="status" >
                <option 

                  @if($staffDetail->status=='enable')
                  selected
                  @endif
                
                value="enable">Enable</option>

                <option

                  @if($staffDetail->status=='disable')
                  selected
                  @endif
                  
                value="disable">Disable</option>
              </select>
            </div>
          </div>
        </div>

      </div>
      
      <div class="row">
        <button type="submit" class="btn btn-primary" style="margin-right: 10px">Submit</button>
        <a href="{{route('staff.index')}}" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
@endsection

