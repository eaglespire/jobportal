@extends('employer.layout')
@section('employer-content')
    <div class="col-lg-9 col-md-12">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h4>Your Current Package: <span class="pc-title theme-cl">Gold Package</span></h4>
        </div>
    </div>

    <div class="row">
        @include('partials._listings')
    </div>

    <div class="dashboard-wraper">

        <!-- Basic Information -->
        <div class="form-submit">
            <h4>My Account</h4>
            <div class="submit-section">
                <div class="row">

                    <div class="form-group col-md-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" value="Shaurya Preet">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" value="preet77@gmail.com">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Your Title</label>
                        <input type="text" class="form-control" value="Web Designer">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Phone</label>
                        <input type="text" class="form-control" value="123 456 5847">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" class="form-control" value="522, Arizona, Canada">
                    </div>

                    <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control" value="Montquebe">
                    </div>

                    <div class="form-group col-md-6">
                        <label>State</label>
                        <input type="text" class="form-control" value="Canada">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Zip</label>
                        <input type="text" class="form-control" value="160052">
                    </div>

                    <div class="form-group col-md-12">
                        <label>About</label>
                        <textarea class="form-control">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-submit">
            <h4>Social Accounts</h4>
            <div class="submit-section">
                <div class="row">

                    <div class="form-group col-md-6">
                        <label>Facebook</label>
                        <input type="text" class="form-control" value="https://facebook.com/">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Twitter</label>
                        <input type="email" class="form-control" value="https://twitter.com/">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Google Plus</label>
                        <input type="text" class="form-control" value="https://googleplus.com/">
                    </div>

                    <div class="form-group col-md-6">
                        <label>LinkedIn</label>
                        <input type="text" class="form-control" value="https://linkedin.com/">
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <button class="btn btn-theme-light-2 rounded" type="submit">Save Changes</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
