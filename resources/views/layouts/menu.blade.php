<li class="{{ Request::is('home') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>

@role((['administrator']))
<li class="{{ Request::is('jenisInstitusis*')||Request::is('jenjangPendidikans*')||Request::is('agamas*')||Request::is('rekomendasis*')||Request::is('institusis*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-cubes"></i> <span>Admin Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('jenisInstitusis*') ? 'active' : '' }}">
            <a href="{!! route('jenisInstitusis.index') !!}"><i class="fa fa-th"></i><span>Jenis OPD</span></a>
        </li>

        <li class="{{ Request::is('institusis*') ? 'active' : '' }}">
            <a href="{!! route('institusis.index') !!}"><i class="fa fa-university"></i><span>OPD</span></a>
        </li>

        <li class="{{ Request::is('rekomendasis*') ? 'active' : '' }}">
            <a href="{!! route('rekomendasis.index') !!}"><i class="fa fa-check-square-o"></i><span>Rekomendasi</span></a>
        </li>

        <li class="{{ Request::is('jenjangPendidikans*') ? 'active' : '' }}">
            <a href="{!! route('jenjangPendidikans.index') !!}"><i class="fa fa-graduation-cap"></i><span>Jenjang Pendidikan</span></a>
        </li>

        <li class="{{ Request::is('agamas*') ? 'active' : '' }}">
            <a href="{!! route('agamas.index') !!}"><i class="fa fa-map"></i><span>Agama</span></a>
        </li>
    </ul>
</li>
@endrole

@role((['administrator']))
<li class="{{ Request::is('statusRekomendasis*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-gears"></i> <span>Setting OPD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('statusRekomendasis*') ? 'active' : '' }}">
            <a href="{!! route('statusRekomendasis.index') !!}"><i class="fa fa-line-chart"></i><span>Status Rekomendasi</span></a>
        </li>
    </ul>
</li>
@endrole

@role((''))
<li class="{{  Request::is('rekomendasiReklames*')? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-newspaper-o"></i> <span>Rekomendasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('rekomendasiReklames*') ? 'active' : '' }}">
            <a href="{!! route('rekomendasiReklames.index') !!}"><i class="fa fa-file-image-o"></i><span>Rekomendasi Reklame</span></a>
        </li>
    </ul>
</li>
@endrole

@role(('administrator'))
<li class="{{  Request::is('roles*')||Request::is('permissions*')||Request::is('user_role*')||Request::is('users*')||Request::is('pegawais*') ? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-cog"></i> <span>Pengaturan Role & User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
        </li>
        <li class="{{ Request::is('pegawais*') ? 'active' : '' }}">
            <a href="{!! route('pegawais.index') !!}"><i class="fa fa-edit"></i><span>Pegawais</span></a>
        </li>
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{!! route('roles.index') !!}"><i class="fa fa-sun-o"></i><span>Roles</span></a>
        </li>

        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-spinner"></i><span>Permissions</span></a>
        </li>

        <li class="{{ Request::is('user_role*') ? 'active' : '' }}">
            <a href="{!! route('user_role.index') !!}"><i class="fa fa-object-group"></i><span>User Role</span></a>
        </li>
    </ul>
</li>


<li class="{{  Request::is('rekomReklameHasStatusRekomendasis*')? 'active' : '' }} treeview">
    <a href="#">
        <i class="fa fa-pie-chart"></i> <span>Laporan Status</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('rekomReklameHasStatusRekomendasis*') ? 'active' : '' }}">
            <a href="{!! route('rekomReklameHasStatusRekomendasis.index') !!}"><i class="fa fa-bar-chart"></i><span>RekomReklameHasStatusRekomendasis</span></a>
        </li>
    </ul>
</li>
@endrole

@role(('warga'))
<li class="{{ Request::is('dataUsahas*') ? 'active' : '' }}">
    <a href="{!! route('dataUsahas.index') !!}"><i class="fa fa-shopping-bag"></i><span>Data Usaha</span></a>
</li>
@endrole

<li class="{{ Request::is('biodatas*') ? 'active' : '' }}">
    <a href="{!! route('biodatas.index') !!}"><i class="fa fa-server"></i><span>Biodata</span></a>
</li>



