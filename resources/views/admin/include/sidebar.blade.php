        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                       
                        <li>
                            <a class=" waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                            
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-android"></i><span class="hide-menu">Profile</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.profile')}}">Add Profile</a></li>
                                <li><a href="{{route('manage.profile')}}">Manage Profile</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-email"></i><span class="hide-menu">Contact</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.contact')}}">Add Contact</a></li>
                                <li><a href="{{route('manage.contact')}}">Manage Contact</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-ink-pen"></i><span class="hide-menu">Education</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.edu_info')}}">Add Education Info</a></li>
                                <li><a href="{{route('manage.edu_info')}}">Manage Education Info</a></li>
                            </ul>
                        </li>
                        
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-media-right-alt"></i><span class="hide-menu">Certificates</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('create.certificate')}}">Add Certificate</a></li>
                                <li><a href="{{route('manage.certificate')}}">Manage Certificate</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-accordion-merged"></i><span class="hide-menu">Project Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('create.project') }}">Add Project</a></li>
                                <li><a href="{{route('manage.project')}}">Manage Project</a></li>
                            </ul>
                        </li>
                        <li>
                             <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-settings"></i><span class="hide-menu">Skill Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse"> 
                                <li><a href="{{ route('create.skill-category') }}">Add Skill Category</a></li>
                                <li><a href="{{ route('manage.skill-category') }}">MAnage Skill Category</a></li>
                                
                                <li><a href="{{ route('create.skill') }}">Add Skill</a></li>
                                <li><a href="{{ route('manage.skill') }}">Manage Skill</a></li>
                            </ul>
                        </li>
                        
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-gallery"></i><span class="hide-menu">Information Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('create.information')}}">Add Information</a></li>
                                <li><a href="{{route('manage.information')}}">Manage Information</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-files"></i><span class="hide-menu">Reference Module</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('create.reference') }}">Add Reference</a></li>
                                <li><a href="{{ route('manage.reference') }}">Manage Reference</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->