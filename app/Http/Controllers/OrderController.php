<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use TCG\Voyager\Models\Post;

class OrderController extends Controller
{
    /**
     * @param OrderRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderRequest $request)
    {
        $data = $request->except('_token');
        if ($data['title'] ?? null && $data['post_id'] ?? null) {
            $speciality = Post::find($data['post_id']);
            if (!$speciality || $speciality->title != $data['title']) {
                return redirect()->route('orders')->with('error', 'Повторите попытку');
            }
            $data['type'] = Order::TYPE_COURSE;
        }
        Order::create($data);

        return redirect()->route('home')->with('success', 'Заявка принята');
    }
}
