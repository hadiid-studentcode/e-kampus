<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Synadmin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a href="{{ route('courses.index') }}">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Mata Kuliah</div>
            </a>
           
        </li>

    
        <li class="menu-label">Perkulihaan</li>
        <li class="{{ request()->is('classes*') ? 'mm-active' : '' }}">
            <a  href="{{ route('classes.index') }}">
                <div class="parent-icon"><i class='bx bx-calendar'></i>
                </div>
                <div class="menu-title">Jadwal</div>
            </a>
       
        </li>
    
        <li class="menu-label">Laporan</li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-line-chart'></i>
                </div>
                <div class="menu-title">Statistik</div>
            </a>
         
        </li>
     
    
    </ul>
    <!--end navigation-->
</div>
