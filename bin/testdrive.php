#!/usr/bin/env php
<?php

require __DIR__ . "/../vendor/autoload.php";


$client = new Carerix_Api_Rest_Client();

$manager = new Carerix_Api_Rest_Manager($client);

$manager->autoDiscoverEntities();

$manager->setUrl('https://api.carerix.com');

$manager->setUsername('??');

$manager->setPassword('??');

Carerix_Api_Rest_Entity::setManager($manager);

$vacancies = Carerix_Api_Rest_Entity_CRVacancy::findAll();

/** @var Carerix_Api_Rest_Entity_CRVacancy $vacancy */
foreach ($vacancies as $vacancy) {
    var_dump(
        $vacancy->getJobTitle(),
        $vacancy->getVacancyInformation(),
        $vacancy->getRequirements()
    );

    echo "\n\n";
}


