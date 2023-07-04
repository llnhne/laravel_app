<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use App\Models\Base;

class Admin extends Base implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    public $title = 'Quản Lý Tài Khoản';
    public function listingConfigs()
    {
        $defaultListingconfigs = parent::defaultlistingConfigs();
        $listingconfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text'
            ),
            array(
                'field' => 'name',
                'name' => 'Tên quản trị viên',
                'type' => 'text'
            ),
            array(
                'field' => 'image',
                'name' => 'Ảnh quản trị viên',
                'type' => 'image'
            ),
            array(
                'field' => 'email',
                'name' => 'Email quản trị viên',
                'type' => 'text'
            )
        );
        return array_merge($listingconfigs,$defaultListingconfigs);
    }
}
