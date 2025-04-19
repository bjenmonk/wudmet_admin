// Footer functionality
document.addEventListener('DOMContentLoaded', function() {
  // Social media links hover effects
  const socialLinks = document.querySelectorAll('.social-icons a');
  socialLinks.forEach(link => {
    link.addEventListener('mouseenter', function() {
      this.style.transition = 'transform 0.2s ease';
      this.style.transform = 'scale(1.2)';
    });
    
    link.addEventListener('mouseleave', function() {
      this.style.transform = 'scale(1)';
    });
  });
});