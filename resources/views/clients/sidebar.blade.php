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
                <li class="sub-menu">
                    <a href="{{route('getClients')}}">
                        <!-- <i class="fa fa-dashboard"></i> -->
                        <img src="https://thumbs.dreamstime.com/z/dashboard-admin-mo…-illustration-eps-abstract-template-145363371.jpg" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
               <li class="sub-menu">
                    <a href="{{ route('getArtical') }}">
                        <!-- <i class="fa fa-newspaper-o"></i> -->
                        <img src="https://www.shutterstock.com/image-vector/envelope…ound-icon-correspondence-send-260nw-546645142.jpg" alt="">
                        <span>Post Article</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{route('my-post')}}">
                        <!-- <i class="fa fa-image"></i> -->
                        <img src="https://www.kindpng.com/picc/m/704-7049812_transpa…nt-speedometer-icon-png-free-wrist-watch-icon.png" alt="">
                        <span>My Post</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="{{ route('status') }}">
                        <!-- <i class="fa fa-bell"></i> -->
                        <img src="https://www.latestlaws.com/media/2022/09/white-black-logo-0-1662532396.jpg" alt="">
                        <span>Case Status</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getPaymentBilling') }}">
                        <!-- <i class="fa fa-cc-visa"></i> -->
                        <img src="https://images.stockfreeimages.com/1520/sfixl/15200585.jpg" alt="">
                        <span>Payment & Billing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getMessaging') }}">
                        <!-- <i class="fa fa-comment"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpmE-zgzs6lC65P-KCqs1Z18gRr6MJvt6GUA&usqp=CAUdata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEA…UBC7TcC7BHUOXp/8J+dd/16lJyMbxP/YAAAAASUVORK5CYII=" alt="">
                        <span>Messaging With Lawyer</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('getDocument') }}">
                        <!-- <i class="fa fa-folder-open"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLgoT2g_rHhX53ugtLEL4ejwjqFjxJsY64wQ&usqp=CAU" alt="">
                        <span>Donation Details</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="{{route('getProfile')}}">
                        <!-- <i class="fa fa-user"></i> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_nvkrQXpNMxa3liefGuPUJjoFMsbYhicAYw&usqp=CAU" alt="">
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <!-- <i class="fa fa-sign-out"></i> -->
                        <img src="https://www.shutterstock.com/image-vector/power-bu…n-symbol-vector-illustration-260nw-2184450023.jpg" alt="">
                        <span>Logout</span>
                    </a>
                </li>
            </ul>           
         </div>
    </div>
</aside>