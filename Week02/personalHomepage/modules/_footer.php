 </main>
    
    <footer>
        <aside>
            Made for CS313 Web Engineering - Brigham Young University Idaho
        </aside>
        <p class="footer-bar">
            <?php
            echo "";
            $mydate=getdate(date("U"));
            echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            ?>
  </footer>

    <script src="Week02/personalHomepage/scripts/hamburger.js"></script>
    <script>
        //remember to add an ID of "mainmenu" to the nav ul
        var urlString = document.location.href;
        var urlArray = urlString.split('/');
        var pageHREF=urlArray[urlArray.length-1];
        if (pageHREF !=="") {
            var menu = document.querySelectorAll('ul#mainmenu li a');
            var i;
            //loop through all the menu items in the navigation
            for(i=0; i<menu.length; i++) {
                var currentURL=(menu[i].getAttribute("href"));
                menu[i].parentNode.className=""; //turn off hilighting by default
                if (currentURL===pageHREF) {
                    menu[i].parentNode.className="active";	//turn on if a match
                } // end if
            } // end of the search for a match
        } // end of if !==
    </script>
</body>
</html>