<?php
/**
 * Copyright © Bhavin, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Bhavin\PdfInvoice\Model\Source;

/**
 * Class Status
 * @package Bhavin\PdfInvoice\Model\Source
 */
class Status implements \Magento\Framework\Data\OptionSourceInterface {
	/**
	 * Status values
	 */
	const STATUS_ENABLED = 1;
	const STATUS_DISABLED = 0;

	/**
	 * @return array
	 */
	public function getOptionArray() {
		$optionArray = ['' => ' '];

		foreach ($this->toOptionArray() as $option) {
			$optionArray[$option['value']] = $option['label'];
		}

		return $optionArray;
	}

	/**
	 * @return array
	 */
	public function toOptionArray() {
		return [
			['value' => self::STATUS_ENABLED, 'label' => __('Enabled')],
			['value' => self::STATUS_DISABLED, 'label' => __('Disabled')],
		];
	}
}
