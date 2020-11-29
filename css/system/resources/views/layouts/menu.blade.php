<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>About Us</span>
        <span class="pull-rigth-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
 <ul class="treeview-menu">




<li class="{{ Request::is('abouts*') ? 'active' : '' }}">
    <a href="{{ route('abouts.index') }}"><i class="fa fa-edit"></i><span>Abouts</span></a>
</li>

<li class="{{ Request::is('missions*') ? 'active' : '' }}">
    <a href="{{ route('missions.index') }}"><i class="fa fa-edit"></i><span>Missions</span></a>
</li>

<li class="{{ Request::is('visions*') ? 'active' : '' }}">
    <a href="{{ route('visions.index') }}"><i class="fa fa-edit"></i><span>Visions</span></a>
</li>

 </ul>
</li>

<li class="{{ Request::is('uploaders*') ? 'active' : '' }}">
    <a href="{{ route('uploaders.index') }}"><i class="fa fa-fighter-jet"></i><span>Services</span></a>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Home Slider</span>
        <span class="pull-rigth-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
 <ul class="treeview-menu">



<li class="{{ Request::is('slids*') ? 'active' : '' }}">
    <a href="{{ route('slids.index') }}"><i class="fa fa-edit"></i><span>Slide # 1</span></a>
</li>

<li class="{{ Request::is('slider1s*') ? 'active' : '' }}">
    <a href="{{ route('slider1s.index') }}"><i class="fa fa-edit"></i><span>Slide # 2</span></a>
</li>

<li class="{{ Request::is('slider2s*') ? 'active' : '' }}">
    <a href="{{ route('slider2s.index') }}"><i class="fa fa-edit"></i><span>Slide # 3</span></a>
</li>

 </ul>
</li>



<li class="{{ Request::is('fliers*') ? 'active' : '' }}">
    <a href="{{ route('fliers.index') }}"><i class="fa fa-edit"></i><span>Fliers</span></a>
</li>

<li class="{{ Request::is('weeks*') ? 'active' : '' }}">
    <a href="{{ route('weeks.index') }}"><i class="fa fa-edit"></i><span>Weeks</span></a>
</li>

