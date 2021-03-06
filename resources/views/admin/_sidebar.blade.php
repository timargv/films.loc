<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>

    <li class="{{{ (Request::is('admin/films*', 'admin/genres*', 'admin/persons*', 'admin/carers*', 'admin/years*', 'admin/countries*', 'admin/thematics*') ? 'treeview active' : 'treeview') }}}">
      <a href="#">
        <i class="fa fa-film"></i>
        <span>Фильмы / Сериалы</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>

      <ul class="treeview-menu">
        <li class="{{{ (Request::is('admin/films*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('films.index') }}"><i class="fa fa-play"></i> <span>Фильмы</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">{{ $countFilms }}</small>
                </span>
                </a></li>
        <li><a href="#"><i class="fa fa-play"></i> <span>Сериалы</span></a></li>
        <li class="{{{ (Request::is('admin/genres*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('genres.index') }}"><i class="fa fa-align-justify"></i> <span>Жанры</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> <span>Возраст ограничение</span></a></li>
        <li class="{{{ (Request::is('admin/persons*') ? 'treeview active' : 'treeview') }}}">
            <a href="{{ route('persons.index') }}"><i class="fa fa-user"></i> <span>Персоны</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">{{ $countPersons }}</small>
                </span>
            </a></li>
         <li class="{{{ (Request::is('admin/carers*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('carers.index') }}"><i class="fa fa-comment"></i> <span>Профессии</span></a></li>

          <li class="{{{ (Request::is('admin/countries*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('countries.index') }}"><i class="fa fa-comment-o"></i> <span>Страны</span></a></li>
          <li class="{{{ (Request::is('admin/years*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('years.index') }}"><i class="fa fa-comment-o"></i> <span>Год</span></a></li>
          <li class="{{{ (Request::is('admin/thematics*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('thematics.index') }}"><i class="fa fa-comment-o"></i> <span>Тематика фильма</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> <span>Рецензии</span></a></li>

          <li><a href="#"><i class="fa fa-comments"></i> <span>Комменты</span></a></li>
        <li><a href="#"><i class="fa fa-comment"></i> <span>Отзывы</span></a></li>

      </ul>
    </li>

</ul>
