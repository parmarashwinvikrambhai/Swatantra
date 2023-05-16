<style>
    li img{
        height: 30px;
        width: 30px;
    }
</style>
<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{route('dashboard')}}">
                        <!-- <i class="fa fa-dashboard"></i> -->
                        <img src="https://thumbs.dreamstime.com/z/dashboard-admin-mo…-illustration-eps-abstract-template-145363371.jpg" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('myAppliedCases')}}">
                        <!-- <i class="fa fa-bell"></i> -->
                        <img src="https://cdn5.vectorstock.com/i/1000x1000/10/59/apply-form-rounded-icon-vector-6461059.jpg" alt="">
                        <span>My Applied Cases</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getLawyerCaseManagement')}}">
                        <!-- <i class="fa fa-legal"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNwzBph8kht3k0gJnNYst0ql5-HwFvZZZMRw&usqp=CAU" alt="">
                        <span>Case Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('documentManagement')}}">
                        <!-- <i class="fa fa-file"></i> -->
                        <img src="https://t3.ftcdn.net/jpg/00/82/13/78/360_F_82137861_fSijad0jaq62FUTkXJ2jv0OAFWazwFVR.jpg" alt="">
                        <span>Document Management</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('chatBox')}}">
                        <!-- <i class="fa fa-comment"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpmE-zgzs6lC65P-KCqs1Z18gRr6MJvt6GUA&usqp=CAUdata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEA…UBC7TcC7BHUOXp/8J+dd/16lJyMbxP/YAAAAASUVORK5CYII=" alt="">
                        <span>Chat BOX</span>
                    </a>
                        <!-- <ul class="sub">
                            <li><a href="basic_table.html">All Cases</a></li>
                            <li><a href="responsive_table.html">Pending Case</a></li>
                        </ul> -->
                </li>
                <li class="sub-menu">
                    <a  href="{{route('billing')}}">
                        <!-- <i class="fa fa-cc-visa"></i> -->
                        <img src="https://images.stockfreeimages.com/1520/sfixl/15200585.jpg" alt="">
                        <span>Billing And Invoicing</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="{{route('profile')}}">
                    <!-- <i class="fa fa-sign-out"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_nvkrQXpNMxa3liefGuPUJjoFMsbYhicAYw&usqp=CAU" alt="">
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="{{ route('logout') }}">
                        <!-- <i class="fa fa-sign-out"></i> -->
                        <img src="https://www.shutterstock.com/image-vector/power-bu…n-symbol-vector-illustration-260nw-2184450023.jpg" alt="">
                        <span>Sign-Out</span>
                    </a>
                </li>
        </div>
    </div>
</aside>