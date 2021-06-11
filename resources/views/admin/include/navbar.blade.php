<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" navigation-header"><span>Quick Menu</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
      <li><a class="menu-item {{ Request::path() == 'admin-site/setting' ? 'active' : '' }}" href="{{url('admin-site/setting')}}"><i class="ft-home"></i> Site Setting</a></li>
      </li>
      {{-- <li><a class="menu-item {{ Request::path() == 'admin-category' ? 'active' : '' }}" href="{{url('admin-category')}}"><i class="ft-home"></i> Category</a></li> --}}
      
      <li><a class="menu-item {{ Request::path() == 'admin-site/slider' ? 'active' : '' }}" href="{{url('admin-site/slider')}}"><i class="ft-monitor"></i> Slider</a></li>
      <li><a class="menu-item {{ Request::path() == 'admin-site/service' ? 'active' : '' }}" href="{{url('admin-site/service')}}"><i class="ft-aperture"></i> Our Service</a></li>
      
      <li><a class="menu-item" href="#">Product</a>
        <ul class="menu-content">
          <li class="{{ Request::path() == 'admin-site/category' ? 'active' : '' }}"><a class="menu-item " href="{{url('admin-site/category')}}"></i> Add Category</a></li>
          <li class="{{ Request::path() == 'admin-site/sub-category' ? 'active' : '' }}"><a class="menu-item " href="{{url('admin-site/sub-category')}}"></i> Sub Category</a></li>
          <li class="{{ Request::path() == 'admin-site/product' ? 'active' : '' }}"><a class="menu-item " href="{{url('admin-site/product')}}"></i> Add Product</a></li>
          <li class="{{ Request::path() == 'admin-site/product-list' ? 'active' : '' }}"><a class="menu-item " href="{{url('admin-site/product-list')}}"></i> Product List</a></li>
          <li class="{{ Request::path() == 'admin-site/payment' ? 'active' : '' }}"><a class="menu-item " href="{{url('admin-site/payment')}}"></i> Delivery & Payment</a></li>
        </ul>
      </li>
      <li><a class="menu-item {{ Request::path() == 'admin-site/team' ? 'active' : '' }}" href="{{url('admin-site/team')}}"><i class="ft-user"></i> Our Team</a></li>        
      <li><a class="menu-item {{ Request::path() == 'admin-site/client' ? 'active' : '' }}" href="{{url('admin-site/client')}}"><i class="ft-users"></i> Our Client</a></li>        
      
    </ul>
  </div>
</div>