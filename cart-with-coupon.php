<?php
/**
 * we have a cart with coupon and we need to calculate the discount amount
 *
 * Note:
 * - the coupon support multiple conditions
 * - the included and excluded are optional
 */
// Order Data
$order                        = new stdClass();
$order->total_cart            = 175;
$order->shipping_cost         = 50;
$order->customer_id           = 101;
$order->cart_content          = [
    ['product_id' => 1, 'product_name' => 'Book', 'product_price' => 5, 'category_id' => 10],
    ['product_id' => 2, 'product_name' => 'Pen', 'product_price' => 1, 'category_id' => 20],
    ['product_id' => 3, 'product_name' => 'Bag', 'product_price' => 120, 'category_id' => 30],
    ['product_id' => 4, 'product_name' => 'Notebook', 'product_price' => 35, 'category_id' => 40],
    ['product_id' => 5, 'product_name' => 'Pencil Case', 'product_price' => 14, 'category_id' => 50]
];
// Coupon Data
$coupon                        = new stdClass();
$coupon->type                  = 'percentage';         // fixed, percentage
$coupon->amount                = 20;                   // Based on type
$coupon->end_date              = strtotime("+1 day");
$coupon->minimum_amount        = 100;
$coupon->free_shipping         = false;                // true, false
$coupon->included_categories   = [10, 20];
$coupon->excluded_categories   = [50];
$coupon->included_products     = [3];
$coupon->excluded_products     = [4, 1];

function calculate_coupon_discount($order, $coupon) {
    $discounted_amount = 0;
    // TODO :: implement the logic
    // Your code
    return $discounted_amount;
}

echo calculate_coupon_discount($order, $coupon);