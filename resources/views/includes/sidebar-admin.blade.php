<aside id="sidebar">
    <!--Content Sidebar-->
    <div class="h-100">
      <div style="height:90px; padding-top:25px; padding-left:8px;" class="sidebar-logo">
      <center><img src="/images/gudangku.gif" width="200px"></center>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-item">
          <a href="{{ route('dashboard', ['role' => Auth::user()->roles]) }}" class="sidebar-link">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill: #ffffff">
                <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"></path>
            </svg>
            Dashboard
        </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ route('usermanagement.index') }}" class="sidebar-link">
            <img width="23" height="23" src="/images/adduser.png" alt="truck" style="margin-right:2px; margin-left:1px;"/>
            User Management
        </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ route('datapimpinan.index') }}" class="sidebar-link">
            <img width="23" height="23" src="/images/pimpinan.png" alt="truck" style="margin-right:2px; margin-left:1px;"/>
            Data Pimpinan
        </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ route('dataoperator.index') }}" class="sidebar-link">
            <img width="23" height="23" src="/images/operator.png" alt="truck" style="margin-right:2px; margin-left:1px;"/>
            Data Operator
        </a>
        </li> 
        <li>
          <img src="/images/QR.jpg" style="padding-left: 60px;  margin-top: 20px; width: 200px;" >
        </li> 
      </ul>
    </div>
  </aside>