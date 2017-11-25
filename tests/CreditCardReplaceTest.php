<?php

namespace Tests;

use App\CreditCardReplacer;

/**
 * Class CreditCardReplaceTest
 */
class CreditCardReplaceTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_replace_a_visa_credit_card_number_by_a_dash_in_a_string()
    {
        $text = "My credit card number is 4929574355463732 and my phone number is 778-317-4194";

        $text = CreditCardReplacer::conceal($text);

        var_dump($text);

        $this->assertEquals("My credit card number is - and my phone number is 778-317-4194", $text);
    }

    /** @test */
    public function it_can_replace_a_mastercard_credit_card_number_by_a_dash_in_a_string()
    {
        $text = "My credit card number is 5197705037568231 and my phone number is 778-317-4194";

        $text = CreditCardReplacer::conceal($text);

        $this->assertEquals("My credit card number is - and my phone number is 778-317-4194", $text);
    }

    /** @test */
    public function it_can_replace_a_discover_credit_card_number_by_a_dash_in_a_string()
    {
        $text = "My credit card number is 6011473991861470 and my phone number is 778-317-4194";

        $text = CreditCardReplacer::conceal($text);

        $this->assertEquals("My credit card number is - and my phone number is 778-317-4194", $text);
    }

    /** @test */
    public function it_can_replace_a_american_express_credit_card_number_by_a_dash_in_a_string()
    {
        $text = "My credit card number is 378592968082925 and my phone number is 778-317-4194";

        $text = CreditCardReplacer::conceal($text);

        $this->assertEquals("My credit card number is - and my phone number is 778-317-4194", $text);
    }

    /** @test */
    public function it_can_replace_a_visa_credit_card_number_with_spaces_by_a_dash_in_a_string()
    {
        $text = "My credit card number is 4929 5743 5546 3732 and my phone number is 778-317-4194";

        $text = CreditCardReplacer::conceal($text);

        $this->assertEquals("My credit card number is - and my phone number is 778-317-4194", $text);
    }

    /** @test */
    public function it_can_replace_a_visa_credit_card_number_with_dashes_by_a_dash_in_a_string()
    {
        $text = "My credit card number is 4929-5743-5546-3732 and my phone number is 778-317-4194";

        $text = CreditCardReplacer::conceal($text);

        $this->assertEquals("My credit card number is - and my phone number is 778-317-4194", $text);
    }

}