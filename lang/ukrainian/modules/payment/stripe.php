<?php
/* -----------------------------------------------------------------------------------------
   $Id: stripe.php 998 2009/05/07 13:24:46 VaM $

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2004	 xt:Commerce (webmoney.php,v 1.4 2003/08/13); xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_STRIPE_TEXT_TITLE', 'Stripe');
define('MODULE_PAYMENT_STRIPE_TEXT_PUBLIC_TITLE', 'Stripe');
define('MODULE_PAYMENT_STRIPE_TEXT_ADMIN_DESCRIPTION', 'Модуль оплаты Stripe.');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION', 'После нажатия кнопки Подтвердить заказ Вы перейдёте на сайт платёжной системы для оплаты заказа, после оплаты Ваш заказ будет выполнен.');
  
define('MODULE_PAYMENT_STRIPE_STATUS_TITLE' , 'Разрешить модуль Stripe');
define('MODULE_PAYMENT_STRIPE_STATUS_DESC' , 'Вы хотите разрешить использование модуля при оформлении заказов?');
define('MODULE_PAYMENT_STRIPE_ALLOWED_TITLE' , 'Разрешённые страны');
define('MODULE_PAYMENT_STRIPE_ALLOWED_DESC' , 'Укажите коды стран, для которых будет доступен данный модуль (например RU,DE (оставьте поле пустым, если хотите что б модуль был доступен покупателям из любых стран))');
define('MODULE_PAYMENT_STRIPE_PUBLIC_KEY_TITLE' , 'Публикуемый ключ:');
define('MODULE_PAYMENT_STRIPE_PUBLIC_KEY_DESC' , 'Укажите Ваш пукбликуемый ключ');
define('MODULE_PAYMENT_STRIPE_SORT_ORDER_TITLE' , 'Порядок сортировки');
define('MODULE_PAYMENT_STRIPE_SORT_ORDER_DESC' , 'Порядок сортировки модуля.');
define('MODULE_PAYMENT_STRIPE_ZONE_TITLE' , 'Зона');
define('MODULE_PAYMENT_STRIPE_ZONE_DESC' , 'Если выбрана зона, то данный модуль оплаты будет виден только покупателям из выбранной зоны.');
define('MODULE_PAYMENT_STRIPE_SECRET_KEY_TITLE' , 'Секретный ключ');
define('MODULE_PAYMENT_STRIPE_SECRET_KEY_DESC' , 'В данной опции укажите Ваш секрутный ключ.');
define('MODULE_PAYMENT_STRIPE_ORDER_STATUS_ID_TITLE' , 'Укажите оплаченный статус заказа');
define('MODULE_PAYMENT_STRIPE_ORDER_STATUS_ID_DESC' , 'Укажите оплаченный статус заказа.');
  
?>