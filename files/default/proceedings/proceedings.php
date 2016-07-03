<?php

$strin = shell_exec("pdflatex -interaction=nonstopmode Proceedings.tex");
header("Location: Proceedings.pdf");


?>
