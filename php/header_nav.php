
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4">
      <div class="container-fluid">
        <!-- Sidebar toggle button for all screen sizes -->
        <button id="globalSidebarToggle" class="toolbar-btn" type="button" aria-label="Toggle Sidebar">
          <i class="fas fa-bars"></i>
        </button>
        
        <!-- Breadcrumb navigation -->
        <nav aria-label="breadcrumb" class="d-none d-md-block ms-3">
          <ol class="breadcrumb mb-0 py-1">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
        
        <div class="d-flex ms-auto align-items-center">
          <!-- Commented out search functionality
          <div class="input-group me-3">
            <input type="text" class="form-control" placeholder="Search...">
            <button class="btn btn-outline-secondary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
          -->
          
          <!-- Toolbar Buttons in a single line -->
          <div class="d-flex align-items-center">
            <button id="fullscreenToggle" class="toolbar-btn" title="Toggle Fullscreen">
              <i class="fas fa-expand"></i>
            </button>
            <button id="modeToggle" class="toolbar-btn" title="Toggle Dark/Light Mode">
              <i class="fas fa-moon"></i>
            </button>
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle fs-5"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>