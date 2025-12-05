<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

include "src/Human.php";

class HumanTest extends TestCase
{
    #[DataProvider('emptyDataProvider')]
    public function testCreateHumanWithEmptyData(string $firstname, string $lastname, string $age, string $profession, string $message): void
    {
        $this->expectExceptionMessage($message);
        new Human($firstname, $lastname, $age, $profession);
    }

    #[DataProvider('typDataProvider')]
    public function testCreateHumanWithTypData(string $firstname, string $lastname, string $age, string $profession, string $message): void
    {
        $this->expectExceptionMessage($message);
        new Human($firstname, $lastname, $age, $profession);
    }

    public static function emptyDataProvider(): array
    {
        return [
            'emptyFirstname' => [
                '',
                'Bauer',
                '67',
                'Ultra HD MAX Developer',
                'Firstname is empty'
            ],
            'emptyLastname' => [
                'Lukas',
                '',
                '34',
                'IT',
                'lastname is empty'
            ],

            'emptyAge' => [
                'Lord',
                'Lukas',
                '',
                'Ultra HD MAX Developer',
                'age is empty'
            ],
            'emptyProfession' => [
                'Lukas',
                'Sir',
                '55',
                '',
                'profession is empty'
            ]

        ];
    }

    public static function typDataProvider(): array
    {
        return [
            'numericFirstname' => [
                '34',
                'Bauer',
                '67',
                'Ultra HD MAX Developer',
                'Firstname is a number'
            ],
            'numericLastname' => [
                'Lukas',
                '56',
                '34',
                'IT',
                'lastname is a number'
            ],

            'notNumericAge' => [
                'Lord',
                'Lukas',
                'abc',
                'Ultra HD MAX Developer',
                'age is not a number'
            ],
            'numericProfession' => [
                'Lukas',
                'Sir',
                '55',
                '789',
                'profession is a number'
            ]

        ];
    }

    #[DataProvider('ValideDataProvider')]
    public function testCreateHumanWithValideData(string $firstname, string $lastname, string $age, string $profession): void
    {
       $human = new Human($firstname, $lastname, $age, $profession);
       $this->assertInstanceOf(Human::class, $human);
    }


    public static function ValideDataProvider(): array
    {
        return [
            'valideData' => [
                'Lord',
                'Mark',
                '67',
                'Ultra HD MAX Developer',
            ],

        ];

    }
}
