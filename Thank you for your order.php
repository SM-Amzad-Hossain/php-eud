<?php
/**
 * Customer completed order email - Custom Design
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
 * @hooked WC_Emails::email_header()
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<div style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #444; line-height: 1.6;">
    
    <div style="margin-bottom: 20px;">
        <h2 style="font-weight: 600; font-size: 18px; color: #333;">
            Hello <?php echo esc_html( $order->get_billing_first_name() ); ?>,
        </h2>
        <p style="font-size: 14px; color: #666;">
            Just to let you know — we've received your order #<?php echo $order->get_order_number(); ?>, and it is now being processed:
        </p>
    </div>

    <div style="border: 1px solid #e5e5e5; border-radius: 15px; overflow: hidden; margin-bottom: 30px;">
        <table cellspacing="0" cellpadding="12" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #3D0075; color: #ffffff; text-align: left;">
                    <th style="font-size: 14px; text-transform: uppercase;">Product</th>
                    <th style="font-size: 14px; text-transform: uppercase;">Quantity</th>
                    <th style="font-size: 14px; text-transform: uppercase;">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ( $order->get_items() as $item_id => $item ) {
                    $product = $item->get_product();
                    ?>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="font-size: 14px; font-weight: bold; color: #3D0075;">
                            <?php echo esc_html( $item->get_name() ); ?>
                        </td>
                        <td style="font-size: 14px; font-weight: bold; color: #333;">
                            <?php echo esc_html( $item->get_quantity() ); ?>
                        </td>
                        <td style="font-size: 14px; font-weight: bold; color: #333;">
                            <?php echo $order->get_formatted_line_subtotal( $item ); ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <?php
                $totals = $order->get_order_item_totals();
                if ( $totals ) {
                    $last_item = end($totals);
                    reset($totals);
                    foreach ( $totals as $key => $total ) {
                        $is_last = ( $total === $last_item );
                        $bg_style = $is_last ? 'background-color: #3D0075; color: #ffffff;' : 'background-color: #ffffff; color: #333;';
                        ?>
                        <tr style="<?php echo $bg_style; ?>">
                            <th colspan="2" style="text-align: left; border-top: 1px solid #eee; font-size: 14px; <?php echo $is_last ? 'border-radius: 0 0 0 15px;' : ''; ?>">
                                <?php echo $total['label']; ?>
                            </th>
                            <td style="text-align: right; border-top: 1px solid #eee; font-size: 14px; font-weight: bold; <?php echo $is_last ? 'border-radius: 0 0 15px 0;' : ''; ?>">
                                <?php echo $total['value']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tfoot>
        </table>
    </div>

    <div style="width: 100%; border: 1px solid #e5e5e5; border-radius: 20px; padding: 25px; margin-bottom: 30px;">
        <table style="width: 100%;" cellspacing="0" cellpadding="0">
            <tr>
                <td style="width: 50%; vertical-align: top;">
                    <h3 style="color: #3D0075; font-size: 16px; margin-bottom: 10px;">Billing address</h3>
                    <address style="font-style: normal; font-size: 13px; color: #555; line-height: 1.5;">
                        <?php echo wp_kses_post( $order->get_formatted_billing_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
                        <?php if ( $order->get_billing_phone() ) : ?>
                            <br/><a href="tel:<?php echo esc_attr( $order->get_billing_phone() ); ?>" style="color: #3D0075; text-decoration: underline;"><?php echo esc_html( $order->get_billing_phone() ); ?></a>
                        <?php endif; ?>
                        <?php if ( $order->get_billing_email() ) : ?>
                            <br/><a href="mailto:<?php echo esc_attr( $order->get_billing_email() ); ?>" style="color: #3D0075; text-decoration: underline;"><?php echo esc_html( $order->get_billing_email() ); ?></a>
                        <?php endif; ?>
                    </address>
                </td>
                <td style="width: 50%; vertical-align: top;">
                    <h3 style="color: #3D0075; font-size: 16px; margin-bottom: 10px;">Shipping address</h3>
                    <address style="font-style: normal; font-size: 13px; color: #555; line-height: 1.5;">
                     <?php echo wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
                    </address>
                </td>
            </tr>
        </table>
    </div>

    <div style="text-align: center; margin-bottom: 20px;">
        <p style="font-size: 16px; font-weight: bold; color: #3D0075;">Thanks for using e-idpa.com!</p>
    </div>

</div>

<?php
/*
 * @hooked WC_Emails::email_footer()
 */
do_action( 'woocommerce_email_footer', $email );