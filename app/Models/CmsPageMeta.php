<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsPageMeta extends Model
{
    protected $table = 'cms_page_meta';

    protected $fillable = [
        'page', 'meta_title', 'meta_description', 'keywords',
        'canonical_url', 'og_title', 'og_description', 'og_image', 'robots',
    ];
}
