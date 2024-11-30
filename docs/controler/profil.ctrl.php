<?php
require_once 'model/InventoryItem.class.php';

$inventoryItems = InventoryItem::readAll();

require_once 'view/profile.view.php';