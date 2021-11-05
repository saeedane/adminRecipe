  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">

<div class="user-info">
                <div>
                    <img src="http://pngimg.com/uploads/burger_sandwich/small/burger_sandwich_PNG96780.png" width="48" height="48">
                </div>
                <div class="info-container">
                    <div class="name badge badge-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    admin                    </div>
                    <div class="email" style="color:white;font-size: 17px;"> salim@gmail.com</div>
                  
                </div>
            </div>

      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('dashboard.welcome')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item" href="{{route('dashboard.slider.show')}}"><i class="app-menu__icon fa fa-sliders   "></i><span class="app-menu__label"> Mange Slider </span></a></li>

        <li><a class="app-menu__item" href="{{route('dashboard.category.show')}}"><i class="app-menu__icon fa fa-list  "></i><span class="app-menu__label"> Mange Category </span></a></li>
        <li><a class="app-menu__item" href="{{route('dashboard.cuisine.show')}}"><i class="app-menu__icon fa fa-flag"></i><span class="app-menu__label"> Mange Cuisine </span></a></li>
        <li><a class="app-menu__item" href="{{route('dashboard.chefs.show')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label"> Mange Chefs </span></a></li>


        <li><a class="app-menu__item" href="{{route('dashboard.recipe.show')}}"><i class="app-menu__icon fa fa-cutlery  "></i><span class="app-menu__label"> Mange Recipe </span></a></li>





        <li><a class="app-menu__item" href="{{route('dashboard.ads.create')}}"><i class="app-menu__icon fa fa-buysellads"></i><span class="app-menu__label"> Ads </span></a></li>

        <li><a class="app-menu__item" href="{{route('dashboard.users.show')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label"> Admin </span></a></li>

        <li><a class="app-menu__item" href="{{route('dashboard.setting.create')}}"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label"> Setting </span></a></li>
      </ul>

      <footer  style="position: absolute;bottom:0px;border-top: 1px solid #3c3b3b;padding:15px;">
                <div class="copyright">
                    <a href="https://www.solodroid.co.id/" class="text-white" target="_blank">Copyright © 2021 sadan-toshiba  Developer</a>
                </div>
                <div class="version" style="color:#fedb8f;">
                    <b>Version: </b> 1.0.0                </div>
            </footer>


    </aside>