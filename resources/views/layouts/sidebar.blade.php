<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
<<<<<<< HEAD
                <img src="{{ isset($biodatas->foto)?file_exists( public_path() . '/' . $biodatas->foto)?asset($biodatas->foto):'/image/profil.jpg':'/image/profil.jpg' }} " class="img-circle"
=======
                <img src="{{ isset($biodatas->foto)?file_exists( public_path() . '/' . $biodatas->foto)?asset($biodatas->foto):asset('assets/images/no-image.png'):asset('assets/images/no-image.png') }} " class="img-circle"
>>>>>>> 5aa5b0949b763d55c889c6dad079a787ac60c65c
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>InfyOm</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>