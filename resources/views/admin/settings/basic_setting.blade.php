@extends('admin.home')
@section('headTitle')
Basic Settings
@endsection
 @section('content')
    {{ Form::open(['route'=>'store.basic.setting','method'=>'post','enctype'=>'multipart/form-data','id'=>'settingformId','files'=>true])}}

  @if($setting==null) 
   <div class="row mb-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h5> Add New Settings </h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
            <div class="row">
            <div class="col-sm-6">
                 <div class="form-group">
                      {{Form::label('text','Name',['class'=>'col-form-label'])}}
                      <input type="text" name="name"  class="form-control" placeholder="Company Name" required>
                      @if ($errors->has('name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
                 <div class="form-group">

                      {{Form::label('text','Slogan',['class'=>'col-form-label'])}}
                      <input type="text" name="slogan"  class="form-control" placeholder="Company Slogan" required>
                      @if ($errors->has('slogan'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('slogan') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                      {{Form::label('text','Phone Number ',['class'=>'col-form-label'])}}
                      <input type="text" name="phone"  class="form-control" placeholder="Phone Number" required>
                      @if ($errors->has('phone'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                  </div>
                 
            </div>
            <div class="col-sm-6">
                  <div class="form-group">
                    {{Form::label('text','E-mail ',['class'=>'col-form-label'])}}
                    <input type="email" name="email"  class="form-control" placeholder="Company email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          
    
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Content',['class'=>'col-form-label',])}}
                    <textarea name="content" class="ckeditor form-control" required></textarea>
                    @if ($errors->has('content'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                    {{Form::label('text','Address',['class'=>'col-form-label',])}}
                    <textarea name="address" class="ckeditor form-control" required></textarea>
                    @if ($errors->has('address'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>

         <div class="row">
           <div class="col-md-12">
             <div class="form-group">
                    {{Form::label('text','Map Link ',['class'=>'col-form-label'])}}
                    <input type="text" name="map_link"  class="form-control" placeholder="Company email" required>
                    @if ($errors->has('map_link'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('map_link') }}</strong>
                        </span>
                    @endif
                </div>
           </div>
         </div>
          
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Logo',['class'=>'col-form-label'])}}
                    {{Form::file('logo',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    
              </div>
                @if ($errors->has('logo'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group mt-5">
                    {{Form::label('text','Icon',['class'=>'col-form-label'])}}
                    {{Form::file('icon',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                    
              </div>
                @if ($errors->has('icon'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('icon') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{Form::submit('Submit',['class'=>'btn btn-success mt-4 mr-2'])}}
                </div>
            </div>
            <div class="col-sm-6">
            </div>
            </div>
        </div>
      </div>
    </div>
   </div>
  

 @else 
  <div class="row mb-4">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h5> Update Settings </h5>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
            @endif
         <div class="row">
            <div class="col-sm-6">
                 <div class="form-group">
                      {{Form::label('text','Name',['class'=>'col-form-label'])}}
                      <input type="text" name="name"  class="form-control" placeholder="Company Name" value="{{$setting->name}}" required>
                      @if ($errors->has('name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="col-sm-6">
                 <div class="form-group">

                      {{Form::label('text','Slogan',['class'=>'col-form-label'])}}
                      <input type="text" name="slogan"  class="form-control" placeholder="Company Slogan" value="{{$setting->slogan}}" required>
                      @if ($errors->has('slogan'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('slogan') }}</strong>
                          </span>
                      @endif
                  </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                      {{Form::label('text','Phone Number ',['class'=>'col-form-label'])}}
                      <input type="text" name="phone"  class="form-control" placeholder="Phone Number" value="{{$setting->phone}}" required>
                      @if ($errors->has('slogan'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('slogan') }}</strong>
                          </span>
                      @endif
                  </div>
                 
            </div>
            <div class="col-sm-6">
                  <div class="form-group">
                    {{Form::label('text','E-mail ',['class'=>'col-form-label'])}}
                    <input type="email" name="email"  class="form-control" placeholder="Company email" value="{{$setting->email}}" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
         <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                    {{Form::label('text','Content',['class'=>'col-form-label',])}}
                    <textarea name="content" class="ckeditor form-control" required>{!! $setting->content !!}</textarea>
                    @if ($errors->has('content'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                    {{Form::label('text','Address',['class'=>'col-form-label',])}}
                    <textarea name="address" class="ckeditor form-control" required>{!! $setting->address !!}</textarea>
                    @if ($errors->has('address'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          </div>
          <div class="row">
           <div class="col-md-12">
             <div class="form-group">
                    {{Form::label('text','Map Link ',['class'=>'col-form-label'])}}
                    <input type="text" name="map_link"  class="form-control" value="{{$setting->map_link}}" placeholder="Company email" required>
                    @if ($errors->has('map_link'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('map_link') }}</strong>
                        </span>
                    @endif
                </div>
           </div>
         </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group mt-5">
                    {{Form::label('text','Logo',['class'=>'col-form-label'])}}
                    {{Form::file('logo',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                     <img src="{{asset('public/images/setting/logo/'.$setting->logo)}}" class="mt-3"alt="{{$setting->logo}}" width="100" height="80">
                    
              </div>
                @if ($errors->has('logo'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group mt-5">
                    {{Form::label('text','Icon',['class'=>'col-form-label'])}}
                    {{Form::file('icon',null,['class'=>'form-control','id'=>'defaultconfig'])}}
                     <img src="{{asset('public/images/setting/icon/'.$setting->icon)}}" class="mt-3"alt="{{$setting->icon}}" width="100" height="80">
                    
              </div>
                @if ($errors->has('icon'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('icon') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group ">
                    {{Form::submit('Submit',['class'=>'btn btn-success mt-4 mr-2'])}}
                </div>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endif 
 
 {{Form::close()}}
                     
@endsection