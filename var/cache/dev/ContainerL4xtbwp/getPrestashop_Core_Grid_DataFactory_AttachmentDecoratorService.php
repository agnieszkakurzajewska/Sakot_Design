<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data_factory.attachment_decorator' shared service.

$this->services['prestashop.core.grid.data_factory.attachment_decorator'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\AttachmentGridDataFactoryDecorator(${($_ = isset($this->services['prestashop.core.grid.data_factory.attachment']) ? $this->services['prestashop.core.grid.data_factory.attachment'] : $this->load('getPrestashop_Core_Grid_DataFactory_AttachmentService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->employee->id_lang, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'pr_', ${($_ = isset($this->services['prestashop.core.util.file_size.size_converter']) ? $this->services['prestashop.core.util.file_size.size_converter'] : ($this->services['prestashop.core.util.file_size.size_converter'] = new \PrestaShop\PrestaShop\Core\Util\File\FileSizeConverter())) && false ?: '_'});

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

return $instance;
