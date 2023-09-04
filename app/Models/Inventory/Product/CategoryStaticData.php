<?php

namespace App\Models\Inventory\Product;

interface CategoryStaticData
{
    public const TABLE_NAME         = 'category';

    public const FIELD_ID           = 'id';
    public const FIELD_PARENT_ID    = 'parent_id';
    public const FIELD_TITLE        = 'title';
    public const FIELD_META_TITLE   = 'meta_title';
    public const FIELD_SLUG         = 'slug';
    public const FIELD_CONTENT      = 'content';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_PARENT_ID,
        self::FIELD_TITLE,
        self::FIELD_META_TITLE,
        self::FIELD_SLUG,
        self::FIELD_CONTENT
    ];

    public const CASTS = [];
}
