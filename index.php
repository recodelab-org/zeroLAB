<!DOCTYPE html>
<!--
zeroLAB – a totally naked WordPress theme for you to start your theme development . From zero to hero …
Copyright (C) 2020  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
-->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <div class="wrapper content-wrapper">
        <article>
            <h1>Placeholder</h1>
            <p>Hello! I am just static text, hardcoded into the index.php HTML code. You need to replace and supplement me with the proper WP functions (I suggest to head over to <a href="https://developer.wordpress.org" target="_blank">developer.wordpress.org</a> for that) to make the site dynamic and let WordPress take over …</p>
            <p>
            Please press this button to test JavaScript:  <button onclick="testJavaScript()">JavaScript Test</button>
            </p>
        </article>
    </div>

</body>

<footer>

    <?php wp_footer() ?>
</footer>

</html>
