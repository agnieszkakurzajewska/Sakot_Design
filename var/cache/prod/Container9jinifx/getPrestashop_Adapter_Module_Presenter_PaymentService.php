<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.module.presenter.payment' shared service.

return $this->services['prestashop.adapter.module.presenter.payment'] = new \PrestaShop\PrestaShop\Adapter\Module\Presenter\PaymentModulesPresenter(${($_ = isset($this->services['prestashop.adapter.module.data_provider.tab_module_list']) ? $this->services['prestashop.adapter.module.data_provider.tab_module_list'] : ($this->services['prestashop.adapter.module.data_provider.tab_module_list'] = new \PrestaShop\PrestaShop\Adapter\Module\TabModuleListProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.module']) ? $this->services['prestashop.adapter.data_provider.module'] : $this->getPrestashop_Adapter_DataProvider_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.presenter.module']) ? $this->services['prestashop.adapter.presenter.module'] : $this->load('getPrestashop_Adapter_Presenter_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.module.repository']) ? $this->services['prestashop.core.admin.module.repository'] : $this->getPrestashop_Core_Admin_Module_RepositoryService()) && false ?: '_'});
