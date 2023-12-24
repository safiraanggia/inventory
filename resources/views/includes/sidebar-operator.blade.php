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
          <a href="{{ route('databarang.index') }}" class="sidebar-link">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22" viewBox="0 0 50 50" style="fill: #ffffff; margin-right:2px; margin-left:1px;">
                <path d="M 1 3 L 1 15 L 49 15 L 49 3 Z M 3 17 L 3 48 L 47 48 L 47 17 Z M 17.5 20 L 32.5 20 C 33.882813 20 35 21.117188 35 22.5 C 35 23.882813 33.882813 25 32.5 25 L 17.5 25 C 16.117188 25 15 23.882813 15 22.5 C 15 21.117188 16.117188 20 17.5 20 Z"></path>
                </svg>
            Data Barang
        </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ route('datasupplier.index') }}" class="sidebar-link">
            <img width="23" height="23" src="/images/truck.png" alt="truck" style="margin-right:2px; margin-left:1px;"/>
            Data Supplier
        </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ route('barangmasuk.index') }}" class="sidebar-link">
            <img width="24" height="24" src="/images/insert.png" alt="truck" style="margin-right:2px; "/>
            Barang Masuk
        </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ route('barangkeluar.index') }}" class="sidebar-link">
            <img width="24" height="24" src="/images/out.png" alt="truck" style="margin-right:2px; "/>
            Barang Keluar
        </a>
        </li>
  
      </ul>
    </div>
  </aside>