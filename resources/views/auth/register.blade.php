@extends('layouts.app')

@section('content')
<div class="container">

        <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">


            <div class="panel panel-info mt10 br-n">

                <div class="panel-heading heading-border bg-white">
                    <div class="section row mn">
                        <div class="col-sm-4">
                            <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                    <span>
                      <i class="fa fa-facebook"></i>
                    </span>Facebook</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                    <span>
                      <i class="fa fa-twitter"></i>
                    </span>Twitter</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="button btn-social googleplus span-left btn-block">
                    <span>
                      <i class="fa fa-google-plus"></i>
                    </span>Google+</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data"
                          method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}


                        <div class="panel-body p25 bg-light">
                            <div class="section-divider mt10 mb40">
                                <span>Set up your account</span>
                            </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="section row">
                            <div class="col-md-6">
                                <label for="name" class="field prepend-icon">
                                <input type="text" class="gui-input" name="name" class="field prepend-icon" placeholder="Nom..." value="{{ old('name') }}">
                                <label for="name" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                </label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <label for="firstname" class="field prepend-icon">
                            <input type="text" class="gui-input field prepend-icon" name="firstname"  placeholder="Prénom..." value="{{ old('firstname') }}">

                                    <label for="firstname" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                        </label>
                        @if ($errors->has('firstname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>
                            </div>
</div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="description" class="field prepend-icon">
                                <textarea
                                          name="description"
                                          class="gui-input field prepend-icon"
                                          placeholder="Description..."></textarea>
                                <label for="description" class="field-icon">
                                <i class="fa fa-envelope"></i>
                                </label>
                             </label>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">

                                <label for="email" class="field prepend-icon">

                                <input type="email" class="gui-input field prepend-icon" name="email" placeholder="Email..." value="{{ old('email') }}">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </label>
                                </label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="photo" class="field prepend-icon">

                                    <input type="file" capture="capture" accept="image/*" name="photo" id="image"/>

                                    @if ($errors->has('photo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="password" class="field prepend-icon">

                                    <input type="password" class="gui-input field prepend-icon" name="password" placeholder="Password..." value="{{ old('password') }}">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-unlock-alt"></i>
                                    </label>
                                </label>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="password" class="field prepend-icon">

                                    <input type="password" class="gui-input field prepend-icon" name="password_confirmation" placeholder="Password confirmation..." value="{{ old('password_confirmation') }}">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>-->
                            <div class="section-divider mv40">
                                <span>Review the Terms</span>
                            </div>
                            <!-- .section-divider -->

                            <div class="section mb15">
                                <label class="option block">
                                    <input type="checkbox" name="trial">
                                    <span class="checkbox"></span>Sign me up for a
                                    <a href="#" class="theme-link"> 7-day free PRO trial. </a>
                                </label>
                                <label class="option block mt15">
                                    <input type="checkbox" name="terms">
                                    <span class="checkbox"></span>I agree to the
                                    <a href="#" class="theme-link"> terms of use. </a>
                                </label>
                            </div>
                            <!-- end section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="panel-footer clearfix">
                            <button type="submit" class="button btn-primary pull-right">
                               Create Account
                               </button>

                        </div>
                        <!-- end .form-footer section -->
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection
