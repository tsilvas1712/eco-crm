<?php

namespace App\Http\Controllers\CRM\Categories;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CRM\ScheduleController;
use App\Models\ScheduleCategory;
use Illuminate\Http\Request;

class ScheduleCategoryController extends Controller
{
    protected $repository;

    public function __construct(ScheduleCategory $scheduleCategories)
    {
        $this->repository = $scheduleCategories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $categories = $this->repository->tenantScheduleCategory()->paginate(10);        

        return view('CRM.Schedules.Categories.index',[
            'categories'=> $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRM.Schedules.Categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['tenant_id'] = auth()->user()->tenant_id;  
        
        

        $this->repository->create($data);

        return redirect()->route('schedules.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$category = $this->repository->tenantScheduleCategory()->find($id)) {
            return redirect()->back();
        }

        return view('CRM.Schedules.Categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$category = $this->repository->tenantScheduleCategory()->find($id)) {
            return redirect()->back();
        }

        return view('CRM.Schedules.Categories.edit', compact('category'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$category = $this->repository->tenantScheduleCategory()->find($id)) {
            return redirect()->back();
        }

        $data = $request->only(['category', 'description']);

        

        $category->update($data);

        return redirect()->route('schedules.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$category = $this->repository->tenantScheduleCategory()->find($id)) {
            return redirect()->back();
        }

        $category->delete();

        return redirect()->route('schedules.categories.index');
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $categories = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('category', 'LIKE', "%{$request->filter}%");
                                    $query->orWhere('description', $request->filter);
                                }
                            })                            
                            ->tenantScheduleCategory()
                            ->paginate();

        return view('CRM.Schedules.Categories.index',[
            'categories'=> $categories,
            'filters' => $filters
        ]);
    }
}
