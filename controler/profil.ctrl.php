<?php
require_once __DIR__ . '/../model/InventoryItem.class.php';

$inventoryItems = InventoryItem::readAll();

require_once __DIR__ . '/../view/profile.view.php';