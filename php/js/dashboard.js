// Dashboard JavaScript functionality
document.addEventListener('DOMContentLoaded', function() {
  // Dark/Light Mode Toggle Functionality
  const modeToggle = document.getElementById('modeToggle');
  const htmlElement = document.documentElement;
  
  // Check for saved preference
  if (localStorage.getItem('darkMode') === 'enabled') {
    document.body.classList.add('dark-mode');
    updateModeToggleIcon(true);
  }
  
  // Mode toggle click handler
  if (modeToggle) {
    modeToggle.addEventListener('click', function() {
      const isDarkMode = document.body.classList.toggle('dark-mode');
      updateModeToggleIcon(isDarkMode);
      
      // Save preference to localStorage
      localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
      
      // Update charts for better visibility in dark mode
      updateChartsForTheme(isDarkMode);
    });
  }
  
  function updateModeToggleIcon(isDarkMode) {
    const iconElement = modeToggle.querySelector('i');
    if (isDarkMode) {
      iconElement.classList.remove('fa-moon');
      iconElement.classList.add('fa-sun');
    } else {
      iconElement.classList.remove('fa-sun');
      iconElement.classList.add('fa-moon');
    }
  }
  
  function updateChartsForTheme(isDarkMode) {
    const textColor = isDarkMode ? '#f8f9fa' : '#666';
    const gridColor = isDarkMode ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)';
    
    if (window.revenueChart) {
      window.revenueChart.options.scales.x.ticks.color = textColor;
      window.revenueChart.options.scales.y.ticks.color = textColor;
      window.revenueChart.options.scales.x.grid.color = gridColor;
      window.revenueChart.options.scales.y.grid.color = gridColor;
      window.revenueChart.update();
    }
    
    if (window.trafficChart) {
      window.trafficChart.options.plugins.legend.labels.color = textColor;
      window.trafficChart.update();
    }
  }
  
  // Fullscreen Toggle Functionality
  const fullscreenToggle = document.getElementById('fullscreenToggle');
  const mainContent = document.querySelector('.main-content');
  
  if (fullscreenToggle) {
    fullscreenToggle.addEventListener('click', function() {
      if (!document.fullscreenElement) {
        if (mainContent.requestFullscreen) {
          mainContent.requestFullscreen();
        } else if (mainContent.webkitRequestFullscreen) {
          mainContent.webkitRequestFullscreen();
        } else if (mainContent.msRequestFullscreen) {
          mainContent.msRequestFullscreen();
        }
        fullscreenToggle.querySelector('i').classList.remove('fa-expand');
        fullscreenToggle.querySelector('i').classList.add('fa-compress');
        
        // Add fullscreen class to enable custom styling for footer
        mainContent.classList.add('fullscreen');
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
        fullscreenToggle.querySelector('i').classList.remove('fa-compress');
        fullscreenToggle.querySelector('i').classList.add('fa-expand');
        
        // Remove fullscreen class when exiting
        mainContent.classList.remove('fullscreen');
      }
    });
  }
  
  // Handle fullscreen change event
  document.addEventListener('fullscreenchange', handleFullscreenChange);
  document.addEventListener('webkitfullscreenchange', handleFullscreenChange);
  document.addEventListener('mozfullscreenchange', handleFullscreenChange);
  document.addEventListener('MSFullscreenChange', handleFullscreenChange);
  
  function handleFullscreenChange() {
    if (!document.fullscreenElement && 
        !document.webkitFullscreenElement && 
        !document.mozFullScreenElement &&
        !document.msFullscreenElement) {
      fullscreenToggle.querySelector('i').classList.remove('fa-compress');
      fullscreenToggle.querySelector('i').classList.add('fa-expand');
      
      // Remove fullscreen class when exiting via Esc key
      mainContent.classList.remove('fullscreen');
    }
  }

  // Sidebar Collapse Functionality
  const globalSidebarToggle = document.getElementById('globalSidebarToggle');
  
  // Initialize tooltips
  const sidebarTooltips = initSidebarTooltips();
  
  // Check for saved sidebar state
  if (localStorage.getItem('sidebarCollapsed') === 'true') {
    document.body.classList.add('sidebar-collapsed');
    enableSidebarTooltips(true);
  } else {
    enableSidebarTooltips(false);
  }
  
  if (globalSidebarToggle) {
    globalSidebarToggle.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      const isCollapsed = document.body.classList.toggle('sidebar-collapsed');
      
      // Toggle tooltips based on sidebar state
      enableSidebarTooltips(isCollapsed);
      
      // Save sidebar state to localStorage
      localStorage.setItem('sidebarCollapsed', isCollapsed);
      
      // Trigger window resize to fix any chart sizing issues
      setTimeout(function() {
        window.dispatchEvent(new Event('resize'));
      }, 300); // Wait for transition to complete
    });
  }
  
  // Initialize Bootstrap tooltips for sidebar menu items
  function initSidebarTooltips() {
    const tooltipTriggerList = document.querySelectorAll('#sidebar .nav-link[data-bs-toggle="tooltip"]');
    return [...tooltipTriggerList].map(tooltipTriggerEl => {
      return new bootstrap.Tooltip(tooltipTriggerEl, {
        trigger: 'hover',
        boundary: document.body
      });
    });
  }
  
  // Enable or disable sidebar tooltips based on collapsed state
  function enableSidebarTooltips(enable) {
    const tooltipTriggerList = document.querySelectorAll('#sidebar .nav-link[data-bs-toggle="tooltip"]');
    [...tooltipTriggerList].forEach(tooltipTriggerEl => {
      const tooltip = bootstrap.Tooltip.getInstance(tooltipTriggerEl);
      if (tooltip) {
        if (enable) {
          tooltip.enable();
        } else {
          tooltip.disable();
        }
      }
    });
  }

  // Sample chart data
  const ctx = document.getElementById('revenueChart').getContext('2d');
  const revenueChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
      datasets: [{
        label: 'Revenue',
        data: [12000, 19000, 15000, 25000, 22000, 30000, 35000],
        backgroundColor: 'rgba(0, 123, 255, 0.1)',
        borderColor: 'rgba(0, 123, 255, 1)',
        borderWidth: 2,
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            drawBorder: false
          }
        },
        x: {
          grid: {
            display: false
          }
        }
      },
      plugins: {
        legend: {
          display: false
        }
      }
    }
  });
  
  // Make chart accessible globally for theme updates
  window.revenueChart = revenueChart;

  // Sample doughnut chart
  const ctxDoughnut = document.getElementById('trafficChart').getContext('2d');
  const trafficChart = new Chart(ctxDoughnut, {
    type: 'doughnut',
    data: {
      labels: ['Direct', 'Social', 'Referral', 'Organic'],
      datasets: [{
        data: [35, 25, 15, 25],
        backgroundColor: [
          'rgba(0, 123, 255, 0.7)',
          'rgba(40, 167, 69, 0.7)',
          'rgba(255, 193, 7, 0.7)',
          'rgba(23, 162, 184, 0.7)'
        ],
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom'
        }
      },
      cutout: '70%'
    }
  });
  
  // Make chart accessible globally for theme updates
  window.trafficChart = trafficChart;

  // Initialize for current theme if dark mode is active
  if (document.body.classList.contains('dark-mode')) {
    updateChartsForTheme(true);
  }

  // Toggle sidebar on mobile
  const sidebarToggle = document.getElementById('sidebarToggle');
  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', function() {
      document.body.classList.toggle('sidebar-open');
    });
  }
});