<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.contact' shared service.

$this->services['form.type.contact'] = $instance = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\Contact\ContactType(${($_ = isset($this->services['prestashop.bundle.form.data_transformer.default_language_to_filled_array']) ? $this->services['prestashop.bundle.form.data_transformer.default_language_to_filled_array'] : $this->load('getPrestashop_Bundle_Form_DataTransformer_DefaultLanguageToFilledArrayService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->load('getPrestashop_Adapter_MultistoreFeatureService.php')) && false ?: '_'}->isUsed());

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

return $instance;
