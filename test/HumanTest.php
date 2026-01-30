<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PhpKurs\Model\Human;
use PhpKurs\Model\Profession;

class HumanTest extends TestCase
{
    public static function emptyDataProvider(): array
    {
        return [
            'emptyFirstname' => [
                '',
                'Bauer',
                '67',
                Profession::PROFESSION['taxifahrer'],
                'Firstname is empty'
            ],
            'emptyLastname' => [
                'Lukas',
                '',
                '34',
                Profession::PROFESSION['taxifahrer'],
                'lastname is empty'
            ],

            'emptyAge' => [
                'Lord',
                'Lukas',
                '',
                Profession::PROFESSION['taxifahrer'],
                'age is empty'
            ],
            'emptyProfession' => [
                'Lukas',
                'Sir',
                '55',
                '',
                'is no valid profession'
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
                Profession::PROFESSION['taxifahrer'],
                'Firstname is a number'
            ],
            'numericLastname' => [
                'Lukas',
                '56',
                '34',
                Profession::PROFESSION['taxifahrer'],
                'lastname is a number'
            ],

            'notNumericAge' => [
                'Lord',
                'Lukas',
                'abc',
                Profession::PROFESSION['taxifahrer'],
                'age is not a number'
            ],
            'numericProfession' => [
                'Lukas',
                'Sir',
                '55',
                '12',
                'is no valid profession'
            ]

        ];
    }


    public static function ValideDataProvider(): array
    {
        return [
            'valideData' => [
                'Lord',
                'Mark',
                '67',
                Profession::PROFESSION['taxifahrer'],
            ],

        ];

    }

    #[DataProvider('emptyDataProvider')]
    public function testCreateHumanWithEmptyData(string $firstname, string $lastname, string $age, string $profession, string $message): void
    {
        $this->expectExceptionMessage($message);
        $professionObj = new Profession($profession);
        new Human($firstname, $lastname, $age, $professionObj);
    }

    #[DataProvider('typDataProvider')]
    public function testCreateHumanWithTypData(string $firstname, string $lastname, string $age, string $profession, string $message): void
    {
        $this->expectExceptionMessage($message);
        $professionObj = new Profession($profession);
        new Human($firstname, $lastname, $age, $professionObj);
    }

    #[DataProvider('ValideDataProvider')]
    public function testCreateHumanWithValideData(string $firstname, string $lastname, string $age, string $profession): void
    {
        $professionObj = new Profession($profession);
        $human = new Human($firstname, $lastname, $age, $professionObj);
        $this->assertInstanceOf(Human::class, $human);                                                                                                                      
    }  
}
