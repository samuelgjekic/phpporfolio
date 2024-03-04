<!-- Nedan visar vi alla posts som hämtats från SQL databasen. -->
<div class="container">
    <br><h2>Några av mina projekt</h2><br><p>Hämtade i SQL Databas med PHP, se ovan för source code.</p><br>
    <div class="row">
        <?php
        // Jag väljer här att använda mig av MySQLI prepared statements för att hämta informationen från databasen.
        $query = 'SELECT titel, beskrivning, url, bild FROM hemsidor';
        $sqli = $db->prepare($query);
        $sqli->bind_result($titel, $beskrivning, $url, $bild);
        $sqli->execute();
        // Nedan visar vi snyggt upp värdena från databasen
        while ($sqli->fetch()) {
        ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/<?php echo $bild; ?>" class="card-img-top" alt="<?php echo $titel; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titel; ?></h5>
                        <p class="card-text"><?php echo strlen($beskrivning) > 255 ? substr($beskrivning, 0, 400) . '...' : $beskrivning; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo $url; ?>" class="btn btn-primary">Besök sida</a>
                    </div>
                </div>
            </div>
        <?php
        } // Avsluta while loop
        ?>
    </div>
</div>
