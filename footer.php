<footer>
    <div class="footer">
        <div class="footerkontakt">   
            <p>
                <strong>Bauherrschaft</strong>:<br>
                Bauherrengemeinschaft<br> 
                Baumgarten <br>
                Freudenau Goldach<br>
                c/o Schwager Mätzler Schneider<br>
                Rechtsanwälte
            </p>
        </div>
        <div class="footerkontakt">   
            <p>
                <strong>Ansprechperson</strong><br>
                Sproll &amp; Ramseyer AG<br>
                Frau Angela Signer<br>
                T 071 229 00 29<br>
                angela.signer@sur.ag<br>
                <a class="linkw" href="download/.pdf" download="Anmeldeformular">Anmeldeformular</a>
            </p>
        </div>
        <nav class="footernav">   
            <ul>
                <li><a class="linkw" href="index">Baumgarten</a></li>
                <li><a class="linkw" href="goldach">Goldach</a></li>
                <li><a class="linkw" href="wohnangebot">Wohnangebot</a></li>
                <li><a class="linkw" href="kontakt">Kontakt</a></li>
                <li><a class="linkw" href="kontakt">Downloads</a></li>
                <li><span class="linkw impressum" data-toggle="#impressum">Impressum</span></li>
                
            </ul>
        </nav>
    </div>
        <div id="impressum">    
            <p><b>Design &#38; Interaction:</b><br>Schwizer &#38; Schlatter GmbH<br>Davidstrasse 45<br>9000 St.Gallen<br>
                <a class="linkw" href="https://www.schwizerschlatter.com" target="_blank">www.schwizerschlatter.com</a>
            </p>
        </div>
</footer> 

<div id="optoutbanner99" class="clearfix">
Diese Website nutzt Google Analytics und Cookies um die Website zu optimieren. Wenn Sie fortfahren, akzeptieren Sie das Tracking.<br>
<a id="acceptga" onclick="accept()">Akzeptieren</a>
<a id="gaOptoutButton" 	onclick="gaOptout()">Google Analytics für diese Website deaktivieren</a><br>
<a id="gaOptinButton" 	onclick="gaOptin()">Google Analytics aktivieren</a>
</div>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
var gaProperty = 'UA-11571026-99';
var disableStr = 'ga-disable-' + gaProperty;

document.getElementById("gaOptinButton").remove();
if (document.cookie.indexOf(disableStr + '=true') > -1) { 
	window[disableStr] = true;
    document.getElementById("optoutbanner99").remove();
}
function gaOptout() {
	document.cookie = disableStr + '=true; domain=.baumgarten-goldach.ch; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	window[disableStr] = true; 
	location.reload(true);
}




function accept() {
 	expiry = new Date('July 1, 2099');
  	document.cookie = "accepted=yes, i accept google analytics; expires=" + expiry.toGMTString();
  	document.getElementById('optoutbanner99').remove();
  	location.reload(true);
}
if (document.cookie.indexOf("accepted=") >= 0) {
	document.getElementById('optoutbanner99').remove();
}

    
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-11571026-99', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
</script>
