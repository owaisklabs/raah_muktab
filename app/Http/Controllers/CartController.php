<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart(Request $request){
        return response()->json([
            "status"  => JsonResponse::HTTP_OK,
            "message" => "cart Fetch successfully",
            "data"  => $request->user()->cart()->get(),
        ], JsonResponse::HTTP_OK);

    }

    public function storeCart(Request $request){
        $book = Book::find($request->bookId);

        $cartItem = $request->user()
            ->cart()
            ->where('id', $request->id)
            ->first();
        if ($cartItem) {
            return $this->incrementCartItem($cartItem, $book);
        }
        return $this->addNewCartItem($request, $book);

    }
    private function incrementCartItem($cartItem, Book $book): JsonResponse
    {
        if ($book->quantity <= $cartItem->pivot->quantity) {
            return response()->json([
                'message' => "Qty not available"
            ], 400);
        }

        $cartItem->pivot->increment('quantity');

        return response()->json(['success' => true]);
    }
    private function addNewCartItem(Request $request, Book $book): JsonResponse
    {
        dd($book->quantity < 1);
        if ($book->quantity < 1) {
            return response()->json([
                'message' => "Out of Stock",
            ], 400);
        }

        $request->user()->cart()->attach($book->id, ['quantity' => 1]);

        return response()->json(['success' => true]);
    }
}
