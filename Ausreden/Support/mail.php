<html>
<body>
<?php
     mail("caleb.seeling@web.de" , $_Post["betreff"] ,
     $_Post["nachricht"] , "From: " . $_Post["absender"])

?>
</body>
</html>     