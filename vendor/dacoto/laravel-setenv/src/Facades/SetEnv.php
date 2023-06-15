<?php

declare(strict_types=1);

namespace dacoto\SetEnv\Facades;

use dacoto\SetEnv\SetEnvEditor;
use Illuminate\Support\Facades\Facade;

/**
 * @see \dacoto\SetEnv\SetEnvEditor::addEmpty
 * @method static SetEnvEditor addEmpty()
 * @see \dacoto\SetEnv\SetEnvEditor::deleteKeys
 * @method static SetEnvEditor deleteKeys($keys = [])
 * @see \dacoto\SetEnv\SetEnvEditor::save
 * @method static SetEnvEditor save()
 * @see \dacoto\SetEnv\SetEnvEditor::getContent
 * @method static false|string getContent()
 * @see \dacoto\SetEnv\SetEnvEditor::getLines
 * @method static array getLines()
 * @see \dacoto\SetEnv\SetEnvEditor::deleteKey
 * @method static SetEnvEditor deleteKey($key)
 * @see \dacoto\SetEnv\SetEnvEditor::setKeys
 * @method static SetEnvEditor setKeys($data)
 * @see \dacoto\SetEnv\SetEnvEditor::keyExists
 * @method static bool keyExists($key)
 * @see \dacoto\SetEnv\SetEnvEditor::load
 * @method static SetEnvEditor load($filePath = null)
 * @see \dacoto\SetEnv\SetEnvEditor::addComment
 * @method static SetEnvEditor addComment($comment)
 * @see \dacoto\SetEnv\SetEnvEditor::getValue
 * @method static mixed getValue($key)
 * @see \dacoto\SetEnv\SetEnvEditor::getKeys
 * @method static array getKeys($keys = [])
 * @see \dacoto\SetEnv\SetEnvEditor::setKey
 * @method static SetEnvEditor setKey($key, $value = null, $comment = null, $export = false)
 */
class SetEnv extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SetEnvEditor::class;
    }
}
