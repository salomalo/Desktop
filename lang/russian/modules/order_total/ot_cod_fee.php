<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_cod_fee.php 914 2007/02/07 13:24:46 VaM $

   VaM Shop - open source ecommerce solution
   http://vamshop.ru
   http://vamshop.com

   Copyright (c) 2007 VaM Shop
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plдnkers ; http://www.themedia.at & http://www.oscommerce.at
   (c) 2004	 xt:Commerce (ot_cod_fee.php,v 1.02 2003/02/24); xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Стоимость доставки');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'Вычисление стоимости доставки');

  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE','Стоимость доставки');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC','Вычисление стоимости доставки');

  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE','Порядок сортировки');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC','Порядок сортировки модуля');

  define('MODULE_ORDER_TOTAL_COD_FEE_FLAT_TITLE','Плоские тарифы');
  define('MODULE_ORDER_TOTAL_COD_FEE_FLAT_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_ITEM_TITLE','Тарифы на единицу');
  define('MODULE_ORDER_TOTAL_COD_FEE_ITEM_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_TABLE_TITLE','Табличные тарифы');
  define('MODULE_ORDER_TOTAL_COD_FEE_TABLE_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_ZONES_TITLE','Тарифы для зон');
  define('MODULE_ORDER_TOTAL_COD_FEE_ZONES_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_AP_TITLE','Австрийская почта');
  define('MODULE_ORDER_TOTAL_COD_FEE_AP_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_CHP_TITLE','Швейцарская почта');
  define('MODULE_ORDER_TOTAL_COD_FEE_CHP_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_CHRONOPOST_TITLE','Хронопост');
  define('MODULE_ORDER_TOTAL_COD_FEE_CHRONOPOST_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_DHL_TITLE','DHL Австрия');
  define('MODULE_ORDER_TOTAL_COD_FEE_DHL_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_DP_TITLE','Немецкая почта');
  define('MODULE_ORDER_TOTAL_COD_FEE_DP_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_UPS_TITLE','UPS');
  define('MODULE_ORDER_TOTAL_COD_FEE_UPS_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_UPSE_TITLE','UPS Экспресс');
  define('MODULE_ORDER_TOTAL_COD_FEE_UPSE_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');

  define('MODULE_ORDER_TOTAL_COD_FEE_FREE_TITLE','Бесплатная доставка (Модуль итого Бесплатная доставка)');
  define('MODULE_ORDER_TOTAL_COD_FEE_FREE_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');
  
  define('MODULE_ORDER_TOTAL_FREEAMOUNT_FREE_TITLE','Бесплатная доставка (Модуль доставки Бесплатная доставка)');
  define('MODULE_ORDER_TOTAL_FREEAMOUNT_FREE_DESC','&lt;Код страны ISO2&gt;:&lt;Стоимость&gt;, ....<br />
  Если указать 00, то доставка разрешена во все страны. 00 нужно указывать в качестве последнего аргумента. Если не указано 00:9.99, доставка в зарубежные страны считаться не будет (невозможно).');  

  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE','Налог');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC','Выберите налог.');
?>