<?php
/**
 * Copyright (c) 2018-present, Renderforest, LLC.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory.
 */

require 'vendor/autoload.php';

$payload = [
    'templateId' => 701
];
try {
    $getTemplateColorPresets = \Renderforest\Client::getTemplateColorPresets($payload);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    var_dump($e); // handle the error
}

var_dump($getTemplateColorPresets); // handle the success
