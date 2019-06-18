<!DOCTYPE html>
<!--[if IE 7]>	 <html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if IE 8]>	 <html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="de"><!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
    <?php include 'head.php'; ?>
</head>
    
<body class="contact">
    <?php include 'header.php'; ?>
    
    <section class="sectioncontact">
        <article>
            <?php include('form.php'); ?>
            <div class="container">  
                <form id="contact" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
                    <h1>Kontaktformular</h1>
                    <fieldset>
                        <input placeholder="Name&#42;" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                        <span class="error"><?= $name_error ?></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Vorname&#42;" type="text" name="vorname" value="<?= $vorname ?>" tabindex="2">
                        <span class="error"><?= $vorname_error ?></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Email&#42;" type="text" name="email" value="<?= $email ?>" tabindex="3" >
                        <span class="error"><?= $email_error ?></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Telefon&#42;" type="text" name="telefon" value="<?= $telefon ?>" tabindex="4" >
                        <span class="error"><?= $telefon_error ?></span>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Schreiben Sie uns eine Nachricht...." name="mitteilung" tabindex="5" ><?php echo $mitteilung;?></textarea>
                        <span class="error"><?= $mitteilung_error ?></span>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Senden</button>
                    </fieldset>
                    <div class="success"><?= $success; ?></div>
                </form>
            </div>
        </article>    
    </section>
    <section class="sectiondload">
        <article>
            <div class="container">  
                <h1>Downloads</h1>
                <table id="a">
            <tr>      
                <th>Nr.</th>
                <th>EB</th>
                <th>ZWHG</th>
                <th>BF</th>
                <th>MZB</th>
                <th>Plan</th>
            </tr>   
            <tr class="ae1w1">
                <td>A.01</td> 
                <td>EG</td>
                <td>4.5</td>
                <td>133.00</td>
                <td>2'480.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w1.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.1.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae1w2">
                <td>A.02</td> 
                <td>EG</td>
                <td>3.5</td>
                <td>101.00</td>
                <td>2'070.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae1w3">
                <td>A.03</td> 
                <td>EG</td>
                <td>3.5</td>
                <td>93.00</td>
                <td>2'070.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w3.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae2w1">
                <td>A.04</td> 
                <td>1.OG</td>
                <td>4.5</td>
                <td>129.00</td>
                <td>2'480.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae2w2">
                <td>A.05</td> 
                <td>1. OG</td>
                <td>3.5</td>
                <td>101.00</td>
                <td>2'070.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae2w3">
                <td>A.06</td> 
                <td>1. OG</td>
                <td>3.5</td>
                <td>101.00</td>
                <td>2'070.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae3w1">
                <td>A.07</td> 
                <td>2. OG</td>
                <td>4.5</td>
                <td>129.00</td>
                <td>2'480.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae3w2">
                <td>A.08</td> 
                <td>2. OG</td>
                <td>3.5</td>
                <td>101.00</td>
                <td>2'120.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae3w3">
                <td>A.09</td> 
                <td>2. OG</td>
                <td>3.5</td>
                <td>101.00</td>
                <td>2'180.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae1w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.1.2.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae4w1">
                <td>A.10</td> 
                <td>Attika</td>
                <td>3.5</td>
                <td>95.00</td>
                <td>2'170.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae4w1.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.4.1.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr class="ae4w2">
                <td>A.11</td> 
                <td>Attika</td>
                <td>4.5</td>
                <td>131.00</td>
                <td>2'780.-</td>
                <td class="planb">
                    <img class="plani" src="img/plan.svg" alt="plan icon" width="21" height="18">
                    <div class="plan">
                        <img src="img/plan-ae4w2.png" alt="baumgarten grundriss Haus A / Ebene 1 / Wohnung 1">
                        <div class="closer">&#10005;</div>
                        <a class="link" href="download/.pdf" target="_blank"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"><strong> Grundrissplan / A.4.1.</strong> / 4.5 ZWHG (PDF)</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="downloadplan" colspan="7"><a href="download/.pdf" download="Baumgarten Haus A Grundrisspläne"><img src="img/download-icon.svg" width="11" height="11" alt="download icon"> <strong>Haus A</strong> Alle Grundrisse (PDF)</a></td> 
            </tr>
        </table>
            </div>
        </article>    
    </section>
    
    
    
    <?php include 'footer.php'; ?>
    
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
