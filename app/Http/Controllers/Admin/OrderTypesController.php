<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\OrderType;
use Illuminate\Http\Request;

class OrderTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $ordertypes = OrderType::where('title', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ordertypes = OrderType::latest()->paginate($perPage);
        }

        return view('admin.order-types.index', compact('ordertypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.order-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:50'
		]);
        $requestData = $request->all();
        
        OrderType::create($requestData);

        return redirect('admin/order-types')->with('flash_message', 'OrderType added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ordertype = OrderType::findOrFail($id);

        return view('admin.order-types.show', compact('ordertype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ordertype = OrderType::findOrFail($id);

        return view('admin.order-types.edit', compact('ordertype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:50'
		]);
        $requestData = $request->all();
        
        $ordertype = OrderType::findOrFail($id);
        $ordertype->update($requestData);

        return redirect('admin/order-types')->with('flash_message', 'OrderType updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        OrderType::destroy($id);

        return redirect('admin/order-types')->with('flash_message', 'OrderType deleted!');
    }
}
