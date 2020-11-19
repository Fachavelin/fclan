<ul class="sidebar-menu">
        <li class="header">Navegación</li>
        <!-- Optionally, you can add icons to the links -->
        <li {{ request()->is('admin') ? 'class=active' : ''}}>
        <a href="/"><i class="fa fa-link"></i> 
        <span>Inicio</span></a></li>
        <li>
            <a href="{{ route('admin.clans.index') }}"><i class="fa fa-link"></i> 
            <span>Clanes</span></a> 
        </li>
        <li>
          @hasrole('Admin')
            <a href="{{ route('admin.users.index') }}"><i class="fa fa-link"></i> 
            <span>Usuarios</span></a>
            <a href="{{ route('admin.users.show',Auth::user()) }}"><i class="fa fa-link"></i> 
            <span>Usuario</span></a>  
          @else
            <a href="{{ route('admin.users.show',Auth::user()) }}"><i class="fa fa-link"></i> 
            <span>Usuario</span></a> 
          @endhasrole
          
      </li>
        <li class="treeview">
          <form method="POST" action="{{ route('logout') }}">
            {{csrf_field()}}
            {{-- <button href="#" class="btn btn-default btn-flat">Cerrar sesion</button> --}}
            <a href="#" onclick="parentNode.submit();"><i class="fa fa-link"></i> 
            <span>Salir</span>
            <input type="hidden" name="salir" value=Salir/></a>
            {{-- <a href="javascript:;" onclick="parentNode.submit();"><%=n%></a>
            <input type="hidden" name="mess" value=<%=n%>/>--}}
          </form>
        </li>

      

          
        
      </li>
      </ul>