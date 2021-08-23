<?php

if (! function_exists('pictureId')) {
	function pictureId (int $id)
	{
		if ($id < 10) {
			$photoId = '00' . $id;
		} else if ($id < 100) {
			$photoId = '0' . $id;
		} else {
			$photoId = $id;
		}
		return $photoId;
	}
}


if (! function_exists('filePictureName')) {
    function filePictureName($detail) {
		
		// return null;
		$pictureName = str_replace(' ', '_', mb_strtolower($detail->mark . '_' . $detail->model . '_' .$detail->color_en));
		$pictureName = pictureId($detail->id) . '_' . $pictureName;

		return $pictureName;
    }
}