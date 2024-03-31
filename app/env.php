<?php

return function (array $settings) : array {
    $settings['db']['host'] = 'localhost';
    $settings['db']['database'] = 'biblioteca';
    $settings['db']['database'] = 'biblio_user';
    $settings['db']['database'] = 'biblio';

    $settings['env'] = 'dev'; 

    return $settings
};