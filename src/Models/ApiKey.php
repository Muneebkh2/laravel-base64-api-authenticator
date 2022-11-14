<?php

namespace Muneebkh2\LaravelBase64ApiAuthenticator\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ApiKey extends Model
{
    use SoftDeletes, HasFactory;

    protected static $nameRegex = '/^[a-z0-9-]{1,255}$/';

    /**
     * Generate a secure unique API key
     *
     * @return string
     */
    public static function generate() : string
    {
        do {
            $key = Str::random(64);
        } while (self::keyExists($key));

        return $key;
    }

    /**
     * Get ApiKey record by key value
     *
     * @param string $key
     * @return \App\Models\ApiKey|null
     */
    public static function getByKey(string $key) :? self
    {
        return self::where([
            'key'    => $key,
            'active' => 1
        ])->first();
    }
    /**
     * Check if key is valid
     *
     * @param string $key
     * @return bool
     */
    public static function isValidKey(string $key) : bool
    {
        return self::getByKey($key) instanceof self;
    }

    /**
     * Check if name is valid format
     *
     * @param string $name
     * @return bool
     */
    public static function isValidName(string $name) : bool
    {
        return (bool) preg_match(self::$nameRegex, $name);
    }

    /**
     * Check if a key already exists
     *
     * Includes soft deleted records
     *
     * @param string $key
     * @return bool
     */
    public static function keyExists(string $key) : bool
    {
        return self::where('key', $key)->withTrashed()->first() instanceof self;
    }

    /**
     * Check if a name already exists
     *
     * Does not include soft deleted records
     *
     * @param string $name
     * @return bool
     */
    public static function nameExists(string $name) : bool
    {
        return self::where('name', $name)->first() instanceof self;
    }
}
