<style>
    li img{
        height: 28px;
        width: 28px;
    }
</style>
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{route('getAdminIndex')}}">
                        <!-- <i class="fa fa-dashboard"></i> -->
                        <img src="https://thumbs.dreamstime.com/z/dashboard-admin-mo…-illustration-eps-abstract-template-145363371.jpg" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="viewuser">
                        <!-- <i class="fa fa-users"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK1fsA-JGwlLyGtZUC6MOrOvpRdjZUxZcf3A&usqp=CAU" alt="">
                        <span>View Users</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('getCaseManagement')}}">
                        <!-- <i class="fa fa-legal"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNwzBph8kht3k0gJnNYst0ql5-HwFvZZZMRw&usqp=CAU" alt="">
                        <span>Case Management</span>
                    </a>
                        <!-- <ul class="sub">
                            <li><a href="basic_table.html">All Cases</a></li>
                            <li><a href="responsive_table.html">Pending Case</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="{{route('getLawyerDocumentData')}}">
                        <!-- <i class="fa fa-file"></i> -->
                        <img src="https://t3.ftcdn.net/jpg/00/82/13/78/360_F_82137861_fSijad0jaq62FUTkXJ2jv0OAFWazwFVR.jpg" alt="">
                        <span>Document Management</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('getHireLawyer')}}">
                        <!-- <i class="fa fa-tasks"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk7k_nI6-NKi1Az0yKzQ7E33ChSCUX5lXW-w&usqp=CAU" alt="">
                        <span>Hired Cases</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('getLegalStatus')}}">
                        <!-- <i class="fa fa-eye"></i> -->
                        <img src="https://www.latestlaws.com/media/2022/09/white-black-logo-0-1662532396.jpg" alt="">
                        <span>Legal Status</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('getDonateReporting')}}">
                        <!-- <i class="fa fa-pencil-square-o"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLgoT2g_rHhX53ugtLEL4ejwjqFjxJsY64wQ&usqp=CAU" alt="">
                        <span href="allusers">Donate-Reporting</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <!-- <i class="fa fa-comment"></i> -->
                        <img src="	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpmE-zgzs6lC65P-KCqs1Z18gRr6MJvt6GUA&usqp=CAUdata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEA…UBC7TcC7BHUOXp/8J+dd/16lJyMbxP/YAAAAASUVORK5CYII=" alt="">
                        <span>Chat BOX</span>
                    </a>
                        <!-- <ul class="sub">
                            <li><a href="basic_table.html">All Cases</a></li>
                            <li><a href="responsive_table.html">Pending Case</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <!-- <i class="fa fa-cc-visa"></i> -->
                        <img src="https://images.stockfreeimages.com/1520/sfixl/15200585.jpg" alt="">
                        <span>Payments Management</span>
                    </a>
                    <!-- <ul class="sub">
                        <li><a class="fa fa-inr" href="basic_table.html">Payment</a></li>
                        <li><a href="responsive_table.html">Donations</a></li>
                    </ul> -->
                </li>
                <li class="sub-menu">
                    <a href="{{ route('logout') }}">
                        <!-- <i class="fa fa-cog"></i> -->
                        <img src="https://www.shutterstock.com/image-vector/power-bu…n-symbol-vector-illustration-260nw-2184450023.jpg" alt="">
                        <span href="#">Logout</span>
                    </a>
                </li>
            </ul>           
         </div>
    </div>
</aside>