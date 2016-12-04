
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                               <input type="text" class="form-control" value="{{$iklan->id}}" style="display: none;" name="iklan_id">
                              
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" style="display: none;" name="name">
                                <input type="text" class="form-control" value="{{Auth::user()->email}}" style="display: none;" name="email">
                               
                            </div>
                           
                            <div class="form-group {{$errors->has('comment') ? 'has-error' : ''}}">
                                {!! Form::label('Comment') !!}
                                {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
                                 @if($errors->has('comment'))
                                <span class="help-block">{{$errors->first('comment')}}</span>
                                @endif
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                   {!!Form::submit('Kirim',['class'=>'btn btn-success'])!!}
                                </div>
                                <div class="pull-right">
                                    <p class="text-muted">
                                        <span class="required">*</span>
                                        <em>Indicates required fields</em>
                                    </p>
                                </div>
                            </div>
                       
                   