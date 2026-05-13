<?php

/**
 * Kint Debugger Helpers - Local Development Only
 * 
 * Provides: d(), dd(), t(), dt()
 */

// Load Kint autoloader
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

if (!class_exists('Kint')) {
    return; // Kint not available
}

// Start disabled to prevent header errors
Kint::$enabled_mode = false;

/**
 * d() - Dump and continue
 */
function d(...$vars)
{
    if (!class_exists('Kint')) {
        return;
    }

    Kint::$enabled_mode = true;
    \Kint::dump(...$vars);           // Use full namespace to avoid recursion
    Kint::$enabled_mode = false;
}

/**
 * dd() - Dump and Die
 */
function dd(...$vars)
{
    if (!class_exists('Kint')) {
        die('dd() called but Kint not available');
    }

    Kint::$enabled_mode = true;
    \Kint::dump(...$vars);
    Kint::$enabled_mode = false;

    die(1);
}

/**
 * t() - Short for trace (backtrace)
 */
function t()
{
    if (!class_exists('Kint')) {
        return;
    }

    Kint::$enabled_mode = true;
    Kint::trace();
    Kint::$enabled_mode = false;
}

/**
 * dt() - Dump + Trace (very useful)
 */
function dt(...$vars)
{
    if (!class_exists('Kint')) {
        return;
    }

    Kint::$enabled_mode = true;
    \Kint::dump(...$vars);
    Kint::trace();
    Kint::$enabled_mode = false;
}
