                  <div class="panel-body">
                   
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus style="width: 330px;">
                                <input id="slug" type="text" class="form-control" name="slug" value="$user->slug" style="display: none;">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           <br>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required value="{{$user->password}}">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <br>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required value="{{$user->password}}">
                            </div>
                        </div>
                       
                        
                </div>
                <div class="panel-footer sc post-meta padding-10 clearfix">
                 <a href="{{url('/admin_user')}}" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Batal</a>
                       <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-save"></i> {{! empty($user->id) ? "Update" : "Simpan"}}</button>        
                </div>

