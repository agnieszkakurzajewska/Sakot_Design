<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ccc9c02c649b599103b315b655544ce8463a6eb32a699789f198db12d382cb11 */
class __TwigTemplate_4a392603a0eb9beb8221280ae3c4634a411715d4cde151ea7a15c0411bb35001 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ccc9c02c649b599103b315b655544ce8463a6eb32a699789f198db12d382cb11"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ccc9c02c649b599103b315b655544ce8463a6eb32a699789f198db12d382cb11"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Wydajno???? ??? By Sakot Design</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.7.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Z??o??ono nowe zam??wienie w Twoim sklepie.';
    var order_number_msg = 'Numer zam??wienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zam??wienie';
    var new_customer_msg = 'Nowy klient zarejestrowa?? si?? w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomo???? pojawi??a si?? w Twoim sklepie.';
    var see_msg = 'Przeczytaj t?? wiadomo????';
    var token = '69c34f9505fb65092bf320cc9eacc80e';
    var token_admin_orders = '5b221c127582ffd31504314726ea12d7';
    var token_admin_customers = '0d1056aa9fc0f308934d0baaf93770e6';
    var token_admin_customer_threads = '6bc83dcf3b7210cb919ac353242b7df4';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'cf6af1ea9e01741e0b569d19642830ef';
    var choose_language_translate = 'Wybierz j??zyk:';
    var default_language = '2';
    var admin_modules_link = '/voh67dpeizgwbqrm/index.php/improve/modules/catalog/recommended?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw';
    var admin_notification_get_link = '/voh67dpeizgwbqrm/index.php/common/notifications?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw';
    var admin_notification_push_link = '/voh67dpeizgwbqrm/index.php/common/notifications/ack?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiod??a si??';
    var errorLogin = 'PrestaShop nie m??g?? zalogowa?? si?? do Dodatk??w, sprawd?? swoje uprawnienia i po????czenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/voh67dpeizgwbqrm/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/voh67dpeizgwbqrm/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/voh67dpeizgwbqrm\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/voh67dpeizgwbqrm\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/default/js/bundle/module/module_card.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/voh67dpeizgwbqrm/index.php/common/notifications?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/by-sakot-design.com\\/voh67dpeizgwbqrm\\/index.php?controller=AdminGamification&token=c8a40ee85b90fea0723414555a63284b\";
            var current_id_tab = 105;
        </script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-pl adminperformance\"
  data-base-url=\"/voh67dpeizgwbqrm/index.php\"  data-token=\"9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminDashboard&amp;token=dc9035e1ac09dd5646846325bc63fd53\"></a>
      <span id=\"shop_version\">1.7.7.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dost??p
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php/sell/catalog/categories/new?token=1f883143f9ec09ece7aa68150ba8e180\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fe5f8c4850c4aff8d63ba9afa355cfc6\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php/sell/catalog/products/new?token=1f883143f9ec09ece7aa68150ba8e180\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c385a0206f1e53abf6f7fdcce921e2f9\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php/improve/modules/manage?token=1f883143f9ec09ece7aa68150ba8e180\"
                 data-item=\"Zainstalowane modu??y\"
      >Zainstalowane modu??y</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminOrders&amp;token=5b221c127582ffd31504314726ea12d7\"
                 data-item=\"Zam??wienia\"
      >Zam??wienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"113\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminQuickAccesses&token=969320b23be424450301365bea404de5\"
        data-prompt-text=\"Prosz?? poda?? nazw?? tego skr??tu:\"
        data-link=\"Wydajno???? - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualn?? stron?? do Szybkiego dost??pu
      </a>
        <a class=\"dropdown-item\" href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminQuickAccesses&token=969320b23be424450301365bea404de5\">
      <i class=\"material-icons\">settings</i>
      Zarz??dzaj Szybkiem dost??pem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/voh67dpeizgwbqrm/index.php?controller=AdminSearch&amp;token=c3aad64343698737a87fa09de7561ac6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wsz??dzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wsz??dzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wsz??dzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zam??wienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zam??wienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zam??wienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Modu??y\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modu??u\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modu??y</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Tw??j sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wy??wietlane s?? wszystkie b????dy i komunikaty PHP. Gdy nie jest ju?? potrzebny, <strong>wy????cz</strong> ten tryb.</p>\"
             href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://by-sakot-design.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zam??wienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomo??ci<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zam??wie?? :(<br>
              Czy sprawdza??e?? ostatnio wsp????czynnik konwersji?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klient??w :(<br>
              Czy jeste?? aktywny w mediach spo??eczno??ciowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomo??ci.<br>
              To wi??cej, czasu na co?? innego!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/bysakotdesign%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Site</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/employees/1/edit?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\">
      <i class=\"material-icons\">settings</i>
      Tw??j profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\"><i class=\"material-icons\">book</i> Materia??y</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Znajd?? eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminLogin&amp;logout=1&amp;token=3e9a030d318ddd253cbdea049c626b7e\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj si??</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/voh67dpeizgwbqrm/index.php/configure/advanced/employees/toggle-navigation?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminDashboard&amp;token=dc9035e1ac09dd5646846325bc63fd53\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzeda??</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zam??wienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/invoices/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/credit-slips/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/delivery-slips/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Druk wysy??ki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCarts&amp;token=04d9fcecbb20baf2de24c7d24997e060\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/products?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/products?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/categories?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/monitoring/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminAttributesGroups&amp;token=f369123957a96a4dfd57e2833f280e46\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/brands/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Marki i Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/attachments/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCartRules&amp;token=fe5f8c4850c4aff8d63ba9afa355cfc6\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/stocks/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/sell/customers/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/customers/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/addresses/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCustomerThreads&amp;token=6bc83dcf3b7210cb919ac353242b7df4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obs??uga klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCustomerThreads&amp;token=6bc83dcf3b7210cb919ac353242b7df4\" class=\"link\"> Obs??uga klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/customer-service/order-messages/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Wiadomo??ci zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminReturn&amp;token=157501aaecdd970c634645b1447db8cd\" class=\"link\"> Zwroty produkt??w
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminMetricsStats&amp;token=0ff9f5366eec44c037836792ddacde09\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminMetricsStats\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminMetricsStats&amp;token=0ff9f5366eec44c037836792ddacde09\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminLegacyStatsMetrics\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminLegacyStatsMetrics&amp;token=ece70cfb917d1ed223cc48d7fe2e0573\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/modules/manage?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modu??y
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/modules/manage?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Mened??er modu????w
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/modules/addons/modules/catalog?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/themes/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygl??d
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/themes/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/modules/addons/themes/catalog?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/mail_theme/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/cms-pages/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/modules/positions/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminImages&amp;token=f5e4d975e59491010a0524e695aabbcc\" class=\"link\"> Zdj??cia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/modules/link-widget/list?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCarriers&amp;token=30b3c7db19f3a7fe2da3e3af88f4bda8\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysy??ka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCarriers&amp;token=30b3c7db19f3a7fe2da3e3af88f4bda8\" class=\"link\"> Przewo??nicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/shipping/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/payment/payment_methods?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      P??atno????
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/payment/payment_methods?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> P??atno??ci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/payment/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/localization/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Mi??dzynarodowe
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/localization/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminZones&amp;token=6e25eed74dc67116da3b38fe8e41ccad\" class=\"link\"> Po??o??enie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/taxes/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/translations/settings?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> T??umaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/preferences/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/preferences/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Og??lne
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/order-preferences/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/product-preferences/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/customer-preferences/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/contacts/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/seo-urls/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminSearchConf&amp;token=09045759d109d0843385c316ac8ad70e\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminGamification&amp;token=c8a40ee85b90fea0723414555a63284b\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/system-information/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/system-information/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Wydajno????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/administration/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/emails/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/import/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/employees/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Zesp????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/sql-requests/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/logs/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/webservice-keys/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Zaawansowane</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" aria-current=\"page\">Wydajno????</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Wydajno????          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/clear-cache?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\"                  title=\"Wyczy???? pami???? podr??czn??\"                >
                  <i class=\"material-icons\">delete</i>                  Wyczy???? pami???? podr??czn??
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/voh67dpeizgwbqrm/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.7.5%2526country%253Dpl/Pomoc?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <!-- begin /home/srv38468/domains/by-sakot-design.com/public_html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane modu??y i us??ugi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/voh67dpeizgwbqrm/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /home/srv38468/domains/by-sakot-design.com/public_html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1132
        $this->displayBlock('content_header', $context, $blocks);
        // line 1133
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1134
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1135
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1136
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dost??pna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzysta?? z komputera stacjonarnego, aby uzyska?? dost??p do tej strony, dop??ki nie zostanie zoptymalizowana pod k??tem urz??dze?? mobilnych.
  </p>
  <p class=\"mt-2\">
    Dzi??kujemy.
  </p>
  <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminDashboard&amp;token=dc9035e1ac09dd5646846325bc63fd53\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=bysakotdesign%40gmail.com&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fby-sakot-design.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/voh67dpeizgwbqrm/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Po????cz sw??j sklep z rynkiem PrestaShop, ??eby automatycznie importowa?? wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj si???? PrestaShop Addons! Przegl??daj Oficjalny Rynek PrestaShop i znajd?? ponad 3500 innowacyjnych modu????w i szablon??w, kt??re optymalizuj?? stopnie konwersji, zwi??kszaj?? ruch, buduj?? lojalno???? klient??w i zwi??kszaj?? Twoj?? produktywno????</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Po????cz si?? z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomnia??em has??a</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=bysakotdesign%40gmail.com&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fby-sakot-design.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtw??rz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj si??
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1243
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1132
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1133
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1134
    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1135
    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1243
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ccc9c02c649b599103b315b655544ce8463a6eb32a699789f198db12d382cb11";
    }

    public function getDebugInfo()
    {
        return array (  1417 => 1243,  1400 => 1135,  1383 => 1134,  1366 => 1133,  1349 => 1132,  1316 => 103,  1302 => 1243,  1193 => 1136,  1190 => 1135,  1187 => 1134,  1184 => 1133,  1182 => 1132,  149 => 103,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Wydajno???? ??? By Sakot Design</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.7.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Z??o??ono nowe zam??wienie w Twoim sklepie.';
    var order_number_msg = 'Numer zam??wienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zam??wienie';
    var new_customer_msg = 'Nowy klient zarejestrowa?? si?? w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomo???? pojawi??a si?? w Twoim sklepie.';
    var see_msg = 'Przeczytaj t?? wiadomo????';
    var token = '69c34f9505fb65092bf320cc9eacc80e';
    var token_admin_orders = '5b221c127582ffd31504314726ea12d7';
    var token_admin_customers = '0d1056aa9fc0f308934d0baaf93770e6';
    var token_admin_customer_threads = '6bc83dcf3b7210cb919ac353242b7df4';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'cf6af1ea9e01741e0b569d19642830ef';
    var choose_language_translate = 'Wybierz j??zyk:';
    var default_language = '2';
    var admin_modules_link = '/voh67dpeizgwbqrm/index.php/improve/modules/catalog/recommended?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw';
    var admin_notification_get_link = '/voh67dpeizgwbqrm/index.php/common/notifications?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw';
    var admin_notification_push_link = '/voh67dpeizgwbqrm/index.php/common/notifications/ack?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiod??a si??';
    var errorLogin = 'PrestaShop nie m??g?? zalogowa?? si?? do Dodatk??w, sprawd?? swoje uprawnienia i po????czenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/voh67dpeizgwbqrm/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/voh67dpeizgwbqrm/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/voh67dpeizgwbqrm\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/voh67dpeizgwbqrm\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/voh67dpeizgwbqrm/themes/default/js/bundle/module/module_card.js?v=1.7.7.5\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/voh67dpeizgwbqrm/index.php/common/notifications?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/by-sakot-design.com\\/voh67dpeizgwbqrm\\/index.php?controller=AdminGamification&token=c8a40ee85b90fea0723414555a63284b\";
            var current_id_tab = 105;
        </script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>

<body
  class=\"lang-pl adminperformance\"
  data-base-url=\"/voh67dpeizgwbqrm/index.php\"  data-token=\"9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminDashboard&amp;token=dc9035e1ac09dd5646846325bc63fd53\"></a>
      <span id=\"shop_version\">1.7.7.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dost??p
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php/sell/catalog/categories/new?token=1f883143f9ec09ece7aa68150ba8e180\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fe5f8c4850c4aff8d63ba9afa355cfc6\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php/sell/catalog/products/new?token=1f883143f9ec09ece7aa68150ba8e180\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c385a0206f1e53abf6f7fdcce921e2f9\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php/improve/modules/manage?token=1f883143f9ec09ece7aa68150ba8e180\"
                 data-item=\"Zainstalowane modu??y\"
      >Zainstalowane modu??y</a>
          <a class=\"dropdown-item\"
         href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminOrders&amp;token=5b221c127582ffd31504314726ea12d7\"
                 data-item=\"Zam??wienia\"
      >Zam??wienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"113\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminQuickAccesses&token=969320b23be424450301365bea404de5\"
        data-prompt-text=\"Prosz?? poda?? nazw?? tego skr??tu:\"
        data-link=\"Wydajno???? - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualn?? stron?? do Szybkiego dost??pu
      </a>
        <a class=\"dropdown-item\" href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminQuickAccesses&token=969320b23be424450301365bea404de5\">
      <i class=\"material-icons\">settings</i>
      Zarz??dzaj Szybkiem dost??pem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/voh67dpeizgwbqrm/index.php?controller=AdminSearch&amp;token=c3aad64343698737a87fa09de7561ac6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wsz??dzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wsz??dzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wsz??dzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zam??wienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zam??wienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zam??wienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Modu??y\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modu??u\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modu??y</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Tw??j sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wy??wietlane s?? wszystkie b????dy i komunikaty PHP. Gdy nie jest ju?? potrzebny, <strong>wy????cz</strong> ten tryb.</p>\"
             href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://by-sakot-design.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zam??wienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomo??ci<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zam??wie?? :(<br>
              Czy sprawdza??e?? ostatnio wsp????czynnik konwersji?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klient??w :(<br>
              Czy jeste?? aktywny w mediach spo??eczno??ciowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomo??ci.<br>
              To wi??cej, czasu na co?? innego!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/bysakotdesign%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Site</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/employees/1/edit?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\">
      <i class=\"material-icons\">settings</i>
      Tw??j profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\"><i class=\"material-icons\">book</i> Materia??y</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Znajd?? eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminLogin&amp;logout=1&amp;token=3e9a030d318ddd253cbdea049c626b7e\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj si??</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/voh67dpeizgwbqrm/index.php/configure/advanced/employees/toggle-navigation?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminDashboard&amp;token=dc9035e1ac09dd5646846325bc63fd53\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzeda??</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zam??wienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/invoices/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/credit-slips/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/orders/delivery-slips/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Druk wysy??ki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCarts&amp;token=04d9fcecbb20baf2de24c7d24997e060\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/products?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/products?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/categories?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/monitoring/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminAttributesGroups&amp;token=f369123957a96a4dfd57e2833f280e46\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/catalog/brands/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Marki i Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/attachments/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCartRules&amp;token=fe5f8c4850c4aff8d63ba9afa355cfc6\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/stocks/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/sell/customers/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/customers/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/addresses/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCustomerThreads&amp;token=6bc83dcf3b7210cb919ac353242b7df4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obs??uga klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCustomerThreads&amp;token=6bc83dcf3b7210cb919ac353242b7df4\" class=\"link\"> Obs??uga klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/sell/customer-service/order-messages/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Wiadomo??ci zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminReturn&amp;token=157501aaecdd970c634645b1447db8cd\" class=\"link\"> Zwroty produkt??w
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminMetricsStats&amp;token=0ff9f5366eec44c037836792ddacde09\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminMetricsStats\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminMetricsStats&amp;token=0ff9f5366eec44c037836792ddacde09\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminLegacyStatsMetrics\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminLegacyStatsMetrics&amp;token=ece70cfb917d1ed223cc48d7fe2e0573\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/modules/manage?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modu??y
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/modules/manage?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Mened??er modu????w
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/modules/addons/modules/catalog?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/themes/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygl??d
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/themes/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/modules/addons/themes/catalog?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/mail_theme/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/cms-pages/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/design/modules/positions/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminImages&amp;token=f5e4d975e59491010a0524e695aabbcc\" class=\"link\"> Zdj??cia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/modules/link-widget/list?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCarriers&amp;token=30b3c7db19f3a7fe2da3e3af88f4bda8\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysy??ka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminCarriers&amp;token=30b3c7db19f3a7fe2da3e3af88f4bda8\" class=\"link\"> Przewo??nicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/shipping/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/payment/payment_methods?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      P??atno????
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/payment/payment_methods?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> P??atno??ci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/payment/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/localization/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Mi??dzynarodowe
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/localization/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminZones&amp;token=6e25eed74dc67116da3b38fe8e41ccad\" class=\"link\"> Po??o??enie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/taxes/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/improve/international/translations/settings?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> T??umaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/preferences/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/preferences/preferences?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Og??lne
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/order-preferences/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Zam??wienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/product-preferences/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/customer-preferences/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/contacts/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/shop/seo-urls/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminSearchConf&amp;token=09045759d109d0843385c316ac8ad70e\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminGamification&amp;token=c8a40ee85b90fea0723414555a63284b\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/system-information/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/system-information/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Wydajno????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/administration/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/emails/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/import/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/employees/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Zesp????
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/sql-requests/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/logs/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/webservice-keys/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Zaawansowane</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\" aria-current=\"page\">Wydajno????</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Wydajno????          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/voh67dpeizgwbqrm/index.php/configure/advanced/performance/clear-cache?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\"                  title=\"Wyczy???? pami???? podr??czn??\"                >
                  <i class=\"material-icons\">delete</i>                  Wyczy???? pami???? podr??czn??
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/voh67dpeizgwbqrm/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.7.5%2526country%253Dpl/Pomoc?_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <!-- begin /home/srv38468/domains/by-sakot-design.com/public_html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane modu??y i us??ugi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/voh67dpeizgwbqrm/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=9ZwGHZB79OV4kQZswXpfjmy44FC_MyZfI96AStQQBxw',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /home/srv38468/domains/by-sakot-design.com/public_html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dost??pna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzysta?? z komputera stacjonarnego, aby uzyska?? dost??p do tej strony, dop??ki nie zostanie zoptymalizowana pod k??tem urz??dze?? mobilnych.
  </p>
  <p class=\"mt-2\">
    Dzi??kujemy.
  </p>
  <a href=\"https://by-sakot-design.com/voh67dpeizgwbqrm/index.php?controller=AdminDashboard&amp;token=dc9035e1ac09dd5646846325bc63fd53\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=bysakotdesign%40gmail.com&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fby-sakot-design.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/voh67dpeizgwbqrm/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Po????cz sw??j sklep z rynkiem PrestaShop, ??eby automatycznie importowa?? wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj si???? PrestaShop Addons! Przegl??daj Oficjalny Rynek PrestaShop i znajd?? ponad 3500 innowacyjnych modu????w i szablon??w, kt??re optymalizuj?? stopnie konwersji, zwi??kszaj?? ruch, buduj?? lojalno???? klient??w i zwi??kszaj?? Twoj?? produktywno????</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Po????cz si?? z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomnia??em has??a</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=bysakotdesign%40gmail.com&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fby-sakot-design.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtw??rz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj si??
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__ccc9c02c649b599103b315b655544ce8463a6eb32a699789f198db12d382cb11", "");
    }
}
