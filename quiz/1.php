<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
  <label for="input">Masukkan string:</label>
  <input type="text" id="input" name="input">
  <br><br>
  <button type="button" onclick="ubah_huruf()">Ubah Huruf</button>
</form>

    <?php
        function ubah_huruf($string) {
            $abjad = "abcdefghijklmnopqrstuvwxyz";
            $hasil = "";
            
            for ($i=0; $i < strlen($string); $i++) { 
                $posisi = strpos($abjad, $string[$i]);
                if ($posisi === false) {
                    $hasil .= $string[$i];
                } else {
                    $hasil .= substr($abjad, $posisi + 1, 1);
                }
            }
            
            return $hasil;
        } 
        echo("Aku");
        
        
    ?>

<!-- <br>
<p>Hasilnya adalah: </p>

<div id ="jawaban">

</div>

<script>
  function process() {
    var input = document.getElementById("input").value;
    var hasil = "";
    
    // for (var i = 0; i < input.length; i++) {
    //   var code = input.charCodeAt(i);
    //   if (code >= 97 && code <= 122) {
    //     output += String.fromCharCode((code - 97 + 1) % 26 + 97);
    //   } else if (code >= 65 && code <= 90) {
    //     output += String.fromCharCode((code - 65 + 1) % 26 + 65);
    //   } else {
    //     output += input[i];
    //   }
    // }
    jawaban.innerHTML = hasil;
  } -->
</script>

    
</body>
</html>