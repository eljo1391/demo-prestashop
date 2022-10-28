<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.currency.command_handler.create_unofficial_currency' shared service.

return $this->services['prestashop.adapter.currency.command_handler.create_unofficial_currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AddUnofficialCurrencyHandler(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->load('getPrestashop_Core_Localization_Cldr_LocaleRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.lang.repository']) ? $this->services['prestashop.core.admin.lang.repository'] : $this->load('getPrestashop_Core_Admin_Lang_RepositoryService.php')) && false ?: '_'}->findAll(), ${($_ = isset($this->services['prestashop.adapter.currency.command_handler.command_validator']) ? $this->services['prestashop.adapter.currency.command_handler.command_validator'] : $this->load('getPrestashop_Adapter_Currency_CommandHandler_CommandValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});