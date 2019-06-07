<?php
return array (
  'scopes' => 
  array (
    'websites' => 
    array (
      'admin' => 
      array (
        'website_id' => '0',
        'code' => 'admin',
        'name' => 'Admin',
        'sort_order' => '0',
        'default_group_id' => '0',
        'is_default' => '0',
      ),
      'base' => 
      array (
        'website_id' => '1',
        'code' => 'base',
        'name' => 'Main Website',
        'sort_order' => '0',
        'default_group_id' => '1',
        'is_default' => '1',
      ),
    ),
    'groups' => 
    array (
      0 => 
      array (
        'group_id' => '0',
        'website_id' => '0',
        'name' => 'Default',
        'root_category_id' => '0',
        'default_store_id' => '0',
      ),
      1 => 
      array (
        'group_id' => '1',
        'website_id' => '1',
        'name' => 'Main Website Store',
        'root_category_id' => '2',
        'default_store_id' => '1',
      ),
    ),
    'stores' => 
    array (
      'admin' => 
      array (
        'store_id' => '0',
        'code' => 'admin',
        'website_id' => '0',
        'group_id' => '0',
        'name' => 'Admin',
        'sort_order' => '0',
        'is_active' => '1',
      ),
      'default' => 
      array (
        'store_id' => '1',
        'code' => 'default',
        'website_id' => '1',
        'group_id' => '1',
        'name' => 'Default Store View',
        'sort_order' => '0',
        'is_active' => '1',
      ),
    ),
  ),
  /**
   * 'The configuration file doesn\'t contain the sensitive data by security reason. The sensitive data can be stored in the next environment variables:
   * CONFIG__DEFAULT__CURRENCY__IMPORT__ERROR_EMAIL for currency/import/error_email
   * CONFIG__DEFAULT__DEV__RESTRICT__ALLOW_IPS for dev/restrict/allow_ips
   * CONFIG__DEFAULT__NEWRELICREPORTING__GENERAL__ACCOUNT_ID for newrelicreporting/general/account_id
   * CONFIG__DEFAULT__NEWRELICREPORTING__GENERAL__APP_ID for newrelicreporting/general/app_id
   * CONFIG__DEFAULT__NEWRELICREPORTING__GENERAL__API for newrelicreporting/general/api
   * CONFIG__DEFAULT__NEWRELICREPORTING__GENERAL__INSIGHTS_INSERT_KEY for newrelicreporting/general/insights_insert_key
   * CONFIG__DEFAULT__PAYPAL__GENERAL__BUSINESS_ACCOUNT for paypal/general/business_account
   * CONFIG__DEFAULT__PAYPAL__WPP__API_USERNAME for paypal/wpp/api_username
   * CONFIG__DEFAULT__PAYPAL__WPP__API_PASSWORD for paypal/wpp/api_password
   * CONFIG__DEFAULT__PAYPAL__WPP__API_SIGNATURE for paypal/wpp/api_signature
   * CONFIG__DEFAULT__PAYPAL__FETCH_REPORTS__FTP_LOGIN for paypal/fetch_reports/ftp_login
   * CONFIG__DEFAULT__PAYPAL__FETCH_REPORTS__FTP_PASSWORD for paypal/fetch_reports/ftp_password
   * CONFIG__DEFAULT__PAYPAL__FETCH_REPORTS__FTP_IP for paypal/fetch_reports/ftp_ip
   * CONFIG__DEFAULT__PAYPAL__FETCH_REPORTS__FTP_PATH for paypal/fetch_reports/ftp_path
   * CONFIG__DEFAULT__PAYMENT__BRAINTREE__MERCHANT_ID for payment/braintree/merchant_id
   * CONFIG__DEFAULT__PAYMENT__BRAINTREE__PUBLIC_KEY for payment/braintree/public_key
   * CONFIG__DEFAULT__PAYMENT__BRAINTREE__PRIVATE_KEY for payment/braintree/private_key
   * CONFIG__DEFAULT__PAYMENT__BRAINTREE__MERCHANT_ACCOUNT_ID for payment/braintree/merchant_account_id
   * CONFIG__DEFAULT__PAYMENT__BRAINTREE_PAYPAL__MERCHANT_NAME_OVERRIDE for payment/braintree_paypal/merchant_name_override
   * CONFIG__DEFAULT__PAYMENT__AUTHORIZENET_DIRECTPOST__LOGIN for payment/authorizenet_directpost/login
   * CONFIG__DEFAULT__PAYMENT__AUTHORIZENET_DIRECTPOST__TRANS_KEY for payment/authorizenet_directpost/trans_key
   * CONFIG__DEFAULT__PAYMENT__AUTHORIZENET_DIRECTPOST__TRANS_MD5 for payment/authorizenet_directpost/trans_md5
   * CONFIG__DEFAULT__PAYMENT__AUTHORIZENET_DIRECTPOST__MERCHANT_EMAIL for payment/authorizenet_directpost/merchant_email
   * CONFIG__DEFAULT__SHIPPING__ORIGIN__COUNTRY_ID for shipping/origin/country_id
   * CONFIG__DEFAULT__SHIPPING__ORIGIN__REGION_ID for shipping/origin/region_id
   * CONFIG__DEFAULT__SHIPPING__ORIGIN__POSTCODE for shipping/origin/postcode
   * CONFIG__DEFAULT__SHIPPING__ORIGIN__CITY for shipping/origin/city
   * CONFIG__DEFAULT__SHIPPING__ORIGIN__STREET_LINE1 for shipping/origin/street_line1
   * CONFIG__DEFAULT__SHIPPING__ORIGIN__STREET_LINE2 for shipping/origin/street_line2
   * CONFIG__DEFAULT__CARRIERS__UPS__ACCESS_LICENSE_NUMBER for carriers/ups/access_license_number
   * CONFIG__DEFAULT__CARRIERS__UPS__USERNAME for carriers/ups/username
   * CONFIG__DEFAULT__CARRIERS__UPS__PASSWORD for carriers/ups/password
   * CONFIG__DEFAULT__CARRIERS__UPS__SHIPPER_NUMBER for carriers/ups/shipper_number
   * CONFIG__DEFAULT__CARRIERS__USPS__USERID for carriers/usps/userid
   * CONFIG__DEFAULT__CARRIERS__USPS__PASSWORD for carriers/usps/password
   * CONFIG__DEFAULT__CARRIERS__FEDEX__ACCOUNT for carriers/fedex/account
   * CONFIG__DEFAULT__CARRIERS__FEDEX__METER_NUMBER for carriers/fedex/meter_number
   * CONFIG__DEFAULT__CARRIERS__FEDEX__KEY for carriers/fedex/key
   * CONFIG__DEFAULT__CARRIERS__FEDEX__PASSWORD for carriers/fedex/password
   * CONFIG__DEFAULT__CARRIERS__DHL__ID for carriers/dhl/id
   * CONFIG__DEFAULT__CARRIERS__DHL__PASSWORD for carriers/dhl/password'
   */
  'system' => 
  array (
    'default' => 
    array (
      'web' => 
      array (
        'seo' => 
        array (
          'use_rewrites' => '1',
        ),
        'unsecure' => 
        array (
          'base_url' => 'http://magento-loja.docksal/',
        ),
      ),
      'general' => 
      array (
        'locale' => 
        array (
          'code' => 'pt_BR',
          'timezone' => 'America/Sao_Paulo',
          'weight_unit' => 'kgs',
          'firstday' => '0',
        ),
        'region' => 
        array (
          'display_all' => '1',
          'state_required' => 'BR,CA,ES,US,EE,FI,LV,LT,RO,CH,AT',
        ),
        'country' => 
        array (
          'default' => 'BR',
          'allow' => 'BR',
          'optional_zip_countries' => 'BR',
          'destinations' => 'BR',
        ),
        'store_information' => 
        array (
          'name' => 'Coffee Bean Central',
          'phone' => '12312312',
          'hours' => '8:00 a.m. - 6:00 p.m.',
          'country_id' => 'BR',
          'region_id' => '508',
          'postcode' => '03692000',
          'city' => 'São Paulo',
          'street_line1' => 'Fake Street',
          'street_line2' => NULL,
          'merchant_vat_number' => NULL,
        ),
        'single_store_mode' => 
        array (
          'enabled' => '1',
        ),
      ),
      'currency' => 
      array (
        'options' => 
        array (
          'base' => 'BRL',
          'default' => 'BRL',
          'allow' => 'BRL',
        ),
        'yahoofinance' => 
        array (
          'timeout' => '100',
        ),
        'fixerio' => 
        array (
          'timeout' => '100',
        ),
        'import' => 
        array (
          'service' => 'yahoofinance',
          'time' => '00,00,00',
          'frequency' => 'D',
        ),
      ),
      'catalog' => 
      array (
        'category' => 
        array (
          'root_id' => '2',
        ),
      ),
      'dev' => 
      array (
        'restrict' => 
        array (
        ),
        'debug' => 
        array (
          'template_hints_storefront' => '0',
          'template_hints_admin' => '0',
          'template_hints_blocks' => '0',
        ),
        'template' => 
        array (
          'allow_symlink' => '0',
        ),
        'translate_inline' => 
        array (
          'active' => '0',
          'active_admin' => '0',
        ),
        'js' => 
        array (
          'merge_files' => '0',
          'enable_js_bundling' => '0',
          'minify_files' => '0',
        ),
        'css' => 
        array (
          'merge_css_files' => '0',
          'minify_files' => '0',
        ),
        'static' => 
        array (
          'sign' => '1',
        ),
      ),
      'crontab' => 
      array (
        'default' => 
        array (
          'jobs' => 
          array (
            'currency_rates_update' => 
            array (
              'schedule' => 
              array (
                'cron_expr' => '0 0 * * *',
              ),
            ),
          ),
        ),
      ),
      'newrelicreporting' => 
      array (
        'general' => 
        array (
          'app_name' => NULL,
        ),
      ),
      'admin' => 
      array (
        'security' => 
        array (
          'use_case_sensitive_login' => '0',
        ),
        'dashboard' => 
        array (
          'enable_charts' => '1',
        ),
      ),
      'paypal' => 
      array (
        'general' => 
        array (
          'merchant_country' => 'BR',
        ),
        'wpp' => 
        array (
          'api_authentication' => '0',
          'sandbox_flag' => '0',
          'use_proxy' => '0',
          'button_flavor' => 'dynamic',
        ),
        'fetch_reports' => 
        array (
          'ftp_sandbox' => '0',
          'active' => '0',
          'schedule' => '1',
          'time' => '00,00,00',
        ),
        'style' => 
        array (
          'logo' => NULL,
          'page_style' => NULL,
          'paypal_hdrimg' => NULL,
          'paypal_hdrbackcolor' => NULL,
          'paypal_hdrbordercolor' => NULL,
          'paypal_payflowcolor' => NULL,
        ),
      ),
      'payment' => 
      array (
        'paypal_express' => 
        array (
          'active' => '0',
          'in_context' => '0',
          'title' => 'PayPal Express Checkout',
          'sort_order' => NULL,
          'payment_action' => 'Authorization',
          'visible_on_product' => '1',
          'visible_on_cart' => '1',
          'allowspecific' => '0',
          'debug' => '0',
          'verify_peer' => '1',
          'line_items_enabled' => '1',
          'transfer_shipping_options' => '0',
          'solution_type' => 'Mark',
          'require_billing_address' => '0',
          'allow_ba_signup' => 'never',
          'skip_order_review_step' => '1',
        ),
        'paypal_billing_agreement' => 
        array (
          'active' => '1',
          'title' => 'PayPal Billing Agreement',
          'sort_order' => NULL,
          'payment_action' => 'Authorization',
          'allowspecific' => '0',
          'debug' => '0',
          'verify_peer' => '1',
          'line_items_enabled' => '0',
          'allow_billing_agreement_wizard' => '1',
        ),
        'braintree' => 
        array (
          'active' => '0',
          'title' => 'Credit Card (Braintree)',
          'environment' => 'sandbox',
          'payment_action' => 'authorize',
          'fraudprotection' => '0',
          'debug' => '0',
          'useccv' => '1',
          'cctypes' => 'CUP,AE,VI,MC,DI,JCB,DN,MI',
          'sort_order' => NULL,
          'allowspecific' => '1',
          'specificcountry' => 'BR',
          'countrycreditcard' => 'a:0:{}',
          'verify_3dsecure' => '0',
          'threshold_amount' => NULL,
          'verify_all_countries' => '0',
          'verify_specific_countries' => NULL,
          'descriptor_name' => NULL,
          'descriptor_phone' => NULL,
          'descriptor_url' => NULL,
        ),
        'braintree_paypal' => 
        array (
          'active' => '0',
          'title' => 'PayPal (Braintree)',
          'sort_order' => NULL,
          'payment_action' => 'authorize',
          'allowspecific' => '0',
          'specificcountry' => NULL,
          'require_billing_address' => '0',
          'allow_shipping_address_override' => '1',
          'debug' => '0',
          'display_on_shopping_cart' => '1',
          'skip_order_review' => '0',
        ),
        'braintree_cc_vault' => 
        array (
          'active' => '0',
          'title' => 'Stored Cards (Braintree)',
        ),
        'braintree_paypal_vault' => 
        array (
          'active' => '0',
        ),
        'wps_express' => 
        array (
          'active' => '0',
        ),
        'checkmo' => 
        array (
          'specificcountry' => NULL,
          'payable_to' => NULL,
          'mailing_address' => NULL,
          'min_order_total' => NULL,
          'max_order_total' => NULL,
          'sort_order' => NULL,
        ),
        'banktransfer' => 
        array (
          'specificcountry' => NULL,
          'instructions' => NULL,
          'min_order_total' => NULL,
          'max_order_total' => NULL,
          'sort_order' => NULL,
        ),
        'cashondelivery' => 
        array (
          'specificcountry' => NULL,
          'instructions' => NULL,
          'min_order_total' => NULL,
          'max_order_total' => NULL,
          'sort_order' => NULL,
        ),
        'free' => 
        array (
          'specificcountry' => NULL,
        ),
        'purchaseorder' => 
        array (
          'specificcountry' => NULL,
          'min_order_total' => NULL,
          'max_order_total' => NULL,
          'sort_order' => NULL,
        ),
        'authorizenet_directpost' => 
        array (
          'useccv' => '0',
          'min_order_total' => NULL,
          'max_order_total' => NULL,
          'sort_order' => NULL,
        ),
      ),
      'shipping' => 
      array (
        'origin' => 
        array (
        ),
        'shipping_policy' => 
        array (
          'enable_shipping_policy' => '1',
          'shipping_policy_content' => 'Shipping Policy	',
        ),
      ),
      'carriers' => 
      array (
        'flatrate' => 
        array (
          'active' => '1',
          'title' => 'Custo do frete',
          'type' => 'I',
          'price' => '1.00',
          'handling_fee' => '0.5',
          'specificcountry' => NULL,
          'showmethod' => '0',
          'sort_order' => '1',
        ),
        'freeshipping' => 
        array (
          'name' => 'Grátis',
          'free_shipping_subtotal' => '250',
          'specificcountry' => NULL,
          'showmethod' => '0',
          'sort_order' => NULL,
        ),
        'tablerate' => 
        array (
          'handling_fee' => NULL,
          'specificcountry' => NULL,
          'showmethod' => '0',
          'sort_order' => NULL,
        ),
        'ups' => 
        array (
          'handling_fee' => NULL,
          'free_shipping_enable' => '0',
          'free_shipping_subtotal' => NULL,
          'specificcountry' => NULL,
          'showmethod' => '0',
          'debug' => '0',
          'sort_order' => NULL,
        ),
        'usps' => 
        array (
          'handling_fee' => NULL,
          'free_shipping_enable' => '0',
          'specificcountry' => NULL,
          'debug' => '0',
          'showmethod' => '0',
          'sort_order' => NULL,
        ),
        'fedex' => 
        array (
          'handling_fee' => NULL,
          'residence_delivery' => '0',
          'smartpost_hubid' => NULL,
          'free_shipping_enable' => '0',
          'specificcountry' => NULL,
          'debug' => '0',
          'showmethod' => '0',
          'sort_order' => NULL,
        ),
        'dhl' => 
        array (
          'handling_fee' => NULL,
          'free_method_nondoc' => NULL,
          'free_shipping_enable' => '0',
          'specificcountry' => NULL,
          'showmethod' => '0',
          'debug' => '0',
          'sort_order' => NULL,
        ),
        'imaginationmedia_correios' => 
        array (
          'active' => '1',
          'name' => 'Correios',
          'posting_methods' => '40010,41106,40215',
          'posting_freemethod' => '40010',
          'login' => NULL,
          'password' => NULL,
          'weight_type' => 'kg',
          'owner_hands' => '0',
          'received_warning' => '0',
          'declared_value' => '0',
          'validate_dimensions' => '1',
          'default_height' => '2',
          'default_width' => '16',
          'default_depth' => '11',
          'handling_fee' => NULL,
          'show_deliverydays' => '1',
          'add_deliverydays' => '1',
          'deliverydays_message' => '%s - %d dias para receber',
          'freeshipping_message' => 'Você ganhou frete grátis!',
          'webservice_url' => NULL,
          'max_weight' => '30',
          'enabled_log' => '1',
          'maxdays_update' => NULL,
          'function_mode' => '2',
          'sort_order' => '0',
        ),
      ),
      'tax' => 
      array (
        'calculation' => 
        array (
          'cross_border_trade_enabled' => '0',
        ),
        'defaults' => 
        array (
          'country' => 'BR',
          'postcode' => NULL,
        ),
      ),
    ),
    'websites' => 
    array (
      'base' => 
      array (
        'design' => 
        array (
          'head' => 
          array (
            'default_title' => 'Coffee Bean Central',
            'title_prefix' => NULL,
            'title_suffix' => ' | Coffee Bean Central',
            'default_description' => 'Coffee Bean Central é o melhor lugar para se comprar café na internet',
            'default_keywords' => 'coffee, coffee beans, arabica, ecommerce',
            'includes' => NULL,
          ),
          'header' => 
          array (
            'logo_width' => NULL,
            'logo_height' => NULL,
            'logo_alt' => 'Coffee Bean Central',
            'welcome' => 'Bem vindo ao Coffee Bean Central!',
          ),
          'footer' => 
          array (
            'copyright' => 'Copyright © 2016 Coffee Bean Central. Todos os direitos reservados.',
            'absolute_footer' => NULL,
          ),
          'pagination' => 
          array (
            'pagination_frame_skip' => NULL,
            'anchor_text_for_previous' => NULL,
            'anchor_text_for_next' => NULL,
          ),
          'watermark' => 
          array (
            'image_size' => NULL,
            'image_imageOpacity' => NULL,
            'small_image_size' => NULL,
            'small_image_imageOpacity' => NULL,
            'thumbnail_size' => NULL,
            'thumbnail_imageOpacity' => NULL,
            'swatch_image_size' => NULL,
            'swatch_image_imageOpacity' => NULL,
          ),
          'email' => 
          array (
            'logo_alt' => NULL,
            'logo_width' => NULL,
            'logo_height' => NULL,
          ),
        ),
        'payment' => 
        array (
          'paypal_express_bml' => 
          array (
            'sort_order' => NULL,
          ),
        ),
        'carriers' => 
        array (
          'tablerate' => 
          array (
            'import' => '1559930031,,,,4,0',
          ),
        ),
      ),
    ),
  ),
  'i18n' => 
  array (
  )
);
