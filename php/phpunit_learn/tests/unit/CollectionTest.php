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
     $this->assertEmpty($collection->get());
    }
    
    /** @test */
    public function count_is_correct_for_items_passed_in() {
        $collection=new \App\Support\Collection(['one','two','tree']);
       // $collection->add(['one','two','tree']);
        $this->assertEquals($collection->count(), 3);
    }
    /** @test */
    public function items_returned_match_items_passed_in(){
        $collection=new \App\Support\Collection(['one','two','tree']);
        $this->assertCount(3, $collection->get());
    }
    
    /** @test */
    public function collection_is_instance_of_iterator_agregate(){
        $collection=new \App\Support\Collection();
        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }
    
    /** @test */
    public function collection_can_be_iterated(){
       $collection=new \App\Support\Collection(['one','two','tree']);
       $items=[];
       foreach ($collection as $item){
           $items[]=$item;
       }
       $this->assertCount(3, $items);
       $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }
    /** @test */
    public function collection_can_be_merged_with_another_collection(){
        $collection1=new \App\Support\Collection(['one','two']);
        $collection2=new \App\Support\Collection(['tree','four','five']);
       $collection1->merge($collection2);
        $this->assertCount(5,$collection1);
    }
    
    /** @test */
    public function can_add_to_existing_collection(){
        $collection=new \App\Support\Collection(['one','two','tree']);
        $items=['tree','four','five',6,7,8];
        $collection->add($items);
        $this->assertEquals(9, $collection->count());

    }
    
    /** @test */
    public function returns_json_encoded_items(){
    $collection=new \App\Support\Collection([
        ['username'=>'alex'],
        ['username'=>'billy']
    ]);
    $this->assertEquals('[{"username":"alex"},{"username":"billy"}]',$collection->toJson());
        
    }
    /** @test */
    public function json_encoding_a_collection_returns_json(){
      $collection=new \App\Support\Collection([
        ['username'=>'alex'],
        ['username'=>'billy']
    ]);
          $encoded= json_encode($collection);
      $this->assertEquals('[{"username":"alex"},{"username":"billy"}]',$encoded);
    }
}
