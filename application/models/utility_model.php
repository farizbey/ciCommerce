<?php 


/**
* 
*/
class Utility_model extends CI_Model
{

	function isarrayempty($dataarray=NULL)
	{
		# code...
		//hasil keluaran dari method isarrayempty()
		$result = true;
		//apakah $dataarray != NULL
		if ($dataarray != NULL)
		{
			//Apakah array isinya lebih dari 0
			if (count($dataarray) > 0)
			{
				//Apakah array pada posisi index yang pertama ada ?


				if (empty($dataarray[0]))
				{
					$result = true;
				}
				else
				{
					$result = false;
				}
			}
		}
		return $result;
	}

}


?>