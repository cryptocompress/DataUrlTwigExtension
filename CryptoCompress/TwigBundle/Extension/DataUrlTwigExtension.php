<?php

namespace CryptoCompress\TwigBundle\Extension;

class DataUrlTwigExtension extends \Twig_Extension {

    /**
     * Return extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'data_url_twig_extension';
    }

    /**
     * Register dataUrl filters.
     *
     * @return array
     */
    public function getFilters() {
        return array(
            'dataUrl'         => new \Twig_Filter_Method($this, 'dataUrl'),
            'dataUrlResource' => new \Twig_Filter_Method($this, 'dataUrlResource'),
            'dataUrlBinary'   => new \Twig_Filter_Method($this, 'dataUrlBinary'),
        );
    }

    /**
     * Return dataUrl string (base64 encoded) for given file(path).
     *
     * @param    type  $binaryString
     * @param    type  $mimeType
     * @param    array $parameters
     *
     * @return   string
     */
    public function dataUrl($file, $mimeType = null, array $parameters = array())
    {
        return $this->build(file_get_contents($file), $mimeType, $parameters);
    }

    /**
     * Return dataUrl string (base64 encoded).
     *
     * @param    type  $binaryString
     * @param    type  $mimeType
     * @param    array $parameters
     *
     * @return   string
     */
    public function dataUrlBinary($binaryString, $mimeType = null, array $parameters = array())
    {
        return $this->build($binaryString, $mimeType, $parameters);
    }

    /**
     * DO NOT USE THIS!
     * $resource never closed!
     *
     * @param    type  $resource
     * @param    type  $mimeType
     * @param    array $parameters
     *
     * @return   string
     */
    public function dataUrlResource($resource, $mimeType = null, array $parameters = array())
    {
        $binaryString = '';

        while(!feof($resource)) {
            $binaryString .= fread($resource, 8192);
        }

        return $this->build($binaryString, $mimeType, $parameters);
    }

    /**
     * Return dataUrl string (base64 encoded).
     *
     * @see http://tools.ietf.org/html/rfc2397
     *
     * @param    type  $data
     * @param    type  $mimeType
     * @param    array $parameters
     *
     * @return   string
     */
    protected function build($data, $mimeType = null, array $parameters = array())
    {
        $dataUrl = 'data:' . $mimeType;

        foreach ($parameters as $name => $value) {
            $dataUrl .= ';' . $name . '=' . $value;
        }

        return $dataUrl . ';base64,' . base64_encode($data);
    }

}
