
                     @include('Admin.Inc.Header')
                      
                        <!-- sidebar menu -->
                      

                     @include('Admin.Inc.Sidebar')

                        <!-- /sidebar menu -->


                    </div>
                </div>

                <!-- top navigation -->

                 <div class="top_nav hidden-print">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{url('public/Admin/Images/')}}/image.png" style="background-color: #f0f0f0" alt="">
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
<!--                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>-->


                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>
                                        {{ __('Logout') }}
                                    </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <!-- top tiles -->

                   
                               @yield('MainContent')

                                 
                      <div class="containeer">
                          <div class="row">
                              <div class="col-sm-6">
                                  <p style="text-align: center;">Develoved By :</p>
                              </div>
                              <div class="col-sm-6">
                              <a  target="blank"><p style="color: #007DFB;">Mahmud Software</p></a>
                              Phone: 01737607303
                              </div>
                          </div>
                      </div>


                </div>
            </div>

        </div>

                     @include('Admin.Inc.Footer')
      
