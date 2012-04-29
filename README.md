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
	Hello &lt;img src="{{ '/path/to/image.png' | dataUrl }}" alt="test 1" /&gt;
	Hello &lt;img src="{{ binaryString | dataUrlBinary }}" alt="test 2" /&gt;
	Hello &lt;img src="{{ resource | dataUrlResource }}" alt="test 3" /&gt;