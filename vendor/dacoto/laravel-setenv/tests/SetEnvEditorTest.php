<?php

namespace dacoto\SetEnv\Tests;

use dacoto\SetEnv\Exceptions\KeyNotFoundException;
use dacoto\SetEnv\Facades\SetEnv;

class SetEnvEditorTest extends TestCase
{
    public function testGetKeys(): void
    {
        $this->assertNotNull(SetEnv::getKeys());
    }

    public function testGetExistingKeyValue(): void
    {
        $this->assertEquals('ONE', SetEnv::getValue('ENV_VAR_1'));
    }

    public function testCreateNewKey(): void
    {
        SetEnv::setKey('TEST_VAR', 'testing');
        SetEnv::save();

        $this->assertEquals('testing', SetEnv::getValue('TEST_VAR'));
    }

    public function testKeyNotFoundException(): void
    {
        $this->expectException(KeyNotFoundException::class);

        SetEnv::getValue('NOT_FOUND_KEY');
    }
}
