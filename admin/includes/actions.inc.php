<?php 

$action_type = $_GET['action_type'];
if($action_type=='add_item')
{
	$id_produit = $_GET['id_produit'];
	$titre_produit = $_GET['titre_produit'];
	$quantity = $_GET['quantite'];
	$prix_produit = $_GET['prix_produit'];

	$produit_arr = array(
		'id_produit'=>$id_produit,
		'titre_produit'=>$titre_produit,
		'quantite'=>$quantite,
		'prix_produit'=>$prix_produit,
	);

	if(!empty($_SESSION['cart']))
	{
		$produit_ids = array_column($_SESSION['cart'], 'id_produit');
		if(in_array($id, $produit_ids))
		{
			foreach($_SESSION['cart'] as $key => $val)
			{
				if($_SESSION['cart'][$key]['id_produit']==$id_produit)
				{
					$_SESSION['cart'][$key]['quantite'] = $_SESSION['cart'][$key]['quantite'] + $quantite;
				}
				
			}
			
		}
		else
		{
			$_SESSION['cart'][] = $produit_arr;
		}
	}
	else
	{
		$_SESSION['cart'][] = $produit_arr;
	}
	//header("location:index.php");

}
if($action_type=='remove_item')
{
	$index = $_GET['index'];
	if(isset($_SESSION['cart']))
	{
		unset($_SESSION['cart'][$index]);
		//header("location:index.php");
	}

}


?>