@extends('layouts.master-employer')
@section('title','Dashboard | Employer')
@section('content')
    <!-- ============================ User Dashboard ================================== -->
    <section class="bg-light">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" onclick="openFilterSearch()">Dashboard Navigation<i class="ml-2 ti-menu"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-12">

                    <div class="simple-sidebar sm-sidebar" id="filter_search">

                        <div class="search-sidebar_header">
                            <h4 class="ssh_heading">Close Filter</h4>
                            <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
                        </div>

                        <div class="sidebar-widgets">
                            <div class="dashboard-navbar">

                                <div class="d-user-avater">
                                    <img src="assets/img/user-3.jpg" class="img-fluid avater" alt="">
                                    <h4>Adam Harshvardhan</h4>
                                    <span>Canada USA</span>
                                </div>

                                <div class="d-navigation">
                                    <ul>
                                        <li class="active"><a href="dashboard.html"><i class="ti-dashboard"></i>Dashboard</a></li>
                                        <li><a href="{{ route('employer.profile') }}"><i class="ti-user"></i>My Profile</a></li>
                                        <li><a href="bookmark-list.html"><i class="ti-bookmark"></i>Bookmarked Listings</a></li>
                                        <li><a href="my-property.html"><i class="ti-layers"></i>My Properties</a></li>
                                        <li><a href="submit-property-dashboard.html"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
                                        <li><a href="change-password.html"><i class="ti-unlock"></i>Change Password</a></li>
                                        <li><a href="#"><i class="ti-power-off"></i>Log Out</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                @yield('employer-content')

            </div>
        </div>
    </section>
    <!-- ============================ User Dashboard End ================================== -->
@endsection

