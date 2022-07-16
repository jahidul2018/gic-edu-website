<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="{{asset('/backend/assets/images/faces/face8.jpg')}}" alt="profile image"> </div>
            <div class="text-wrapper">
              <p class="profile-name">Richard V.Welsh</p>
              <div>
                <small class="designation text-muted">Manager</small>
                <span class="status-indicator online"></span>
              </div>
            </div>
          </div>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboard-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">FrontPage Hero</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dashboard-dropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('create.front_page_hero')}}">Create</a>
              <a class="nav-link" href="{{route('index.front_page_hero')}}">Index</a>
            </li>
          </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboard-dropdown2" aria-expanded="false" aria-controls="dashboard-dropdown">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">Extra Mile</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dashboard-dropdown2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('create.extramile')}}">Create</a>
              <a class="nav-link" href="{{route('index.extramile')}}">Index</a>
            </li>
          </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboard-country" aria-expanded="false" aria-controls="dashboard-dropdown">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Country</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dashboard-country">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('country.index')}}">country's</a>
                    <a class="nav-link" href="{{route('country.create')}}">create country</a>
                    {{-- <a class="nav-link" href="{{route('index.extramile')}}">Index</a> --}}
                </li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboard-partner" aria-expanded="false" aria-controls="dashboard-dropdown">
            <i class="menu-icon mdi mdi-television"></i>
            <span class="menu-title">Partners</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="dashboard-partner">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('partner.index')}}">Partners</a>
                    <a class="nav-link" href="{{route('partner.create')}}">create Partners</a>
                    {{-- <a class="nav-link" href="{{route('index.extramile')}}">Index</a> --}}
                </li>
            </ul>
        </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dashboard-testimonial" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Testimonial</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dashboard-testimonial">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('testimonial.index')}}">Testimonials</a>
                        <a class="nav-link" href="{{route('testimonial.create')}}">create Testimonial</a>
                        {{-- <a class="nav-link" href="{{route('index.extramile')}}">Index</a> --}}
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dashboard-success-story" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Success Story</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dashboard-success-story">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('success.story.index')}}">Success Stories</a>
                        <a class="nav-link" href="{{route('success.story.create')}}">create Success Story</a>
                        {{-- <a class="nav-link" href="{{route('index.extramile')}}">Index</a> --}}
                    </li>
                </ul>
            </div>
        </li>


    </ul>
  </nav>
