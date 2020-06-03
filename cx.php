<?php
header('Access-Control-Allow-Origin: *');
echo "Hi this is text";
?>[/code:37vdaafy]

CORS means [i]Cross-origin resource sharing[/i]. Since C2 preview opens it´s own server that then tries to connect to your server, your server says "An outside connection... boy that might be harmful to allow access" and thus denies it. If you export your project as html and upload it on your webspace, it should work without defining the header, but from outside sources you have to specifically allow access.

Please be aware that "header('Access-Control-Allow-Origin: *');" opens the access to the file up from any source outside your own server (* is the wildcard) and is not recommended. For testing it´s totally fine though. Instead of * you can also use any webadresses (including localhost and/or the ip of the construct preview)
