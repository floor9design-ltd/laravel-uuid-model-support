<?php
/**
 * Uuid4.php
 *
 * Uuid4 trait
 *
 * php 8.2+
 *
 * @category  None
 * @package   Floor9design\LaravelUuidSupport
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @link      https://github.com/floor9design-ltd/laravel-uuid-model-support
 * @version   0.0
 * @since     0.0
 */

namespace Floor9design\LaravelUuidSupport;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Ramsey\Uuid\Uuid;

/**
 * Class Uuid4
 *
 * Adds UUID v4 support
 *
 * @category  None
 * @package   Floor9design\LaravelUuidSupport
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   Private software
 * @version   0.0.0
 * @link      https://floor9design.com
 * @see       https://thisislda.com/
 * @since     File available since Release 0.0.0
 */
trait Uuid4
{
    use HasUuids;

    /**
     * The laravel ID
     * @var $id
     */
    protected $id;

    /**
     * Generate a new UUID for the model.
     */
    public function newUniqueId(): string
    {
        return (string)Uuid::uuid4();
    }

    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['id'];
    }

    /**
     * Creates a "function safe" id, with no dashes/special chars suitable for js etc!
     *
     * @return string
     */
    public function functionSafeId(): string
    {
        return str_replace('-', '', $this->id);
    }
}
