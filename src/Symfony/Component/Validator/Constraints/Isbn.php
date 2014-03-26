<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

/**
 * @Annotation
 *
 * @author The Whole Life To Learn <thewholelifetolearn@gmail.com>
 * @author Manuel Reinhard <manu@sprain.ch>
 *
 * @api
 */
class Isbn extends Constraint
{
    public $isbn10Message   = 'This value is not a valid ISBN-10.';
    public $isbn13Message   = 'This value is not a valid ISBN-13.';
    public $bothIsbnMessage = 'This value is neither a valid ISBN-10 nor a valid ISBN-13.';
    public $type;
    public $message;

    /**
     * @deprecated will be removed in Symfony 2.5 - use type option instead
     * @var bool
     */
    public $isbn10 = false;

    /**
     * @deprecated will be removed in Symfony 2.5 - use type option instead
     * @var bool
     */
    public $isbn13 = false;

    /**
     * {@inheritDoc}
     */
    public function __construct($options = null)
    {
        parent::__construct($options);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultOption()
    {
        return 'type';
    }
}
