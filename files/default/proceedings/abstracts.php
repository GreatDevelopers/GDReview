<?php

$strin = shell_exec("pdflatex -interaction=nonstopmode abstracts.tex");
header("Location: abstracts.pdf");


?>
