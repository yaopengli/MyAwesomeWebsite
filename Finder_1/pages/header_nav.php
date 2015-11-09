<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div>
			<ul class="nav navbar-nav">
				<?php
					$html = "";
					
					// Define array of menu
					$menus = array(
						"home"			=>	array(
							"name"=>"home", 
							"text"=>"Home", 
							"url"=>"?page=home"
						),
						"members"		=>	array(
							"name"=>"members", 
							"text"=>"Members", 
							"url"=>"?page=members"
						),
						"photos"		=>	array(
							"name"=>"photos", 
							"text"=>"Photos", 
							"url"=>"?page=photos"
						),
						"pages"			=>	array(
							"name"=>"pages", 
							"text"=>"Pages", 
							"url"=>"?page=pages"
						),
						"discussions"	=>	array(
							"name"=>"discussions", 
							"text"=>"Discussions", 
							"url"=>"?page=discussions"
						),
						"more"			=>	array(
							"name"=>"more", 
							"text"=>"More", 
							"url"=>"?page=more"
						)
					);
					
					// Get current page's parameter
					if (!isset($_GET["page"])){
						$page = "home";
					} else {
						$page = $_GET["page"];
					}
					
					foreach ($menus as $menu){
						if ($page == $menu["name"]){		// Match menu button and current page
							// Set icon to active
							$html .= '<li class="active menu-tab">';
							$html .= '<a href="' . $menu["url"] . '" style="background-color: black; color: #F8F8F8">';
						}
						else{
							$html .= '<li class="menu-tab">';
							$html .= '<a href="' . $menu["url"] . '">';
						}
						
						$html .= $menu["text"];		// Menu text
						
						$html .= '</a>';		// End menu button link
						$html .= '</li>';		// End menu list button
					}
					
					echo $html;
					
				?>
			</ul>
		</div>
	</div>
</nav>