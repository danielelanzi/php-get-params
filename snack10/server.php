<?php
  include 'database.php';

  if (!empty($_GET['distance_to_center'])) {
    $filterHotels = [];
    foreach ($hotels as $hotel) {
      if ($_GET['distance_to_center'] >= $hotel['distance_to_center']) {
          $filterHotels[] = $hotel;
      }
    }
  } elseif (!empty($_GET['vote'])) {
    foreach ($hotels as $hotel) {
      if ($_GET['vote'] <= $hotel['vote']) {
          $filterHotels[] = $hotel;
      }
    }
  } elseif (isset($_GET['parking'])) {
    foreach ($hotels as $hotel) {
      if ($hotel['parking']) {
          $filterHotels[] = $hotel;
      }
    }
  } else {
    $filterHotels = $hotels;
  }
?>
