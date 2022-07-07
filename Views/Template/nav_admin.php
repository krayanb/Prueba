    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Usuario</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
       
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-dashboard" aria-hidden="true"></i>
                <span class="app-menu__label">Indicadores</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url(); ?>/unidad"><i class="icon fa fa-circle-o"></i>UF</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/utm"><i class="icon fa fa-circle-o"></i> UTM</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/dolar"><i class="icon fa fa-dollar-sign"></i>Dolar</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/euro"><i class="icon fa fa-euro-sign"></i>Euro</a></li>
            </ul>
        </li>
    
      </ul>
    </aside>