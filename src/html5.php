<?php
// contoh sebelum php 8.4
$html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is a paragraph.</p>
</body>
</html>
HTML;

$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

// Menemukan elemen <h1>
$h1 = $dom->getElementsByTagName('h1')->item(0);
echo $h1->textContent, "\n";
$p = $dom->getElementsByTagName('p')->item(0);
echo $p->textContent, "\n";

$html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is a paragraph.</p>
</body>
</html>
HTML;

// Membuat DOM HTML5-compliant parser
$dom = \Dom\HTMLDocument::createFromString($html);
$h1 = $dom->querySelector('h1');
echo $h1->textContent, "\n";
$p = $dom->querySelector('p');
echo $p->textContent, "\n";