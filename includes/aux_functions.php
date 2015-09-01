<?php

function onlyNumbers($string)
{
    return preg_replace('/\D/', '', $string);
}