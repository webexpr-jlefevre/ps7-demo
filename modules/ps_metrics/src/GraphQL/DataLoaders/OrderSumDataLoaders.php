<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders;

class OrderSumDataLoaders extends DataLoadersFactory
{
    /**
     * @param array $args
     *
     * @return array
     */
    public function get($args)
    {
        $current = $this->getDatas($args[0]['InputData']['TimeDimension']['dateRange']);
        $previous = 0;
        if (true === $args[0]['InputData']['compareMode']) {
            $previous = $this->getDatas($this->switchDateRange($args[0]['InputData']['TimeDimension']['dateRange']));
        }

        return [
            'currentValue' => $current,
            'previousValue' => $previous,
        ];
    }

    /**
     * @param array $dateRange
     *
     * @return array
     */
    private function getDatas($dateRange)
    {
        $row = $this->dbHelper->getRow(
            'SELECT
                COUNT(o.id_order) as nbOrder
            FROM ' . _DB_PREFIX_ . 'orders o
            INNER JOIN ' . _DB_PREFIX_ . 'order_state os ON (o.current_state = os.id_order_state)
            WHERE
                o.date_add BETWEEN "' . pSQL($dateRange['startDate']) . '" AND "' . pSQL($dateRange['endDate']) . '"
                AND os.logable = 1
                ' . $this->shopHelper->addSqlRestriction(false, 'o'));

        $nbOrders = 0;
        if (!empty($row)) {
            $nbOrders = (empty($row['nbOrder'])) ? 0 : $row['nbOrder'];
        }

        return $nbOrders;
    }
}
