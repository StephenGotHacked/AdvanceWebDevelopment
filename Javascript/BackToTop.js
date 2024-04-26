function scrollToTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; 
    
      window.onscroll = function() {
      const scrollToTopButton = document.getElementById('scrollToTop');
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             scrollToTopButton.style.display = 'block';
          }else {
          scrollToTopButton.style.display = 'none';
          }
      };
    }
