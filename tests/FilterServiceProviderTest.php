<?php

use LaravelLegends\EloquentFilter\FilterServiceProvider;

class FilterServiceProviderTest extends Orchestra\Testbench\TestCase
{
    public function testProvider()
    {
        $filter = app(\LaravelLegends\EloquentFilter\Filter::class);

        $this->assertEquals(get_class($filter), \LaravelLegends\EloquentFilter\Filter::class);
    }

    public function testFacade()
    {
        $min = \LaravelLegends\EloquentFilter\Facades\Filter::getRule('min');

        $this->assertEquals($min, \LaravelLegends\EloquentFilter\Rules\Min::class);
    }

    protected function getPackageProviders($app)
    {
        return [FilterServiceProvider::class];
    }
}