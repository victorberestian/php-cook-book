<?php

/** Class Naming. */
/** BAD */
class CLASS_NAME 
{
    /** Code. */
}

class className 
{
    /** Code. */
}

class classNameForSomethingVeryUserfulOrNotImNotSure 
{
    /** Code. */
}

/** Good */
class ClassName 
{
    /** Code. */
}


/** Class Body. */
/** Bad. */
class ClassName {/** Code. */}

class ClassName {
    /** Code. */
}

class ClassName { /** Code. */
}

/** Good. */
class className
{
    /** Code. */
}


/** BAD */
class oweSomeClassBadNamingFoRTHOseWHOCanReadThisIWiLlPUttWo
{
    public function someFunctionName($param, $param2)
    {
        /** Some code here. */
        return true;
    }
}

/** GOOD */
/**
 * ProxyController [Short description].
 * [Long/full description].
 *
 * @author Victor Berestian <berestianvictor@gmail.com>
 * @author Maxim Antonisin <maxim.antonisin@gmail.com>
 * [Every annotation type must be devided by new line. (Exception same annotation type like @param)]
 *
 * @Rest\RouteResource("proxies")
 *
 * @version 1.0.0
 */
class GoodClass
{
    /**
     * Full description of method
     *
     * @param string         $param          - description of param if it's not dummy.
     * @param OwesomeService $owesomeService - description of param if it's not dummy.
     *
     * @return bool - If return is complicated please describe it.
     *
     * @throws \Excetption
     */
    public function someFunctionName(string $param, OwesomeService $owesomeService): bool
    {
        /** Some code here. */

        /** blank line before return. */

        return true;
    }
}