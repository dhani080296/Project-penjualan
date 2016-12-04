                      <div class="panel-body">
                    <div class="form-group">
                             <input type="text" class="form-control" value="{{Auth::guard('admin_user')->user()->name}}" style="display: none;" name="name">
                             <input type="email" class="form-control" value="{{Auth::guard('admin_user')->user()->email}}" style="display: none;" name="email">  
                            </div>
                            
                            <div class="form-group {{$errors->has('comment') ? 'has-error' : ''}}">
                                {!! Form::label('Comment') !!}
                                {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
                                 @if($errors->has('comment'))
                                <span class="help-block">{{$errors->first('comment')}}</span>
                                @endif
                            </div>
                             <div class="form-group {{$errors->has('iklan_id') ? 'has-error' : ''}}">
                                {!! Form::label('iklan_id','Iklan Product') !!}
                                {!! Form::select('iklan_id',App\Iklan::pluck('title','id'),null,['class'=>'form-control','placeholder'=>'Choose Iklan','id'=>'iklan_id']) !!}
                                 @if($errors->has('iklan_id'))
                                <span class="help-block">{{$errors->first('iklan_id')}}</span>
                                @endif
                            </div>  
                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                 <a href="{{url('/admin_comment')}}" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Batal</a>
                       <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-save"></i> {{! empty($comment->id) ? "Update" : "Simpan"}}</button>        
                </div>