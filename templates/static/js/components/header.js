// Header functionality
document.addEventListener('DOMContentLoaded', function() {
  // Dark/Light Mode Toggle Functionality
  const modeToggle = document.getElementById('modeToggle');
  
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
      localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
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
        mainContent.classList.remove('fullscreen');
      }
    });
  }
});