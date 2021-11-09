@extends('layouts.admin')

@section('content')

            <div class="content-area">
                <div class="mr-breadcrumb">
                    <div class="row">
                        <div class="col-lg-12">
                                <h4 class="heading">{{ __('City') }}</h4>
                                <ul class="links">
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.city.index') }}">{{ __('City') }}</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
              <div class="add-product-content1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                      @include('includes.admin.form-error')
                      <form action="{{route('admin.city.update',$data)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Name') }} *</h4>
                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="name" placeholder="{{ __('Enter Currency Name') }}" required="" value="{{ old('name',$data->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                  <h4 class="heading">{{ __('latitude') }} *</h4>
                                  <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" name="latitude" placeholder="{{ __('Enter Currency latitude') }}" required="" value="{{ old('latitude',$data->latitude) }}">
                              @error('latitude')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                  <h4 class="heading">{{ __('longitude') }} *</h4>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" name="longitude" placeholder="{{ __('Enter Currency longitude') }}" required="" value="{{ old('longitude',$data->longitude) }}">
                              @error('longitude')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                  <h4 class="heading">{{ __('state') }} *</h4>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" name="state" placeholder="{{ __('Enter Currency state') }}" required="" value="{{ old('state',$data->state) }}">
                              @error('state')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                              </div>
                          </div>






                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">

                            </div>
                          </div>
                          <div class="col-lg-7">
                            <button class="btn btn-primary" type="submit">{{ __('Update city') }}</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
