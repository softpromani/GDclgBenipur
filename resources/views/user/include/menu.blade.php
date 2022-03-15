<nav class="navbar navbar-default">
    <div class="row">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle
                    navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#home">
                <h3 style="color: white;font-weight:bold;text-align: center;font-size:25px;" >S. D. G. D. College </h3>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">

                <li><a href="{{ route('index') }}">Home</a></li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">About us <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('about-college') }}">About College</a></li>

                        <li><a href="{{ route('vision-mission') }}">Vision and Mission</a></li>

                        <li><a href="https://governor.bih.nic.in/" target="_blank">Hon'ble Chancellor</a></li>

                        <li><a href={{ route('vice-chancellor-desk') }}>Vice Chancellor's Desk</a></li>

                        <li><a href="{{ route('pricipal-desk') }}">Principals Desk</a></li>

                        <li><a href="{{ route('college-achievments') }}">Acheivements</a></li>

                    </ul>

                </li>



                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Academics <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('admission') }}">Admission</a></li>

                        <li><a href="{{ route('courses') }}">Courses</a></li>

                        <li><a href="{{ route('academic-calendar') }}" target="_self">Academic Calender</a></li>

                        <li><a href="{{ route('fee-structure') }}" target="_self">Fees Structure</a></li>

                        <li><a href="{{ route('teaching-staff') }}">Teaching Staff</a></li>

                        <li><a href="{{ route('non-teaching-staff') }}">Non-Teaching Staff</a></li>

                        <li><a href="{{ route('time-table') }}" target="_self">Time Table</a></li>

                    </ul>

                </li>

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">Departments<i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="{{ route('science') }}">Science</a></li>

                        <li><a href="{{ route('arts') }}">Arts</a></li>



                    </ul>

                </li>



                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">Students Support<i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="#" target="_blank">Alumni Management</a></li>

                        <li><a href="{{ route('regualtion') }}">Regulation</a></li>

                        <li><a href="{{ route('ncc') }}">National Cadet Corps (NCC)</a></li>

                        <li><a href="{{ route('nss') }}">National Service Scheme (NSS)</a></li>

                        <li><a href="{{ route('canteen') }}">Canteen</a></li>

                        <li><a href="{{ route('hostel') }}">Hostels</a></li>

                        <li><a href="{{ route('internet') }}">24*7 Internet</a></li>

                    </ul>

                </li>

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">COMMITTEES & CELLS <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="#">Placement/Career Counseling Cell</a></li>

                        <li><a href="#">College Development Committee</a></li>

                        <li><a href="#">Disciplinary/Admission Committee</a></li>

                        <li><a href="#">Grievance Redressal /Anti Ragging Cell</a></li>

                        <li><a href="#">Internal Quality Assurance Cell (IQAC)</a></li>

                        <li><a href="#">Advisory Committee for Central Library</a></li>

                        <li><a href="#">Women Cell/Anti Sexual Harassment Cell</a></li>

                        <li><a href="#">Steering Committee for NAAC of the College</a></li>

                        <li><a href="{{ route('othercell') }}">Other Committee for cell of the College</a></li>

                    </ul>

                </li>

                <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">NAAC <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">

                        <li><a href="#">AQAR</a></li>

                        <li><a href="#">SSR</a></li>

                    </ul>

                </li>
                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
