<?php
require 'tucuota.php';

class WC_TuCuota extends WC_Payment_Gateway
{
    //TAREAS: AGREGAR FIN DE MES
    //SANDBOX - validación available cuotas no mayor igual a uno

    public function __construct()
    {
        $this->id = 'woo-tucuota';
        $this->method_title = __('Débito automático (TuCuota)', 'woocommerce-tucuota');
        $this->title = __('Débito Automático', 'woocommerce-tucuota');
        $this->has_fields = true;
        $this->init_form_fields();
        $this->init_settings();
        $this->enabled = $this->get_option('enabled');
        $this->title = $this->get_option('title');
        $this->description = $this->get_option('description');
        $this->sandbox_mode = $this->get_option('sandbox_mode');
        $this->token_tucuota_live = $this->get_option('token_tucuota_live');
        $this->token_tucuota_sandbox = $this->get_option('token_tucuota_sandbox');
        $this->interest_quota_0 = $this->get_option('interest_quota_0');
        $this->interest_quota_1 = $this->get_option('interest_quota_1');
        $this->interest_quota_2 = $this->get_option('interest_quota_2');
        $this->interest_quota_3 = $this->get_option('interest_quota_3');
        $this->interest_quota_4 = $this->get_option('interest_quota_4');
        $this->interest_quota_5 = $this->get_option('interest_quota_5');
        $this->interest_quota_6 = $this->get_option('interest_quota_6');
        $this->interest_quota_7 = $this->get_option('interest_quota_7');
        $this->interest_quota_8 = $this->get_option('interest_quota_8');
        $this->interest_quota_9 = $this->get_option('interest_quota_9');
        $this->interest_quota_10 = $this->get_option('interest_quota_10');
        $this->interest_quota_11 = $this->get_option('interest_quota_11');
        $this->interest_quota_12 = $this->get_option('interest_quota_12');

        add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
    }
    public function init_form_fields()
    {
        $this->form_fields = array(
            'enabled' => array(
                'title' => __('Enable/Disable', 'woocommerce-tucuota'),
                'type' => 'checkbox',
                'label' => __('Enable Custom Payment', 'woocommerce-tucuota'),
                'default' => 'no',
            ),
            'title' => array(
                'title' => __('Method Title', 'woocommerce-tucuota'),
                'type' => 'text',
                'description' => __('This controls the title', 'woocommerce-tucuota'),
                'default' => __('Custom Payment', 'woocommerce-tucuota'),
                'desc_tip' => true,
            ),
            'description' => array(
                'title' => __('Customer Message', 'woocommerce-tucuota'),
                'type' => 'textarea',
                'css' => 'width:500px;',
                'default' => 'Indique 16 dígitos de su tarjeta',
                'description' => __('The message which you want it to appear to the customer in the checkout page.', 'woocommerce-tucuota'),
            ),
            'sandbox_mode' => array(
                'title' => __('Sanbox mode', 'woocommerce-tucuota'),
                'type' => 'checkbox',
                'label' => __('Sandbox', 'woocommerce-tucuota'),
                'default' => 'no',
                'description' => __('Check if you want to use sandbox mode for testing', 'woocommerce-tucuota'),
            ),
            'token_tucuota_live' => array(
                'title' => __('Token Tucuota Live', 'woocommerce-tucuota'),
                'type' => 'textarea',
                'css' => 'width:500px;',
                'default' => '',
                'description' => __('Generate token in developer section of tucuota', 'woocommerce-tucuota'),

            ),
            'token_tucuota_sandbox' => array(
                'title' => __('Token Tucuota Sandbox', 'woocommerce-tucuota'),
                'type' => 'textarea',
                'css' => 'width:500px;',
                'default' => '',
                'description' => __('Generate token in developer section of sandbox.tucuota.com', 'woocommerce-tucuota'),

            ),

            'interest_quota_0' => array(
                'title' => __('% interés para pago en dos días habíles con débito', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),

            ),

            'interest_quota_1' => array(
                'title' => __('% interés para 1 cuota', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_2' => array(
                'title' => __('% interés para 2 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_3' => array(
                'title' => __('% interés para 3 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_4' => array(
                'title' => __('% interés para 4 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_5' => array(
                'title' => __('% interés para 5 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_6' => array(
                'title' => __('% interés para 6 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_7' => array(
                'title' => __('% interés para 7 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_8' => array(
                'title' => __('% interés para 8 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_9' => array(
                'title' => __('% interés para 9 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_10' => array(
                'title' => __('% interés para 10 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_11' => array(
                'title' => __('% interés para 11 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ), 'interest_quota_12' => array(
                'title' => __('% interés para 12 cuotas', 'woocommerce-tucuota'),
                'type' => 'number',
                'default' => '',
                'custom_attributes' => array(
                    'step' => 'any',
                    'min' => '0',
                    'max' => '100',
                ),
            ),

        );
    }

    public function process_payment($order_id)
    {

        global $woocommerce;
        $order = new WC_Order($order_id);

        // corregir esto para que no permita avanzar si no es VD en cuota 0, ahora frena todo en cuota 0
        // $marca = $_POST[$this->id . '-marca'];
        // if (($_POST[$this->id . '-cuotas'] == 0) && ($marca != "visa-debito")) {
        //     return array(
        //         'result' => 'failure',
        //     );
        // }

        // Mark as on-hold (we're awaiting the cheque)
        // $order->update_status('on-hold', __('Awaiting payment', 'woocommerce-tucuota'));
        // Reduce stock levels
        // wc_reduce_stock_levels($order_id);

        //por las dudas

        // $post = get_post($post_id);
        // $checkout = $woocommerce->checkout();
        // $author = get_userdata($post->post_author);
        // $title = get_the_title();

        $items = $woocommerce->cart->get_cart();

        foreach ($items as $item => $values) {
            $_product = wc_get_product($values['data']->get_id());
            $product_title = $_product->get_title();
            $product_id = $_product->get_id();
        }
        $name = $woocommerce->customer->get_billing_last_name() . ', ' . $woocommerce->customer->get_billing_first_name();
        $email = $woocommerce->customer->get_billing_email();

        //siempre anda en sandbox, corregir
        // $token = $this->sandbox_mode ? $this->get_option('token_tucuota_sandbox') : $this->get_option('token_tucuota_live');
        // $uri_request = $this->sandbox_mode ? 'https://sandbox.tucuota.com/api/subscriptions' : 'https://api.tucuota.com/api/subscriptions';

        $token = $this->get_option('token_tucuota_live');
        $uri_request = 'https://tucuota.com/api/subscriptions';
        // $uri_request = 'https://sandbox.tucuota.com/api/subscriptions';
        // if ($_SERVER["SERVER_ADDR"] == '127.0.0.1') {
        //     $uri_request = 'https://sandbox.tucuota.com/api/subscriptions';
        // }

        $quotas = $_POST[$this->id . '-cuotas'];
        $nid_property = 'interest_quota_' . $quotas;
        $interest = $this->{$nid_property};
        $final_price = $order->get_total() + ($order->get_total() * $interest / 100);
        $marca_tarjeta = $_POST[$this->id . '-marca'];
        $DNIoCUIL = sanitize_text_field($_POST['DNI/CUIL']);
        $number = $_POST[$this->id . '-admin-note'];

        update_post_meta($order_id, 'Precio Final', sanitize_text_field($final_price));
        update_post_meta($order_id, 'Cantidad de cuotas', sanitize_text_field($quotas));
        update_post_meta($order_id, 'Monto de cuota', sanitize_text_field($final_price / $quotas));
        update_post_meta($order_id, 'Marca tarjeta', sanitize_text_field($marca_tarjeta));
        update_post_meta($order_id, 'Número', sanitize_text_field($number));

        if (date('j') >= 29) {
            $day_of_month = 1;
        } else {
            $day_of_month = date('j');
        }


        //save customer

        $response_customer = (new WP_Http)->request('https://tucuota.com/api/customers', [
            'method' => 'POST',
            'headers' => [
                "Authorization" => "Bearer $token",
                // "Api-Version" => "$version",
            ],
            'body' => [
                'name' => $name,
                'email' => $email,
                'identification_number' => $DNIoCUIL,
            ],
        ]);

        $body_customer = wp_remote_retrieve_body($response_customer);
        $data_customer = json_decode($body_customer)->data;
        $customer_id = $data_customer->id;

        $request = (new WP_Http)->request($uri_request, [
            'method' => 'POST',
            'headers' => [
                "Authorization" => "Bearer $token",
                // "Api-Version" => "$version",

            ],
            'body' => [
                'amount' => $final_price / $quotas,
                'description' => 'Orden ' . $order->id . ' - Actividad ' . $product_id . ' - ' . $product_title,
                // 'payment_method_id' => 'PMyjVWKvxk57',
                'payment_method_number' => $number,
                'interval_unit' => "monthly",
                'interval' => 1,
                'day_of_month' => $day_of_month,
                'count' => $quotas,
                'customer_id' => $customer_id,
            ],
        ]);

        // echo $request['body'];

        // usando clase tucuota a medias
        // $token = $this->get_option('token_tucuota_sandbox');
        //         $tc = new TuCuota($token);

        //         $data = [
        //             'method' => 'POST',
        //             'body' => [
        //                 'amount' => 332,
        //                 'description' => 'WPTESTMMM',
        //                 // 'payment_method_id' => 'PMyjVWKvxk57',
        //                 'payment_method_number' => $_POST[$this->id . '-admin-note'],
        //                 'payment_method_brand' => 'visa-credito',
        //                 'interval_unit' => "monthly",
        //                 'interval' => 1,
        //                 'day_of_month' => 2,
        //                 'count' => 3,
        //                 'customer_id' => 'mmmm',
        //                 'name' => 'prueba mmm',
        //                 'customer_email' => 'mmm@mmm.com',
        //             ],
        //         ];

        //         $uri = 'https://sandbox.tucuota.com/api/subscriptions';
        //         $new = $tc->request($uri, $data);
        //         return $new;

        //save subscription_id for future updates
        $body = wp_remote_retrieve_body($request);
        $data = json_decode($body)->data;
        $subscription_id = $data->id;

        if (empty($subscription_id)) {
            // $request['response']['code'] > 205
            // echo $request['response']['message'];
            return array(
                'result' => 'failure',
                // 'result' => 'failure',
                'redirect' => $this->get_return_url($order),
            );
        } elseif ($request['response']['code'] <= 205) {

            if (!empty($subscription_id)) {
                update_post_meta($order_id, 'subscription_id', sanitize_text_field($subscription_id));
            }

            //esto reduce el stock también (si cancelo posteriormente se sube automáticamente)
            $order->update_status('processing');

            // Remove cart
            $woocommerce->cart->empty_cart();
            // Return thankyou redirect
            return array(
                'result' => 'success',
                // 'result' => 'failure',
                'redirect' => $this->get_return_url($order),
            );
        }
    }

    public function payment_fields()
    {
        if ($this->hide_text_box !== 'yes') {
            global $woocommerce;
            // $amount = $woocommerce->cart->get_total(); aparece con signo ARS
            // $amount = $woocommerce->cart->cart_contents_total; anda pero rara función
            $amount = $woocommerce->cart->total;

            $items = $woocommerce->cart->get_cart();
            foreach ($items as $item => $values) {
                $_product = wc_get_product($values['data']->get_id());
                $product_title = $_product->get_title();
                $product_id = $_product->get_id();
            }
?>


            <fieldset>


                <p>

                    <label>Ingrese la cantidad de cuotas<span class="required">*</span></label>

                    <select id="<?php echo $this->id; ?>-cuotas" name="<?php echo $this->id; ?>-cuotas">

                        <?php

                        if ($this->interest_quota_0 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_0 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 1 + $amount * $this->interest_quota_0 / 1 / 100, 2, ',', ' ')
                        ?>
                            <option value=0><?php echo ("1 cuota de $ " . $final_quota . " ($ " . $final_amount) . ") SOLO CON TARJETA DE DÉBITO"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_1 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_1 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 1 + $amount * $this->interest_quota_1 / 1 / 100, 2, ',', ' ')
                        ?>
                            <option value=1><?php echo ("1 cuota de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_2 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_2 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 2 + $amount * $this->interest_quota_2 / 2 / 100, 2, ',', ' ')
                        ?>
                            <option value=2><?php echo ("2 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_3 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_3 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 3 + $amount * $this->interest_quota_3 / 3 / 100, 2, ',', ' ')
                        ?>
                            <option value=3><?php echo ("3 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_4 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_4 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 4 + $amount * $this->interest_quota_4 / 4 / 100, 2, ',', ' ')
                        ?>
                            <option value=4><?php echo ("4 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_5 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_5 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 5 + $amount * $this->interest_quota_5 / 5 / 100, 2, ',', ' ')
                        ?>
                            <option value=5><?php echo ("5 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_6 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_6 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 6 + $amount * $this->interest_quota_6 / 6 / 100, 2, ',', ' ')
                        ?>
                            <option value=6><?php echo ("6 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_7 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_7 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 7 + $amount * $this->interest_quota_7 / 7 / 100, 2, ',', ' ')
                        ?>
                            <option value=7><?php echo ("7 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_8 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_8 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 8 + $amount * $this->interest_quota_8 / 8 / 100, 2, ',', ' ')
                        ?>
                            <option value=8><?php echo ("8 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_9 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_9 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 9 + $amount * $this->interest_quota_9 / 9 / 100, 2, ',', ' ')
                        ?>
                            <option value=9><?php echo ("9 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_10 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_10 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 10 + $amount * $this->interest_quota_10 / 10 / 100, 2, ',', ' ')
                        ?>
                            <option value=10><?php echo ("10 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_11 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_11 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 11 + $amount * $this->interest_quota_11 / 11 / 100, 2, ',', ' ')
                        ?>
                            <option value=11><?php echo ("11 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        if ($this->interest_quota_12 != "") {

                            $final_amount = number_format($amount + $amount * $this->interest_quota_12 / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / 12 + $amount * $this->interest_quota_12 / 12 / 100, 2, ',', ' ')
                        ?>
                            <option value=12><?php echo ("12 cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        // actividades con plan de pago especial
                        //1609 y 10 es combo elcasco varones 2021, indiv y compartida. 261 es test product
                        if (in_array($product_id, [261, 1609, 1610, 2123])) {
                            $special_interest = 0;
                            $special_installment = 9;
                            $final_amount = number_format($amount + $amount * $special_interest / 100, 2, ',', ' ');
                            $final_quota = number_format($amount / $special_installment + $amount * $special_interest / $special_installment / 100, 2, ',', ' ')
                        ?>
                            <?php echo ("<option value=". $special_installment. ">".$special_installment . " cuotas de $ " . $final_quota . " ($ " . $final_amount) . ")"; ?>
                            </option>
                        <?php }

                        ?>




                    </select>
                </p>


                <p>
                    <label>Indique marca de tarjeta de crédito o débito<span class="required">*</span></label>
                    <select id="<?php echo $this->id; ?>-marca" name="<?php echo $this->id; ?>-marca">
                        <option value="visa-credito">Visa Crédito</option>
                        <option value="visa-debito">Visa Débito</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="nativa">Nativa</option>
                        <option value="argencard">Argencard</option>
                        <option value="diners-club">Diners Club</option>
                        <option value="maestro">Maestro</option>
                        <option value="mastercard-debit">Mastercard Debit</option>
                    </select>

                </p>



                <p class="form-row form-row-wide">
                    <label for="<?php echo $this->id; ?>-admin-note"><?php echo ($this->description); ?> <span class="required">*</span></label>
                    <input id="<?php echo $this->id; ?>-admin-note" name="<?php echo $this->id; ?>-admin-note"></input>
                </p>


                <div class="clear"></div>

            </fieldset>



<?php
        }
    }
}
