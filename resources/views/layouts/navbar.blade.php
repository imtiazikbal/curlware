<nav class="navbar navbar-expand-md navbar-dark shadow" style="background-color: #1C2733; ">
    <a href="{{ route('dashboard') }}">
        <button class="navbar-toggler border-0">
            <img src="{{ asset('assets') }}/img/logomainwhite.png" width="170" class="" alt="Brand Logo">
        </button>
    </a>

    <button class="navbar-toggler ml-auto mb-1 border-0 " type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon mt-2" style="font-size: 26px;"> </span>
    </button>


    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!--sidebar-->
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 sidebar fixed-top" style="background-color: #1C2733;">
                    <a href="{{ route('dashboard') }}"
                        class="navbar-brand d-none d-sm-block mr-auto mt-1 mb-2 text-center current ">
                        <img src="{{ asset('assets') }}/img/logomainwhite.png" width="180" class=""
                            alt="Brand Logo">
                    </a>

                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link text-white py-3">
                                <i class="fas fa-home text-light fa-lg mr-1"> </i>
                                <strong class="py-3"> DASHBOARD </strong>
                            </a>
                        </li>

                        {{-- <li class="nav-item"> 
                            <a href="demandmsg_inbox.php" class="nav-link text-white p-2 mb-2 sidebar_link">
                                <span class="mnuIcon">&#9780;</span> Inbox
                            </a> 
                        </li> --}}

                        

                       




                        <li class="nav-item">
                            <div>
                                <a href="saleslist.php" class="nav-link text-white p-2 mb-2 sidebar_link"
                                    data-toggle="collapse" data-target="#catcollapse" aria-expanded="true">
                                    <span class="mnuIcon">&#9780;</span> My News
                                    <i class="fas fa-angle-down fa-lg float-right pt-1"></i>
                                </a>
                                <div id="catcollapse" class="collapse auto-collapse">
                                    <div class="card-body p-0">
                                        <ul class="nav-item pl-3 dropdownMenuItem">
                                            <a href="{{ route('posts') }}" class="nav-link py-1">
                                                <i class="fas fa-box-open pt-1 mr-2"></i>News List
                                            </a>
                                            
                                            <a href="{{ route('posts.create') }}" class="nav-link py-1">
                                                <i class="fas fa-box pt-1 mr-2"></i> Add News
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                       


                       
                         <li class="nav-item"> 
                            <div>
                                <a href="supplier.php" class="nav-link text-white p-2 mb-2 sidebar_link" 
                                    data-toggle="collapse" data-target="#suppliercollapse" aria-expanded="true">
                                    <span class="mnuIcon">&#9780;</span>Setting
                                    <i class="fas fa-angle-down fa-lg float-right pt-1"></i>
                                </a>
                                <div id="suppliercollapse" class="collapse auto-collapse">
                                      <div class="card-body p-0">
                                        <ul class="nav-item pl-3 dropdownMenuItem">
                                            <a href="{{ url('logout01') }}" class="nav-link py-1">
                                                Logout
                                                <i class="fas fa-box-open pt-1 mr-2"></i>
                                            </a>
                                            
                                        </ul>
                                    </div> 
                                </div>

                            </div>
                        </li> 
                        {{-- <li class="nav-item"> 
                            <div>
                                <a href="saleslist.php" class="nav-link text-white p-2 mb-2 sidebar_link" 
                                    data-toggle="collapse" data-target="#hrmcollapse" aria-expanded="true"> 
                                    <span class="mnuIcon">&#9780;</span> HRM 
                                    <i class="fas fa-angle-down fa-lg float-right pt-1"></i>
                                </a>
                                <div id="hrmcollapse" class="collapse auto-collapse">
                                      <div class="card-body p-0">
                                        <ul class="nav-item pl-3 dropdownMenuItem">
                                            <a href="employelist.php" class="nav-link py-1"> <i class="fas fa-users pt-1 mr-2"></i>Employer List</a>
                                            <a href="{{ url('/addEmployee') }}" class="nav-link py-1"> <i class="fas fa-user-plus pt-1 mr-2"></i>Add Employee</a>
                                            <a href="#" class="nav-link py-1"> <i class="fas fa-user-cog pt-1 mr-2"></i>Manage</a>
                                            <a href="attendancesheet.php" class="nav-link py-1"> <i class="fas fa-user-clock pt-1 mr-2"></i>Aattendance</a>
                                            <a href="department.php" class="nav-link py-1"> <i class="fas fa-user-shield pt-1 mr-2"></i>Department List</a>
                                            <a href="departmentadd.php" class="nav-link py-1"> <i class="fas fa-user-shield pt-1 mr-2"></i>Add Department</a>
                                            <a href="#" class="nav-link py-1"> <i class="fas fa-envelope pt-1 mr-2"></i>Email</a>
                                            <a href="#" class="nav-link py-1"> <i class="fas fa-clipboard pt-1 mr-2"></i>Notice Box</a>
                                            
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li> --}}

                        {{-- <li class="nav-item"> 
                            <div>
                                <a href="saleslist.php" class="nav-link text-white p-2 mb-2 sidebar_link" 
                                    data-toggle="collapse" data-target="#crmcollapse" aria-expanded="true"> 
                                    <span class="mnuIcon">&#9780;</span> CRM 
                                    <i class="fas fa-angle-down fa-lg float-right pt-1"></i>
                                </a>
                                <div id="crmcollapse" class="collapse auto-collapse">
                                      <div class="card-body p-0">
                                        <ul class="nav-item pl-3 dropdownMenuItem">
                                            <a href="customerlist.php" class="nav-link py-1"> <i class="fas fa-users pt-1 mr-2"></i>Customer List</a>
                                            <a href="customeradd.php" class="nav-link py-1"> <i class="fas fa-user-plus pt-1 mr-2"></i>Add Customer</a>
                                            <a href="#" class="nav-link py-1"> <i class="fas fa-user-cog pt-1 mr-2"></i>Manage Customer</a>
                                            <a href="#" class="nav-link py-1"> <i class="fas fa-envelope-open pt-1 mr-2"></i>Send Offer</a>
                                            
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li> --}}

                        {{-- <li class="nav-item"> 
                            <div>
                                <a href="userlist.php" class="nav-link text-white p-2 mb-2 sidebar_link" 
                                    data-toggle="collapse" data-target="#AdminUsercollapse" aria-expanded="true"> 
                                    <span class="mnuIcon">&#9780;</span> User Manage
                                    <i class="fas fa-angle-down fa-lg float-right pt-1"></i>
                                </a>
                                <div id="AdminUsercollapse" class="collapse auto-collapse">
                                      <div class="card-body p-0">
                                        <ul class="nav-item pl-3 dropdownMenuItem">
                                            <a href="useradd.php" class="nav-link py-1"> 
                                                <i class="fas fa-user-plus pt-1 mr-2"> </i>Add User
                                            </a>
                                            <a href="userlist.php" class="nav-link py-1"> 
                                                <i class="fas fa-users pt-1 mr-2"></i>User List
                                            </a>
                                            <a href="#" class="nav-link py-1"> 
                                                <i class="fas fa-user-cog pt-1 mr-2"></i>Manage User
                                            </a>				
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <div>
                                <a href="supplierlist" class="nav-link text-white p-2 mb-2 sidebar_link"
                                    data-toggle="collapse" data-target="#storemanagecollapse" aria-expanded="true">
                                    <span class="mnuIcon">&#9780;</span> Settings
                                    <i class="fas fa-angle-down fa-lg float-right pt-1"></i>
                                </a>
                                <div id="storemanagecollapse" class="collapse auto-collapse show">
                                    <div class="card-body p-0">
                                        <ul class="nav-item pl-3 dropdownMenuItem">
                                            <a href="#" class="nav-link py-1"> <i
                                                    class="fas fa-laptop-medical pt-1 mr-2"></i>General</a>
                                            <a href="#" class="nav-link py-1"> <i
                                                    class="fas fa-laptop-medical pt-1 mr-2"></i>Business Info</a>
                                            <a href="#" class="nav-link py-1"> <i
                                                    class="fas fa-laptop-medical pt-1 mr-2"></i>Featured</a>
                                            <a href="#" class="nav-link py-1"> <i
                                                    class="fas fa-laptop-medical pt-1 mr-2"></i>Activity Log</a>
                                            <a href="#" class="nav-link py-1"> <i
                                                    class="fas fa-laptop-medical pt-1 mr-2"></i>Connect Device</a>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> --}}
                <!-- End sidebar -->

                <!-- top nav-->
                {{-- <div class="col-xl-10 col-lg-9 col-md-9 col-sm-10 ml-auto fixed-top py-2 top-navbar"
                    style="background-color: #1C2733;">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="dropdown">
                                <button type="button" class="btn text-muted dropdown-toggle drophvr"
                                    data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                    aria-expanded="false"> Quick Link
                                </button>
                                <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item " href="productadd.php">Add Product</a>
                                    <a class="dropdown-item " href="brandadd.php">Add Brand</a>
                                    <a class="dropdown-item " href="categoryadd.php">Add Category</a>
                                    <a class="dropdown-item " href="#">Add Supplier</a>
                                    <a class="dropdown-item " href="#">Todays Report</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item " href="#">Add Quick Menu</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <form class="form-inline">
                                <a href="" class="nav-link drophvr ml-md-auto">
                                    <i class="fas fa-users fas-lg "> </i>
                                </a>
                                <a href="" class="nav-link drophvr">
                                    <i class="fas fa-comments fas-lg"> </i>
                                </a>

                                <a href="demandmsg_inbox.php" class="nav-link drophvr"> <i
                                        class="fas fa-envelope fas-lg"> </i> Msg
                                    <small class="bg-light px-1 drophvr"> 00 </small>
                                </a>

                                <style>
                                    .dropdown-menu.multi-column {
                                        width: 300px;
                                    }

                                    .dropdown-menu.multi-column .dropdown-menu {
                                        display: block !important;
                                        position: static !important;
                                        margin: 0 !important;
                                        border: none !important;
                                        box-shadow: none !important;
                                        min-width: 100px;
                                    }
                                </style>

                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle drophvr"data-toggle="dropdown"
                                        data-display="static" aria-haspopup="true" aria-expanded="false"> <img
                                            src="{{ asset('assets') }}/img/usericon.png" width="22"
                                            class="image-fluid"> Admin user
                                    </button>


                                    <div class="dropdown-menu mt-0 dropdown-menu-right"
                                        style="width: 200px; z-index: 0;">
                                        <a href="profile.php" class="dropdown-item" type="button">Profile</a>

                                        <!-- Settings Dropdown -->

                                        <a class="dropdown-item" href="{{ url('/logout01') }}">

                                            LogOut
                                        </a>



                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <!-- End top nav-->

            </div>
        </div>
    </div>
    <style>
        /* Add your regular menu styles here */
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: inline;
            margin-right: 10px;
        }

        /* Style for the active menu item */
        .active {
            font-weight: bold;
            /* Add more styles as needed to highlight the active item */
        }
    </style>
    {{-- <script>
        //auto collapse Script
        $(function() {
            $(document).on('mouseenter.collapse', '[data-toggle=collapse]', function(e) {
                var $this = $(this),
                    href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')
                    ,
                    option = $(target).hasClass('in') ? 'hide' : "show";
                    $('.auto-collapse').not(target).collapse("hide");
                    $(target).collapse(option);
            })
        });
    </script> --}}
</nav>
