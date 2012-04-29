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
    public function helloAction($name)
    {
        return array(
			'binaryString'	=> file_get_contents('/path/to/image.png'),
			'resource'		=> fopen('/path/to/image.png', 'r')
		);
    }
</pre>
<pre>
	Hello &lt;img src="{{ '/path/to/image.png' | dataUrl }}" alt="red dot 1" /&gt;<br />
	Hello &lt;img src="{{ binaryString | dataUrlBinary }}" alt="red dot 2" /&gt;<br />
	Hello &lt;img src="{{ resource | dataUrlResource }}" alt="red dot 3" /&gt;<br />
</pre>

Result:
<pre>
	Hello <img src="data:;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO9TXL0Y4OHwAAAABJRU5ErkJggg==" alt="red dot 1"><br>
	Hello <img src="data:;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO9TXL0Y4OHwAAAABJRU5ErkJggg==" alt="red dot 2"><br>
	Hello <img src="data:;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO9TXL0Y4OHwAAAABJRU5ErkJggg==" alt="red dot 3"><br>
</pre>