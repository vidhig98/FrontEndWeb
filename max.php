<?php
		if(isset($_POST['max']))
		{
		    if(isset(($_POST['no1']>$_POST['no2']) && ($_POST['no1']>$_POST['no3'])))
		    {
				echo($_POST['no1']."is greatest");
		    }
			elseif(isset(($_POST['no2']>$_POST['no1']) && ($_POST['no2']>$_POST['no3'])))
		    {
				echo($_POST['no2']."is greatest");
		    }
		    else
		    {
				echo($_POST['no3']."is greatest");
		    }
		}
?>