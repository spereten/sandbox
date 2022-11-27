<?php

function string(string $string): \Spereten\String\Services\StringService{
    return new \Spereten\String\Services\StringService($string);
}