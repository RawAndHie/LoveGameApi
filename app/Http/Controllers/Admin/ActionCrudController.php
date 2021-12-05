<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ActionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ActionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */

    public function setup()
    {
        CRUD::setModel(\App\Models\Action::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/action');
        CRUD::setEntityNameStrings('action', 'actions');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::column('id');
        CRUD::column('category_id')
            ->entity('category')
            ->name('category_id')
            ->attribute('title');
        CRUD::column('gender_id')
            ->entity('gender')
            ->name('gender_id')
            ->attribute('title');
        CRUD::column('content');
        CRUD::column('content2');
        CRUD::column('created_at');
        CRUD::column('updated_at');

    }

    protected function setupCreateOperation()
    {
        CRUD::field('id');
        CRUD::setValidation(ActionRequest::class);
        CRUD::field('category_id')
            ->label("Category")
            ->entity('category')
            ->name('category_id')
            ->attribute('title')
            ->type('select');
        CRUD::field('gender_id')
            ->label("Dành cho")
            ->entity('gender')
            ->name('gender_id')
            ->attribute('title')
            ->type('select');
//        $this->crud->addField([
//            'label' => 'Category',
//            'type' => 'select',
//            'name' => 'category_id', //
//            'entity' => 'category', // tên entity
//            'attribute' => 'title', // lấy title đưa ra option
//            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
//
//        ]);
        CRUD::field('content')
            ->default('"');
        CRUD::field('content2')
            ->default('.');
//        CRUD::field('content')->type('ckeditor');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
