<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 22:43
 */

namespace Tests;


use MB\Container;
use MB\Helper\StrHelper;
use MB\Loader\FileLoader;
use MB\Loader\Providers\ConstantsYamlLoader;

class StrHelperTest extends \PHPUnit_Framework_TestCase {
    protected $tag = "{php}return 1;{/php}";
    protected $formula1 = "{%formula:baffs.standart_baff_time%}";
    protected $formula2 = "{%for:baffs.standart_baff_time%}";
    protected $const1 = "{%const:test_case%}";
    protected $const2 = "{%constant:test_case%}";
    protected $field1 = "{%replace:testCaseId%}";
    protected $field2 = "{%rep:testCaseId%}";

    public function setUp() {
        /** @var $loader FileLoader */
        $loader = Container::get("constants_loader");
        $this->assertInstanceOf('MB\Loader\FileLoader', $loader);
        $loader->load("constants");
        $data = $loader->get();
        $this->assertInternalType('array', $data);
        $this->assertEquals("It's test case", $data["test_case"]);
        $this->assertRegExp(StrHelper::CONSTANTA_EX, $this->const1);
        $this->assertRegExp(StrHelper::FIELD_EX, $this->field1);
        $this->assertRegExp(StrHelper::PHP_TAG_EX, $this->tag);
        parent::setUp();
    }

    public function testDepedency() {
        $this->assertEquals("TestCase", StrHelper::classify("test_case"));
        $this->assertEquals("test_case", StrHelper::tableize("TestCase"));
        $this->assertEquals(1, StrHelper::replacePHPTag($this->tag));
        $this->assertEquals("It's test case", StrHelper::replaceConstant($this->const1));
        $this->assertEquals("It's test case", StrHelper::replaceConstant($this->const2));
        $this->assertEquals("It's tested", StrHelper::replaceField($this->field1, array("testCaseId" => "It's tested")));
        $this->assertEquals("It's tested", StrHelper::replaceField($this->field2, array("testCaseId" => "It's tested")));
    }


}
 