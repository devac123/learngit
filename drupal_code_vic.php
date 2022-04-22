<?php

// get variation type usiing query in drupal

$entity_type_manager = \Drupal::entityTypeManager();
$variation_storage = $entity_type_manager->getStorage('commerce_product_variation_type');
$query = $variation_storage->getQuery();
$variationType_get_query = $query;    
$product_variation_types =  $variationType_get_query->execute();

foreach ($product_variation_types as $product_variation_type => $value) {
  array_push($variation_type,ucfirst($value));
}

// get variation type without usiing query in drupal

$variation_type = [];
$product_variation_types = \Drupal::entityTypeManager()->getStorage('commerce_product_variation_type')->loadMultiple();

foreach ($product_variation_types as $key => $value) {
    array_push($variation_type,ucfirst($key));
}
