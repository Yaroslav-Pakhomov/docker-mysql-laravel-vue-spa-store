<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

/**
 * @property mixed $user
 * @property mixed $id
 */
class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Возвращает товары заказа
     *
     * @return BelongsToMany
     */
    public function orderItems(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->orderBy('id', 'desc')->withPivot('quantity', 'cost', 'deleted_at');
    }

    /**
     * Возвращает пользователя заказа
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Обновляет данные заказа и товары в нём
     *
     * @param array $validated
     *      Валидированные данные
     * @param Order $order
     *      Текущие данные по заказу
     *
     * @return Order
     */
    public static function updateOrder(array $validated, Order $order): Order
    {
        // Обновление заказа
        $order_update = [
            "company_name"      => (string)$validated["company_name"],
            "address"           => (string)$validated["address"],
            "city"              => (string)$validated["city"],
            "country"           => (string)$validated["country"],
            "post_code"         => (int)$validated["post_code"],
            "user_id"           => $order->user->id,
            "surname_fact"      => (string)$validated["surname_fact"],
            "name_fact"         => (string)$validated["name_fact"],
            "patronymic_fact"   => (string)$validated["patronymic_fact"],
            "company_name_fact" => (string)$validated["company_name_fact"],
            "address_fact"      => (string)$validated["address_fact"],
            "city_fact"         => (string)$validated["city_fact"],
            "country_fact"      => (string)$validated["country_fact"],
            "post_code_fact"    => (int)$validated["post_code_fact"],
            "notes"             => (string)$validated["notes"],
        ];

        // Обновление/создание пользователя
        $user_update = [
            "email"      => (string)$validated["email"],
            "surname"    => (string)$validated["surname"],
            "name"       => (string)$validated["name"],
            "patronymic" => (string)$validated["patronymic"],
        ];

        foreach ($validated["cart_products"] as $cart_product) {
            $orderItem = OrderItem::query()
                ->where('order_id', $order->id)
                ->where('product_id', (int)$cart_product['id'])
                ->where('deleted_at', NULL)
                ->first();

            if ($orderItem) {
                // Удаление товара из корзины
                if (isset($cart_product['delete']) && (int)$cart_product['delete'] === 1) {
                    $orderItem->delete();
                }

                $orderItem->quantity = (int)$cart_product['quantity'];
                $orderItem->cost = (int)$cart_product['quantity'] * (float)$cart_product['price'];
                $orderItem->save();
            }
//            dump($orderItem->quantity);
//            dump($orderItem->cost);
//            dump($orderItem);
//            dump($cart_product);
        }
        // dump($order_update);
        // dump($user_update);
//        dump($order);
//        dd($validated);

        $order->update($order_update);

        $password = Hash::make('1234');

        User::query()->firstOrCreate([
            'email' => $user_update['email'],
        ], [
            "name"       => $user_update['name'],
            "patronymic" => $user_update['patronymic'],
            "surname"    => $user_update['surname'],
            'email'      => $user_update['email'],
            'password'   => $password,
        ]);

        return $order;
    }
}
