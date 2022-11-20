@extends('layouts.landing')

@section('content')
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <h6>Welcome to ZeroMind</h6>
                                <h2>Kamu tanya siapa ZeroMind?</h2>
                                <p>ZeroMind merupakan kumpulan mahasiswa cupu yang gemar melakukan aktivitas menurut ia
                                    menarik lalu diimplementasikan di forum <a rel="nofollow"
                                        href="https://github.com/Zero-Mind" target="_blank">ZeroMind</a>.</p>
                                {{-- <form id="search" action="#" method="GET">
                                <fieldset>
                                    <input type="address" name="address" class="email"
                                        placeholder="Your Location..." autocomplete="on" required>
                                </fieldset>
                                <fieldset>

                                    <button type="submit" class="main-button">Analyze Location</button>
                                </fieldset>
                            </form> --}}
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#contohModalScroll">
                                Analyze Location
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('images/loc.png') }}" alt="team meeting" style="width:950px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contohModalScroll" tabindex="-1" role="dialog"
        aria-labelledby="contohModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contohModalScrollableTitle">Analyze your location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'space.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        <label for="">Category</label>
                        {!! Form::text('category', null, [
                            'class' => $errors->has('category') ? 'form-control is-invalid' : 'form-control',
                        ]) !!}
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Radius</label>
                        {!! Form::text('radius', null, ['class' => $errors->has('radius') ? 'form-control is-invalid' : 'form-control']) !!}
                        @error('radius')
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
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <img src="{{ asset('images/about-left-image.png') }}" alt="person graphic">
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="services">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="icon">
                                    <img src="{{ asset('images/service-icon-01.png') }}" alt="reporting">
                                </div>
                                <div class="right-text">
                                    <h4>Data Analysis</h4>
                                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                <div class="icon">
                                    <img src="{{ asset('images/service-icon-02.png') }}" alt="">
                                </div>
                                <div class="right-text">
                                    <h4>Data Reporting</h4>
                                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                <div class="icon">
                                    <img src="{{ asset('images/service-icon-03.png') }}" alt="">
                                </div>
                                <div class="right-text">
                                    <h4>Web Analytics</h4>
                                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                <div class="icon">
                                    <img src="{{ asset('images/service-icon-04.png') }}" alt="">
                                </div>
                                <div class="right-text">
                                    <h4>SEO Suggestions</h4>
                                    <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor
                            incididunt ut labore et dolores</p>
                        <div class="phone-info">
                            <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a
                                        href="https://wa.me/6285161051708">0851-6105-1708</a></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Surname"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Send
                                        Message</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2022 ZeroMind. All Rights Reserved.

                        <br>Design: <a rel="nofollow" href="https://github.com/Zero-Mind">ZeroMind</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
