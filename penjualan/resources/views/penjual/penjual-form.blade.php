                      <div class="panel-body">
                    <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                                {!! Form::label('Title') !!}
                                {!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
                                @if($errors->has('title'))
                                <span class="help-block">{{$errors->first('title')}}</span>
                                @endif
                            </div>
                    <div class="form-group {{$errors->has('slug') ? 'has-error' : ''}}">
                                {!! Form::label('Slug') !!}
                              {!! Form::text('slug',null,['class'=>'form-control','id'=>'slug']) !!}
                                @if($errors->has('slug'))
                                <span class="help-block">{{$errors->first('slug')}}</span>
                                @endif
                            </div>
                     <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}">
                                {!! Form::label('Deskription') !!}
                              {!! Form::textarea('body',null,['class'=>'form-control','id'=>'body']) !!}
                                @if($errors->has('body'))
                                <span class="help-block">{{$errors->first('body')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                                {!! Form::label('Phone Number') !!}
                              {!! Form::text('phone',null,['class'=>'form-control','id'=>'phone']) !!}
                                @if($errors->has('phone'))
                                <span class="help-block">{{$errors->first('phone')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('bbm') ? 'has-error' : ''}}">
                                {!! Form::label('BBM') !!}
                              {!! Form::text('bbm',null,['class'=>'form-control','id'=>'bbm']) !!}
                                @if($errors->has('bbm'))
                                <span class="help-block">{{$errors->first('bbm')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                                {!! Form::label('address') !!}
                              {!! Form::text('address',null,['class'=>'form-control','id'=>'address']) !!}
                                @if($errors->has('address'))
                                <span class="help-block">{{$errors->first('address')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('price') ? 'has-error' : ''}}">
                                {!! Form::label('price') !!}
                              {!! Form::text('price',null,['class'=>'form-control','id'=>'price']) !!}
                                @if($errors->has('price'))
                                <span class="help-block">{{$errors->first('price')}}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('published_at') ? 'has-error' : ''}}">
                    {!! Form::label('published_at','Publish Date') !!}
                      {!! Form::text('published_at',null,['class'=>'form-control','placeholder'=>'Y-m-d H:i:s','id'=>'datetimepicker']) !!}
                @if($errors->has('published_at'))
                <span class="help-block">{{$errors->first('published_at')}}</span>
                @endif
              </div>
                            <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
                      {!! Form::label('image','Gambar') !!} <br>
                      <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
              <img src="{{($iklan->image_thumb_url) ? $iklan->image_thumb_url:'http://placehold.it/200x150&text=No+Image'}}" alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
            <div>
              <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span> {!! Form::file('image') !!}</span>
              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
            </div>
          </div>
                      
                     @if($errors->has('image'))
                   <span class="help-block">{{$errors->first('image')}}</span>
                    @endif
                    </div>
                    
                    <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">
                {!! Form::label('category_id','Category') !!}
                {!! Form::select('category_id',App\Category::pluck('title','id'),null,['class'=>'form-control','placeholder'=>'Choose category','id'=>'category_id']) !!}
               @if($errors->has('category_id'))
                <span class="help-block">{{$errors->first('category_id')}}</span>
                @endif
              </div>            
                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                 <a href="{{url('/home')}}" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Batal</a>
                       <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-save"></i> {{! empty($iklan->id) ? "Update" : "Simpan"}}</button>        
                </div>