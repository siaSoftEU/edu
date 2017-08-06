<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColectionTest
 *
 * @author iulian
 */
class CollectionTest extends \PHPUnit_Framework_TestCase{
    /** @test */
    public function empty_instantiated_collection_returns_no_items() {
     $collection=new \App\Support\Collection();
     $this->assertEmpty($collection);
    }
}
