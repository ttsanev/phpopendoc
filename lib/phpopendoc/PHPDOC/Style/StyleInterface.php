<?php
/**
 * This file is part of the PHP Open Doc library.
 *
 * @author Jason Morriss <lifo101@gmail.com>
 * @since  1.0
 *
 */
namespace PHPDOC\Style;

// @codeCoverageIgnoreStart

interface StyleInterface
{
    public function getId();

    public function setId($id);

    public function getName();

    public function getType();

    public function getProperties();

}
