@extends('layouts.app')

@section('content')
    <div class="container">
        <x-navigation></x-navigation>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Submit My Space</div>

                    <div class="card-body">
                        {!! Form::model($space, ['route' => ['space.update', $space->id], 'method' => 'put', 'files' => true]) !!}
                        <div class="form-group">
                            <label for="">Title</label>
                            {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control']) !!}
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            {!! Form::textarea('address', null, [
                                'class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control',
                                'cols' => '10',
                                'rows' => '3',
                            ]) !!}
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            {!! Form::text('city', null, [
                                'class' => $errors->has('city') ? 'form-control is-invalid' : 'form-control',
                            ]) !!}
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Review Count</label>
                            {!! Form::text('reviewCount', null, [
                                'class' => $errors->has('reviewCount') ? 'form-control is-invalid' : 'form-control',
                            ]) !!}
                            @error('reviewCount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Total Score</label>
                            {!! Form::text('totalScore', null, [
                                'class' => $errors->has('totalScore') ? 'form-control is-invalid' : 'form-control',
                            ]) !!}
                            @error('totalScore')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Categories</label>
                            {!! Form::text('categories', null, [
                                'class' => $errors->has('categories') ? 'form-control is-invalid' : 'form-control',
                            ]) !!}
                            @error('categories')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div id="here-maps">
                            <label for="">Pin Location</label>
                            <div style="height: 500px" id="mapContainer"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Latitude</label>
                            {!! Form::text('latitude', null, [
                                'class' => $errors->has('latitude') ? 'form-control is-invalid' : 'form-control',
                                'id' => 'lat',
                            ]) !!}
                            @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Longitude</label>
                            {!! Form::text('longitude', null, [
                                'class' => $errors->has('longitude') ? 'form-control is-invalid' : 'form-control',
                                'id' => 'lng',
                            ]) !!}
                            @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        window.action = "submit"
    </script>
@endpush
