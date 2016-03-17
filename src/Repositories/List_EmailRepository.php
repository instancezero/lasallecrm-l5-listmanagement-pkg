<?php

namespace Lasallecrm\Listmanagement\Repositories;

/**
 *
 * List Management package for the LaSalle Customer Relationship Management package.
 *
 * Based on the Laravel 5 Framework.
 *
 * Copyright (C) 2015 - 2016  The South LaSalle Trading Corporation
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package    List Management package for the LaSalle Customer Relationship Management package
 * @link       http://LaSalleCRM.com
 * @copyright  (c) 2015 - 2016, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */


// LaSalle Software
use Lasallecrm\Lasallecrmapi\Repositories\BaseRepository;
use Lasallecrm\Listmanagement\Models\List_Email;

// Laravel facades
//use Illuminate\Support\Facades\DB;


class List_EmailRepository extends BaseRepository
{
    /**
     * Instance of model
     *
     * @var Lasallecrm\Listmanagement\Models\List_Email
     */
    protected $model;

    /**
     * Inject the model
     *
     * @param  Lasallecrm\Lasallecrmapi\Models\List_Email
     */
    public function __construct(List_Email $model) {
        $this->model = $model;
    }

    /**
     * UPDATE a list_email record so that "enabled" is false
     *
     * @param  int   $emailID
     * @param  int   $listID
     * @return void
     */
    public function enabledFalse($emailID, $listID) {

        $this->model->where('list_id', $listID)
            ->where('email_id', $emailID)
            ->update(['enabled' => false])
        ;
    }
}