<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>The Egyptian Hieroglyph Translator</title>
  </head>
<body>
    
    <ul>
        <li><a href="./index.php">HOME</a></li>
        <li><a href="./about.html">ABOUT</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">LINKS</a>
            <div class="dropdown-content">
                <a href="https://www.instagram.com/howtoreadhieroglyphs/">Learn how to read hieroglyphs on Instagram</a>
                <a href="http://www.mummies2pyramids.info/hieroglyphics/hieroglyphics-alphabet.htm">The Ancient Egyptian Hieroglyphic Alphabet</a>
                <a href="https://www.rmo.nl/">Rijksmuseum van Oudheden in Leiden</a>
            </div>
        </li>
    </ul>

    <div class="header">
        <img src="header.jpg" alt="The Egyptian Hieroglyph Translator">
    </div>
    
    <div class="row">
        <div class="main">
            <h1>Translator</h1>
            <p>Use this translator to see what your text looks like when it's written in Egyptian hieroglyphics. 
            Type in your text in the box, press translate and see the results!</p>
            <form action="" method="post">
                <textarea id="inputtaal" name="inputtaal" value="<?php echo $uitkomst; ?>" rows="4" cols="50"></textarea>
                </br></br>
                <input type="submit" class="button" name="translate" value="Translate!">
            </form>
            <?php
                if (isset($_POST['translate']))
                {
                    $letter = $_POST['inputtaal'];
                    $vertaling =  str_split($letter);
                    $vertalingsTabel = [
                    "A" => "\u{1313F}",
                    "a" => "\u{1309D}",
                    "B" => "\u{130C0}",
                    "b" => "\u{130C0}",
                    "D" => "\u{130A7}",
                    "d" => "\u{130A7}",
                    "F" => "\u{13191}",
                    "f" => "\u{13191}",
                    "G" => "\u{133BC}",
                    "g" => "\u{133BC}",
                    "H" => "\u{1339B}",
                    "h" => "\u{13254}",
                    "J" => "\u{131CB}",
                    "j" => "\u{131CB}",
                    "K" => "\u{133A1}",
                    "k" => "\u{133A1}",
                    "M" => "\u{13153}",
                    "m" => "\u{13153}",
                    "N" => "\u{13216}",
                    "n" => "\u{13216}",
                    "P" => "\u{130B8}",
                    "p" => "\u{130B8}",
                    "Q" => "\u{1320E}",
                    "q" => "\u{1320E}",
                    "R" => "\u{1308B}",
                    "r" => "\u{1308B}",
                    "S" => "\u{13219}",
                    "s" => "\u{132F4}",
                    "T" => "\u{133CF}",
                    "t" => "\u{133CF}",
                    "W" => "\u{13171}",
                    "w" => "\u{13171}",
                    "X" => "\u{1340D}",
                    "x" => "\u{13121}",
                    "Y" => "\u{131CB}",
                    "y" => "\u{131CB}",
                    "Z" => "\u{13283}",
                    "z" => "\u{13283}",
                    "c" => "",
                    "C" => "",
                    "e" => "",
                    "E" => "",
                    "i" => "",
                    "I" => "",
                    "l" => "",
                    "L" => "",
                    "o" => "",
                    "O" => "",
                    "u" => "",
                    "U" => "",
                    "v" => "",
                    "V" => "",
                    "!" => "",
                    "." => "",
                    "," => "",
                    "?" => "",
                    "'" => "",
                    " " => "",
                    ];
                $uitkomst = "";
                foreach ($vertaling as $enkele_letter) {
                    $uitkomst = $uitkomst . $vertalingsTabel[$enkele_letter];
                }
                echo implode("", $vertaling) . " = <h2>" . $uitkomst . "</h2>";
                }
            ?>
        </div>
    </div>

    <footer>
        <p>2021 - Wendy Verdonk</p>
    </footer>

</body>
</html>