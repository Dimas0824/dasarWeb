<?php
session_start();

if (!isset($_SESSION['users'])) {
  $_SESSION['users'] = [
    'Cakra' => [
      'name' => 'Cakra MAW',
      'phone' => '086746875467',
      'nim' => '2341720009',
      'email' => 'cakramaw@gmail.com',
      'password' => 'cakra123',
      'profile_picture' => 'image.jpg',
    ],
    'Dimas' => [
      'name' => 'Irsyad Dimas',
      'phone' => '085732915325',
      'nim' => '2341720088',
      'email' => 'dimassmadapas@gmail.com',
      'password' => '12345',
      'profile_picture' => 'image.jpg',
    ],
  ];
}
