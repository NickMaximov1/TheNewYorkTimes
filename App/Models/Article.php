<?php
declare(strict_types=1);

namespace App\Models;

use App\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public string $title;
    public string $content;
    public string $shortContent;
    public string $author;


}