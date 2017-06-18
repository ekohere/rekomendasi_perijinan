<li class="{{ Request::is('jenisInstitusis*') ? 'active' : '' }}">
    <a href="{!! route('jenisInstitusis.index') !!}"><i class="fa fa-edit"></i><span>JenisInstitusis</span></a>
</li>

<li class="{{ Request::is('jenjangPendidikans*') ? 'active' : '' }}">
    <a href="{!! route('jenjangPendidikans.index') !!}"><i class="fa fa-edit"></i><span>JenjangPendidikans</span></a>
</li>

<li class="{{ Request::is('agamas*') ? 'active' : '' }}">
    <a href="{!! route('agamas.index') !!}"><i class="fa fa-edit"></i><span>Agamas</span></a>
</li>

<li class="{{ Request::is('statusRekomendasis*') ? 'active' : '' }}">
    <a href="{!! route('statusRekomendasis.index') !!}"><i class="fa fa-edit"></i><span>StatusRekomendasis</span></a>
</li>

<li class="{{ Request::is('institusis*') ? 'active' : '' }}">
    <a href="{!! route('institusis.index') !!}"><i class="fa fa-edit"></i><span>Institusis</span></a>
</li>

<li class="{{ Request::is('rekomReklameHasStatusRekomendasis*') ? 'active' : '' }}">
    <a href="{!! route('rekomReklameHasStatusRekomendasis.index') !!}"><i class="fa fa-edit"></i><span>RekomReklameHasStatusRekomendasis</span></a>
</li>

<li class="{{ Request::is('rekomendasiReklames*') ? 'active' : '' }}">
    <a href="{!! route('rekomendasiReklames.index') !!}"><i class="fa fa-edit"></i><span>RekomendasiReklames</span></a>
</li>

<li class="{{ Request::is('rekomendasis*') ? 'active' : '' }}">
    <a href="{!! route('rekomendasis.index') !!}"><i class="fa fa-edit"></i><span>Rekomendasis</span></a>
</li>

<li class="{{ Request::is('dataUsahas*') ? 'active' : '' }}">
    <a href="{!! route('dataUsahas.index') !!}"><i class="fa fa-edit"></i><span>DataUsahas</span></a>
</li>

<li class="{{ Request::is('biodatas*') ? 'active' : '' }}">
    <a href="{!! route('biodatas.index') !!}"><i class="fa fa-edit"></i><span>Biodatas</span></a>
</li>

