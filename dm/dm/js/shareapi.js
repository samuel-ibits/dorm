 document.querySelector('#shareButton')
        .addEventListener('click', event => {
  
            // Fallback, Tries to use API only
            // if navigator.share function is
            // available
            if (navigator.share) {
                navigator.share({
  
                    // Title that occurs over
                    // web share dialog
                    title: 'dorm',
  
                    // URL to share
                    url: 'https://dorm.com.ng/'
                }).then(() => {
                    console.log('Thanks for sharing!');
                }).catch(err => {
  
                    // Handle errors, if occured
                    console.log(
                    "Error while using Web share API:");
                    window.location.href = "https://wa.me/?text=Check+out+this+Dorm+app%2C+It+makes+my+life+as+a+student+much+easier+.+Get+it+free+at+https%3A%2F%2Fwww.dorm.com.ng%2Flanding";
                    
                });
            } else {
  
                // Alerts user if API not available 
                alert("Browser doesn't support this sharing API !");
            }
        })