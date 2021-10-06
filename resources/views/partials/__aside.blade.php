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
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label"> Mange Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-eye"></i> Show Category </a></li>
            <li><a class="treeview-item" href="{{route('dashboard.category.create')}}"><i class="icon fa fa-edit"></i> Create Category </a></li>
         <li><a class="treeview-item" href="{{route('dashboard.category.show')}}"><i class="icon fa fa-eye"></i>

             Show Category 

           </a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cutlery"></i><span class="app-menu__label">Mange Recipe </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-eye"></i>

             Show Recipe 

           </a></li>

            <li><a class="treeview-item" href="{{route('dashboard.recipe.create')}}"><i class="icon fa fa-edit"></i>

             Create Recipe 

           </a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Manage Users </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('dashboard.users.create')}}"><i class="icon fa fa-edit"></i>  Create Users </a></li>
            <li><a class="treeview-item" href="{{route('dashboard.users.show')}}"><i class="icon fa fa-eye"></i> show  Users</a></li>
          </ul>
        </li>
       

       

        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label"> Setting </span></a></li>
      </ul>
    </aside>