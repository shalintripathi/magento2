<?php
/**
 * Adminhtml block for fieldset of configurable product
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ConfigurableProduct\Block\Adminhtml\Product\Steps;

class Bulk extends \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /** @var \Magento\Catalog\Helper\Image */
    protected $image;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @parem \Magento\Framework\Registry $registry
     * @param \Magento\Catalog\Helper\Image $image
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Object $object,
        \Magento\Catalog\Helper\Image $image
    ) {
        parent::__construct($context);
        $image->init($object, 'thumbnail');
        $this->image = $image;
    }

    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Bulk Images &amp; Price');
    }

    /**
     * @return string
     */
    public function getNoImageUrl()
    {
        return $this->image->getDefaultPlaceholderUrl();
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->_storeManager->getStore()->getCurrentCurrency()->getCurrencySymbol();
    }
}
