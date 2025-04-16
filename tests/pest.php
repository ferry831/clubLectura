<?php

use Pest\Laravel;

beforeEach(function () {
    // Configuración global para los tests, si es necesario
});

uses(
    Tests\TestCase::class,
    Illuminate\Foundation\Testing\RefreshDatabase::class,
)->in('Feature', 'Unit');
