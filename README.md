DataUrlTwigExtension
====================

DataUrlTwigExtension

Config:
<pre>
	services:
	    cryptocompress.twig.extension:
	        class: CryptoCompress\TwigBundle\Extension\DataUrlTwigExtension
	        tags:
	            -  { name: twig.extension }
</pre>

Usage:
<pre>
	Hello &lt;img src="{{ '/path/to/image.png' | dataUrl }}" alt="test 1" /&gt;<br />
	Hello &lt;img src="{{ binaryString | dataUrlBinary }}" alt="test 2" /&gt;<br />
	Hello &lt;img src="{{ resource | dataUrlResource }}" alt="test 3" /&gt;<br />
</pre>
