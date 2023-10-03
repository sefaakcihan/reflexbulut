<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];
    public $register = [
        'name' => [
            'rules' => "required|string",
            "errors" => [
                "string" => "Adınız boşluk veya harflerden oluşmalıdır!",
                "required" => "Ad & Soyad alanı boş olamaz!",

            ]
        ],
        'email' => [
            'rules' => "required|valid_email",
            "errors" => [
                "valid_email" => "E-mail Biçimi Yanlış!",
                "required" => "Email alanı boş olamaz!",
            ]
        ],
        'password' => [
            'rules' => "required|min_length[8]",
            "errors" => [
                "min_length" => "Şifre en az 8 karakterden oluşmalıdır!",
                "required" => "Şifre alanı boş olamaz!",
            ]
        ],
        'phone' => [
            'rules' => "required|integer|max_length[11]|min_length[11]",
            "errors" => [
                "min_length" => "Telefon Numarası 11 Karakterden oluşmalıdır!",
                "max_length" => "Telefon Numarası 11 Karakterden oluşmalıdır!",
                "integer" => "Telefon Numarası sadece numaralarddan oluşabilir!",
                "required" => "Telefon numarası alanı boş olamaz!",
            ]
        ],
        'address' => [
            'rules' => "required",
            "errors" => [
                "required" => "Adres alanı boş olamaz!",
            ]
        ],

    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
