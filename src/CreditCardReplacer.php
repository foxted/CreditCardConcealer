<?php

namespace App;

/**
 * Class CreditCardReplacer
 */
class CreditCardReplacer {

//    const PATTERN = '/(?:(4[0-9]{12}(?:[0-9]{3})?)|(5[1-5][0-9]{14})|(6(?:011|5[0-9]{2})[0-9]{12})|(3[47][0-9]{13})|(3(?:0[0-5]|[68][0-9])[0-9]{11})|((?:2131|1800|35[0-9]{3})[0-9]{11}))/';
    const REGEX = '/(3[47]\d{2}([ -]?)(?!(\d)\3{5}|123456|234567|345678)\d{6}\2(?!(\d)\4{4})\d{5}|((4\d|5[1-5]|65)\d{2}|6011)([ -]?)(?!(\d)\8{3}|1234|3456|5678)\d{4}\7(?!(\d)\9{3})\d{4}\7\d{4})/';
    /**
     * @param string $text
     * @return string
     */
    public static function conceal(string $text): string
    {
        return preg_replace_callback(self::REGEX, function($matches) {
            return '-';
        }, $text);
    }
}