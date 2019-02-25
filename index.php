<?php
if(! empty($_REQUEST['state'])){
	header('Location: ' . $_REQUEST['state'] .'?'.  http_build_query($_REQUEST));
}else{
	echo "Please visit <a href='https://yive.io'>yive.io</a>";
}
