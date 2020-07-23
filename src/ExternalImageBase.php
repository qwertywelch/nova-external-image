<?php

namespace Chaseconey\ExternalImage;

use Laravel\Nova\Fields\Field;

class ExternalImageBase extends Field
{
    protected $rounded = false;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'external-image';

    /**
     *
     * Add prefix to the image string provided
     *
     * @param string $prefix
     * @return ExternalImage
     */
    public function prefix(string $prefix)
    {
        return $this->withMeta(['prefix' => $prefix]);
    }

    /**
     * Set the image with avatar-like style
     *
     * @return $this
     */
    public function avatar()
    {
        $this->rounded = true;

        return $this->thumbWidth(42)->thumbHeight(42)->radius(7);
    }

    /**
     * Set the width of the image as a thumb
     *
     * @param int $width
     * @return $this
     */
    public function thumbWidth(int $width)
    {
        return $this->withMeta(['width' => $width]);
    }

    /**
     * Set the height of the image as a thumb
     *
     * @param int $height
     * @return $this
     */
    public function thumbHeight(int $height)
    {
        return $this->withMeta(['height' => $height]);
    }

    /**
     * Set the width of the image in detail view
     *
     * @param int $width
     * @return $this
     */
    public function detailMaxWidth(int $width)
    {
        return $this->withMeta(['maxWidth' => $width]);
    }

    /**
     * Set the height of the image in detail view
     *
     * @param int $height
     * @return $this
     */
    public function detailMaxHeight(int $height)
    {
        return $this->withMeta(['maxHeight' => $height]);
    }

    /**
     * Set the border-radius of the image
     *
     * @param int $radius
     * @return $this
     */
    public function radius(int $radius)
    {
        return $this->withMeta(['borderRadius' => $radius]);
    }
}
