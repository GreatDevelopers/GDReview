<?php

$strin = shell_exec("pdflatex -interaction=nonstopmode booklet.tex");
header("Location: booklet.pdf");


?>
