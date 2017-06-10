<?php

$catalogItems = sprintf("INSERT INTO catalog_items VALUES (%d, %d, %d, '%s', %d, %d, 0, %d, 0, 0, 0, 0, 0, 1, -1);",
    $_POST['id'],
    $_POST['pageId'],
    $_POST['id'],
    $_POST['swf'],
    $_POST['credits'],
    $_POST['points'],
    $_POST['amount']
);

$itemsBase = sprintf("INSERT INTO items_base VALUES (%d, %d, '%s', '%s', 's', %d, %d, 0, 0, %d, %d, 0, 1, 1, 1, 1, 1, 'default', 2, 0, 0, 0, 0);",
    $_POST['id'],
    $_POST['id'],
    $_POST['name'],
    $_POST['swf'],
    $_POST['width'],
    $_POST['length'],
    isset($_POST['isWalkable']) ? 1 : 0,
    isset($_POST['isSeatable']) ? 1 : 0
);

$furnidata = sprintf('
<furnitype id="%d" classname="%s">
    <revision>%d</revision>
    <defaultdir>0</defaultdir>
    <xdim>%d</xdim>
    <ydim>%d</ydim>
    <partcolors/>
    <name>%s</name>
    <description>%s</description>
    <adurl/>
    <offerid>-1</offerid>
    <buyout>0</buyout>
    <rentofferid>-1</rentofferid>
    <rentbuyout>0</rentbuyout>
    <bc>1</bc>
    <excludeddynamic>0</excludeddynamic>
    <customparams/>
    <specialtype>1</specialtype>
    <canstandon>0</canstandon>
    <cansiton>0</cansiton>
    <canlayon>0</canlayon>
    <furniline/>
</furnitype>
',
    $_POST['id'],
    $_POST['swf'],
    $_POST['revision'],
    $_POST['height'],
    $_POST['length'],
    $_POST['name'],
    $_POST['description']
);

echo json_encode(
    array_map('trim', [$catalogItems, $itemsBase, $furnidata])
);
