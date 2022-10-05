<?php

function logError($text): void
{
    error_log($text, 3, 'error_log');
}
logError('fffffffffffffffffffffffffffffffffffff');
logError('iiitititititititiit');
logError('hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');
