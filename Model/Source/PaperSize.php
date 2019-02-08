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
class PaperSize implements \Magento\Framework\Data\OptionSourceInterface {
	const USE_A4 = 0;

	const USE_A3 = 1;

	const USE_A5 = 2;

	const USE_A6 = 3;

	const USE_LATTER = 4;

	const USE_LEGAL = 5;

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
			['value' => self::USE_A4, 'label' => __('A4')],
			['value' => self::USE_A3, 'label' => __('A3')],
			['value' => self::USE_A5, 'label' => __('A5')],
			['value' => self::USE_A6, 'label' => __('A6')],
			['value' => self::USE_LATTER, 'label' => __('Latter')],
			['value' => self::USE_LEGAL, 'label' => __('Legal')],
		];
	}
}
