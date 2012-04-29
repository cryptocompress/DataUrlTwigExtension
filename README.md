DataUrlTwigExtension
====================

DataUrlTwigExtension

Config:

	services:
		cryptocompress.twig.extension:
			class: CryptoCompress\TwigBundle\Extension\DataUrlTwigExtension
			tags:
				-  { name: twig.extension }
				
Usage:
	<h1>Hello <img src="{{ '/path/to/image.png' | dataUrl }}" alt="test 1" />!</h1>
    <h1>Hello <img src="{{ binaryString | dataUrlBinary }}" alt="test 2" />!</h1>
    <h1>Hello <img src="{{ resource | dataUrlResource }}" alt="test 3" />!</h1>