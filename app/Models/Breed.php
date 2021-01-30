<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class responsável pela tabela tb_breed 
 */
class Breed extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct(
            "tb_breed",
            [
                "breed_id",
                "breed_name",
                "breed_name_pt",
                "breed_history",
                "breed_about",
                "breed_group_akc",
                "breed_group_akc_pt",
                "breed_group_fci",
                "breed_height",
                "breed_weight",
                "breed_size",
                "breed_lifetime",
                "breed_img",
                "breed_temperament",
                "breed_color",
                "breed_brand_color",
                "breed_head",
                "breed_body"
            ]
        );
    }
}
