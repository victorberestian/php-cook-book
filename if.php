<?php

/** BAD **/
if ($condition) {
    $var = true;
} else {
    $var = false;
}

/** GOOD */
$var = $condition;

/** If condtion returns not boolean. */
$var = $condition ? true : false;
$var = $condition ?: false;
$var = $condtion ?? false;

/** BAD **/
if ($var === self::getSomething() || $var == false || $param2 = $param1 - $param3 + $param5 * $param4) {
	/** Some code here. */
}

/** GOOD */
$varIsSomething = $var === self::getSomething();
$param2 = $param1 - $param3 + $param5 * $param4;
if ($varIsSomething || $var === false || $param2 !== 0) {
	/** Some code here. */
}

/** ACCEPTABLE */
if (self::checkIfVarIsSomething($var)
	|| self::checkIfVar($var)
	|| self::getParamTwoCalculated()
	|| $this->isValidForm()
	|| $this->counter === self::LIMIT
) {
	/** Some code here. */
}

