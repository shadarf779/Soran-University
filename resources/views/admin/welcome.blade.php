<x-admin-layout>

    <!------------------------------------------------ Navigation ------------------------------------------------>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="img/logo.png" alt="" />
        </div>
        <span class="logo_name">Soran Uni</span>
      </div>
      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="">
              <i class="uil uil-estate"></i>
              <span class="link-name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-files-landscapes"></i>
              <span class="link-name">Content</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-chart"></i>
              <span class="link-name">Analytics</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-thumbs-up"></i>
              <span class="link-name">Like</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-comments"></i>
              <span class="link-name">Comment</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-share"></i>
              <span class="link-name">Share</span>
            </a>
          </li>
        </ul>
        <ul class="logout-mode">
          <li>
            <a href="#">
              <i class="uil uil-signout"></i>
              <span class="link-name">Logout</span>
            </a>
          </li>

          <li class="mode">
            <a href="#">
              <i class="uil uil-moon"></i>
              <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"> </span>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!------------------------------------------------ Dashboard ------------------------------------------------>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            <img src="img/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Activity</span>
                        <span class="number">{{$ACTIVE}}</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total user</span>
                        <span class="number">{{$USER}}</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Joined Users</span>
                        <span class="number">{{$REQUEST}}</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>

                    <span class="text">Recent PENDING JOINED USER </span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        @foreach($registerrequest as $registerrequests)
                        <?php $user = App\Models\User::find($registerrequests->user_id); ?>
                        <span class="data-list">{{$user->name}}</span>
                        @endforeach

                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        @foreach($registerrequest as $registerrequests)
                        <?php $user = App\Models\User::find($registerrequests->user_id); ?>
                        <span class="data-list">{{$user->email}}</span>
                        @endforeach

                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        @foreach($registerrequest as $registerrequests)
                        <span class="data-list">{{$registerrequests->updated_at}}</span>
                       @endforeach
                    </div>
                    <div class="data type">
                        <span class="data-title">Acitivity Name</span>
                        @foreach($registerrequest as $registerrequests)
                        <?php $activity = App\Models\Activites::find($registerrequests->activites_id); ?>
                        <span class="data-list">{{$activity->name}}</span>
                        @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>

                        @foreach($registerrequest as $registerrequests)

                        <span class="data-list">{{$registerrequests->status}}</span>


                       @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Aprove</span>

                        @foreach($registerrequest as $registerrequests)
                        <a href="{{url('Aprove',$registerrequests->id)}}"    class="success-btn" ><i class="material-icons"  title="Aprove">Aprove</i></a>



                       @endforeach
                    </div>
                    <div class="data status">
                        <span class="data-title">Reject</span>

                        @foreach($registerrequest as $registerrequests)
                        <a href="{{url('reject',$registerrequests->id)}}"    class="custom-btn" ><i class="material-icons"  title="Delete">Reject</i></a>

                       @endforeach
                    </div>
                </div>
            </div>
            </div>

        </div>
    </section>
</x-admin-layout>
