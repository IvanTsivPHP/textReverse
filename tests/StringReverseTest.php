<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Service\StringService;

class StringReverseTest extends  TestCase
{
    public function testReverseString()
    {
        $input = "Some text.With spaces and stuff...";
        $assert = "...ffuts dna secaps htiW.txet emoS";

        $result = StringService::reverseString($input);

        $this->assertEquals($assert, $result);
    }

}