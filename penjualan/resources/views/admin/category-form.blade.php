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
                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                 <a href="{{url('/admin_home')}}" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Batal</a>
                       <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-save"></i> {{! empty($category->id) ? "Update" : "Simpan"}}</button>        
                </div>