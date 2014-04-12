<?php
function your_function() {
	$r = rand();
    	echo "<style>div.upstuff$r{text-align:center;font-size:120%;color:white;padding-top:10px;padding-bottom:10px;position: fixed;bottom: 0;left: 0;width: 100%;background-color: rgba(64,143,255,0.6);z-index: 999;}div.upstuff$r a{text-decoration:none;color:white;}</style><div class='upstuff$r'><!-- Banner Test --><div style='text-align:center;'><ins class='adsbygoogle' style='display:inline-block;width:468px;height:60px' data-ad-client='ca-pub-1130416518509640' data-ad-slot='6629883702'></ins></div><a href='http://etchq.net'><div>Creado Gratis en <span>etchq.net</span></div><div><strong>¡Crea tu sitio web con nosotros!</strong></div></a></div>";
    	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
}
add_action('wp_footer', 'your_function');
?>