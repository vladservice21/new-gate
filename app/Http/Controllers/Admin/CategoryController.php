<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use BalajiDharma\LaravelAdminCore\Requests\StoreCategoryRequest;
use BalajiDharma\LaravelAdminCore\Requests\UpdateCategoryRequest;
use BalajiDharma\LaravelCategory\Models\Category;
use BalajiDharma\LaravelCategory\Models\CategoryType;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:category list', ['only' => ['index', 'show']]);
        $this->middleware('can:category create', ['only' => ['create', 'store']]);
        $this->middleware('can:category edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:category delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(CategoryType $type)
    {
        $items = (new Category)->toTree($type->id, true);

        return view('admin.category.item.index', compact('items', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(CategoryType $type)
    {
        $item_options = Category::selectOptions($type->id, null, true);

        return view('admin.category.item.create', compact('type', 'item_options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request, CategoryType $type)
    {
        if (! $request->has('enabled')) {
            $request['enabled'] = false;
        }

        $type->categories()->create($request->all());

        return redirect()->route('admin.category.type.item.index', $type->id)
            ->with('message', 'Category created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function edit(CategoryType $type, Category $item)
    {
        $item_options = Category::selectOptions($type->id, $item->parent_id ?? $item->id);

        return view('admin.category.item.edit', compact('type', 'item', 'item_options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, CategoryType $type, Category $item)
    {
        if (! $request->has('enabled')) {
            $request['enabled'] = false;
        }

        $item->update($request->all());

        return redirect()->route('admin.category.type.item.index', $type->id)
            ->with('message', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BalajiDharma\LaravelCategory\Models\Category  $typeItem
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CategoryType $type, Category $item)
    {
        $item->delete();

        return redirect()->route('admin.category.type.item.index', $type->id)
            ->with('message', __('Category deleted successfully'));
    }
}
