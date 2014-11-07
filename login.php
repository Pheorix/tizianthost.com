<?php require('includes/header.php'); ?>
    <div class="fade scroll" id="content_wrapper">
        <div id="content">

            <h2>Kundenportal - Login</h2>

                <hr>

                    <p>Dies ist der Login f&uuml;r Kunden. Im Kundenportal ist es m&ouml;glich,
                    den aktuellen Entwicklungsstand des gekauften Produktes von &uuml;berall aus live mitzuverfolgen, wichtige Bilder
                    oder Dokumente hochzuladen, Support in Anspruch zu nehmen, zu bezahlen und das fertige Produkt herunterzuladen.</p>

                    <fieldset>
                        <form action="php/login.php" method="post">
                            <label>Benutzername</label>
                                <br>
                                    <input type="text" name="username">
                                <br>
                            <label>Passwort</label>
                                <br>
                                    <input type="password" name="password">
                                <br><br>
                                    <input type="submit" value="Login">
                        </form>                                                
                    </fieldset>
            
            <h3>Kundenportal - Screenshots</h3>
            
                <hr>
                
                <img src="http://www.placehold.it/150x150">
                <img src="http://www.placehold.it/150x150">
                <img src="http://www.placehold.it/150x150">
                <img src="http://www.placehold.it/150x150">
                <img src="http://www.placehold.it/150x150">
                <img src="http://www.placehold.it/150x150">
            
        </div>
    </div>
<?php include('includes/footer.php'); ?>