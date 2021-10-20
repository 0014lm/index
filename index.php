<?php
$para      = 'jegs87@gmail.com';
$titulo    = 'IP detected';
?> // php close

<script>
    let xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == XMLHttpRequest.DONE) {
        if (xmlhttp.status == 200) {
            const data = xmlhttp.responseText;
            let field = JSON.parse(data);
            let ip = field.ipAddress;
            <?php $mensaje = ip ?>
        }
      }
    };
    
    xmlhttp.open("GET", "//api.db-ip.com/v2/free/self", true);
    xmlhttp.send();
</script>

<?php
$cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>