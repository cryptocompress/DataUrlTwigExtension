DataUrlTwigExtension
====================

DataUrlTwigExtension

Config:
	<code>
	services:
		cryptocompress.twig.extension:
			class: CryptoCompress\TwigBundle\Extension\DataUrlTwigExtension
			tags:
				-  { name: twig.extension }
	</code>
				
Usage:
	<code>
	Hello &lt;img src="{{ '/path/to/image.png' | dataUrl }}" alt="test 1" /&gt;
	Hello &lt;img src="{{ binaryString | dataUrlBinary }}" alt="test 2" /&gt;
	Hello &lt;img src="{{ resource | dataUrlResource }}" alt="test 3" /&gt;
	</code>