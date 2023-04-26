
jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.menu.main ul.menu').slideToggle(500);
 
        e.preventDefault();
    });
    

    /*const onLinkClick = () => {
        jQuery('.menu.main ul.menu').hide();
        //document.querySelector("#nav").checked = false; // Once link is clicked -> make #nav checkbox false thus close the menu
      };
    
      console.log(document
        .querySelectorAll(".menu.main ul li a"));
      
      document
        .querySelectorAll(".menu.main a") // Grab all links
        .forEach((element) => element.addEventListener("click", onLinkClick)); // Listen for click on them*/
});

