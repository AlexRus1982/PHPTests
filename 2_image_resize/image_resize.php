<?php
	
	class ResizedImagePNG {
		
		var $image;

		function load($filename){
			$this->image = imagecreatefrompng($filename);
		}

	   	function output(){
			imagepng($this->image);
		}

		function getWidth(){
		  	return imagesx($this->image);
	   	}

	   	function getHeight(){
		  	return imagesy($this->image);
	   	}

	   	function resizeToHeight($height){
		  	$ratio = $height / $this->getHeight();
		  	$this->resize($this->getWidth() * $ratio, $height);
	   	}

	   	function resize($width,$height){
		  	$new_image = imagecreatetruecolor($width, $height);
		  	imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
		  	$this->image = $new_image;
	   	}

		function destroy(){
			imagedestroy($this->image);
		}
	}

	header('Content-Type: image/png');
	$image = new ResizedImagePNG();
	$image->load('d:\image.png');
	$image->resizeToHeight(100);
	$image->output();
	$image->destroy();
?>