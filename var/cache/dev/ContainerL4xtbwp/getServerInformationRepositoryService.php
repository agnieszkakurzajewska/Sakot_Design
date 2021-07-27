<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(${($_ = isset($this->services['ps_eventbus.context']) ? $this->services['ps_eventbus.context'] : $this->load('getPsEventbus_ContextService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_eventbus.db']) ? $this->services['ps_eventbus.db'] : $this->load('getPsEventbus_DbService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] : $this->load('getShopRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->load('getPsAccountsService.php')) && false ?: '_'}, ['EVENT_BUS_SYNC_API_URL' => 'https://eventbus-sync.psessentials.net', 'EVENT_BUS_PROXY_API_URL' => 'https://eventbus-proxy.psessentials.net']);